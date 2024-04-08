<?php

namespace App\Models;

use App\Models\Translate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Short extends Model
{
    use HasFactory;
    protected $fillable=[
        'short'
    ];
    public function cache($language){
     return   Cache()->get($this->id."_".$language->local, function() use($language) {
      $ex=  Translate::where('language_id', $language->id)->where('short_id', $this->id)->first();
            if($ex){
                return $ex->translate;
            }
            return "";
        });
    }
    public function translates(){
        return $this->hasMany(Translate::class);
    }


}
