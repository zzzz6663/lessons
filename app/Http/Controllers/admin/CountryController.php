<?php

namespace App\Http\Controllers\admin;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::query();
        $countries = $countries->latest()->get();
        return view("admin.country.all", compact(['countries']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.country.create", compact([]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => "required|unique:countrys,name",
            'flag' => "required",
            'zone_time' => "required",
        ]);
        $country = country::create($data);
        if ($request->hasFile('flag')) {
            $lan = $request->file('flag');
            $name_img = 'country_' . $country->id . '.' . $lan->getClientOriginalExtension();
            $lan->move(public_path('/media/country/'), $name_img);
            $country->update(['flag' => $name_img]);
        }
        Cache::put('active_langs',    country::where('active_lang', '1')->get());

        alert()->success("New country created successfully");
        return redirect()->route("country.index");
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
    public function edit( country $country)
    {
        return view("admin.country.edit", compact(["country"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, country $country)
    {
        $data = $request->validate([
            'name' => "required|unique:countries,name,".$country->id,
            'image' => "nullable",
            'publish' => "required",
            'zone_time' => "required",
        ]);
        $country ->update($data);
        if ($request->hasFile('image')) {
            $lan = $request->file('image');
            $name_img = 'country_' . $country->id . '.' . $lan->getClientOriginalExtension();
            $lan->move(public_path('/media/country/'), $name_img);
            $country->update(['image' => $name_img]);
        }
        alert()->success(" country updated successfully");
        return redirect()->route("country.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
