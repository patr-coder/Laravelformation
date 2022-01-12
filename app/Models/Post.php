<?php

namespace App\Models;
use App\Models\Artists;
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

    public function comments()
    {
       return $this->hasMany(Comment::class);
    }
    //public function comments()
    //{

       // return $this->morphMany(Comment::class, 'commentable');
        # code...
    //}

    public function imageArtists()
    {
        return $this->hasOneThrough(Artists::class,image::class);
    }

    public function tags()
    {
        return $this->belongsTo(Tag::class);
    }
    public function latestComment()
    {
        return $this->hasOne(Comment::class,)->latestOfMany();
    }

    public function oldestComment()
    {
        return $this->hasOne(Comment::class,)->oldestOfMany();
    }
    
    
}
