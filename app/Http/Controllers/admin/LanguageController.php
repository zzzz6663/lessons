<?php

namespace App\Http\Controllers\admin;

use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::query();
        $languages = $languages->latest()->get();
        return view("admin.language.all", compact(['languages']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.language.create", compact([]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => "required|unique:languages,name",
            'active_course' => "required",
            'active_lang' => "required",
            'flag' => "required",
        ]);
        $language = Language::create($data);
        if ($request->hasFile('flag')) {
            $lan = $request->file('flag');
            $name_img = 'language_' . $language->id . '.' . $lan->getClientOriginalExtension();
            $lan->move(public_path('/media/language/'), $name_img);
            $language->update(['flag' => $name_img]);
        }
        Cache::put('active_langs',    Language::where('active_lang', '1')->get());

        alert()->success("New Language created successfully");
        return redirect()->route("language.index");
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
    public function edit( Language $language)
    {
        return view("admin.language.edit", compact(["language"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        $data = $request->validate([
            'name' => "required|unique:languages,name,".$language->id,
            'active_course' => "required",
            'active_lang' => "required",
            'flag' => "nullable",
        ]);
        $language ->update($data);
        if ($request->hasFile('flag')) {
            $lan = $request->file('flag');
            $name_img = 'language_' . $language->id . '.' . $lan->getClientOriginalExtension();
            $lan->move(public_path('/media/language/'), $name_img);
            $language->update(['flag' => $name_img]);
        }
        Cache::put('active_langs',    Language::where('active_lang', '1')->get());
        alert()->success(" Language updated successfully");
        return redirect()->route("language.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
