<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Select extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'student_id',
        'count',
        'transaction_id',
        'price',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
