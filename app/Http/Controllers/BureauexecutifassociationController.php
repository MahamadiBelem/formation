<?php

namespace App\Http\Controllers;

use App\Exports\beaExport;
use App\Http\Controllers\Controller;
use App\Models\Bureauexecutifassociation;
use App\Models\Association;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BureauexecutifassociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function beaexportcsv()
    {
        return Excel::download(new beaExport, 'Bureauexecutifassociation.csv');
    }

    public function beaexportexcel()
    {
        return Excel::download(new beaExport, 'Bureauexecutifassociation.xlsx');
    }

    public function index()
    {
        //
        $bureauexecutifassociations = Bureauexecutifassociation::paginate(100);
        $associations =  Association::all();

        return view('Associations.bureauexecutifassociation', compact('associations', 'bureauexecutifassociations'));
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
        $bureauexecutifassociation = new Bureauexecutifassociation();
        $bureauexecutifassociation->nbreMembreH = $request->input('nbreMembreH');
        $bureauexecutifassociation->nbreMembreM = $request->input('nbreMembreM');
        $bureauexecutifassociation->debutMandat = $request->input('debutMandat');
        $bureauexecutifassociation->finMandat = $request->input('finMandat');
        $bureauexecutifassociation->nomPrenomPresident = $request->input('nomPrenomPresident');
        $bureauexecutifassociation->contactPresident = $request->input('contactPresident');
        $bureauexecutifassociation->sexePresident = $request->input('sexePresident');

        $bureauexecutifassociation->association()->associate(Association::find($request->input('association_id')));
        $bureauexecutifassociation->save();

        return redirect('/bureauexecutifassociation');
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
        $bureauexecutifassociation = new Bureauexecutifassociation();
        $bureauexecutifassociation = Bureauexecutifassociation::find($id);
        $bureauexecutifassociation->nbreMembreH = $request->input('nbreMembreH');
        $bureauexecutifassociation->nbreMembreM = $request->input('nbreMembreM');
        $bureauexecutifassociation->debutMandat = $request->input('debutMandat');
        $bureauexecutifassociation->finMandat = $request->input('finMandat');
        $bureauexecutifassociation->nomPrenomPresident = $request->input('nomPrenomPresident');
        $bureauexecutifassociation->contactPresident = $request->input('contactPresident');
        $bureauexecutifassociation->sexePresident = $request->input('sexePresident');

        $bureauexecutifassociation->association()->associate(Association::find($request->input('association_id')));
        $bureauexecutifassociation->save();

        return redirect('/bureauexecutifassociation');
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
        $bureauexecutifassociation = Bureauexecutifassociation::find($id);

        $bureauexecutifassociation->delete();


        return redirect('/bureauexecutifassociation');
    }
}
