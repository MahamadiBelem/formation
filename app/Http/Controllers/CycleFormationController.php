<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CycleFormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

      $cyles=CycleFormation::paginate(10);
      

        return view('formations.cyles',compact('cyles'));


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

        $validationdata=$request->validate([
            'libelleCycleFormation'=>'required|unique:libelleCycleFormation'
        ]);

        $region = new CycleFormation();

        $region->libelleCycleFormation = $request->input('libelleCycleFormation');

        $region->save();

        return redirect('/cyle');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CycleFormation  $cyles
     * @return \Illuminate\Http\Response
     */
    public function show(CycleFormation $cyles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CycleFormation  $cyles
     * @return \Illuminate\Http\Response
     */
    public function edit(CycleFormation $cyles)
    {
        //


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CycleFormation  $cyles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $id=$request->input('id');
        $region=CycleFormation::findOrFail($id);
        $region->libelleCycleFormation=$request->input('libelleCycleFormation');

        $region->save();

        return redirect('/cyle');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CycleFormation  $cyles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $region=CycleFormation::findOrFail($id);

        $region->delete();
        return redirect('/cyle');

    }
}
