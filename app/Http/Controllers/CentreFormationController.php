<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentreFormation;
use App\Models\Communes;

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
        $regimes=Regime::all();

        return view('formations.centreformation',compact('centres','regimes'));
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
  

        $approches=ApprochePedagogique::all();
        $publics=PublicCible::all();
        $specialites=Specialites::all();
        $domaines=DomaineFormation::all();
        $niveaus=NiveauRecrutement::all();
        $contributions=Contributions::all();
        $regimes=Regime::all();
        return view('formations.newcentreformation',compact(['communes','approches','publics','specialites','domaines','niveaus','contributions','regimes']));
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
        //mise a jour
        $centre->typeStructure=$request->input('typeStructure');
        $centre->promoteur=$request->input('promoteur');
        $centre->gestionnaire=$request->input('gestionnaire');

        $centre->statut=$request->input('statut');
        $centre->capacite=$request->input('capacite');
        $centre->adresse=$request->input('adresse');
        $centre->referenceOuverture=$request->input('referenceOuverture');
        $centre->dateOuverture=$request->input('dateOuverture');
        $centre->commune()->associate(Communes::find($request->input('commune_id')));

        $centre->save();
        $centre->publiccible()->attach($request->input('publiccible'));
        $centre->approchepedagogique()->attach($request->input('approches'));
        $centre->specialite()->attach($request->input('specialites'));
        $centre->domainesformation()->attach($request->input('domaines'));
        $centre->contribution()->attach($request->input('contributions'));
        $centre->niveaurecrutement()->attach($request->input('niveaus'));
        $centre->regime()->attach($request->input('regimes'));

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

        $approches=ApprochePedagogique::all();
        $publics=PublicCible::all();
        $specialites=Specialites::all();
        $domaines=DomaineFormation::all();
        $niveaus=NiveauRecrutement::all();
        $contributions=Contributions::all();
        $regimes=Regime::all();
        return view('formations.updatecentreformation',compact(['centre','communes','approches','publics','specialites','domaines','niveaus','contributions','regimes']));
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

        $centre->typeStructure=$request->input('typeStructure');
        $centre->promoteur=$request->input('promoteur');
        $centre->gestionnaire=$request->input('gestionnaire');

    
        $centre->statut=$request->input('statut');
        $centre->capacite=$request->input('capacite');
        $centre->adresse=$request->input('adresse');
        $centre->referenceOuverture=$request->input('referenceOuverture');
        $centre->dateOuverture=$request->input('dateOuverture');
        $centre->commune()->associate(Communes::find($request->input('commune_id')));

        
        $centre->save();
        $centre->publiccible()->sync($request->input('publiccible'));
        $centre->approchepedagogique()->sync($request->input('approches'));
        $centre->specialite()->sync($request->input('specialites'));
        $centre->domainesformation()->sync($request->input('domaines'));
        $centre->contribution()->sync($request->input('contributions'));
        $centre->niveaurecrutement()->sync($request->input('niveaus'));
        $centre->regime()->sync($request->input('regimes'));

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
