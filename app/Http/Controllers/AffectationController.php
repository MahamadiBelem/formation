<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use Illuminate\Http\Request;
use App\Models\Apprenants;
use App\Models\Kits;
use App\Models\SourceFinancements;


class AffectationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     * Je retourne ma page index de vue situé dans formation
     * 
     */
    public function index()
    {
        $affectes=Affectation::paginate(10);

        $apprenants=Apprenants::all();
        $kits=Kits::all();
        $sourcefinancements=SourceFinancements::all();
        
        return view('formations.affectation',compact(['affectes','apprenants','kits','sourcefinancements']));

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
        $affecte =new Affectation();


        /*Les fonctions depuis le modele via les pointeurs que je fait le mapping*/

        $affecte->apprenant()->associate($request->input('apprenant_id'));
        $affecte->kit()->associate($request->input('kit_id'));
        $affecte->sourcefinancement()->associate($request->input('source_financement_id'));

        $affecte->save();

        return redirect('/affectation-kit');
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


        $affecte= Affectation::find($id);


        $affecte->apprenant()->associate($request->input('apprenant_id'));
        $affecte->kit()->associate($request->input('kit_id'));
        $affecte->sourcefinancement()->associate($request->input('source_financement_id'));

        $affecte->save();

        return redirect('/affectation-kit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $affecte= Affectation::find($id);

        $affecte->delete();
        return redirect('/affectation-kit');
    }
}
