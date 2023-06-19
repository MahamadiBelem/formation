<?php

namespace App\Http\Controllers\cra;

use App\Exports\beExport;
use App\Http\Controllers\Controller;
use App\Models\bureau_executif;
use App\Models\chambre_regionale;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class beController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function beexportcsv()
    {
        return Excel::download(new beExport, 'BureauExecutif.csv');
    }
    public function beexportexcel()
    {
        return Excel::download(new beExport, 'BureauExecutif.xlsx');
    }

    public function index()
    {
        //
        $bes = bureau_executif::paginate(10);
        $cra = chambre_regionale::all();
        return view('cra.bureauExecutif', compact('cra', 'bes'));

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
        $be = new bureau_executif();

        $be->NomPrenomPresident = $request->input('NomPrenomPresident');
        $be->Contact = $request->input('Contact');
        $be->NbreMembreAssembleConsulaireH = $request->input('NbreMembreAssembleConsulaireH');
        $be->NbreMembreAssembleConsulaireF = $request->input('NbreMembreAssembleConsulaireF');
        $be->DureeMandat = $request->input('DureeMandat');
        $be->DateDebutMandat = $request->input('DateDebutMandat');

        $be->chambre_regionale()->associate(chambre_regionale::find($request->input('chambre_regionale_id')));

        $be->save();

        return redirect('/bureauExecutif');
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
        $be = bureau_executif::find($id);

        $be->NomPrenomPresident = $request->input('NomPrenomPresident');
        $be->Contact = $request->input('Contact');
        $be->NbreMembreAssembleConsulaireH = $request->input('NbreMembreAssembleConsulaireH');
        $be->NbreMembreAssembleConsulaireF = $request->input('NbreMembreAssembleConsulaireF');
        $be->DureeMandat = $request->input('DureeMandat');
        $be->DateDebutMandat = $request->input('DateDebutMandat');

        $be->chambre_regionale()->associate(chambre_regionale::find($request->input('chambre_regionale_id')));

        $be->save();

        return redirect('/bureauExecutif');
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
        $be = bureau_executif::find($id);

        $be->delete();

        return redirect('/bureauExecutif');
    }
}
