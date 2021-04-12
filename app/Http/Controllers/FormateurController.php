<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formateurs;
class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $formateurs=Formateurs::paginate(10);

        return view('formations.formateurs',compact('formateurs'));

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

        $formateur=new Formateurs();

        $formateur->nomComplet=$request->input('nomComplet');
        $formateur->emploi=$request->input('emploi');
        $formateur->contact=$request->input('contact');

        $formateur->save();

        return redirect('/formateurs');
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
        $formateur= Formateurs::find($id);

        $formateur->nomComplet=$request->input('nomComplet');
        $formateur->emploi=$request->input('emploi');
        $formateur->contact=$request->input('contact');

        $formateur->save();

        return redirect('/formateurs');
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

        $formateur= Formateurs::find($id);
        $formateur->delete();
        return redirect('/formateurs');

    }
}
