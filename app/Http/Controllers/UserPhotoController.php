<?php

namespace App\Http\Controllers;

use App\Models\UserPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserPhotoController extends Controller
{
    public function updatePhoto (Request $request, $user_id)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);
        $newName = uniqid() . '-' . Auth::user()->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newName);
        
        UserPhoto::where('user_id', $user_id)->update([
            'image_path' => $newName
        ]);

        return redirect()->route('home')->with('message', 'Profil surati qo\'shildi');
    }


    public function deletePhoto ($user_id)
    {
        UserPhoto::where('user_id', $user_id)->update([
            'image_path' => ''
        ]);

        return redirect()->route('home')->with('delmessage', 'Profil surati o\'chirildi');
    }
}