<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Site;
use App\Models\User;
use App\Models\Action;
use App\Models\Course;
use App\Models\Section;
use App\Models\Advertise;
use App\Models\Language;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use PHPUnit\Framework\Constraint\Count;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Validation\Rules\Password;

class HomeController extends Controller
{
    public function clear()
    {

        Artisan::call('cache:clear');
        Artisan::call('route:cache');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        Artisan::call('optimize:clear');
        Artisan::call('config:clear');
        $user=auth()->user();

        return 12;
    }


    public function index()
    {
        // $user=auth()->user();
        // toast()->success("ss");
        return view('site.index', compact([]));
    }

    public function teachers()
    {
        $customer=auth()->user();
        $teachers=User::query();
        $teachers->whereRole("teacher")->whereNotNull("confirm");
        // $teachers->whereDisplay(1);
        $teachers=$teachers->latest()->get();
        $languages=Language::where("active_course",1)->get();
        $faves= $customer->faves()->pluck('fave_id')->toArray();
        return view('site.teachers', compact(["languages","teachers","faves"]));
    }
    public function profile(User $user)
    {
        $teacher=$user;
        $languages=Language::where("active_course",1)->get();
        $attrs=Attribute::where('user_id', $teacher->id)->get();;
        // $attrs=$teacher->attributes()->get();
        $resumes=$teacher->resumes()->whereNotNull("publish")->get();
        $meets_free=$teacher->meets()->whereNull('student_id')->get(['id', 'start']);;
        $meets_free = $meets_free->pluck('start', 'id')->toArray();

        $meets_reserved=$teacher->meets()->whereNotNull('student_id')->get(['id', 'start']);;
        $meets_reserved = $meets_reserved->pluck('start', 'id')->toArray();


        $teacher->update(['seen'=> $teacher->seen+1]);
    //   dd(  $attrs);
        return view('site.profile', compact(["languages","teacher","attrs","resumes","meets_free","meets_reserved"]));
    }

    public function register(Request $request)
    {
        if($request->isMethod('post')){
            $data=$request->validate([
                'name'=>"required|max:50",
                'email'=>"required|unique:users,email",
                'password'=>
                [
                    'required',
                    'string',
                    Password::min(8)
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                        ->uncompromised(),
                    'confirmed'
                ],
                'role'=>"required",

            ]);
            $data['password']=bcrypt(  $data['password']);
            // $data['role']="customer";
            $user=User::create($data);
            $user->assignRole("customer");
            Auth::login($user, true);
            toast()->success( $user->short(9));
            return redirect()->route("panel.dashboard");
        }
        return view('site.register', compact([]));
    }
    public function login(Request $request)
    {
// ssssssss

        if($request->isMethod('post')){
            $data=$request->validate([

                'email'=>"required|exists:users",
                'password'=>
                [
                    'required',

                ]
            ]);
            $user=User::where("email",$request->email)->first();
            if ($user && Hash::check($request->password, $user->password)) {
                Auth::login($user, true);
                toast()->success($user->short(13));
                return redirect()->route('panel.dashboard');
            } else {
                toast()->error($user->short(14));
                return back();
            }
            return redirect()->route("login.user");
        }
        return view('site.login', compact([]));
    }
    public function locale(Language $language)
    {
        session()->put("locale",$language->local);
        return back();
    }
    public function logoute()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
