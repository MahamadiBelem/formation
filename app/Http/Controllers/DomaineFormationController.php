<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DomaineFormation;
class DomaineFormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $domaines=DomaineFormation::paginate(5);

        return view('formations.domaineformation',compact('domaines'));
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

        $domaine=new DomaineFormation() ;
        $domaine->libelleDomaineFormation=$request->input('libelleDomaineFormation');
        $domaine->save();

        return redirect('/domaine-formation');
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

        $domaine=DomaineFormation::find($request->input('id'));
        $domaine->libelleDomaineFormation=$request->input('libelleDomaineFormation');
        $domaine->save();

        return redirect('/domaine-formation');
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

        $domaine=DomaineFormation::find($id);

        $domaine->delete();
        return redirect('/domaine-formation');

    }
}
