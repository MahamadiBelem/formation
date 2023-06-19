<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Exports\fExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FiliereController extends Controller
{
    public function fexportcsv()
    {
        return Excel::download(new fExport, 'Filiere.csv');
    }
    public function fexportexcel()
    {
        return Excel::download(new fExport, 'Filiere.xlsx');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $filieres = Filiere::all();
        return view ('Associations.filiere', compact('filieres'));
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
        $filiere= new Filiere();

        $filiere->LibelleFiliere = $request->input('LibelleFiliere');
        $filiere->save();
        return redirect('/filiere');
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
        $filiere=Filiere::find($request->input('id'));
        $filiere->LibelleFiliere = $request->input('LibelleFiliere');
        $filiere->save();

        return  redirect('/filiere');
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
        $filiere=Filiere::find($id);

        $filiere->delete();
        return  redirect('/filiere');
    }
}
