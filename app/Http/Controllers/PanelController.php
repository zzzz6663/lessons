<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Meet;
use App\Models\Post;
use App\Models\User;
use App\Models\Resume;
use App\Models\Select;
use App\Models\Language;
use App\Models\Setting;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;

class PanelController extends Controller
{

    public function edit_meet(Request $request, Meet $meet)
    {

        $start = Carbon::parse($meet->start)->addMinutes(30);
        $meet_next = Meet::where("user_id", $meet->user->id)->whereStart($start)->first();
        $customer = auth()->user();
        $student = $meet->student;
        $teacher = $meet->user;
        $exist = $student->selects()->where("user_id", $teacher->id)->where("price", $meet->price)->first();
        if (!$exist) {
            $exist = $student->selects()->create([
                'user_id' => $teacher->id,
                'count' => 1,
                'meet' => $meet->price,
            ]);
        } else {
            $exist->update([
                'count' => $exist->count + 1
            ]);
        }

        $edit = $teacher->edits()->create([
            'student_id' => $meet->student_id,
            'meet_id' => $meet->id,
            'old' => $meet->start,
        ]);



        $meet_next->update([
            'pair' => null,
            'price' => null,
            'student_id' => null,
            'status' => "no_reserved",
            'edit' => Carbon::now(),
        ]);
        $meet->update([
            'pair' => null,
            'price' => null,
            'student_id' => null,
            'status' => "no_reserved",
            'edit' => Carbon::now(),
        ]);
        toast()->success($customer->short(349));
        return redirect()->route("panel.reserve", $exist->id);
    }

    public function cancel_meet(Request $request, Meet $meet)
    {
        $customer = auth()->user();
        if (!$request->reason) {
            toast()->success($customer->short(353));
            return back();
        }
        $start = Carbon::parse($meet->start)->addMinutes(30);
        $meet_next = Meet::where("user_id", $meet->user->id)->whereStart($start)->first();
        $customer = auth()->user();
        $student = $meet->student;
        $teacher = $meet->user;
        $price = $meet->price;
        $teacher_share = ($price * 20) / 100;
        $student_share = ($price * 80) / 100;

        $cancel = $teacher->cancels()->create([
            'student_id' => $meet->student_id,
            'meet_id' => $meet->id,
            'start' => $meet->start,
        ]);
        $meet_next->update([
            'pair' => null,
            'price' => null,
            'student_id' => null,
            'status' => "no_reserved",
            'edit' => Carbon::now(),
        ]);
        $meet->update([
            'pair' => null,
            'price' => null,
            'student_id' => null,
            'status' => "no_reserved",
            'edit' => Carbon::now(),
        ]);

        $paymentId = $meet->id . '_' . $student->id . '_' . time();
        $dd = $student->transactions()->create([
            'class_type' => null,
            'via' => "",
            'meet_id' => $meet->id,
            'amount' => $student_share,
            'type' => "cancel_meet_share",
            'status' => "payed",
            'currency' => "usd",
            'transactionId' => $paymentId,
        ]);
        $paymentId = $meet->id . '_' . $teacher->id . '_' . time();
        $teacher->transactions()->create([
            'class_type' => null,
            'via' => "",
            'meet_id' => $meet->id,
            'amount' => $teacher_share,
            'type' => "cancel_meet_share",
            'status' => "payed",
            'currency' => "usd",
            'transactionId' => $paymentId,
        ]);


        toast()->success($customer->short(352));
        return redirect()->route("panel.dashboard");
    }


