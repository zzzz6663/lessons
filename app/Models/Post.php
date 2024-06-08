<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'image',
        'title',
        'content',
        'tags',
        'publish',
        'confirm',
        'status',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function acats(){
        return $this->belongsToMany(Acat::class);
    }
    public function comments()
    {
        return  $this->morphMany(Comment::class,'commentable');
    }


    public function image(){
        if($this->image){
            return asset("/media/post/".$this->image);
        }
        return false;
    }
}
