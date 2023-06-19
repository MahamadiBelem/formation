<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Maillon;
use App\Exports\maExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MaillonController extends Controller
{

    public function maexportcsv()
    {
        return Excel::download(new maExport, 'Maillon.csv');
    }
    public function maexportexcel()
    {
        return Excel::download(new maExport, 'Maillon.xlsx');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $maillons = Maillon::all();
        return view ('Associations.maillon', compact('maillons'));
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
        $maillon= new Maillon();

        $maillon->Libelle = $request->input('Libelle');
        $maillon->save();
        return redirect('/maillon');
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
        $maillon=Maillon::find($request->input('id'));
        $maillon->Libelle = $request->input('Libelle');
        $maillon->save();

        return  redirect('/maillon');
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
        $maillon=Maillon::find($id);

        $maillon->delete();
        return  redirect('/maillon');
    }
}
