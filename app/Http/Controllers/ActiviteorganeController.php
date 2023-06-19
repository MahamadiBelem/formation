<?php

namespace App\Http\Controllers;
use App\Models\Activiteorgane;
use App\Models\Filiere;
use App\Models\Maillon;
use Illuminate\Http\Request;
use App\Exports\aoExport;
use Maatwebsite\Excel\Facades\Excel;

class ActiviteorganeController extends Controller
{

    public function aoexportcsv()
    {
        return Excel::download(new aoExport, 'Activiteorgane.csv');
    }
    public function aoexportexcel()
    {
        return Excel::download(new aoExport, 'Activiteorgane.xlsx');
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
        $maillons = Maillon::all();
        $activiteorganes = Activiteorgane::paginate(100);

        return view ('Associations.activiteorgane', compact('activiteorganes', 'filieres', 'maillons'));
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
        $activiteorgane= new Activiteorgane();

        $activiteorgane->activitePrincipale = $request->input('activitePrincipale');

        $activiteorgane->filiere()->associate(Filiere::find($request->input('filiere_id')));
        $activiteorgane->maillon()->associate(Maillon::find($request->input('maillon_id')));

        $activiteorgane->save();
        
        return redirect('/activiteorgane');
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
        $activiteorgane= Activiteorgane::find($request->input('id'));

        $activiteorgane->activitePrincipale = $request->input('activitePrincipale');

        $activiteorgane->filiere()->associate(Filiere::find($request->input('filiere_id')));
        $activiteorgane->maillon()->associate(Maillon::find($request->input('maillon_id')));

        $activiteorgane->save();
        return redirect('/activiteorgane');
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
        $activiteorgane=Activiteorgane::find($id);
        $activiteorgane->delete();
        
        return  redirect('/activiteorgane');
    }
}
