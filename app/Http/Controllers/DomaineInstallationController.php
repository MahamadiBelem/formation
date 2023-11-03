<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kits;
use App\Models\DomainesInstallation;

class DomaineInstallationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $domaines=DomainesInstallation::paginate(10);
        $kits=Kits::all();

        return view('formations.domaineinstallation',compact(['domaines','kits']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $kits=Kits::all();

        return view('formations.newdomaineinstallation',compact(['kits']));
        
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

        $domaine=new DomainesInstallation();

        $domaine->libelleDomaine=$request->input('libelleDomaine');

        $domaine->save();
        $domaine->kits()->attach($request->input('kits'));

        return redirect('/domaine-installation');

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

        $domaine= DomainesInstallation::find($id);
        $kits=Kits::all();

        return view('formations.updatedomaineinstallation',compact(['domaine','kits']));
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

        $domaine= DomainesInstallation::find($id);

        $domaine->libelleDomaine=$request->input('libelleDomaine');

        $domaine->save();
        $domaine->kits()->sync($request->input('kits'));
        return redirect('/domaine-installation');
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

        $domaine= DomainesInstallation::find($id);
        $domaine->delete();
        return redirect('/domaine-installation');
    }
}
