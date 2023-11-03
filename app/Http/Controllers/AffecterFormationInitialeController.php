<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AffecterFormationInitiale;
use App\Models\CentreFormation;
use App\Models\TypeFormation;

class AffecterFormationInitialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $affectes=AffecterFormationInitiale::paginate(10);

        $centres=CentreFormation::all();

        $types=TypeFormation::all();

        return view('formations.affecteformationinitiale',compact(['affectes','centres','types']));

       
        
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

        $affecte=new AffecterFormationInitiale();

        $affecte->dateDebut=$request->input('dateDebut');
        $affecte->dateCloture=$request->input('dateCloture');
        $affecte->duree=$request->input('duree');
        $affecte->centreformation()->associate($request->input('centre_id'));
        $affecte->typeformation()->associate($request->input('type_formation_id'));

        $affecte->save();

        return redirect('/affectation-formationinitiale');
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

        $affecte= AffecterFormationInitiale::find($id);

        $affecte->dateDebut=$request->input('dateDebut');
        $affecte->dateCloture=$request->input('dateCloture');
        $affecte->duree=$request->input('duree');
        $affecte->centreformation()->associate($request->input('formation_id'));
        $affecte->typeformation()->associate($request->input('type_formation_id'));

        $affecte->save();

        return redirect('/affectation-formationinitiale');
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

        $affecte= AffecterFormationInitiale::find($id);

        $affecte->delete();

        return redirect('/affectation-formationinitiale');

    }
}
