<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialites;
class SpecialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $specialites=Specialites::paginate(5);

        return view('formations.specialite',compact('specialites'));

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

        $specialite= new Specialites();
        $specialite->libelleSpecialite=$request->input('libelleSpecialite');
        $specialite->save();
        return redirect('/specialites');


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

        $specialite=Specialites::find($request->input('id'));
        $specialite->libelleSpecialite=$request->input('libelleSpecialite');

        $specialite->save();

        return redirect('/specialites');

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

        $specialite=Specialites::find($id);

        $specialite->delete();

        return redirect('/specialites');

    }
}
