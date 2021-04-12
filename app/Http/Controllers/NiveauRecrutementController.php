<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NiveauRecrutement;
class NiveauRecrutementController extends Controller
{
    
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $niveaus=NiveauRecrutement::paginate(5);
    
        return view('formations.niveaurecrutement',compact('niveaus'));
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

        $niveau=new NiveauRecrutement();

        $niveau->libelleNiveauRecrutement=$request->input('libelleNiveauRecrutement');

        $niveau->save();

        return redirect('/niveau-recrutement');
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
    public function update(Request $request)
    {
        //

        $niveau=NiveauRecrutement::find($request->input('id'));

        $niveau->libelleNiveauRecrutement=$request->input('libelleNiveauRecrutement');
        $niveau->save();

        return redirect('/niveau-recrutement');
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

        $niveau=NiveauRecrutement::find($id);

        $niveau->delete();

        return redirect('/niveau-recrutement');

    }
}
