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
        return 12;
    }


    public function index()
    {
        // $user=auth()->user();
        // alert()->success("ss");
        return view('site.index', compact([]));
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
                ]
            ]);
            $data['password']=bcrypt(  $data['password']);
            $data['role']="customer";
            $user=User::create($data);
            $user->assignRole("customer");
            Auth::login($user, true);
            alert()->success( $user->short(9));
            return redirect()->route("panel.dashboard");
        }
        return view('site.register', compact([]));
    }
    public function login(Request $request)
    {
// sssss

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
                alert()->success($user->short(13));
                return redirect()->route('panel.dashboard');
            } else {
                alert()->error($user->short(14));
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
