<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'family',
        'country_id',
        'role',
        'avatar',
        'video',
        'username',
        'gender',
        'test_session_status',
        'test_session_price',
        'price_1_session',
        'price_5_session',
        'price_10_session',
        'bio',
        '',
        '',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public  function languages(){
        return $this->belongsToMany(Language::class)->withPivot(['status',"level"]);
    }
    public  function transactions(){
        return $this->hasMany(Transaction::class);
    }
    public  function meets(){
        return $this->hasMany(Meet::class);
    }
    public  function student_meets(){
        return $this->hasMany(Meet::class,'student_id');
    }
    public  function posts(){
        return $this->hasMany(Post::class);
    }
    public  function resumes(){
        return $this->hasMany(Resume::class);
    }
    public function short($id){
        $ca=Cache()->get($id."_".app()->getLocale());
        if(!$ca){
            $lang=Language::whereLocal(app()->getLocale())->first();
            $short=Short::find($id);
            $exist= $short->translates()->where("language_id",$lang->id)->first();
            if($exist){
                $ca=$exist->translate;
                Cache()->put($short->id."_".$lang->local, $ca);
            }
        }
        return $ca ;
    }
    public function balance(){
       return $this->transactions()->whereStatus("payed")->sum("amount");
    }




    public function attributes(){
        return $this->hasMany(Attribute::class);
    }
    public function attr($name){
        $name=trim($name);
        $atr=  $this->hasMany(Attribute::class)->whereName($name)->first();
        if ($atr){
            return $atr->value;
        }
        return  false;
    }

    public function add_charge($amount){
        $this->transactions()->create([
            'meet_id'=>null,
            'amount'=>$amount,
            'type'=>"charge_wallet",
            'status'=>"payed",
            'currency'=>"usd",
            'transactionId'=>time(),
        ]);

    }

    public function save_attr($key,$val){
        $atr=  $this->hasMany(Attribute::class)->whereName($key)->first();

        if ($atr){
            $atr->update([
                'name'=>$key,
                'value'=>$val,
            ]);
            return false;
        }else{
            $this->attributes()->create([
                'name'=>$key,
                'value'=>$val,
            ]);
            return true;
        }
    }
}
