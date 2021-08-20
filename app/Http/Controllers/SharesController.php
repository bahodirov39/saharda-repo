<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SharesController extends Controller
{
    public function facebook($id, $url)
    { 
        dd($url);
        // https://www.facebook.com/sharer.php?u=https://saharda.uz/post/{{ $data->slug }}
        Post::where('id', $id)
        ->update([
        'shares'=> DB::raw('shares+1')
        ]);

        return Redirect::to('https://www.facebook.com/sharer.php?u=https://saharda.uz/post/'.$url);
    }
}
