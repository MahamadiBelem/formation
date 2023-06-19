<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Exports\asExport;
use App\Models\Association;
use App\Models\Communes;
use App\Models\TypeOrganisation;
use App\Models\Activiteorgane;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AssociationController extends Controller
{
    //
    public function asexportcsv()
    {
        return Excel::download(new asExport, 'Association.csv');
    }
    public function asexportexcel()
    {
        return Excel::download(new asExport, 'Association.xlsx');
    }

    public function index()
    {
        //
        $associations = Association::paginate(10);

        return view('Associations.association', compact('associations'));
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
        $activiteorganes=Activiteorgane::all();
        $typeorganisations=TypeOrganisation::all();
        return view('Associations.newAssociation', compact(['communes', 'activiteorganes', 'typeorganisations']));
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

        $association=new Association();
        $association->denomination = $request->input('denomination');
        $association->nroRecepisse = $request->input('nroRecepisse');
        $association->dateCreation = $request->input('dateCreation');
        $association->dureeVie = $request->input('dureeVie');
        $association->telephone = $request->input('telephone');
        $association->email = $request->input('email');
        $association->coordonnegpslong = $request->input('coordonnegpslong');
        $association->coordonnegpslat = $request->input('coordonnegpslat');
        $association->siteWeb = $request->input('siteWeb');
        $association->couvertureFonctionnelle = $request->input('couvertureFonctionnelle');
        $association->genre = $request->input('genre');
        $association->nbreMembreH=$request->input('nbreMembreH');
        $association->nbreMembreF = $request->input('nbreMembreF');
        $association->nbreUnion = $request->input('nbreUnion');

        $association->activiteorgane()->associate(Activiteorgane::find($request->input('activiteorgane_id')));
        $association->commune()->associate(Communes::find($request->input('commune_id')));
        $association->type_organisation()->associate(TypeOrganisation::find($request->input('type_organisation_id')));
        $association->save();

        return redirect('/association');
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
        $association= Association::find($id);

        return view('Associations.detailassociation', compact('association'));


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
        $association=Association::find($id);
        $communes=Communes::all();
        $typeorganisations=TypeOrganisation::all();
        $activiteorganes = Activiteorgane::all();
        return view('Associations.updateassociation', compact('communes','typeorganisations','activiteorganes','association'));
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
        $association= Association::find($id);
        $association->denomination = $request->input('denomination');
        $association->nroRecepisse = $request->input('nroRecepisse');
        $association->dateCreation = $request->input('dateCreation');
        $association->dureeVie = $request->input('dureeVie');
        $association->telephone = $request->input('telephone');
        $association->email = $request->input('email');
        $association->coordonnegpslong = $request->input('coordonnegpslong');
        $association->coordonnegpslat = $request->input('coordonnegpslat');
        $association->siteWeb = $request->input('siteWeb');
        $association->couvertureFonctionnelle = $request->input('couvertureFonctionnelle');
        $association->genre = $request->input('genre');
        $association->nbreMembreH=$request->input('nbreMembreH');
        $association->nbreMembreF = $request->input('nbreMembreF');
        $association->nbreUnion = $request->input('nbreUnion');

        $association->activiteorgane()->associate(Activiteorgane::find($request->input('activiteorgane_id')));
        $association->commune()->associate(Communes::find($request->input('commune_id')));
        $association->type_organisation()->associate(TypeOrganisation::find($request->input('type_organisation_id')));
        $association->save();

        return redirect('/association');

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
        $association= Association::find($id);

        $association->delete();


        return redirect('/association');
    }


}
