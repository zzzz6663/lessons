<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Resume;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;

class PanelController extends Controller
{

    public function dashboard()
    {
        $customer=auth()->user();

        return view('site.panel.dashboard', compact(['customer']));
    }

    public function written(Request $request)
    {
        $customer=auth()->user();
        if( $request->isMethod('post')){
            $request->validate([
            ]);
        }

        return view('site.panel.written', compact(['customer']));
    }


    public function setting(Request $request)
    {
        $customer=auth()->user();
        if( $request->validate([
            ''
        ]))
        return view('site.panel.setting', compact(['customer']));
    }
    public function remove_write(Request $request,Post $post)
    {
       $post->delete();
       return response()->json([
        'status'=>"ok"
       ]);
    }
    public function detach_lang(Request $request,Language $language)
    {
        $customer=auth()->user();
        $customer->languages()->detach($language->id);
       return redirect()->route('panel.langs');
    }
    public function create_write(Request $request)
    {
        $customer=auth()->user();
        if( $request->isMethod('post')){
            $data= $request->validate([
                'title'=>"required|max:70",
                'content'=>"required|max:4000",
                'image'=>"required|max:4000",
                'tags'=>"required|max:100",
                'publish'=>"nullable",
                'draft'=>"nullable",
            ]);
            $data['status']="created";
            $data['tags'] = implode('_', $data['tags']);
            $post=$customer->posts()->create($data);

            if ($request->hasFile('image')) {
                $lan = $request->file('image');
                $name_img = 'post_' . $post->id . '.' . $lan->getClientOriginalExtension();
                $lan->move(public_path('/media/post/'), $name_img);
                $post->update(['image' => $name_img]);
            }
            return redirect()->route("panel.written");
        }

        return view('site.panel.create_write', compact(['customer']));
    }
    public function edit_write(Request $request,Post $post)
    {
        $customer=auth()->user();
        if( $request->isMethod('post')){
            $data= $request->validate([
                'title'=>"required|max:70",
                'content'=>"required|max:4000",
                'image'=>"nullable|max:4000",
                'tags'=>"required|max:100",
                'publish'=>"nullable",
                'draft'=>"nullable",
            ]);
            if($data['draft']){
                $data['publish']=null;
            }
            $data['tags'] = implode('_', $data['tags']);
            if ($request->hasFile('image')) {
                $lan = $request->file('image');
                $name_img = 'post_' . $post->id . '.' . $lan->getClientOriginalExtension();
                $lan->move(public_path('/media/post/'), $name_img);
                $data['image'  ]=$name_img;
            }
            $post->update( $data);
            return redirect()->route("panel.written");
        }

        return view('site.panel.edit_write', compact(['customer',"post"]));
    }
    public function langs(Request $request)
    {
        $customer=auth()->user();
        if( $request->isMethod('post')){


            $data=$request->validate([
                'language_id'=>"required",
                // 'la'=>"required",
                'level'=>"required",
                'status'=>"required",
            ]);
            if( !$customer->languages->contains($data['language_id'])){
                $customer->languages()->attach($data['language_id'],['level'=>$data['level'],'status'=>$data['status']]);
            }
            return redirect()->route("panel.langs");
        }
        $langs=Language::where("active_course",1)->get();
        return view('site.panel.langs', compact(['customer',"langs"]));
    }

    public function create_resume(Request $request)
    {
        $customer=auth()->user();

        if( $request->isMethod('post')){
            $data=$request->validate([
                'type'=>"required",
                'title'=>"required",
                'info'=>"required",
                'place'=>"required",
                'from'=>"required",
                'till'=>"required",
            ]);
            $data['status']="created";
            $customer->resumes()->create($data);
            return redirect()->route("panel.resume");
        }
        return view('site.panel.create_resume', compact(['customer']));
    }
    public function resume_destroy(Request $request,Resume $resume)
    {     $resume->delete();
        return redirect()->route("panel.resume");
    }
    public function edit_resume(Request $request,Resume $resume)
    {
        $customer=auth()->user();

        if( $request->isMethod('post')){
            $data=$request->validate([
                'type'=>"required",
                'title'=>"required",
                'info'=>"required",
                'place'=>"required",
                'from'=>"required",
                'till'=>"required",
            ]);


            $data['status']="created";
            $resume->update($data);
            return redirect()->route("panel.resume");
        }
        return view('site.panel.edit_resume', compact(['customer',"resume"]));
    }
    public function resume(Request $request)
    {
        $customer=auth()->user();

        // if( $request->isMethod('post')){
        //     $data=$request->validate([
        //         'type'=>"required",
        //         'title'=>"required",
        //         'info'=>"required",
        //         'place'=>"required",
        //         'from'=>"required",
        //         'till'=>"required",
        //     ]);
        //     $data['status']="created";
        //     dd
        //     $customer->resumes()->create($data);
        //     return redirect()->route("panel.resume");
        // }
        return view('site.panel.resume', compact(['customer']));
    }
    public function experts(Request $request)
    {
        $customer=auth()->user();

        if( $request->isMethod('post')){
            $data=$request->except(['_token','_method']);
            foreach ($data as $da=>$va){
                if ($va==null){
                    continue;
                }
              $customer->save_attr($da,$va);
            }
            return redirect()->route("panel.experts");
        }
        return view('site.panel.experts', compact(['customer']));
    }
    public function plan(Request $request,Post $post)
    {
        $customer=auth()->user();
        if( $request->isMethod('post')){
            $data=$request->validate([
                'reserve'=>"required_without:can|array|min:1",
                'can'=>"required_without:reserve|array|min:1",
            ]);
            $customer->meets()->whereStatus("no_reserved")->delete();
            $reserve=$request->reserve;
            if ($reserve){
                foreach ($reserve as $key => $va){
                    if( $va){
                        $reserve=$customer->meets()->whereStart($va)->whereNull('student_id')->first();
                        if (!$reserve){
                            $customer->meets()->create([
                                'start'=>$va,
                                'status'=>'no_reserved'
                            ]);
                        }
                    }

                }
            }
            // $can=$request->can;
            // if ($can){
            //     foreach ($can as $key => $va){
            //         $meet=$customer->meets()->whereStart($va)->whereNull('student_id')->first();
            //         if ($meet){
            //           $meet->update([
            //               'start'=>null,
            //               'status'=>null
            //           ])  ;
            //         }

            //     }
            // }
            // $customer->save_attr('time_plan','time_plan');
                // alert()->success(' برنامه شما با موفقیت به روز شد ' );
            return Redirect::back();
        }
        $all_meets=$customer->meets()->whereStatus("no_reserved")->pluck("start")->toArray();
         return view('site.panel.plan', compact(['customer',"all_meets"]));
    }
    public function prices(Request $request)
    {
        $customer=auth()->user();
        if( $request->isMethod('post')){

            if($request->more){
                $data=$request->validate([
                    'test_session_status'=>"required",
                    'test_session_price'=>"nullable|required_if:freeclass,nofree",
                ]);
            }else{
                $data=$request->validate([
                    'price_1_session'=>"required|numeric",
                    'price_5_session'=>"required|numeric",
                    'price_10_session'=>"required|numeric",
                ]);
            }

            // dd(  $data);
            $customer->update($data);

            return Redirect::back();
        }
         return view('site.panel.prices', compact(['customer']));
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
                    // 'languages'=>"required|array|min:1",
                ]);
                $customer->update($data);


            }
            alert()->success($customer->short(25));
            return redirect()->route("panel.profile");

        }

        return view('site.panel.profile', compact(['customer']));
    }
}
