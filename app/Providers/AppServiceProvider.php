<?php

namespace App\Providers;

use App\Models\UserPhoto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::share('aside_data', DB::table('posts')
        ->where('posts.status', 'active')
        ->select(array('posts.*', 'posts.id as pid', 'posts.created_at as p_created_at','categories.*', 'categories.id as ciid', 'categories.name as category_name', 'posts.image_path as post_image'))
        ->join('categories', 'posts.category_id', '=', 'categories.id')
        ->inRandomOrder()
        ->limit(4)
        ->get());

        View::share('aside_category', DB::table('categories')->get());
        
        View::share('nav_authors', DB::table('users')
        ->select('users.id as uid', 'users.*', 'socials.*', 'users.created_at as u_created_at')
        ->join('socials', 'socials.user_id', '=', 'users.id')
        ->inRandomOrder()
        ->limit(4)
        ->get());

        View::share('nav_posts', DB::table('posts')->where('status', 'active')->orderBy('view', 'DESC')->limit(3)->get());
        // View::share('nav_user_photo_count', UserPhoto::where('user_id', Auth::user()->id)->count())

        View::share('nav_top_authors', DB::select("SELECT u.id AS uid, u.name AS user_name, COUNT(p.id) AS pnumber, s.telegram AS telegram, s.instagram AS instagram, s.facebook AS facebook, p.status AS status_p, u.status as ustatus FROM users u 
        INNER JOIN posts p 
        ON p.user_id=u.id
        INNER JOIN socials s
        ON s.user_id=u.id
        GROUP BY u.id,status_p
        HAVING status_p = 'active'
        ORDER BY pnumber DESC
        LIMIT 4"));

        View::share('nav_search_bar', DB::table('posts')->where('status', 'active')->orderBy('created_at', 'DESC')->limit(4)->get());
    
        View::share('nav_trend_posts', DB::table('posts')
        ->where('posts.status', 'active')
        ->select(array('posts.*', 'posts.id as pid', 'users.name as user_name', 'users.id as uid', 'posts.created_at as p_created_at','posts.created_at as p_created_at','categories.*', 'categories.id as ciid', 'categories.name as category_name', 'posts.image_path as post_image'))
        ->join('categories', 'posts.category_id', '=', 'categories.id')
        ->join('users', 'users.id', '=', 'posts.user_id')
        ->orderBy('posts.view', 'DESC')
        ->limit(4)
        ->get());
    }
}