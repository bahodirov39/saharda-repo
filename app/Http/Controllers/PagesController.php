<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function all_posts()
    {
        $posts = DB::table('posts')
        ->select(array('users.*', 'posts.*', 'users.id as uid', 'posts.id as pid', 'posts.created_at as p_created_at','categories.*', 'categories.id as ciid','categories.name as category_name', 'users.name as user_name', 'posts.image_path as post_image'))
        ->where('posts.status', 'active')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->join('categories', 'posts.category_id', '=', 'categories.id')
        ->orderBy('posts.created_at', 'DESC')
        ->paginate(10);
        
        return view('front.all', [
            'posts' => $posts
        ]);
    }

    public function author_list()
    {
        $yoshtadqiqotchi = DB::table('users')
        ->select('users.id as uid', 'users.name as user_name', 'users.status as ustatus', 'user_photos.image_path as user_image', 'socials.telegram as telegram', 'socials.facebook as facebook', 'socials.instagram as instagram')
        ->where('users.status', 'Yosh tadqiqotchi')
        ->join('user_photos', 'user_photos.user_id', '=', 'users.id')
        ->join('socials', 'socials.user_id', '=', 'users.id')
        ->paginate(20);

        $tadqiqotchi = DB::table('users')
        ->select('users.id as uid', 'users.name as user_name', 'users.status as ustatus', 'user_photos.image_path as user_image', 'socials.telegram as telegram', 'socials.facebook as facebook', 'socials.instagram as instagram')
        ->where('users.status', 'Tadqiqotchi')
        ->join('user_photos', 'user_photos.user_id', '=', 'users.id')
        ->join('socials', 'socials.user_id', '=', 'users.id')
        ->paginate(20);

        $ekspert = DB::table('users')
        ->select('users.id as uid', 'users.name as user_name', 'users.status as ustatus', 'user_photos.image_path as user_image', 'socials.telegram as telegram', 'socials.facebook as facebook', 'socials.instagram as instagram')
        ->where('users.status', 'Ekspert')
        ->join('user_photos', 'user_photos.user_id', '=', 'users.id')
        ->join('socials', 'socials.user_id', '=', 'users.id')
        ->paginate(20);

        return view('front.members', [
            'yoshtadqiqotchi' => $yoshtadqiqotchi,
            'tadqiqotchi' => $tadqiqotchi,
            'ekspert' => $ekspert
        ]);
    }
}