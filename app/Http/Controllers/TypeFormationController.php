<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeFormation;
use App\Models\Module;

class TypeFormationController extends Controller
{
    
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $types=TypeFormation::paginate(5);
       // $modules=Module::all();

        return view('formations.typeformation',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $type=new TypeFormation() ;
        $type->libelleTypeFormation=$request->input('libelleTypeFormation');

        //$type->module()->associate($request->input('module_id'));
        $type->save();

        return redirect('/type-formation');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        $type=TypeFormation::find($request->input('id'));
        $type->libelleTypeFormation=$request->input('libelleTypeFormation');

        //$type->module()->associate($request->input('module_id'));
        $type->save();

        return redirect('/type-formation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $type=TypeFormation::find($id);

        $type->delete();
        return redirect('/type-formation');

    }
}
