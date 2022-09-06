<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cooperative;
use App\Models\FonctionementOrganeCooperative;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FonctionementOrganeCooperativeExport;


class FonctionementOrganeCooperativeController extends Controller
{
    public function exportcsv()
    {
        return Excel::download(new FonctionementOrganeCooperativeExport, 'FonctionementOrganeCooperative.csv');
    }
    public function exportexcel()
    {
        return Excel::download(new FonctionementOrganeCooperativeExport, 'FonctionementOrganeCooperative.xlsx');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foncorgcoops = FonctionementOrganeCooperative::paginate(10);
        $cooperatives = Cooperative::all();
        return view('cooperatives.fonctionementorganecooperative', compact('cooperatives', 'foncorgcoops'));
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
        $foncorgcoop= new FonctionementOrganeCooperative();

        $foncorgcoop->nombreAgOrdinaire=$request->input('nombreAgOrdinaire');
        $foncorgcoop->nombreRencontreOrganeGestion=$request->input('nombreRencontreOrganeGestion');
        $foncorgcoop->nombreRencontreSurveillance=$request->input('nombreRencontreSurveillance');
        $foncorgcoop->semestre=$request->input('semestre');
        $foncorgcoop->annee=$request->input('annee');
        $foncorgcoop->cooperative()->associate(Cooperative::find($request->input('cooperative_id')));

        $foncorgcoop->save();

        return redirect('/fonctionementorganecooperative');
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
        $foncorgcoop=FonctionementOrganeCooperative::find($id);

        $foncorgcoop->nombreAgOrdinaire=$request->input('nombreAgOrdinaire');
        $foncorgcoop->nombreRencontreOrganeGestion=$request->input('nombreRencontreOrganeGestion');
        $foncorgcoop->nombreRencontreSurveillance=$request->input('nombreRencontreSurveillance');
        $foncorgcoop->semestre=$request->input('semestre');
        $foncorgcoop->annee=$request->input('annee');
        $foncorgcoop->cooperative()->associate(Cooperative::find($request->input('cooperative_id')));

        $foncorgcoop->save();

        return redirect('/fonctionementorganecooperative');
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
        $foncorgcoop= FonctionementOrganeCooperative::find($id);

        $foncorgcoop->delete();

        return redirect('/fonctionementorganecooperative');
    }
}
