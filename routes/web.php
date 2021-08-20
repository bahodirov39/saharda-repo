<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SharesController;
use App\Http\Controllers\UserPhotoController;
use App\Http\Controllers\UsersController;
use App\Models\Category;
use App\Models\UserPhoto;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $today = DB::table('posts')
    ->select('posts.*', 'categories.*', 'categories.id as ciid')
    ->where('posts.status', 'active')
    ->whereDate('posts.created_at', '=', date('Y-m-d'))
    ->join('categories', 'categories.id', '=', 'posts.category_id')
    ->orderBy('posts.created_at', 'DESC')
    ->limit(3)
    ->get();

    $one = DB::table('posts')
    ->where('posts.status', 'active')
    ->select(array('posts.*', 'posts.id as pid', 'users.name as user_name', 'users.id as uid', 'posts.created_at as p_created_at','posts.created_at as p_created_at','categories.*', 'categories.id as ciid', 'categories.name as category_name', 'posts.image_path as post_image'))
    ->join('categories', 'posts.category_id', '=', 'categories.id')
    ->join('users', 'users.id', '=', 'posts.user_id')
    ->inRandomOrder()
    ->limit(1)
    ->get();

    $trending = DB::table('posts')
    ->where('posts.status', 'active')
    ->select(array('posts.*'))
    ->orderBy('posts.view', 'DESC')
    ->limit(3)
    ->get();

    $all_posts = DB::table('posts')
    ->select('posts.*', 'categories.*', 'categories.id as ciid', 'posts.created_at as p_created_at')
    ->where('posts.status', 'active')
    ->join('categories', 'categories.id', '=', 'posts.category_id')
    ->orderBy('posts.created_at', 'DESC')
    ->limit(10)
    ->get();

    return view('front.index',  [
        'today' => $today,
        'one' => $one,
        'trending' => $trending,
        'all_posts' => $all_posts
    ]);

});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// POST
Route::resource('post', PostsController::class);

// CATEGORY
Route::get('category/{category}', [CategoryController::class, 'category'])->name('category');

// USER
Route::get('/edit', [UsersController::class, 'edit'])->name('userEdit');
Route::put('/update/{user_id}', [UsersController::class, 'update'])->name('userUpdate');
Route::post('/ck/upload', [UsersController::class, 'ckUpload'])->name('ck.upload');
Route::post('/social/add}', [UsersController::class, 'social'])->name('social');
Route::put('/social/update/{user_id}}', [UsersController::class, 'socialUpdate'])->name('socialUpdate');

// COMMENTS
Route::post('addcomment/{slug}/{id}', [CommentsController::class, 'addComment'])->name('addComment');

// SHARES
Route::get('shares/{id}/{url}', [SharesController::class, 'facebook'])->name('shareFacebook');

// AUTHOR
Route::get('/author/{author_id}', [UsersController::class, 'author'])->name('author');

// USERPHOTO
Route::put('/updatePhoto/{user_id}', [UserPhotoController::class, 'updatePhoto'])->name('updatePhoto');
Route::put('/deletePhoto/{user_id}', [UserPhotoController::class, 'deletePhoto'])->name('deletePhoto');

// SEARCH
Route::get('/search/', [PostsController::class, 'search'])->name('search');

// PAGES
Route::get('/author_list', [PagesController::class, 'author_list'])->name('author_list');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/all_posts', [PagesController::class, 'all_posts'])->name('all_posts');

// ADMIN
Route::get('ad_show', [AdminController::class, 'show'])->name('admin_show');
Route::put('ad_update_active/{id}', [AdminController::class, 'active'])->name('admin_update_active');
Route::put('ad_update_unactive/{id}', [AdminController::class, 'unactive'])->name('admin_update_unactive');
Route::put('ad_update_waiting/{id}', [AdminController::class, 'waiting'])->name('admin_update_waiting');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});