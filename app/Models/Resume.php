<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected  $fillable=[
        'user_id',
        'title',
        'from',
        'till',
        'type',
        'publish',
        'place',
        'info',
        'status',
    ];
    public function user (){
        return $this->belongsTo(User::class);
    }
}