<?php

namespace App\Http\Controllers;

use App\Exports\SecretariatExecutifExport;
use Illuminate\Http\Request;
use App\Models\Cooperative;
use App\Models\SecretariatExecutif;
use Maatwebsite\Excel\Facades\Excel;

class SecretariatExecutifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportcsv()
    {
        return Excel::download(new SecretariatExecutifExport, 'secretariatexecutif.csv');
    }
    public function exportexcel()
    {
        return Excel::download(new SecretariatExecutifExport, 'secretariatexecutif.xlsx');
    }

    public function index()
    {
        //
        $secretariatexecutifs = SecretariatExecutif::paginate(10);
        $cooperatives = Cooperative::all();
        return view('cooperatives.secretariatexecutif', compact('cooperatives', 'secretariatexecutifs'));

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
        $secretariatexecutif = new SecretariatExecutif();

        $secretariatexecutif->DenominationSecretariatCooperative = $request->input('DenominationSecretariatCooperative');
        $secretariatexecutif->contactSecretariatCooperative = $request->input('contactSecretariatCooperative');
        $secretariatexecutif->nombreSalarieHomme = $request->input('nombreSalarieHomme');
        $secretariatexecutif->nombreSalarieFemme = $request->input('nombreSalarieFemme');
        $secretariatexecutif->dateDebutMandat = $request->input('dateDebutMandat');
        $secretariatexecutif->dateFinMandat = $request->input('dateFinMandat');

        $secretariatexecutif->cooperative()->associate(Cooperative::find($request->input('cooperative_id')));

        $secretariatexecutif->save();

        return redirect('/secretariatexecutif');
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
        $secretariatexecutif = SecretariatExecutif::find($id);

        $secretariatexecutif->DenominationSecretariatCooperative = $request->input('DenominationSecretariatCooperative');
        $secretariatexecutif->contactSecretariatCooperative = $request->input('contactSecretariatCooperative');
        $secretariatexecutif->nombreSalarieHomme = $request->input('nombreSalarieHomme');
        $secretariatexecutif->nombreSalarieFemme = $request->input('nombreSalarieFemme');
        $secretariatexecutif->dateDebutMandat = $request->input('dateDebutMandat');
        $secretariatexecutif->dateFinMandat = $request->input('dateFinMandat');

        $secretariatexecutif->cooperative()->associate(Cooperative::find($request->input('cooperative_id')));

        $secretariatexecutif->save();

        return redirect('/secretariatexecutif');
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
        $secretariatexecutif = SecretariatExecutif::find($id);

        $secretariatexecutif->delete();

        return redirect('/secretariatexecutif');
    }
}
