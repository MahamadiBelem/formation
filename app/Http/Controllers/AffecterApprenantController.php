<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AffecterApprenants;
use App\Models\Formations;
use App\Models\CentreFormation;
use App\Models\Apprenants;
class AffecterApprenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $affectes=AffecterApprenants::paginate(10);
        
        return view('formations.affectes',compact('affectes'));

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
        $centres=CentreFormation::all();
        $apprenants=Apprenants::all();
        $formations=Formations::all();

        return view('formations.newaffectes',compact(['apprenants','centres','apprenants','formations']));


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

        $affecte=new AffecterApprenants();

        $affecte->annees=$request->input('annees');
        $affecte->dateInscription=$request->input('dateInscription');
        $affecte->apprenant()->associate($request->input('apprenant_id'));
        $affecte->formation()->associate($request->input('formation_id'));
        $affecte->centreformation()->associate($request->input('centre_id'));
       
        $affecte->save();

        return redirect('/inscription');

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
    public function update(Request $request, $id)
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
        $affecte= AffecterApprenants::find($id);

        $affecte->delete();
        return redirect('/inscription');


    }
}
