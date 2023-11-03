<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formations;
use App\Models\SourceFinancements;
use App\Models\TypeFormation;
class FormationController extends Controller
{
    /**
     * Display a listing of the resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $formations=Formations::paginate(10);
        $sources=SourceFinancements::all();
        $types=TypeFormation::all();
        return view('formations.formation',compact(['formations'],'sources','types'));
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

        $formation=new Formations();

        $formation->libelleFormations=$request->input('libelleFormations');
        $formation->themes=$request->input('themes');
        $formation->coutFormation=$request->input('coutFormation');

        $formation->sourcefinancement()->associate(SourceFinancements::find($request->input('source_id')));
        $formation->typeformation()->associate(TypeFormation::find($request->input('type_id')));

       $formation->save();

       return redirect('/formations');


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

        $formation= Formations::find($id);

        $formation->libelleFormations=$request->input('libelleFormations');
        $formation->themes=$request->input('themes');
        $formation->coutFormation=$request->input('coutFormation');

        $formation->sourcefinancement()->associate(SourceFinancements::find($request->input('source_id')));
        $formation->typeformation()->associate(TypeFormation::find($request->input('type_id')));

       $formation->save();

       return redirect('/formations');
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

        $formation= Formations::find($id);

        $formation->delete();

        return redirect('/formations');
    }
}
