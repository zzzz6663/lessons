<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Comment;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

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
        'cover',
        'video',
        'username',
        'gender',
        'test_session_status',
        'test_session_price',
        'price_1_session',
        'price_5_session',
        'price_10_session',
        'bio',
        'teacher',
        'display', //معلم برای نمایش در سرچ خود را اکتیو می کند
        'confirm', //تایید از طرف ادمین به عنوان معلم
        'active_profile',//فعال سازی پروفایل
        'port_img',//کاور ویدئو پروفایل
        'port_vid',//ویدئو   پروفایل
        'seen',//بازدید از پروفایل
        'motivated',//با انگیزه
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



    public  function languages()
    {
        return $this->belongsToMany(Language::class)->withPivot(['status', "level"]);
    }

    public  function faves()
    {
        return $this->hasMany(Fave::class);
    }

    public  function teacher_faves()
    {
        return $this->hasMany(Fave::class,"fave_id");
    }
    public  function student_count()
    {
        return $this->meets()->whereNotNull("student_id")       ->distinct('student_id')
        ->count('student_id');
    }
    public  function class_count()
    {
        return $this->meets()->whereNotNull("student_id")->whereStatus("down")
        ->count()/2;
    }

    public  function selects()
    {
        return $this->hasMany(Select::class,"student_id");
    }

    public  function student_cancels()
    {
        return $this->hasMany(Cancel::class,"student_id");
    }


    public  function cancels()
    {
        return $this->hasMany(Cancel::class);
    }


    public  function student_edits()
    {
        return $this->hasMany(Edit::class,"student_id");
    }


    public  function edits()
    {
        return $this->hasMany(Edit::class);
    }
    public  function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public  function meets()
    {
        return $this->hasMany(Meet::class);
    }
    public  function student_meets()
    {
        return $this->hasMany(Meet::class, 'student_id');
    }
    public  function posts()
    {
        return $this->hasMany(Post::class);
    }
    public  function resumes()
    {
        return $this->hasMany(Resume::class);
    }

    public  function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function comments()
    {
        return  $this->morphMany(Comment::class,'commentable');
    }
    public function scomments()
    {
        return  $this->morphMany(Comment::class,'commentable','','user_id');
    }
    public function time_zone()
    {
        if($this->country_id){
            return $this->country->zone_time??"UTC";
        }
        return  "UTC";
    }


    public function short($id)
    {
        $ca = null;
        if (is_numeric($id)) {
            $ca = Cache()->get($id . "_" . app()->getLocale());
        } else {
            $id = str_replace(" ", "_", $id);
            // dump($id);
            $ca = Cache()->get($id . "_" . app()->getLocale());
            // dump($ca);
        }
        if (!$ca) {
            $lang = Language::whereLocal(app()->getLocale())->first();
            if (is_numeric($id)) {
                $short = Short::find($id);
            } else {
                $short = Short::where('short', 'LIKE', "%{$id}%")->first();
                if (!$short) {
                    dd($id);
                }
            }
            $exist = $short->translates()->where("language_id", $lang->id)->first();
            if ($exist) {
                $ca = $exist->translate;
                // dump($short->id."_".$lang->local);
                // Cache()->put($short->id."_".$lang->local, $ca);
                Cache()->put($id . "_" . $lang->local, $ca);
            }
        }
        return $ca;
    }
    public function balance()
    {
        //
        return $this->transactions()->whereStatus("payed")->sum("amount");
    }




    public function avatar()
    {
        if ($this->avatar) {
            return asset('/media/customer/' . $this->avatar);
        }
        return false;
    }

    public function class_price($type)
    {
        switch ($type) {
            case "test":
                return $this->test_session_price;
                break;
            case "1":
                return $this->price_1_session;
                break;
            case "5":
                return 5 * $this->price_1_session;
                break;
            case "10":
                return 10 * $this->price_1_session;
                break;
        }
    }


    public function unit_class_price($type)
    {
        switch ($type) {
            case "test":
                return $this->test_session_price;
                break;
            case "1":
                return $this->price_1_session;
                break;
            case "5":
                return $this->price_5_session;
                break;
            case "10":
                return $this->price_10_session;
                break;
        }
    }

    public function percent(){
        $per=0;
        if ($this->price_1_session){$per+=25;}
        if ($this->price_1_session){$per+=25;}
        if ($this->meets()->count()){$per+=25;}
        if ($this->avatar){$per+=25;}
        if ($this->languages()->count()>0){$per+=25;}
        return $per;
    }


    public function cover()
    {
        if ($this->cover) {
            return asset('/media/customer/' . $this->cover);
        }
        return false;
    }
    public function port_img()
    {
        if ($this->port_img) {
            return asset('/media/customer/video/' . $this->port_img);
        }
        return false;
    }
    public function port_vid()
    {
        if ($this->port_vid) {
            return asset('/media/customer/video/' . $this->port_vid);
        }
        return false;
    }
    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }
    public function attr($name)
    {
        // $name=trim($name);
        $atr =  $this->hasMany(Attribute::class)->whereName($name)->first();
        if ($atr) {
            return $atr->value;
        }
        return  false;
    }

    public function add_charge($amount)
    {
        $this->transactions()->create([
            'meet_id' => null,
            'amount' => $amount,
            'type' => "charge_wallet",
            'status' => "payed",
            'currency' => "usd",
            'transactionId' => time(),
        ]);
    }

    public function save_attr($key, $val)
    {
        $atr =  $this->hasMany(Attribute::class)->whereName($key)->first();

        if ($atr) {
            $atr->update([
                'name' => $key,
                'value' => $val,
            ]);
        } else {
            dd($key);
            $this->attributes()->create([
                'name' => $key,
                'value' => $val,
            ]);
            return true;
        }
    }








    public function score(){
        $comments=   $this->comments()->where('active','1')->latest()->get();
        $sum=0;
        $ar['per']=0;
        $ar['av']=0;
        $ar['r1']=0;
        $ar['r2']=0;
        $ar['r3']=0;
        $ar['r4']=0;
        $ar['r5']=0;
        $ar['pr1']=0;
        $ar['pr2']=0;
        $ar['pr3']=0;
        $ar['pr4']=0;
        $ar['pr5']=0;
        if ($comments){
            foreach ($comments as $comment){
                $ar['r'.$comment->rate]++;
                $sum+=$comment->rate;
            }
            if ($comments->count()>0){
                for ($i=1;$i<6;$i++){
                    $ar['pr'.$i] =($ar['r'.$i]*100)/$comments->count();
                }
                $ar['av']=$sum/$comments->count();

            }

            $ar['per']= ($ar['av']*100)/5;
        }
       return $ar;

       }





























}
