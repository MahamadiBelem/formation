<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Apprenants;
use App\Models\Communes;
use App\Models\NiveauInstructions;

class ApprenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $apprenants=Apprenants::paginate(10);
        $communes=Communes::all();
        $niveaus=NiveauInstructions::all();
        return view('formations.apprenants',compact(['apprenants','communes','niveaus']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        $communes=Communes::all();
        $niveaus=NiveauInstructions::all();
        $matricule_num=rand(0,1000000);
        $matricule_str=Str::random(2);
        $matricule=strtoupper($matricule_num.''.$matricule_str);
        return view('formations.newapprenant',compact(['matricule','communes','niveaus']));
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
        $apprenant=new Apprenants();

        $apprenant->matricule=$request->input('matricule');
        $apprenant->nom=$request->input('nom');
        $apprenant->prenom=$request->input('prenom');
        $apprenant->dateNaissance=$request->input('dateNaissance');
        $apprenant->sexe=$request->input('sexe');
        $apprenant->contact=$request->input('contact');
        $apprenant->situationMatrimoniale=$request->input('situationMatrimoniale');

        // update of my function
        $apprenant->numeroCasBesoin=$request->input('numeroCasBesoin');
        $apprenant->nombreEnfant=$request->input('nombreEnfant');
        $apprenant->localites=$request->input('localites');

        $apprenant->niveauinstructions()->associate($request->input('niveau_instruction_id'));

        $apprenant->commune()->associate($request->input('commune_id'));

        $apprenant->save();

        return redirect('/apprenants');
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
        $apprenant= Apprenants::find($id);

        return view('formations.detailapprenant',compact('apprenant'));
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

        $communes=Communes::all();
        $niveaus=NiveauInstructions::all();
        $apprenant= Apprenants::find($id);

        return view('formations.updateapprenant',compact(['apprenant','communes','niveaus']));
       
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

        $apprenant= Apprenants::find($id);

        $apprenant->matricule=$request->input('matricule');
        $apprenant->nom=$request->input('nom');
        $apprenant->prenom=$request->input('prenom');
        $apprenant->dateNaissance=$request->input('dateNaissance');
        $apprenant->sexe=$request->input('sexe');
        $apprenant->contact=$request->input('contact');
        $apprenant->situationMatrimoniale=$request->input('situationMatrimoniale'); 

        // update of my api for updating
        $apprenant->numeroCasBesoin=$request->input('numeroCasBesoin'); 
        $apprenant->nombreEnfant=$request->input('nombreEnfant');
        $apprenant->localites=$request->input('localites');

        $apprenant->niveauinstructions()->associate($request->input('niveau_instruction_id'));

        $apprenant->commune()->associate($request->input('commune_id'));

        $apprenant->save();

        return redirect('/apprenants');
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

        $apprenant= Apprenants::find($id);

        $apprenant->delete();

        return redirect('/apprenants');
    }
}
