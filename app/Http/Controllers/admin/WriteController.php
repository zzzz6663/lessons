<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class WriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query();
        $posts = $posts->latest()->get();
        return view("admin.post.all", compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.post.create", compact([]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => "required|unique:posts,name",
            'active_course' => "required",
            'active_lang' => "required",
            'flag' => "required",
        ]);
        $post = post::create($data);
        if ($request->hasFile('flag')) {
            $lan = $request->file('flag');
            $name_img = 'post_' . $post->id . '.' . $lan->getClientOriginalExtension();
            $lan->move(public_path('/media/post/'), $name_img);
            $post->update(['flag' => $name_img]);
        }
        Cache::put('active_langs',    post::where('active_lang', '1')->get());

        alert()->success("New post created successfully");
        return redirect()->route("post.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Post $write)
    {
        return view("admin.post.edit", compact(["write"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $write)
    {
        $data = $request->validate([
            'confirm' => "required",
        ]);
        $write ->update($data);
        // if ($request->hasFile('flag')) {
        //     $lan = $request->file('flag');
        //     $name_img = 'post_' . $post->id . '.' . $lan->getClientOriginalExtension();
        //     $lan->move(public_path('/media/post/'), $name_img);
        //     $post->update(['flag' => $name_img]);
        // }
        alert()->success(" post updated successfully");
        return redirect()->route("write.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
