<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class PanelController extends Controller
{

    public function dashboard()
    {
        $customer=auth()->user();

        return view('site.panel.dashboard', compact(['customer']));
    }
    public function setting(Request $request)
    {
        $customer=auth()->user();
        if( $request->validate([
            ''
        ]))

        return view('site.panel.setting', compact(['customer']));
    }
    public function financial(Request $request)
    {
        $customer=auth()->user();
        if( $request->isMethod('post')){
            if( $request->validate([
                ''
            ]));
        }

        return view('site.panel.financial', compact(['customer']));
    }
    public function profile(Request $request)
    {
        $customer=auth()->user();
        if( $request->isMethod('post')){
            // dd($request->all());
            if($request->pass){
                $data= $request->validate([
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
                $customer->update($data);

            }else{
                $data= $request->validate([
                    'name'=>"required",
                    'gender'=>"required",
                    'country_id'=>"required",
                    'languages'=>"required|array|min:1",
                ]);
                $customer->update($data);
                $customer->languages()->sync($data['languages']);

            }
            alert()->success($customer->short(25));
            return redirect()->route("panel.profile");

        }

        return view('site.panel.profile', compact(['customer']));
    }
}
