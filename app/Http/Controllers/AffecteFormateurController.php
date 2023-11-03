<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AffecterFormateur;
use App\Models\CentreFormation;
use App\Models\TypeFormation;
use App\Models\Formateurs;

class AffecteFormateurController extends Controller
{
    //

    public function index()
    {
        //

        $affectes=AffecterFormateur::paginate(10);
        $centres=CentreFormation::all();
        $formateurs=Formateurs::all();
        $types=TypeFormation::all();
        

        return view('formations.affecteformateur',compact(['affectes','centres','formateurs','types']));

    }

    /**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    //

    $types=TypeFormation::all();
   


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

    $affecte=new AffecterFormateur();

    $affecte->dateAffectation=$request->input('dateAffectation');
    $affecte->regimeFormateur=$request->input('regimeFormateur');
    $affecte->formateur()->associate($request->input('formateur_id'));
    $affecte->centreformation()->associate($request->input('centre_id'));
   
    $affecte->save();
    $affecte->typeformation()->attach($request->input('types'));

    return redirect('/affectation-formateur');

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

    $affecte= AffecterFormateur::find($id);

    $affecte->dateAffectation=$request->input('dateAffectation');
    $affecte->regimeFormateur=$request->input('regimeFormateur');
    $affecte->formateur()->associate($request->input('formateur_id'));
    $affecte->centreformation()->associate($request->input('centre_id'));

    $affecte->save();
    $affecte->typeformation()->sync($request->input('types'));

    return redirect('/affectation-formateur');
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
    $affecte= AffecterFormateur::find($id);

    $affecte->delete();
    return redirect('/affectation-formateur');

}

}



