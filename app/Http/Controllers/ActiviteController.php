<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;
use App\Exports\actExport;
use Maatwebsite\Excel\Facades\Excel;

class ActiviteController extends Controller
{

    public function actexportcsv()
    {
        return Excel::download(new actExport, 'Activite.csv');
    }
    public function actexportexcel()
    {
        return Excel::download(new actExport, 'Activite.xlsx');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $activites = Activite::paginate(10);
        return view('Associations.activite', compact('activites'));
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
        $activite= new Activite();

        $activite->Libelle = $request->input('Libelle');
        $activite->save();
        return redirect('/activite');
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
        $activite=Activite::find($id);
        $activite->Libelle = $request->input('Libelle');
        $activite->save();

        return  redirect('/activite');
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
        $activite=Activite::find($id);

        $activite->delete();
        return  redirect('/activite');
    }
}
