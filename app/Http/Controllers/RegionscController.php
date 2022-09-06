<?php

namespace App\Http\Controllers;

use App\Models\Regions;
use Illuminate\Http\Request;

class RegionscController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $regions=Regions::paginate(10);
        return view('cooperatives.regions',compact('regions'));


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
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $region = new Regions();

        $region->libelleRegion = $request->input('libelleRegion');

        $region->save();

        return redirect('/regionsc');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Regions
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regions
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @param  \App\Models\Regions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->input('id');
        $region=Regions::findOrFail($id);
        $region->libelleRegion=$request->input('libelleRegion');

        $region->save();

        return redirect('/regionsc');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $region=Regions::findOrFail($id);

        $region->delete();
        return redirect('/regionsc');

    }
}
