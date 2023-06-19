<?php

namespace App\Http\Controllers\cra;

use App\Exports\acExport;
use App\Http\Controllers\Controller;
use App\Models\assemblee_consulaire;
use App\Models\chambre_regionale;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class acController extends Controller
{
    //
    public function acexportcsv(){
        return Excel::download(new acExport, 'AssembleeConsulaire.csv');
    }
    public function acexportexcel()
    {
        return Excel::download(new acExport, 'AssembleeConsulaire.xlsx');
    }

    public function index()
    {
        //
        //$acs = assemblee_consulaire::all();
        $acs = assemblee_consulaire::paginate(10);
        $cra = chambre_regionale::all();

        return view('cra.assembleeConsulaire', compact('cra','acs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
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
        $ac = new assemblee_consulaire();

        $ac->NbreMembreColJeune = $request->input('NbreMembreColJeune');
        $ac->NbreMembreColFemme = $request->input('NbreMembreColFemme');
        $ac->NbreMembreH = $request->input('NbreMembreH');
        $ac->NbreMembreEntreASPHF = $request->input('NbreMembreEntreASPHF');
        $ac->NbreMembreColPr = $request->input('NbreMembreColPr');
        $ac->NbreMembreColExplASPHF = $request->input('NbreMembreColExplASPHF');

        $ac->chambre_regionale()->associate(chambre_regionale::find($request->input('chambre_regionale_id')));

        $ac->save();
        return redirect('/assembleeConsulaire');
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
        $ac = assemblee_consulaire::find($id);

        $ac->NbreMembreColJeune = $request->input('NbreMembreColJeune');
        $ac->NbreMembreColFemme = $request->input('NbreMembreColFemme');
        $ac->NbreMembreH = $request->input('NbreMembreH');
        $ac->NbreMembreEntreASPHF = $request->input('NbreMembreEntreASPHF');
        $ac->NbreMembreColPr = $request->input('NbreMembreColPr');
        $ac->NbreMembreColExplASPHF = $request->input('NbreMembreColExplASPHF');

        $ac->chambre_regionale()->associate(chambre_regionale::find($request->input('chambre_regionale_id')));

        $ac->save();
        return redirect('/assembleeConsulaire');
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
        $ac= assemblee_consulaire::find($id);
        $ac->delete();
        return redirect('/assembleeConsulaire');
    }
}
