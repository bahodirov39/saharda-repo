<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth', ['except'=>['index', 'show', 'search']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('post.create', [
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'article' => 'required',
            'image' => 'required'
        ]);

        $newNameImage = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('/images'), $newNameImage);

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        Post::create([
            'category_id' => $request->category,
            'title' => $request->title,
            'slug' => $slug,
            'article' => $request->article,
            'image_path' => $newNameImage,
            'user_id' => Auth::user()->id,
            'read_time' => $request->read,
            'view' => 0,
            'status' => 'waiting',
            'shares' => 0,
        ]);

        return redirect()->route('home')->with('messageWarn', 'Maqola ko\'rib chiqishga yuborildi.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = DB::table('posts')
        ->select(array('users.*', 'posts.*', 'users.id as uid', 'posts.id as pid', 'socials.*', 'socials.id as sid', 'posts.created_at as p_created_at','categories.*', 'categories.id as ciid','categories.name as category_name', 'users.name as user_name', 'posts.image_path as post_image','user_photos.image_path as user_image'))
        ->where('posts.slug', $slug)
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->join('categories', 'posts.category_id', '=', 'categories.id')
        ->join('socials', 'socials.user_id', '=', 'users.id')
        ->join('user_photos', 'user_photos.user_id', '=', 'users.id')
        ->first();

        $comments = Comment::where([['post_slug', $slug], ['post_id', $data->pid]])->orderBy('created_at', 'DESC')->limit(10)->get();
        $commentsCount = Comment::where([['post_slug', $slug], ['post_id', $data->pid]])->count();

        if (Social::where('user_id', $data->uid)->exists()) {
            $social = Social::where('user_id', $data->uid)->first();
            $socialCount = Social::where('user_id', $data->uid)->count();
        }else{
            $social = '';
            $socialCount = 0;
        }

        $related = DB::table('posts')
        ->select(array('users.*', 'posts.*', 'users.id as uid', 'posts.id as pid', 'posts.created_at as p_created_at','categories.*','categories.name as category_name', 'users.name as user_name', 'posts.image_path as post_image','user_photos.image_path as user_image'))
        ->where([['categories.id', $data->ciid],['posts.status', 'active']])
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->join('categories', 'posts.category_id', '=', 'categories.id')
        ->join('user_photos', 'user_photos.user_id', '=', 'users.id')
        ->inRandomOrder()
        ->get();

        Post::where([['slug', $slug], ['id', $data->pid]])
        ->update([
        'view'=> DB::raw('view+1')
        ]);

        return view('post.show', [
            'data' => $data,
            'social' => $social,
            'socialCount' => $socialCount,
            'comments' => $comments,
            'commentsCount' => $commentsCount,
            'related' => $related
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        $category = Category::get();
        return view('post.update', [
            'post' => $post,
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'article' => 'required',
            'image' => 'required'
        ]);

        $newNameImage = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('/images'), $newNameImage);

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        Post::where('id', $id)->update([
            'category_id' => $request->category,
            'title' => $request->title,
            'slug' => $slug,
            'article' => $request->article,
            'image_path' => $newNameImage,
            'read_time' => $request->read,
            'status' => 'waiting'
        ]);

        return redirect()->route('home')->with('messageWarn', 'Maqola ko\'rib chiqishga yuborildi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id);
        $post->delete();

        return redirect()->route('home')->with('delmessage', 'Maqola o\'chirildi.');
    }

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required'
        ]);

        $search = $request->input('search');
        $key_word = $request->search;
        $posts = Post::query()
            ->where([['status', 'active'],['title', 'LIKE', "%{$search}%"]])
            ->orWhere([['status', 'active'],['article', 'LIKE', "%{$search}%"]])
            ->get();

        return view('search', [
            'posts' => $posts,
            'key_word' => $key_word
        ]);
    }
}
