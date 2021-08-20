<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Social;
use App\Models\User;
use App\Models\UserPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user_photo_count = UserPhoto::where('user_id', Auth::user()->id)->count();
        $usp = UserPhoto::where('user_id', Auth::user()->id)->first();
        
        $social = Social::where('user_id', Auth::user()->id)->first();
        $socialCount = Social::where('user_id', Auth::user()->id)->count();

        return view('user.update', [
            'user' => $user,
            'uspcount' => $user_photo_count,
            'usp' => $usp,
            'social' => $social,
            'socialCount' => $socialCount
        ]);
    }

    public function update(Request $request, $user_id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::where('id', $user_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('home')->with('message',  'Muvaffaqiyatli tahrirlandi');
    }

    public function social(Request $request)
    {
        if (empty($request->telegram)) {
            $telegram = '';
        }else{
            $telegram = $request->telegram;
        }

        if (empty($request->facebook)) {
            $facebook = '';
        }else{
            $facebook = $request->facebook;
        }

        if (empty($request->instagram)) {
            $instagram = '';
        }else{
            $instagram = $request->instagram;
        }

        Social::create([
            'telegram' => $telegram,
            'instagram' => $instagram,
            'facebook' => $facebook,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('home')->with('message',  'Ijtimoiy tarmoq sahifalari tahrirlandi');
    }

    public function socialUpdate(Request $request, $user_id)
    {
        if (empty($request->telegram)) {
            $telegram = '';
        }else{
            $telegram = $request->telegram;
        }

        if (empty($request->facebook)) {
            $facebook = '';
        }else{
            $facebook = $request->facebook;
        }

        if (empty($request->instagram)) {
            $instagram = '';
        }else{
            $instagram = $request->instagram;
        }

        $userSocial = Social::where('user_id', $user_id)->update([
            'telegram' => $telegram,
            'instagram' => $instagram,
            'facebook' => $facebook,
            'user_id' => $user_id
        ]);

        return redirect()->route('home')->with('message',  'Ijtimoiy tarmoq sahifalari tahrirlandi');
    }

    public function ckUpload(Request $request)
    {
        $file = $request->upload;
        $fileName = $file->getClientOriginalName();
        $new_name = time().$fileName;
        $dir = "public/images";
        $file->move($dir, $new_name);
        $url = asset('public/images/'.$new_name);
        $CkeditorFuncNum = $request->input('CKEditorFuncNum');
        $status = "<script>window.parent.CKEDITOR.tools.callFunction('$CkeditorFuncNum', '$url', 'Rasm muvaffaqiyatli yuklandi')</script>";
        echo $status;
    }

    public function author($author_id)
    {
        $posts = Post::where([['user_id', $author_id],['status','active']])->paginate(10);

        $author = DB::table('users')
        ->select('users.id as uid', 'users.*', 'user_photos.image_path as user_image', 'users.created_at as u_created_at')
        ->where('users.id', $author_id)
        ->join('user_photos', 'user_photos.user_id', '=', 'users.id')
        ->first();

        $user_photo_count = UserPhoto::where('user_id', $author_id)->count();
        
        $social = Social::where('user_id', $author_id)->first();
        $socialCount = Social::where('user_id', $author_id)->count();

        $waiting = Post::where([['user_id', $author_id], ['status','waiting']])->count();
        $active = Post::where([['user_id', $author_id], ['status','active']])->count();
        $unactive = Post::where([['user_id', $author_id], ['status','unactive']])->count();
        $all = Post::where('user_id', $author_id)->count();

        return view('front.author', [
            'data' => $author,
            'user_photo_count' => $user_photo_count,
            'posts' => $posts,
            'author' => $author,
            'social' => $social,
            'socialCount' => $socialCount,
            'waiting' => $waiting,
            'active' => $active,
            'unactive' => $unactive,
            'all' => $all
        ]);   
    }
}