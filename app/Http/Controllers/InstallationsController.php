<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Installations;
use App\Models\AffecterApprenants;
use App\Models\DomainesInstallation;
use App\Models\SourceFinancements;
use App\Models\Regions;
use App\Models\Provinces;
use App\Models\Communes;
use App\Models\Villages;
use App\Models\CentreFormation;
class InstallationsController extends Controller 
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
        //la mise a jour
        $centres=CentreFormation::all();
        $regions=Regions::all();
        $provinces=Provinces::all();
        $communes=Communes::all();
        $villages=Villages::all();


        return view('formations.installation.installation',compact('installations','affectes','sources','domaines', 'regions','provinces','communes','villages','centres'));


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
         //la mise a jour
         $regions=Regions::all();
         $provinces=Provinces::all();
         $communes=Communes::all();
         $villages=Villages::all();
         $centres=CentreFormation::all();
        return view('formations.installation.addinstallation',compact('installations','affectes','sources','domaines','regions','provinces','communes','villages','centres'));

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

        $installation->region()->associate($request->input('libelleRegion'));
        $installation->provinces()->associate($request->input('libelleProvince'));
        $installation->communes()->associate($request->input('libelleCommune'));
        $installation->villages()->associate($request->input('libelleVillages'));
        $installation->centreformation()->associate($request->input('denomination'));

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


        $installation= Installations::find($id);


        $installation->annees=$request->input('annees');
        $installation->lieuInstallation=$request->input('lieuInstallation');
        $installation->dateInstallation=$request->input('dateFinFormation');
        $installation->confirmedKits=$request->input('confirmedKits');
        $installation->affecterapprenants()->associate($request->input('inscription'));
        $installation->domainesinstallation()->associate($request->input('domaine_installation'));
        $installation->sourcefinancements()->associate($request->input('source_financement_id'));

        $installation->region()->associate($request->input('libelleRegion'));
        $installation->provinces()->associate($request->input('libelleProvince'));
        $installation->communes()->associate($request->input('libelleCommune'));
        $installation->villages()->associate($request->input('libelleVillages'));
        $installation->centreformation()->associate($request->input('denomination'));

        $installation->save();

        return redirect('/installation.installation');
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
