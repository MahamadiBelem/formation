<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormationContinue;
use App\Models\SourceFinancements;
use App\Models\TypeFormation;
use App\Models\Specialites;

class FormationContinueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $formations=FormationContinue::paginate(10);
        $sources=SourceFinancements::all();
        $types=TypeFormation::all();
        $specialites=Specialites::all();
        return view('formations.formationcontinue',compact(['formations'],'sources','types','specialites'));
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

        $formation=new FormationContinue();

        $formation->themes=$request->input('themes');
        $formation->coutFormation=$request->input('coutFormation');

        $formation->sourcefinancement()->associate(SourceFinancements::find($request->input('source_id')));

        $formation->specialite()->associate(Specialites::find($request->input('specialite_id')));

       $formation->save();

       return redirect('/formationcontinue');


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

        $formation= FormationContinue::find($id);

        $formation->themes=$request->input('themes');
        $formation->coutFormation=$request->input('coutFormation');

        $formation->sourcefinancement()->associate(SourceFinancements::find($request->input('source_id')));
       

        $formation->specialite()->associate(Specialites::find($request->input('specialite_id')));

       $formation->save();

       return redirect('/formationcontinue');
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

        $formation= FormationContinue::find($id);

        $formation->delete();

        return redirect('/formationcontinue');
    }
}
