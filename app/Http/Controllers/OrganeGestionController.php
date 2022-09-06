<?php

namespace App\Http\Controllers;

use App\Exports\OrganeGestionExport;
use Illuminate\Http\Request;
use App\Models\Cooperative;
use App\Models\OrganeGestion;
use Maatwebsite\Excel\Facades\Excel;

class OrganeGestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportcsv()
    {
        return Excel::download(new OrganeGestionExport, 'organegestion.csv');
    }
    public function exportexcel()
    {
        return Excel::download(new OrganeGestionExport, 'organegestion.xlsx');
    }


    public function index()
    {
        //
        $organegestions = OrganeGestion::paginate(10);
        $cooperatives = Cooperative::all();
        return view('cooperatives.organegestion', compact('cooperatives', 'organegestions'));


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
        $organegestion= new OrganeGestion();

        $organegestion->nombreMenbreHomme=$request->input('nombreMenbreHomme');
        $organegestion->nombreMenbreFemmme=$request->input('nombreMenbreFemmme');
        $organegestion->dateDebutMandat=$request->input('dateDebutMandat');
        $organegestion->dateFinMandat=$request->input('dateFinMandat');
        $organegestion->nombreMandatConsecutif=$request->input('nombreMandatConsecutif');
        $organegestion->nomPrenomPresident=$request->input('nomPrenomPresident');
        $organegestion->contactPresident=$request->input('contactPresident');
        $organegestion->sexePresident=$request->input('sexePresident');
        $organegestion->cooperative()->associate(Cooperative::find($request->input('cooperative_id')));

        $organegestion->save();

        return redirect('/organegestion');
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
        $organegestion = OrganeGestion::find($id);

        $organegestion->nombreMenbreHomme = $request->input('nombreMenbreHomme');
        $organegestion->nombreMenbreFemmme = $request->input('nombreMenbreFemmme');
        $organegestion->dateDebutMandat = $request->input('dateDebutMandat');
        $organegestion->dateFinMandat = $request->input('dateFinMandat');
        $organegestion->nombreMandatConsecutif = $request->input('nombreMandatConsecutif');
        $organegestion->nomPrenomPresident = $request->input('nomPrenomPresident');
        $organegestion->contactPresident = $request->input('contactPresident');
        $organegestion->sexePresident = $request->input('sexePresident');
        $organegestion->cooperative()->associate(Cooperative::find($request->input('cooperative_id')));
        $organegestion->save();

        return redirect('/organegestion');
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
        $organegestion = OrganeGestion::find($id);

        $organegestion->delete();

        return redirect('/organegestion');
    }
}
