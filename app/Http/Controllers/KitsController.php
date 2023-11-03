<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kits;

//** KITS is my affecté kits for now  **/ 

class KitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $kits=Kits::paginate(10);

        return view('formations.kits',compact('kits'));
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

        $kit=new Kits();

        $kit->libelleKits=$request->input('libelleKits');
        $kit->quantites=$request->input('quantites');
        

        $kit->save();

        return redirect('/kits');
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

        $kit= Kits::find($id);

        $kit->libelleKits=$request->input('libelleKits');
        $kit->quantites=$request->input('quantites');

        $kit->save();

        return redirect('/kits');
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

        $kit= Kits::find($id);

        $kit->delete();

        return redirect('/kits');
    }
}
