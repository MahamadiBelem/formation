<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Fonctionnementassociation;
use Illuminate\Http\Request;
use App\Exports\faExport;
use Maatwebsite\Excel\Facades\Excel;

class FonctionnementassociationController extends Controller
{
    public function faexportcsv()
    {
        return Excel::download(new faExport, 'Fonctionnementassociation.csv');
    }
    public function faexportexcel()
    {
        return Excel::download(new faExport, 'Fonctionnementassociation.xlsx');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fonctionnementassociations = Fonctionnementassociation::paginate(10);
        $associations = Association::all();
        return view('Associations.fonctionnementassociation', compact('associations', 'fonctionnementassociations'));
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
        $fonctionnementassociation = new Fonctionnementassociation();

        $fonctionnementassociation->nbreAssembleeGeneralesOrdinairePrevu = $request->input('nbreAssembleeGeneralesOrdinairePrevu');
        $fonctionnementassociation->nbreRencontreOrganeGestion = $request->input('nbreRencontreOrganeGestion');
        $fonctionnementassociation->nbreRencontreOrganeSurveillance = $request->input('nbreRencontreOrganeSurveillance');

        $fonctionnementassociation->association()->associate(Association::find($request->input('association_id')));

        $fonctionnementassociation->save();

        return redirect('/fonctionnementassociation');
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
        $fonctionnementassociation = Fonctionnementassociation::find($id);

        $fonctionnementassociation->nbreAssembleeGeneralesOrdinairePrevu = $request->input('nbreAssembleeGeneralesOrdinairePrevu');
        $fonctionnementassociation->nbreRencontreOrganeGestion = $request->input('nbreRencontreOrganeGestion');
        $fonctionnementassociation->nbreRencontreOrganeSurveillance = $request->input('nbreRencontreOrganeSurveillance');

        $fonctionnementassociation->association()->associate(Association::find($request->input('association_id')));

        $fonctionnementassociation->save();

        return redirect('/fonctionnementassociation');
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
        $fonctionnementassociation = Fonctionnementassociation::find($id);
        $fonctionnementassociation->delete();
        return redirect('/fonctionnementassociation');
    }
}
