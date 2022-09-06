<?php

namespace App\Http\Controllers\cra;

use App\Exports\rstatExport;
use App\Http\Controllers\Controller;
use App\Models\rencontre_statuaire;
use App\Models\chambre_regionale;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class rstatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rstatexportcsv()
    {
        return Excel::download(new rstatExport, 'rencontreStatutaire.csv');
    }
    public function rstatexportexcel()
    {
        return Excel::download(new rstatExport, 'rencontreStatutaire.xlsx');
    }

    public function index()
    {
        //
        $rstats = rencontre_statuaire::paginate(10);
        $cra = chambre_regionale::all();
        return view('cra.rencontreStatutaire', compact('cra', 'rstats'));

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
        $rstat = new rencontre_statuaire();
        $rstat->NbreAsConsulairePrevAn = $request->input('NbreAsConsulairePrevAn');
        $rstat->NbreRencBurExecutif = $request->input('NbreRencBurExecutif');
        $rstat->NbreRencComOrganisation = $request->input('NbreRencComOrganisation');
        $rstat->NbreRencComFinan = $request->input('NbreRencComFinan');
        $rstat->NbreRencComFoncierDecen = $request->input('NbreRencComFoncierDecen');
        $rstat->NbreRencComPromoModerAgri = $request->input('NbreRencComPromoModerAgri');
        $rstat->chambre_regionale()->associate(chambre_regionale::find($request->input('chambre_regionale_id')));

        $rstat->save();

        return redirect('/rencontreStatutaire');
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
        $rstat = new rencontre_statuaire();
        $rstat->NbreAsConsulairePrevAn = $request->input('NbreAsConsulairePrevAn');
        $rstat->NbreRencBurExecutif = $request->input('NbreRencBurExecutif');
        $rstat->NbreRencComOrganisation = $request->input('NbreRencComOrganisation');
        $rstat->NbreRencComFinan = $request->input('NbreRencComFinan');
        $rstat->NbreRencComFoncierDecen = $request->input('NbreRencComFoncierDecen');
        $rstat->NbreRencComPromoModerAgri = $request->input('NbreRencComPromoModerAgri');
        $rstat->chambre_regionale()->associate(chambre_regionale::find($request->input('chambre_regionale_id')));

        $rstat->save();

        return redirect('/rencontreStatutaire');
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
        $rstat = rencontre_statuaire::find($id);
        $rstat->delete();

        return redirect('/rencontreStatutaire');
    }
}
