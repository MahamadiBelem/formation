<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Installations;
use App\Models\AffecterApprenants;
use App\Models\DomainesInstallation;
use App\Models\SourceFinancements;
class IntallationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $installations =Installations::paginate(10);
        $affectes=AffecterApprenants::all();
        $sources=SourceFinancements::all();
        $domaines=DomainesInstallation::all();


        return view('formations.installations',compact('installations','affectes','sources'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $installations =Installations::paginate(10);
        $affectes=AffecterApprenants::all();
        $sources=SourceFinancements::all(); 
        $domaines=DomainesInstallation::all();
        return view('formations.newinstallation',compact('installations','affectes','sources','domaines'));

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

        $installation =new Installations();


        $installation->annees=$request->input('annees');
        $installation->lieuInstallation=$request->input('lieuInstallation');
        $installation->dateInstallation=$request->input('dateFinFormation');
        $installation->confirmedKits=$request->input('confirmedKits');
        $installation->affecterapprenants()->associate($request->input('inscription'));
        $installation->domainesinstallation()->associate($request->input('domaine_installation'));
        $installation->sourcefinancements()->associate($request->input('source_financement_id'));
        $installation->save();
        return redirect('/installation');

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

        $installation=Installations::find($id);

        $installation->delete();

        return redirect('/installation');
    }
}
