<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Acat;
use Illuminate\Http\Request;

class AcatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acat=Acat::orderBy('id', 'DESC')->get() ;
        return  view('admin.acat.all',compact('acat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.acat.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data=$request->validate([
          'name'=>'required',
          'parent_id'=>'nullable'
      ]);

         $acat= Acat::create($data);
        toast()->success('new category added successfully');
        return redirect(route('acat.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Acat $acat)
    {
        return  view('admin.acat.edit',compact('acat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acat $acat)
   {
        $data=$request->validate([
            'name'=>'required',
            'parent_id'=>'nullable'
        ]);

          $acat->update($data);
        toast()->success('category updated successfully ');
        return redirect(route('acat.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acat $acat)
    {
        $acat->delete();
        toast()->success('دسته بندی حذف شد  ');
        return back();
        //
    }
}
