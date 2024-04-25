<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'active_lang',
        'active_course',
        'flag',
        'info',
        'local',

    ];

    public  function users(){
        return $this->belongsToMany(User::class)->withPivot(['status',"level"]);;
    }

    public function flag(){
        if($this->flag){
            return asset("/media/language/".$this->flag);
        }
        return false;
    }



}
