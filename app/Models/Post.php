<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

// Use TCG\Voyager\Traits\Translatable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;
//    Use Translatable;

    protected $fillable = ['title', 'slug', 'article', 'image_path', 'category_id', 'user_id', 'read_time', 'view', 'shares', 'status'];

    public function sluggable() :array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public static function substrText($text)
    {
        if(strlen($text) < 60){
            $clear = strip_tags($text);
            $clear = html_entity_decode($clear);
            $clear = urldecode($clear);
            $clear = trim($clear);
            $clear = substr($clear, 0, 60);
            return $clear;
        }else{
            $clear = strip_tags($text);
            $clear = html_entity_decode($clear);
            $clear = urldecode($clear);
            $clear = trim($clear);
            $clear = substr($clear, 0, 100);
            return $clear;
        }
    }
}
