<?php

namespace App\Http\Controllers;
use App\Models\Commissariataucompteassociation;
use App\Models\Association;
use Illuminate\Http\Request;
use App\Exports\cacExport;
use Maatwebsite\Excel\Facades\Excel;

class CommissariataucompteassociationController extends Controller
{

    public function cacexportcsv()
    {
        return Excel::download(new cacExport, 'Commissariataucompteassociation.csv');
    }
    public function cacexportexcel()
    {
        return Excel::download(new cacExport, 'Commissariataucompteassociation.xlsx');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $commissariataucompteassociations = Commissariataucompteassociation::paginate(10);
        $associations = Association::all();
        return view('Associations.commissariataucompteassociation', compact('associations','commissariataucompteassociations' ));

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
        $commissariataucompteassociation=new Commissariataucompteassociation();
        $commissariataucompteassociation->nbreMembreH = $request->input('nbreMembreH');
        $commissariataucompteassociation->nbreMembreM = $request->input('nbreMembreM');
        $commissariataucompteassociation->debutMandat = $request->input('debutMandat');
        $commissariataucompteassociation->finMandat = $request->input('finMandat');
        $commissariataucompteassociation->nbreMandatConsecuti = $request->input('nbreMandatConsecuti');
        $commissariataucompteassociation->nomPrenomRapporteur = $request->input('nomPrenomRapporteur');
        $commissariataucompteassociation->contactRapporteur = $request->input('contactRapporteur');
        $commissariataucompteassociation->sexeRapporteur = $request->input('sexeRapporteur');

        $commissariataucompteassociation->association()->associate(Association::find($request->input('association_id')));
        $commissariataucompteassociation->save();

        return redirect('/commissariataucompteassociation');
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
        $commissariataucompteassociation= Commissariataucompteassociation::find($id);

        $commissariataucompteassociation->nbreMembreH = $request->input('nbreMembreH');
        $commissariataucompteassociation->nbreMembreM = $request->input('nbreMembreM');
        $commissariataucompteassociation->debutMandat = $request->input('debutMandat');
        $commissariataucompteassociation->finMandat = $request->input('finMandat');
        $commissariataucompteassociation->nbreMandatConsecuti = $request->input('nbreMandatConsecuti');
        $commissariataucompteassociation->nomPrenomRapporteur = $request->input('nomPrenomRapporteur');
        $commissariataucompteassociation->contactRapporteur = $request->input('contactRapporteur');
        $commissariataucompteassociation->sexeRapporteur = $request->input('sexeRapporteur');


        $commissariataucompteassociation->association()->associate(Association::find($request->input('association_id')));

        $commissariataucompteassociation->save();

        return redirect('/commissariataucompteassociation');
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
        $commissariataucompteassociation= Commissariataucompteassociation::find($id);

        $commissariataucompteassociation->delete();


        return redirect('/commissariataucompteassociation');
    }
}
