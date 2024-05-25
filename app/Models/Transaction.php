<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    // status= created, failed ,payed ,
    use HasFactory;
    protected $fillable=[
        'user_id',
        'meet_id',
        'amount',
        'transactionId',
        'type',
        'status',
        'currency',
        'class_type',//نوع کلاس  چند جلسه یا ازمایشی
        'meet_count',
        'via',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
