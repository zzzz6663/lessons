<?php

namespace App\Http\Controllers\admin;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::query();
        $comments = $comments->latest()->get();
        return view("admin.comment.all", compact(['comments']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.comment.create", compact([]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => "required|unique:comments,name",
            'active_course' => "required",
            'active_lang' => "required",
            'flag' => "required",
        ]);
        $comment = comment::create($data);
        if ($request->hasFile('flag')) {
            $lan = $request->file('flag');
            $name_img = 'comment_' . $comment->id . '.' . $lan->getClientOriginalExtension();
            $lan->move(public_path('/media/comment/'), $name_img);
            $comment->update(['flag' => $name_img]);
        }
        Cache::put('active_langs',    comment::where('active_lang', '1')->get());

        alert()->success("New comment created successfully");
        return redirect()->route("comment.index");
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
    public function edit( comment $comment)
    {
        return view("admin.comment.edit", compact(["comment"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comment $comment)
    {
        $data = $request->validate([
            'active' => "required",
        ]);
        $comment ->update($data);
        // if ($request->hasFile('flag')) {
        //     $lan = $request->file('flag');
        //     $name_img = 'comment_' . $comment->id . '.' . $lan->getClientOriginalExtension();
        //     $lan->move(public_path('/media/comment/'), $name_img);
        //     $comment->update(['flag' => $name_img]);
        // }
        alert()->success(" comment updated successfully");
        return redirect()->route("comment.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
