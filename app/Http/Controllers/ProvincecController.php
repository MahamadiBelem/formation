<?php

namespace App\Http\Controllers;

use App\Models\Provinces;
use App\Models\Regions;
use Illuminate\Http\Request;

class ProvincecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $provinces = Provinces::paginate(10);
        $regions = Regions::all();
        return view('cooperatives.provinces', compact(['provinces', 'regions']));
    }

    public function getCorrespondantCommune(Request $request){
        
        $provinces = Provinces::find($id);
        $selected = $provinces->communes()->select('libelleCommunes')->get();

        return selected;
    }

    public function count(){
        $counter = $counter++;
        return $counter;
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
        $id = $request->input('libelleRegion');
        $region = Regions::find($id);

        $province = new Provinces();

        $province->libelleProvince = $request->input('libelleProvince');

        $province->region()->associate($region);

        $province->save();

        return redirect('/provincesc');
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
    public function update(Request $request, $id)
    {
        //
        $province = Provinces::find($id);
        $region = Regions::find($request->input('libelleRegion'));
        
        $province->libelleProvince = $request->input('libelleProvince');
        $province->region()->associate($region);

        $province->save();
        return redirect('/provincesc');

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
    }

    public function delete($id)
    {
        $province = Provinces::find($id);

        $province->delete();

        return redirect('/provincesc');
    }
}
