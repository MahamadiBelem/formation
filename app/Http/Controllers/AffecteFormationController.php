<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AffecterFormation;
use App\Models\CentreFormation;
use App\Models\Formations;
class AffecteFormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $affectes=AffecterFormation::paginate(10);

        $centres=CentreFormation::all();

        $formations=Formations::all();

        return view('formations.affecteformation',compact(['affectes','centres','formations']));

       
        
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

        $affecte=new AffecterFormation();

        $affecte->dateDebut=$request->input('dateDebut');
        $affecte->dateCloture=$request->input('dateCloture');
        $affecte->centreformation()->associate($request->input('centre_id'));
        $affecte->formation()->associate($request->input('formation_id'));

        $affecte->save();

        return redirect('/affectation-formation');
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

        $affecte= AffecterFormation::find($id);

        $affecte->dateDebut=$request->input('dateDebut');
        $affecte->dateCloture=$request->input('dateCloture');
        $affecte->centreformation()->associate($request->input('formation_id'));
        $affecte->formation()->associate($request->input('formation_id'));

        $affecte->save();

        return redirect('/affectation-formation');
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

        $affecte= AffecterFormation::find($id);

        $affecte->delete();

        return redirect('/affectation-formation');

    }
}
