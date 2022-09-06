<?php

namespace App\Http\Controllers\cra;

use App\Exports\seExport;
use App\Http\Controllers\Controller;
use App\Models\secretariat_ex_cra;
use App\Models\chambre_regionale;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class seController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function seexportcsv()
    {
        return Excel::download(new seExport, 'CRA_SecretariatExecutif.csv');
    }
    public function seexportexcel()
    {
        return Excel::download(new seExport, 'CRA_SecretariatExecutif.xlsx');
    }

    public function index()
    {
        //
        $secra = secretariat_ex_cra::paginate(10);
        $cra = chambre_regionale::all();
        return view('cra.secretariatExecutif', compact('cra', 'secra'));

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
        $secr = new secretariat_ex_cra();

        $secr->NomPrenomSecretaireGeneral = $request->input('NomPrenomSecretaireGeneral');
        $secr->Contact = $request->input('Contact');
        $secr->DatePriseServiceSecretaireGeneral = $request->input('DatePriseServiceSecretaireGeneral');
        $secr->NbreSalaireH = $request->input('NbreSalaireH');
        $secr->NbreSalaireF = $request->input('NbreSalaireF');
        $secr->chambre_regionale()->associate(chambre_regionale::find($request->input('chambre_regionale_id')));

        $secr->save();

        return redirect('/secretariatExecutif');
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
        $secr = secretariat_ex_cra::find($id);

        $secr->NomPrenomSecretaireGeneral = $request->input('NomPrenomSecretaireGeneral');
        $secr->Contact = $request->input('Contact');
        $secr->DatePriseServiceSecretaireGeneral = $request->input('DatePriseServiceSecretaireGeneral');
        $secr->NbreSalaireH = $request->input('NbreSalaireH');
        $secr->NbreSalaireF = $request->input('NbreSalaireF');
        $secr->chambre_regionale()->associate(chambre_regionale::find($request->input('chambre_regionale_id')));

        $secr->save();

        return redirect('/secretariatExecutif');
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
        $secr = secretariat_ex_cra::find($id);
        $secr->delete();

        return redirect('/secretariatExecutif');
    }
}
