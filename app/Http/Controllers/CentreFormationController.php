<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentreFormation;
use App\Models\Communes;
use App\Models\Promoteur;
use App\Models\Gestionnaire;
use App\Models\ApprochePedagogique;
use App\Models\PublicCible;
use App\Models\Specialites;
use App\Models\NiveauRecrutement;
use App\Models\DomaineFormation;
use App\Models\Contributions;
use App\Models\Regime;
class CentreFormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $centres=CentreFormation::paginate(10);

        return view('formations.centreformation',compact('centres'));
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
        $promoteurs=Promoteur::all();
        $gestionnaires=Gestionnaire::all();
        $approches=ApprochePedagogique::all();
        $publics=PublicCible::all();
        $specialites=Specialites::all();
        $domaines=DomaineFormation::all();
        $niveaus=NiveauRecrutement::all();
        $contributions=Contributions::all();
        $regimes=Regime::all();
        return view('formations.newcentreformation',compact(['communes','promoteurs','gestionnaires','approches','publics','specialites','domaines','niveaus','contributions','regimes']));
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

        $centre=new CentreFormation();
        $centre->denomination=$request->input('denomination');
        $centre->localisation=$request->input('localisation');
        $centre->statut=$request->input('statut');
        $centre->capacite=$request->input('capacite');
        $centre->adresse=$request->input('adresse');
        $centre->referenceOuverture=$request->input('referenceOuverture');
        $centre->dateOuverture=$request->input('dateOuverture');
        $centre->commune()->associate(Communes::find($request->input('commune_id')));
        $centre->promoteur()->associate(Promoteur::find($request->input('promoteur_id')));
        $centre->gestionnaire()->associate(Gestionnaire::find($request->input('gestionnaire_id')));
        $centre->regime()->associate(Regime::find($request->input('regime')));
        $centre->save();
        $centre->publiccible()->attach($request->input('publiccible'));
        $centre->approchepedagogique()->attach($request->input('approches'));
        $centre->specialite()->attach($request->input('specialites'));
        $centre->domainesformation()->attach($request->input('domaines'));
        $centre->contribution()->attach($request->input('contributions'));
        $centre->niveaurecrutement()->attach($request->input('niveaus'));

       return redirect('/centre-formation');
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

        $centre= CentreFormation::find($id);

        return view('formations.detailcentreformation',compact('centre'));

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

        $centre=CentreFormation::find($id);
        $communes=Communes::all();
        $promoteurs=Promoteur::all();
        $gestionnaires=Gestionnaire::all();
        $approches=ApprochePedagogique::all();
        $publics=PublicCible::all();
        $specialites=Specialites::all();
        $domaines=DomaineFormation::all();
        $niveaus=NiveauRecrutement::all();
        $contributions=Contributions::all();
        $regimes=Regime::all();
        return view('formations.updatecentreformation',compact(['centre','communes','promoteurs','gestionnaires','approches','publics','specialites','domaines','niveaus','contributions','regimes']));
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

        $centre= CentreFormation::find($id);
        $centre->denomination=$request->input('denomination');
        $centre->localisation=$request->input('localisation');
        $centre->statut=$request->input('statut');
        $centre->capacite=$request->input('capacite');
        $centre->adresse=$request->input('adresse');
        $centre->referenceOuverture=$request->input('referenceOuverture');
        $centre->dateOuverture=$request->input('dateOuverture');
        $centre->commune()->associate(Communes::find($request->input('commune_id')));
        $centre->promoteur()->associate(Promoteur::find($request->input('promoteur_id')));
        $centre->gestionnaire()->associate(Gestionnaire::find($request->input('gestionnaire_id')));
        $centre->regime()->associate(Regime::find($request->input('regime')));
        $centre->save();
        $centre->publiccible()->sync($request->input('publiccible'));
        $centre->approchepedagogique()->sync($request->input('approches'));
        $centre->specialite()->sync($request->input('specialites'));
        $centre->domainesformation()->sync($request->input('domaines'));
        $centre->contribution()->sync($request->input('contributions'));
        $centre->niveaurecrutement()->sync($request->input('niveaus'));

       return redirect('/centre-formation');
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

        $centre=CentreFormation::find($id);

        $centre->delete();


        return redirect('/centre-formation');

    }
}
