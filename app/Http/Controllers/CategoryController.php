<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function category($category)
    {
        /*
        $data = DB::table('posts')
        ->select(array('posts.*', 'users.id as uid', 'categories.*', DB::raw('COUNT(users.id) as count')))
        ->join('categories', 'posts.category_id', '=', 'categories.id')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->groupBy(['users.id', 'categories.id'])
        ->having('count','>','1')
        ->orHaving('categories.id',$category)
        ->get();
        */

        $users = DB::select("SELECT u.*, u.name as user_name, c.id as cid, p.status as pstatus, COUNT(u.id) AS count FROM posts p
        INNER JOIN categories c ON p.category_id=c.id
        INNER JOIN users u ON p.user_id=u.id
        GROUP BY u.id,c.id
        HAVING cid='.$category.' AND COUNT > 2 AND pstatus = 'active' ORDER BY count DESC LIMIT 20");

        $data = DB::table('posts')
        ->select(array('users.*', 'posts.*', 'users.id as uid', 'posts.id as pid', 'posts.created_at as p_created_at','categories.*', 'categories.id as ciid','categories.name as category_name', 'users.name as user_name', 'posts.image_path as post_image'))
        ->where([['posts.category_id', $category],['posts.status', 'active']])
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->join('categories', 'posts.category_id', '=', 'categories.id')
        ->paginate(10);

        $category = Category::where('id', $category)->first();

        return view('front.category', [
            'users' => $users,
            'data' => $data,
            'category' => $category
        ]);
    }
}
