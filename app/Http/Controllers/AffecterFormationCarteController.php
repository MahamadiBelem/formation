<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AffecterFormationCarte;
use App\Models\CentreFormation;
use App\Models\Formations;

class AffecterFormationCarteController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $affectes=AffecterFormationCarte::paginate(10);

        $centres=CentreFormation::all();

        return view('formations.affecteformationcarte',compact(['affectes','centres']));

       
        
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

        $affecte=new AffecterFormationCarte();

        $affecte->dateDebut=$request->input('dateDebut');
        $affecte->dateCloture=$request->input('dateCloture');
        $affecte->duree=$request->input('duree');
        $affecte->theme=$request->input('theme');
        $affecte->centreformation()->associate($request->input('centre_id'));

        $affecte->save();

        return redirect('/affectation-formationcarte');
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

        $affecte= AffecterFormationCarte::find($id);

        $affecte->dateDebut=$request->input('dateDebut');
        $affecte->dateCloture=$request->input('dateCloture');
        $affecte->duree=$request->input('duree');
        $affecte->theme=$request->input('theme');
        $affecte->centreformation()->associate($request->input('centre_id'));

        $affecte->save();

        return redirect('/affectation-formationcarte');
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

        $affecte= AffecterFormationCarte::find($id);

        $affecte->delete();

        return redirect('/affectation-formationcarte');

    }
}
