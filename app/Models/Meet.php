<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meet extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'student_id',
        'start',
        'end',
        'transaction_id',
        'price',
        'type',
        't_click',
        's_click',
        'canceled',
        'cancel',//زمان کنسل
        'edit',//زمان ویرایش
        'status',
        'pair',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function student(){
        return $this->belongsTo(User::class,"student_id");
    }

    public function avatar(){
        $user=auth()->user();
        if( $user->role=="student"){
            return $this->user->avatar();
        }
        return $this->student->avatar();
    }


    public function name(){
        $user=auth()->user();
        if( $user->role=="student"){
            return $this->user->name;
        }
        return $this->student->name;
    }


}
