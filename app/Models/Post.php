<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Image;
use App\Models\comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','content'
    ];

    //public function comments()
    //{
    //    return $this->hasMany(Comment::class);
    //}
    public function comments()
    {

        return $this->morphToMany(Comment::class, 'commentaire');
        # code...
    }

    public function image()
    {
        return $this->hasOne(image::class);
    }

    public function tags()
    {
        return $this->belongsTo(Tag::class);
    }
    
    
}
