<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cooperative;
use App\Models\OrganeControle;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrganeControleExport;

class OrganeControleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportcsv()
    {
        return Excel::download(new OrganeControleExport(), 'organecontrole.csv');
    }
    public function exportexcel()
    {
        return Excel::download(new OrganeControleExport(), 'organecontrole.xlsx');
    }

    public function index()
    {
        //
        $organecontroles = OrganeControle::paginate(10);
        $cooperatives = Cooperative::all();
        return view('cooperatives.organecontrole', compact('cooperatives', 'organecontroles'));

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
        $organecontrole = new OrganeControle();

        $organecontrole->nombreMenbreHomme = $request->input('nombreMenbreHomme');
        $organecontrole->nombreMenbreFemmme = $request->input('nombreMenbreFemmme');
        $organecontrole->dateDebutMandat = $request->input('dateDebutMandat');
        $organecontrole->dateFinMandat = $request->input('dateFinMandat');
        $organecontrole->nombreMandatConsecutif = $request->input('nombreMandatConsecutif');
        $organecontrole->nomPrenomPremierResponsable = $request->input('nomPrenomPremierResponsable');
        $organecontrole->contactPremierResponsable = $request->input('contactPremierResponsable');
        $organecontrole->sexePremierResponsable = $request->input('sexePremierResponsable');
        $organecontrole->cooperative()->associate(Cooperative::find($request->input('cooperative_id')));

        $organecontrole->save();

        return redirect('/organecontrole');
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
        $organecontrole = OrganeControle::find($id);

        $organecontrole->nombreMenbreHomme = $request->input('nombreMenbreHomme');
        $organecontrole->nombreMenbreFemmme = $request->input('nombreMenbreFemmme');
        $organecontrole->dateDebutMandat = $request->input('dateDebutMandat');
        $organecontrole->dateFinMandat = $request->input('dateFinMandat');
        $organecontrole->nombreMandatConsecutif = $request->input('nombreMandatConsecutif');
        $organecontrole->nomPrenomPremierResponsable = $request->input('nomPrenomPremierResponsable');
        $organecontrole->contactPremierResponsable = $request->input('contactPremierResponsable');
        $organecontrole->sexePremierResponsable = $request->input('sexePremierResponsable');
        $organecontrole->cooperative()->associate(Cooperative::find($request->input('cooperative_id')));
        $organecontrole->save();
        return redirect('/organecontrole');
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
        $organecontrole = OrganeControle::find($id);

        $organecontrole->delete();

        return redirect('/organecontrole');
    }
}
