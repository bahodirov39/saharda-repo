<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Social;
use App\Models\User;
use App\Models\UserPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $user = User::where('id', Auth::user()->id)->first();
        $user_photo_count = UserPhoto::where('user_id', Auth::user()->id)->count();

        if ($user_photo_count == 0) {
            UserPhoto::create([
                'image_path' => '',
                'user_id' => Auth::user()->id
            ]);   
        }

        $usp = UserPhoto::where('user_id', Auth::user()->id)->first();
        $waiting = Post::where([['user_id', Auth::user()->id], ['status','waiting']])->count();
        $active = Post::where([['user_id', Auth::user()->id], ['status','active']])->count();
        $unactive = Post::where([['user_id', Auth::user()->id], ['status','unactive']])->count();
        $all = Post::where('user_id', Auth::user()->id)->count();
        $social = Social::where('user_id', Auth::user()->id)->first();
        $socialCount = Social::where('user_id', Auth::user()->id)->count();

        $ad_waiting = Post::where('status','waiting')->count();

        if ($socialCount == 0) {
            Social::create([
                'telegram' => '',
                'instagram' => '',
                'facebook' => '',
                'user_id' => Auth::user()->id
            ]);   
        }

        return view('user.index', [
            'user' => $user,
            'user_photo_count' => $user_photo_count,
            'usp' => $usp,
            'waiting' => $waiting,
            'active' => $active,
            'unactive' => $unactive,
            'all' => $all,
            'social' => $social,
            'socialCount' => $socialCount,
            'ad_waiting' => $ad_waiting
        ]);
    }
}