<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{
    use HasFactory;
    protected $fillable=[
        'short_id',
        'language_id',
        'translate',
    ];
    public  function language(){
        return $this->belongsTo(Language::class);
    }

    public  function short(){
        return $this->belongsTo(Short::class);
    }
}
