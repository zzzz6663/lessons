<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fave extends Model
{
    use HasFactory;
    protected $fillable=['fave_id','user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
