<?php

namespace App\Http\Controllers\cra;

use App\Exports\craExport;
use App\Http\Controllers\Controller;
use App\Models\Communes;
use App\Models\chambre_regionale;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class craController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crexportcsv(){
        return Excel::download(new craExport, 'Chambres Regionales.csv');
    }
    public function crexportexcel(){
        return Excel::download(new craExport, 'Chambres Regionales.xlsx');
    }

    public function index(){
        //
        $cra = chambre_regionale::paginate(10);

        return view('cra.chambreRegionale', compact('cra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
        $communes=Communes::all();
        return view('cra.newcr', compact(['communes']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cr = new chambre_regionale();

        $cr->libelleCRA = $request->input('libelleCRA');
        $cr->telephone = $request->input('telephone');
        $cr->email = $request->input('email');
        $cr->boitepostal = $request->input('boitepostal');
        $cr->gpslongitude = $request->input('gpslongitude');
        $cr->gpslatitude = $request->input('gpslatitude');
        $cr->siteWeb = $request->input('siteWeb');
        $cr->commune()->associate(Communes::find($request->input('commune_id')));

        $cr->save();

        return redirect('/chambreRegionale');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $cr = chambre_regionale::find($id);
        return view('cra.detailcr', compact('cr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $communes=Communes::all();
        $cr = chambre_regionale::find($id);
        return view('cra.updatecr', compact(['cr', 'communes']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $cr = chambre_regionale::find($id);

        $cr->libelleCRA = $request->input('libelleCRA');
        $cr->telephone = $request->input('telephone');
        $cr->email = $request->input('email');
        $cr->boitepostal = $request->input('boitepostal');
        $cr->gpslongitude = $request->input('gpslongitude');
        $cr->gpslatitude = $request->input('gpslatitude');
        $cr->siteWeb = $request->input('siteWeb');
        $cr->commune()->associate(Communes::find($request->input('commune_id')));
        
        $cr->save();

        return redirect('/chambreRegionale');
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
        $cr= chambre_regionale::find($id);
        $cr->delete();
        return redirect('/chambreRegionale');
    }
}
