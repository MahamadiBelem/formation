<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AffecterModule;
use App\Models\Formateurs;
use App\Models\Module;
use App\Models\TypeFormation;

class AffecterModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $affectes=AffecterModule::paginate(10);
        $modules=Module::all();
        $formateurs=Formateurs::all();
        $types=TypeFormation::all();

        return view('formations.affectemodule',compact(['affectes','formateurs','types','modules']));

    }

    /**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    //
    $modules=Module::all();
    $formateurs=Formateurs::all();
    $types=TypeFormation::all();

    return view('formations.affectemodule',compact(['formateurs','types','modules']));
   


}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{

    $affecte=new AffecterModule();

    $affecte->formateur()->associate($request->input('formateur_id'));
    $affecte->typeformation()->associate($request->input('type_formation_id'));

    $affecte->save();
    $affecte->module()->attach($request->input('module'));
    //$affecte->module()->associate($request->input('module_id'));
    
    $affecte->save();

    return redirect('/affectation-module');

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

    $affecte= AffecterModule::find($id);

    
    $affecte->formateur()->associate($request->input('formateur_id'));
    $affecte->typeformation()->associate($request->input('type_formation_id'));
   
    $affecte->save();
    $affecte->module()->sync($request->input('module'));

    return redirect('/affectation-module');
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
    return redirect('/affectation-module');

}
}
