<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acat extends Model
{
    use HasFactory;
    protected $fillable=['name','parent_id'];
public function posts(){
    return $this->belongsToMany(Post::class);
}
}
