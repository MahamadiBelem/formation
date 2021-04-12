<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NiveauInstructions;
class NiveauInstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $niveaus=NiveauInstructions::paginate(5);
        return view('formations.niveauinstructions',compact('niveaus'));
        
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

        $niveaus=new  NiveauInstructions();

        $niveaus->libelleNiveauInstruction=$request->input('libelleNiveauInstruction');
        $niveaus->save();
        return redirect('/niveau-instructions');
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

        $niveaus=  NiveauInstructions::find($request->input('id'));

        $niveaus->libelleNiveauInstruction=$request->input('libelleNiveauInstruction');
        $niveaus->save();
        return redirect('/niveau-instructions');
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
        $niveaus=  NiveauInstructions::find($id);
       
        $niveaus->delete();
        return redirect('/niveau-instructions');



    }
}
