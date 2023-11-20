<?php

namespace App\Http\Controllers;

use App\Models\ProjetInstallations;
use App\Models\CentreFormation;
use App\Models\Apprenants;
use App\Models\DomainesInstallations;

use Illuminate\Http\Request;

class ProjetInstallationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $affectes=ProjetInstallations::paginate(10);
        $centres=CentreFormation::all();
        $apprenants=Apprenants::all();
       // $domainesinstallations=DomainesInstallations::all();
        // ajout de kit au cas ou necessaire

        return view('formations.projetinstallations',compact(['affectes','centres','apprenants']));

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

    $affecte=new ProjetInstallations();

    $affecte->centreformation()->associate($request->input('centre_formation_id'));
    $affecte->libelleProjetInstallation=$request->input('libelleProjetInstallation');
    $affecte->apprenant()->associate($request->input('apprenant_id'));
   
    
   
    $affecte->save();

    return redirect('/projet-installations');

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

    $affecte= ProjetInstallations::find($id);

    $affecte->centreformation()->associate($request->input('centre_formation_id'));
    $affecte->apprenant()->associate($request->input('apprenant_id'));
    $affecte->libelleProjetInstallation=$request->input('libelleProjetInstallation');
   // $affecte->domainesinstallation()->associate($request->input('domaines_installation_id'));
   
    $affecte->save();

    return redirect('/projet-installations');
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
    $affecte= ProjetInstallations::find($id);

    $affecte->delete();
    return redirect('/projet-installations');

}
}
