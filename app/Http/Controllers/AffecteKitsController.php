<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AffecterKits;
use App\Models\SourceFinancements;
use App\Models\Kits;
use App\Models\Apprenants;

class AffecterKitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $affectes=AffecterKits::paginate(10);
        
        return view('formations.affectekits',compact('affectekits'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $apprenants=Apprenants::all();
        $kits=Kits::all();
        $affectekits=SourceFinancements::all();

        return view('formations.newaffectes',compact(['apprenants','kits','source_financements']));


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

        /*$affecte=new AffecterApprenants();

        $affecte->annees=$request->input('annees');
        $affecte->dateInscription=$request->input('dateInscription');
        $affecte->apprenant()->associate($request->input('apprenant_id'));
        $affecte->formation()->associate($request->input('formation_id'));
        $affecte->centreformation()->associate($request->input('centre_id'));
       
        $affecte->save();

        return redirect('/inscription');*/

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
    /*public function edit($id)
    {
        //
        $affecte=AffecterApprenants::find($id);
        $apprenants=Apprenants::all();
        $centres=CentreFormation::all();
        $apprenants=Apprenants::all();
        $formations=Formations::all();

        return view('formations.updateaffectes',compact(['affecte','apprenants','centres','apprenants','formations']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {
        //

        $affecte= AffecterApprenants::find($id);

        $affecte->annees=$request->input('annees');
        $affecte->dateInscription=$request->input('dateInscription');
        $affecte->apprenant()->associate($request->input('apprenant_id'));
        $affecte->formation()->associate($request->input('formation_id'));
        $affecte->centreformation()->associate($request->input('centre_id'));
       
        $affecte->save();

        return redirect('/inscription');
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
        $affecte= AffecteKits::find($id);

        $affecte->delete();
        return redirect('/affectekits');


    }
}
