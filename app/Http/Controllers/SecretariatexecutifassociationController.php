<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Secretariatexecutifassociation;
use Illuminate\Http\Request;
use App\Exports\seaExport;
use Maatwebsite\Excel\Facades\Excel;


class SecretariatexecutifassociationController extends Controller
{

       public function seaexportcsv()
    {
        return Excel::download(new seaExport, 'Secretariatexecutifassociation.csv');
    }
    public function seaexportexcel()
    {
        return Excel::download(new seaExport, 'Secretariatexecutifassociation.xlsx');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        //

        $secretariatexecutifassociations = Secretariatexecutifassociation::paginate(10);
        $associations =  Association::all();
        return view('Associations.secretariatexecutifassociation', compact('associations', 'secretariatexecutifassociations'));
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
        $secretariatexecutifassociation = new Secretariatexecutifassociation();

        $secretariatexecutifassociation->annee = $request->input('annee');
        $secretariatexecutifassociation->nomPrenomSP = $request->input('nomPrenomSP');
        $secretariatexecutifassociation->contactSP = $request->input('contactSP');
        $secretariatexecutifassociation->nbreSalairePH = $request->input('nbreSalairePH');
        $secretariatexecutifassociation->nbreSalairePF = $request->input('nbreSalairePF');

        $secretariatexecutifassociation->association()->associate(Association::find($request->input('association_id')));

        $secretariatexecutifassociation->save();

        return redirect('/secretariatexecutifassociation');
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
        $secretariatexecutifassociation = Secretariatexecutifassociation::find($id);

        $secretariatexecutifassociation->annee = $request->input('annee');
        $secretariatexecutifassociation->nomPrenomSP = $request->input('nomPrenomSP');
        $secretariatexecutifassociation->contactSP = $request->input('contactSP');
        $secretariatexecutifassociation->nbreSalairePH = $request->input('nbreSalairePH');
        $secretariatexecutifassociation->nbreSalairePF = $request->input('nbreSalairePF');

        $secretariatexecutifassociation->association()->associate(Association::find($request->input('association_id')));

        $secretariatexecutifassociation->save();

        return redirect('/secretariatexecutifassociation');
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
        $secretariatexecutifassociation = Secretariatexecutifassociation::find($id);

        $secretariatexecutifassociation->delete();

        return redirect('/secretariatexecutifassociation');
    }
}
