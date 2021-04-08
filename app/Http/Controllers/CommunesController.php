<?php

namespace App\Http\Controllers;
use App\Models\Communes;
use App\Models\Provinces;
use Illuminate\Http\Request;

class CommunesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $provinces=Provinces::all();
        $communes=Communes::paginate(5);
        return view('formations.communes',compact(['provinces','communes']));
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

        $id=$request->input('libelleRegion');

        $province=Provinces::find($id);
        $commune=new Communes();
        $commune->libelleCommune=$request->input('libelleCommune');
        $commune->province()->associate($province);

        $commune->save();

        return redirect('/communes');
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

        $idprovince=$request->input('libelleProvince');

        $province=Provinces::find($idprovince);
        $commune=Communes::find($id);

        $commune->libelleCommune=$request->input('libelleCommune');
        $commune->province()->associate($province);

        $commune->save();

        return redirect('/communes');
        
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

        $commune=Communes::find($id);

        $commune->delete();

        return redirect('/communes');
    }
}
