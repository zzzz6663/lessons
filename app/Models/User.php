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
        return $this->belongsToMany(Language::class);
    }
    public  function transactions(){
        return $this->hasMany(Transaction::class);
    }
    public function short($id){
        return  Cache()->get($id."_".app()->getLocale());
    }
    public function balance(){
        return 0;
    }
}
