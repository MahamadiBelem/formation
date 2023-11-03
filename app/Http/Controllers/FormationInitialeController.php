<?php

namespace App\Http\Controllers;

use App\Models\FormationInitiale;
use App\Models\SourceFinancements;
use App\Models\TypeFormation;
use Illuminate\Http\Request;

class FormationInitialeController extends Controller
{
    /**
     * Display a listing of the resource. Type formation is the representation with cyle formation
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $formations=FormationInitiale::paginate(10);
        $sources=SourceFinancements::all();
        $types=TypeFormation::all();
        return view('formations.formationinitiale',compact(['formations'],'sources','types'));
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

        $formation=new FormationInitiale();

        $formation->libelleFormations=$request->input('libelleFormations');

        $formation->coutFormation=$request->input('coutFormation');

        $formation->sourcefinancement()->associate(SourceFinancements::find($request->input('source_id')));
        $formation->typeformation()->associate(TypeFormation::find($request->input('type_id')));

       $formation->save();

       return redirect('/formationinitiale');


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

        $formation= FormationInitiale::find($id);

        $formation->libelleFormations=$request->input('libelleFormations');
        $formation->coutFormation=$request->input('coutFormation');

        $formation->sourcefinancement()->associate(SourceFinancements::find($request->input('source_id')));
        $formation->typeformation()->associate(TypeFormation::find($request->input('type_id')));

       $formation->save();

       return redirect('/formationinitiale');
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

        return redirect('/formationinitiale');
    }
}
