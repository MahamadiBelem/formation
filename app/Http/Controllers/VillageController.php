<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Villages;
use App\Models\Communes;
class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     * Afficher la liste des ressources
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villages=Villages::paginate(10);
        $communes=Communes::all();

        return view('formations.villages',compact(['villages','communes']));
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

        $villages=new Villages();
        $commune=Communes::find($request->input('libelleCommune'));
        $villages->libelleVillages=$request->input('libelleVillage');

        $villages->commune()->associate($commune);

        $villages->save();

        return redirect('/villages');

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $commune=$request->input('libelleCommune');
        $village=Villages::find($id);
        $village->libelleVillages=$request->input('libelleVillage');

        $village->commune()->associate($commune);
        $village->save();
        return redirect('/villages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $village=Villages::find($id);

        $village->delete();

        return redirect('/villages');

    }
}
