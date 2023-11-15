<?php

namespace App\Http\Controllers;

use App\Models\Regions;
use Illuminate\Http\Request;

class RegionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function counting(){
       // return $total = Regions::count();
        $regions = Regions::all();

        return $total = $regions->count();

    }
    
    public function index()
    {
        //

      $regions=Regions::paginate(10);

       $regionsCount = Regions::all();
        $total = $regionsCount->count();
        //$confirmed = Regions::where('status', 'confirmed')->count();
        //$unconfirmed = Regions::where('status', 'unconfirmed')->count();
       // $cancelled = Regions::where('status', 'cancelled')->count();
       // $bounced = Regions::where('status', 'bounced')->count();
      

        return view('formations.regions',compact('regions','total'));


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
            'libelleRegion'=>'required|unique:regions'
        ]); 

        

        $region = new Regions();

        $region->libelleRegion = $request->input('libelleRegion');

        $region->save();

        return redirect('/regions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function show(Regions $regions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function edit(Regions $regions)
    {
        //


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $id=$request->input('id');
        $region=Regions::findOrFail($id);
        $region->libelleRegion=$request->input('libelleRegion');

        $region->save();

        return redirect('/regions');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $region=Regions::findOrFail($id);

        $region->delete();
        return redirect('/regions');

    }
}
