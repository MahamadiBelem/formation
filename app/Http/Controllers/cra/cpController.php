<?php

namespace App\Http\Controllers\cra;

use App\Exports\cpExport;
use App\Http\Controllers\Controller;
use App\Models\commission_permanante;
use App\Models\chambre_regionale;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class cpController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cpexportcsv()
    {
        return Excel::download(new cpExport, 'CommissionsPermanantes.csv');
    }
    public function cpexportexcel()
    {
        return Excel::download(new cpExport, 'CommissionsPermanantes.xlsx');
    }

    public function index()
    {
        //
        $cps = commission_permanante::paginate(10);
        $cra = chambre_regionale::all();
        return view('cra.commissionPermanante', compact('cra', 'cps'));

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
     * @param  \Illuminate\Http\Requ.est  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cp = new commission_permanante();
        $cp->NbreMembreComOrganisation = $request->input('NbreMembreComOrganisation');
        $cp->NbreComOrganisation = $request->input('NbreComOrganisation');
        $cp->NbreMembreComFinantH = $request->input('NbreMembreComFinantH');
        $cp->NbreMembreComFinantF = $request->input('NbreMembreComFinantF');
        $cp->NbreMembreComFoncierDecenH = $request->input('NbreMembreComFoncierDecenH');
        $cp->NbreMembreComFoncierDecenF = $request->input('NbreMembreComFoncierDecenF');
        $cp->NbreMembreComPromoModerAgriH = $request->input('NbreMembreComPromoModerAgriH');
        $cp->NbreMembreComPromoModerAgriF = $request->input('NbreMembreComPromoModerAgriF');

        $cp->chambre_regionale()->associate(chambre_regionale::find($request->input('chambre_regionale_id')));

        $cp->save();

        return redirect('/commissionPermanante');
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
        $cp = commission_permanante::find($id);
        $cp->NbreMembreComOrganisation = $request->input('NbreMembreComOrganisation');
        $cp->NbreComOrganisation = $request->input('NbreComOrganisation');
        $cp->NbreMembreComFinantH = $request->input('NbreMembreComFinantH');
        $cp->NbreMembreComFinantF = $request->input('NbreMembreComFinantF');
        $cp->NbreMembreComFoncierDecenH = $request->input('NbreMembreComFoncierDecenH');
        $cp->NbreMembreComFoncierDecenF = $request->input('NbreMembreComFoncierDecenF');
        $cp->NbreMembreComPromoModerAgriH = $request->input('NbreMembreComPromoModerAgriH');
        $cp->NbreMembreComPromoModerAgriF = $request->input('NbreMembreComPromoModerAgriF');

        $cp->chambre_regionale()->associate(chambre_regionale::find($request->input('chambre_regionale_id')));

        $cp->save();

        return redirect('/commissionPermanante');
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
        $cp = commission_permanante::find($id);
        $cp->delete();

        return redirect('/commissionPermanante');
    }
}
