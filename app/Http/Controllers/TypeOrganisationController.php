<?php

namespace App\Http\Controllers;

use App\Models\TypeOrganisation;
use Illuminate\Http\Request;

class TypeOrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $typeorganisations=TypeOrganisation::paginate(5);

        return view('cooperatives.typeorganisation', compact('typeorganisations'));
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
        $typeorganisation = new TypeOrganisation();

        $typeorganisation->libelletypeorganisation= $request->input('libelletypeorganisation');
        $typeorganisation->save();
        return redirect('/typeorganisation');
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
        $typeorganisation = TypeOrganisation::find($request->input('id'));
        $typeorganisation->libelletypeorganisation= $request->input('libelletypeorganisation');
        $typeorganisation->save();

        return  redirect('/typeorganisation');
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
        $typeorganisation = TypeOrganisation::find($id);

        $typeorganisation->delete();
        return  redirect('/typeorganisation');
    }
}
