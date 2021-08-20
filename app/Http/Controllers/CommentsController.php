<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function addComment(Request $request, $slug, $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'comment' => 'required'
        ]);

        Comment::create([
            'post_slug' => $slug,
            'post_id' => $id,
            'commenter_name' => $request->name,
            'commenter_phone' => $request->phone,
            'comment' => $request->comment
        ]);

        return redirect()->back()->with('message', 'Izoh muvaffaqiyatli qo\'shildi');
    }
}