    public function start_meet(Request $request, Meet $meet)
    {
        $customer = auth()->user();
        if ($customer->role == "student") {
            $meet->update([
                's_click' => Carbon::now()
            ]);
        } else {
            $meet->update([
                't_click' => Carbon::now()
            ]);
        }
        if ($meet->t_click && $meet->s_click) {
            if ($meet->status == "reserved") {
                $perent =  Setting::whereName("site_share")->first()->val;
                $student = $meet->student;
                $teacher = $meet->user;
                $start = Carbon::parse($meet->start)->addMinutes(30);
                $meet_next = Meet::where("user_id", $meet->user->id)->whereStart($start)->first();
                $price = $meet->price;
                $meet->update([['status'=>"done"]]);
                $meet_next->update(['status'=>"done"]);
                $teacher_share = ($price * $perent) / 100;
                $admin_share = $price - $teacher_share;
                $admin = User::find(1);

                $paymentId = $meet->id . '_' . $admin->id . '_' . time();
                $admin->transactions()->create([
                    'class_type' => null,
                    'via' => "",
                    'meet_id' => $meet->id,
                    'amount' => $admin_share,
                    'type' => "meet_share",
                    'status' => "payed",
                    'currency' => "usd",
                    'transactionId' => $paymentId,
                ]);
                $paymentId = $meet->id . '_' . $teacher->id . '_' . time();
                $teacher->transactions()->create([
                    'class_type' => null,
                    'via' => "",
                    'meet_id' => $meet->id,
                    'amount' => $teacher_share,
                    'type' => "meet_share",
                    'status' => "payed",
                    'currency' => "usd",
                    'transactionId' => $paymentId,
                ]);
            }
        }
    }
    public function dashboard(Request $request)
    {
        $customer = auth()->user();
        $meets = Meet::query();
        if ($customer->role == "student") {
            $meets->where("student_id", $customer->id);
            $helds= $customer->student_meets()->whereStatus("done")->count()/2;
            $upcoming = $customer->student_meets()->whereStatus("reserved")->count()/2;
            $not_reserved= $customer->student_meets()->whereStatus("no_reserved")->count()/2;
        }
        if ($customer->role == "teacher") {
            $meets->where("user_id", $customer->id);

            $helds= $customer->meets()->whereStatus("done")->count()/2;
            $upcoming = $customer->meets()->whereStatus("reserved")->count()/2;
            $not_reserved= $customer->meets()->whereStatus("no_reserved")->count()/2;
        }
        $now=Carbon::now();

         if ($customer->day) {
            $now=$now->subDays($customer->day)->format('Y-m-d');
            $meets->where("created_at", $now);
        }
        $meets->whereNull("pair");
        $meets->whereStatus("reserved");
        $meets = $meets->latest()->paginate(6);
        $selects = $customer->selects;

        $first = $meets->get(0);
        $teacher_faves = $customer->teacher_faves->count();
        $year = now()->year; // یا سال مورد نظر خود را مشخص کنید
        if ($request->year) {
            $year--;
        }
        $income = [];
        for ($i = 1; $i <= 12; $i++) {
            array_push($income, $customer->transactions()->whereMonth("created_at", $i)->whereYear("created_at", $year)->sum("amount"));
        }

        return view('site.panel.dashboard', compact([
            'customer', "selects",
            "first", "meets", "teacher_faves"
            , "income"
            , "not_reserved"
            , "upcoming"
            , "helds"


    ]));
    }

    public function written(Request $request)
    {
        $customer = auth()->user();
        if ($request->isMethod('post')) {
            $request->validate([]);
        }

        return view('site.panel.written', compact(['customer']));
    }
    public function fave(Request $request)
    {
        $customer = auth()->user();
        $teachers = $customer->faves;
        $faves = $customer->faves()->pluck('fave_id')->toArray();
        return view('site.panel.fave', compact(['customer', "teachers", "faves"]));
    }
    public function edited_class(Request $request)
    {
        $customer = auth()->user();
        $edits = $customer->edits;
        return view('site.panel.edited_class', compact(['customer', "edits"]));
    }
    public function update_avatar(Request $request)
    {
        $request->validate([
            'avatar' => "required|max:500"
        ]);
        $customer = auth()->user();
        // dd($request->all());
        if ($request->hasFile('avatar')) {
            $lan = $request->file('avatar');
            $name_img = 'avatar_' . $customer->id . '.' . $lan->getClientOriginalExtension();
            $lan->move(public_path('/media/customer/'), $name_img);
            $customer->update(['avatar' => $name_img]);
        }
        return redirect()->route("panel.profile");
    }
    public function update_cover(Request $request)
    {
        $customer = auth()->user();
        $request->validate([
            'cover' => "required|max:500"
        ]);
        $cusend_paystomer = auth()->user();
        // dd($request->all());
        if ($request->hasFile('cover')) {
            $lan = $request->file('cover');
            $name_img = 'cover_' . $customer->id . '.' . $lan->getClientOriginalExtension();
            $lan->move(public_path('/media/customer/'), $name_img);
            $customer->update(['cover' => $name_img]);
        }
        return redirect()->route("panel.profile");
    }


