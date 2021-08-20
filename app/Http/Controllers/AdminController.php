<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function show()
    {
        $posts = DB::table('posts')->where('status', 'waiting')->get();
        $postsAll = DB::table('posts')->orderBy('created_at', 'DESC')->paginate(20);
        return view('ad.show', [
            'posts' => $posts,
            'postsAll' => $postsAll
        ]);
    }

    public function active($id)
    {
        Post::where('id', $id)
        ->update([
        'status'=> 'active'
        ]);

        return redirect()->back()->with('message', 'Maqola aktivlashtirildi');
    }

    public function unactive($id)
    {
        Post::where('id', $id)
        ->update([
        'status'=> 'unactive'
        ]);

        return redirect()->back()->with('delmessage', 'Maqola bekor qilindi');
    }

    public function waiting($id)
    {
        Post::where('id', $id)
        ->update([
        'status'=> 'waiting'
        ]);

        return redirect()->back()->with('message', 'Maqola kutish rejimiga o\'tkazildi');
    }
}
