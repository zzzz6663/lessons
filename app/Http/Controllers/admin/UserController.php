<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::query();
        $search = $request->search;
        $users->when($search, function ($query) use ($search) {
            $query->where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%");
        });
        $users = $users->whereIn("role",['student','teacher'])->latest()->get();
        return view("admin.user.all", compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view("admin.user.show", compact(['user']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( User $user)
    {
        return view("admin.user.edit", compact(['user']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
      $data=$request->validate([
        'name'=>"required",
        'confirm'=>"nullable",
      ]);
      $user->update($data);
      toast()->success("all data saved successfully");
      return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
