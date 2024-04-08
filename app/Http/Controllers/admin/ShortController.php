<?php

namespace App\Http\Controllers\admin;

use App\Models\Short;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Support\Facades\Cache;

class ShortController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shorts = Short::query();
        $shorts = $shorts->latest()->get();
        return view("admin.short.all", compact(['shorts']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.short.create", compact([]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'short' => "required",
        ]);
        $short = Short::create($data);

        alert()->success("New short created successfully");
        return redirect()->route("short.index");
    }

    /**
     * Display the specified resource.
     */
    public function show( short $short)
    {
        return view("admin.short.show", compact(["short"]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( short $short)
    {
        return view("admin.short.edit", compact(["short"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Short $short)
    {
        $data = $request->validate([
            'short' => "required",
        ]);
        $short ->update($data);
        alert()->success(" short updated successfully");
        return redirect()->route("short.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function translate_short(Short $short ,Request $request)
    {
        // Cache::flush();
     $exist= $short->translates()->where("language_id",$request->language_id)->first();
     if(! $exist){
        $short->translates()->create([
            "language_id"=>$request->language_id,
            "translate"=>$request->translate
        ]);
     }
     $lan=Language::find($request->language_id);
     Cache()->put($short->id."_".$lan->local,$request->translate);
      return response()->json([
        'status'=>"ok"
      ]);
    }
}
