<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'name',
        'publish',
        'zone_time',
    ];

    public function users(){
        return $this->hasMany(User::class);

    }
    public function image(){
        if($this->image){
            return asset("/media/country/".$this->image);
        }
        return false;
    }
}
