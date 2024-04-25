<?php

namespace App\Http\Controllers\admin;

use App\Models\Resume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resumes = resume::query();
        $resumes = $resumes->latest()->get();
        return view("admin.resume.all", compact(['resumes']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.resume.create", compact([]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => "required|unique:resumes,name",
            'active_course' => "required",
            'active_lang' => "required",
            'flag' => "required",
        ]);
        $resume = resume::create($data);
        if ($request->hasFile('flag')) {
            $lan = $request->file('flag');
            $name_img = 'resume_' . $resume->id . '.' . $lan->getClientOriginalExtension();
            $lan->move(public_path('/media/resume/'), $name_img);
            $resume->update(['flag' => $name_img]);
        }
        // Cache::put('active_langs',    resume::where('active_lang', '1')->get());

        alert()->success("New resume created successfully");
        return redirect()->route("resume.index");
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
    public function edit( Resume $resume)
    {
        return view("admin.resume.edit", compact(["resume"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {


        $data = $request->validate([
            'publish' => "required",
        ]);
        $data['status']="published";
        $resume->update($data);
        alert()->success(" resume updated successfully");
        return redirect()->route("resume.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
