<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected  $fillable = ['name','val','info','image'];
    public function get($val){
        $setting=$this->whereName($val)->first();
        if ($setting){
          return $setting->val;
        }
        return false;
    }
}
