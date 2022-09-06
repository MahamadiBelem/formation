<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cooperative;
use App\Models\Communes;
use App\Models\FormeJuridique;
use App\Models\TypeOrganisation;
use App\Models\Genre;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CooperativeExport;


class CooperativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportcsv()
    {
        return Excel::download(new CooperativeExport, 'cooperative.csv');
    }
    public function exportexcel()
    {
        return Excel::download(new CooperativeExport, 'cooperative.xlsx');
    }

    public function index()
    {
        //
        $cooperatives = Cooperative::paginate(10);

        return view('cooperatives.cooperative', compact('cooperatives'));
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
        $formejuridiques=FormeJuridique::all();
        $typeorganisations=TypeOrganisation::all();
        $genres=Genre::all();
        return view('cooperatives.newcooperative', compact(['communes', 'formejuridiques', 'typeorganisations', 'genres']));
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

        $cooperative=new Cooperative();
        $cooperative->denomination = $request->input('denomination');
        $cooperative->noImmatriculation = $request->input('noImmatriculation');
        $cooperative->dateCreation = $request->input('dateCreation');
        $cooperative->telephone = $request->input('telephone');
        $cooperative->email = $request->input('email');
        $cooperative->boitepostal = $request->input('boitepostal');
        $cooperative->coordonnegpslong = $request->input('coordonnegpslong');
        $cooperative->coordonnegpslat = $request->input('coordonnegpslat');
        $cooperative->siteWeb = $request->input('siteWeb');
        $cooperative->nomFaitiereAffliation = $request->input('nomFaitiereAffliation');
        $cooperative->montantCapital = $request->input('montantCapital');
        $cooperative->noMembreHomme=$request->input('noMembreHomme');
        $cooperative->noMenbreFemme = $request->input('noMenbreFemme');
        $cooperative->limitationNombreMandat = $request->input('limitationNombreMandat');
        $cooperative->dureeMandatOrganeGestion = $request->input('dureeMandatOrganeGestion');
        $cooperative->dureeMandatOrganecontrol = $request->input('dureeMandatOrganecontrol');
        $cooperative->commune()->associate(Communes::find($request->input('commune_id')));
        $cooperative->forme_juridique()->associate(FormeJuridique::find($request->input('forme_juridique_id')));
        $cooperative->type_organisation()->associate(TypeOrganisation::find($request->input('type_organisation_id')));
        $cooperative->genre()->associate(Genre::find($request->input('genre_id')));
        $cooperative->save();

        return redirect('/cooperative');
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
        $cooperative= Cooperative::find($id);

        return view('cooperatives.detailcooperative', compact('cooperative'));


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
        $cooperative=Cooperative::find($id);
        $communes=Communes::all();
        $formejuridiques=FormeJuridique::all();
        $typeorganisations=TypeOrganisation::all();
        $genres=Genre::all();
        return view('cooperatives.updatecooperative', compact(['communes', 'formejuridiques', 'typeorganisations', 'genres','cooperative']));
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
        $cooperative= Cooperative::find($id);
        $cooperative->denomination=$request->input('denomination');
        $cooperative->noImmatriculation=$request->input('noImmatriculation');
        $cooperative->dateCreation=$request->input('dateCreation');
        $cooperative->telephone=$request->input('telephone');
        $cooperative->email = $request->input('email');
        $cooperative->boitepostal=$request->input('boitepostal');
        $cooperative->coordonnegpslong = $request->input('coordonnegpslong');
        $cooperative->coordonnegpslat = $request->input('coordonnegpslat');
        $cooperative->siteWeb=$request->input('siteWeb');
        $cooperative->nomFaitiereAffliation=$request->input('nomFaitiereAffliation');
        $cooperative->montantCapital=$request->input('montantCapital');
        $cooperative->noMembreHomme=$request->input('noMembreHomme');
        $cooperative->noMenbreFemme=$request->input('noMenbreFemme');
        $cooperative->limitationNombreMandat=$request->input('limitationNombreMandat');
        $cooperative->dureeMandatOrganeGestion=$request->input('dureeMandatOrganeGestion');
        $cooperative->dureeMandatOrganecontrol=$request->input('dureeMandatOrganecontrol');
        $cooperative->commune()->associate(Communes::find($request->input('commune_id')));
        $cooperative->forme_juridique()->associate(FormeJuridique::find($request->input('forme_juridique_id')));
        $cooperative->type_organisation()->associate(TypeOrganisation::find($request->input('type_organisation_id')));
        $cooperative->genre()->associate(Genre::find($request->input('genre_id')));
        $cooperative->save();

        return redirect('/cooperative');
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
        $cooperative= Cooperative::find($id);

        $cooperative->delete();


        return redirect('/cooperative');
    }


}