    public function active_profile(Request $request)
    {
        $customer = auth()->user();
        if ($customer->percent() < 100) {
            toast()->warning($customer->short(281));
        } else {
            $customer->update(['activeprofile' => $request->active_profile]);
            if ($request->active_profile) {
                toast()->warning($customer->short(282));
            } else {
                toast()->warning($customer->short(283));
            }
        }
        return redirect()->route("panel.dashboard");
    }
    public function setting(Request $request)
    {
        $customer = auth()->user();
        if ($request->validate([
            ''
        ]))
            return view('site.panel.setting', compact(['customer']));
    }
    public function remove_write(Request $request, Post $post)
    {
        $post->delete();
        return response()->json([
            'status' => "ok"
        ]);
    }
    public function detach_lang(Request $request, Language $language)
    {
        $customer = auth()->user();
        $customer->languages()->detach($language->id);
        return redirect()->route('panel.langs');
    }
    public function create_write(Request $request)
    {
        $customer = auth()->user();
        if ($request->isMethod('post')) {
            $data = $request->validate([
                'title' => "required|max:70",
                'content' => "required|max:4000",
                'image' => "required|max:4000",
                'tags' => "required|max:100",
                'publish' => "nullable",
                'draft' => "nullable",
            ]);
            $data['status'] = "created";
            $data['tags'] = implode('_', $data['tags']);
            $post = $customer->posts()->create($data);

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
    public function edit_write(Request $request, Post $post)
    {
        $customer = auth()->user();
        if ($request->isMethod('post')) {
            $data = $request->validate([
                'title' => "required|max:70",
                'content' => "required|max:4000",
                'image' => "nullable|max:4000",
                'tags' => "required|max:100",
                'publish' => "nullable",
                'draft' => "nullable",
            ]);
            if ($data['draft']) {
                $data['publish'] = null;
            }
            $data['tags'] = implode('_', $data['tags']);
            if ($request->hasFile('image')) {
                $lan = $request->file('image');
                $name_img = 'post_' . $post->id . '.' . $lan->getClientOriginalExtension();
                $lan->move(public_path('/media/post/'), $name_img);
                $data['image'] = $name_img;
            }
            $post->update($data);
            return redirect()->route("panel.written");
        }

        return view('site.panel.edit_write', compact(['customer', "post"]));
    }
    public function langs(Request $request)
    {
        $customer = auth()->user();
        if ($request->isMethod('post')) {


            $data = $request->validate([
                'language_id' => "required",
                // 'la'=>"required",
                'level' => "required",
                'status' => "required",
            ]);
            if (!$customer->languages->contains($data['language_id'])) {
                $customer->languages()->attach($data['language_id'], ['level' => $data['level'], 'status' => $data['status']]);
            }
            return redirect()->route("panel.langs");
        }
        $langs = Language::where("active_course", 1)->get();
        return view('site.panel.langs', compact(['customer', "langs"]));
    }

    public function create_resume(Request $request)
    {
        $customer = auth()->user();

        if ($request->isMethod('post')) {
            $data = $request->validate([
                'type' => "required",
                'title' => "required",
                'info' => "required",
                'place' => "required",
                'from' => "required",
                'till' => "required",
            ]);
            $data['status'] = "created";
            $customer->resumes()->create($data);
            return redirect()->route("panel.resume");
        }
        return view('site.panel.create_resume', compact(['customer']));
    }
    public function intro_video(Request $request)
    {
        $customer = auth()->user();

        if ($request->isMethod('post')) {
            $data = $request->validate([
                'port_img' => "nullable|file|max:1024",
                'port_vid' => "nullable|file|max:10240",
            ]);
            $arr = [];
            if ($request->file('port_img')) {
                $image = $request->file('port_img');
                $name_img = $customer->id . '_port_img' . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/media/customer/video/'), $name_img);
                $arr['port_img'] = $name_img;
            }

            if ($request->file('port_vid')) {
                $vid = $request->file('port_vid');
                $name_vid = $customer->id . '_port_vid' . '.' . $vid->getClientOriginalExtension();
                $vid->move(public_path('/media/customer/video/'), $name_vid);
                $arr['name_vid'] = $name_vid;
            }

            if (sizeof($arr)) {
                $arr['confirm'] = null;
                $customer->update($arr);
                toast()->success($customer->short(25));
            }


            return redirect()->route("panel.intro.video");
        }
        return view('site.panel.intro_video', compact(['customer']));
    }
    public function fave_teachers(Request $request)
    {
        $customer = auth()->user();
        $exist = $customer->faves()->where("fave_id", $request->id)->first();
        $active = 0;
        if (!$exist) {
            $customer->faves()->create([
                'fave_id' => $request->id
            ]);
            $active = 1;
        } else {
            $exist->delete();
        }

        return response()->json([
            'status' => "ok",
            'all' => $request->all(),
            'active' => $active,
        ]);
    }
    public function resume_destroy(Request $request, Resume $resume)
    {
        $resume->delete();
        return redirect()->route("panel.resume");
    }
    public function edit_resume(Request $request, Resume $resume)
    {
        $customer = auth()->user();

        if ($request->isMethod('post')) {
            $data = $request->validate([
                'type' => "required",
                'title' => "required",
                'info' => "required",
                'place' => "required",
                'from' => "required",
                'till' => "required",
            ]);


            $data['status'] = "created";
            $resume->update($data);
            return redirect()->route("panel.resume");
        }
        return view('site.panel.edit_resume', compact(['customer', "resume"]));
    }
    public function resume(Request $request)
    {
        $customer = auth()->user();

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
        $customer = auth()->user();

        if ($request->isMethod('post')) {
            $data = $request->except(['_token', '_method']);
            foreach ($data as $da => $va) {

                if ($va == null) {
                    continue;
                }
                $customer->save_attr($da, $va);
            }
            // return redirect()->route("panel.experts");
        }
        return view('site.panel.experts', compact(['customer']));
    }
    public function plan(Request $request, Post $post)
    {
        $customer = auth()->user();
        if ($request->isMethod('post')) {
            $data = $request->validate([
                'reserve' => "required_without:can|array|min:1",
                'can' => "required_without:reserve|array|min:1",
            ]);
            $customer->meets()->whereStatus("no_reserved")->delete();
            $reserve = $request->reserve;
            if ($reserve) {
                foreach ($reserve as $key => $va) {
                    if ($va) {
                        $reserve = $customer->meets()->whereStart($va)->whereNull('student_id')->first();
                        if (!$reserve) {
                            $customer->meets()->create([
                                'start' => $va,
                                'status' => 'no_reserved'
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
            // toast()->success(' برنامه شما با موفقیت به روز شد ' );
            return Redirect::back();
        }
        $free_meets = $customer->meets()->whereStatus("no_reserved")->pluck("start")->toArray();
        $reserved_meets = $customer->meets()->whereStatus("reserved")->pluck("start")->toArray();
        return view('site.panel.plan', compact(['customer', "free_meets", "reserved_meets"]));
    }
    public function prices(Request $request)
    {
        $customer = auth()->user();
        if ($request->isMethod('post')) {

            if ($request->more) {
                $data = $request->validate([
                    'test_session_status' => "required",
                    'test_session_price' => "nullable|required_if:freeclass,nofree",
                ]);
            } else {
                $data = $request->validate([
                    'price_1_session' => "required|numeric",
                    'price_5_session' => "required|numeric",
                    'price_10_session' => "required|numeric",
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
        $customer = auth()->user();
        if ($request->isMethod('post')) {
            if ($request->validate([
                ''
            ]));
        }
        $transactions = Transaction::query();
        $transactions->where("user_id", $customer->id);
        if ($request->type) {
            $transactions->whereType($request->type);
        }
        $transactions->whereStatus("payed");
        $transactions = $transactions->latest()->get();

        return view('site.panel.financial', compact(['customer', "transactions"]));
    }
    public function reserve(Request $request, Select $select)
    {
        $customer = auth()->user();
        $teacher = User::find($select->user_id);
        $meets_free = $teacher->meets()->whereNull('student_id')->get(['id', 'start']);;
        $meets_free = $meets_free->pluck('start', 'id')->toArray();

        $meets_reserved = $teacher->meets()->whereNotNull('student_id')->get(['id', 'start']);;
        $meets_reserved = $meets_reserved->pluck('start', 'id')->toArray();
        if ($request->isMethod('post')) {
            $meet = Meet::find($request->meet_id);
            $start = Carbon::parse($meet->start)->addMinutes(30);
            $meet_next = Meet::where("user_id", $meet->user->id)->whereStart($start)->first();

            if (!$meet_next) {
                $meet_next = Meet::find($request->meet_id);
                $start = Carbon::parse($meet->start)->subMinutes(30);
                $meet = Meet::where("user_id", $meet->user->id)->whereStart($start)->first();
            }
            if ($meet &&  $meet_next && $select->count) {
                $meet->update([
                    'status' => "reserved",
                    'price' => $select->price,
                    'student_id' => $customer->id,
                ]);
                $meet_next->update([
                    'status' => "reserved",
                    'price' => $select->price,
                    'student_id' => $customer->id,
                    'pair' => $meet->id,
                ]);
                $select->update(['count' => $select->count - 1]);
                if ($select->count == 0) {
                    $select->delete();
                }
                toast()->success($customer->short(25));
                return redirect()->route("panel.dashboard");
            }
        }
        return view('site.panel.reserve', compact(['customer', "teacher", "meets_free", "meets_reserved", "select"]));
    }
    public function profile(Request $request)
    {
        $customer = auth()->user();
        if ($request->isMethod('post')) {
            // dd($request->all());
            if ($request->pass) {
                $data = $request->validate([
                    'password' =>
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
            } else {
                $data = $request->validate([
                    'name' => "required",
                    'gender' => "required",
                    'country_id' => "required",
                    // 'languages'=>"required|array|min:1",
                ]);
                $customer->update($data);
            }
            toast()->success($customer->short(25));
            return redirect()->route("panel.profile");
        }
        return view('site.panel.profile', compact(['customer']));
    }
}
