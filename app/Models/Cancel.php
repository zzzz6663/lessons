<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancel extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'student_id',
        'meet_id',
        'start',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
