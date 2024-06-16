<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Acat;
use App\Models\Post;
use App\Models\Site;
use App\Models\User;
use App\Models\Action;
use App\Models\Course;
use App\Models\Comment;
use App\Models\Section;
use App\Models\Language;
use App\Models\Advertise;
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
    public function comment_teacher(Request $request, User $user)
    {
        $auth = \auth()->user();
        if (!$auth) {
            toast()->error(' ابتدا وارد حساب کاربری خود شوید سپس نظر خود را ثبت کنید ');
            return back();
        }
        $com = Comment::where('commentable_type', 'App\Models\User')->where('commentable_id', $user->id)->where('user_id', $auth->id)->first();
        $meet = $user->meets()->where('student_id', $auth->id)->first();
        // if (!$meet) {
        //     toast()->error('شما قبلا با این استاد کلاسی نداشته اید ');
        //     return back();
        // }
        if ($com) {
            toast()->error(  $auth->Short(396));
            return back();
        }
        $valid = $request->validate([
            'name' => 'required',
            'comment' => 'required',
            'rate' => 'required',
        ]);
        $valid['user_id'] = $auth->id;
        $comment = $user->comments()->create($valid);
        toast()->success(' ');
        return back();
    }
    public function tag_articles(Request $request, $tag)
    {

        $articles = Post::whereNotNull('confirm')->whereNotNull('publish');

        $articles = $articles->Where(function ($query) use ($tag) {
            $query->Where('tags', 'LIKE', "%{$tag}%");
        });
        $articles = $articles->latest()->paginate(6);
        return view('site.articles', compact(['articles']));
    }
    public function comment_article(Request $request, Post $post)
    {
        $user=auth()->user();
        $article=$post;
        $valid = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            'parent_id' => 'required',
        ]);
        $comm = $article->comments()->where('parent_id', $valid['parent_id'])->count();
        if (Auth::check()) {
            $comment = $article->comments()->create([
                'user_id' => \auth()->user()->id,
                'name' => \auth()->user()->name,
                'email' => \auth()->user()->email,
                'comment' => $valid['comment'],
                'parent_id' => $valid['parent_id'],
            ]);
        } else {
            $comment = $article->comments()->create([
                'name' => $valid['name'],
                'email' => $valid['email'],
                'comment' => $valid['comment'],
                'parent_id' => $valid['parent_id'],
            ]);
        }

        toast()->success( $user->short(368));
        return back();
    }
    public function article(Request $request,Post $post)
    {

        $article=$post;
        $tags = explode('_', $article->tags);
        $related = Post::query();
        for ($i = 0; $i < sizeof($tags), $i++;) {
            $related = $related->Where(function ($query) use ($tags, $i) {
                $query->orWhere('tag', 'LIKE', "%{$tags[$i]}%");
            });
        }
        $related = $related->latest()->take(3)->get();

        $all = Post::whereNotNull('publish')->whereNotNull('confirm')->pluck('id')->toArray();
        $pos =  array_search($article->id, $all);
        $next = null;
        $prv = null;
        $n = $pos + 1;
        $p = $pos - 1;
        if (isset($all[$n])) {
            $next = Post::find($all[$n]);
        }
        if (isset($all[$p])) {
            $prv = Post::find($all[$p]);
        }
        return view('site.article', compact(['article', 'next', 'prv', 'tags', 'related']));
    }
    public function articles(Request $request,Acat $acat)
    {
        if ($acat->id){
            $childs=Acat::where('parent_id',$acat->id)->get();
            if ($childs->first()){
                $articles= Post::whereHas('acats',function ($query) use ($childs){
                    $query->whereIn('acat_id',$childs->pluck('id')->toArray());
                })->whereNotNull('confirm');
            }else{
                // $articles=$acat->articles()->whereNotNull('confirm')->whereNotNull('publish');
                $articles=$acat->articles()->whereNotNull('confirm')->whereNotNull('publish');

            }
            $articles=$articles->latest()->paginate(6);
            return view('site.cat',compact(['articles','acat']));
        }
        $articles=Post::query();
        if ($request->has('search')){
            $articles=$articles  ->Where( function($query) use ($request){
                $search=$request->search;
                $query->Where('title' ,'LIKE',"%{$search}%")
                ->orWhere('content' ,'LIKE',"%{$search}%");
            });
        }
        $articles=$articles->whereNotNull('confirm')->whereNotNull('publish')->latest()->paginate(9);

        return view('site.articles', compact(["articles"]));
    }
    public function teachers()
    {
        $customer=auth()->user();
        $teachers=User::query();
        $teachers->whereRole("teacher")->whereNotNull("confirm");
        // $teachers->whereDisplay(1);
        $teachers=$teachers->latest()->get();
        $languages=Language::where("active_course",1)->get();
        $faves=[];
        if($customer){
            $faves= $customer->faves()->pluck('fave_id')->toArray();
        }
        return view('site.teachers', compact(["languages","teachers","faves"]));
    }
    public function download(Request $request)
    {

        return response()->download(($request->path));;
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
