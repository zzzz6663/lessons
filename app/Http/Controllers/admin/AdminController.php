<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Advertise;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use TimeHunter\LaravelGoogleReCaptchaV2\Validations\GoogleReCaptchaV2ValidationRule;

class AdminController extends Controller
{

    public function users()
    {
        return view('admin.users.all');
    }
    public function provinces()
    {
        return view('admin.provinces.all');
    }
    public function login()
    {
        $user = auth()->user();
        return view('admin.auth.login');
    }
    public function check_login(Request $request)
    {
        // dd(   bcrypt('1212'));
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::whereEmail($request->email)->whereIn('role', ['admin'])->first();
        //    $user->assignRole('admin');
        // dd(Hash::check($request->password, $user->password));
        if (!$user) {
            alert()->error('   data in not correct');
            return back();
        }
        // dd( $user );
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user, true);
            alert()->success('   you logged in successfully');
            return redirect()->route('user.index');
        } else {
            alert()->error('     data in not correct');
            return back();
        }
    }



}
