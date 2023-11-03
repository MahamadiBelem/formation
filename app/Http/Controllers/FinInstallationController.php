<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AffecterApprenants;
use App\Models\FinFormations;
class FinInstallationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $fins=FinFormations::paginate(10);

        return view('formations.finformation',compact('fins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $affectes=AffecterApprenants::all();

        return view('formations.newfininstallation',compact('affectes'));
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

        $fin=new FinFormations();
        $fin->dateFinFormation=$request->input('dateFinFormation');
        $fin->dateInscription=$request->input('dateInscription');
        $fin->anneesFinFormation=$request->input('anneesFinFormation');
        $fin->motif=$request->input('motif');
        if($request->input('confirmedSortie')==null)
        {
            $fin->confirmedSortie=0;
        }else
        {
            $fin->confirmedSortie=1;
        }
        

        $fin->affecterapprenants()->associate($request->input('inscription'));

        $fin->save();
        return redirect('/fin-formation');
        
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

        $fin=FinFormations::find($id);

        $fin->delete();

        return redirect('/fin-formation');
    }
}
