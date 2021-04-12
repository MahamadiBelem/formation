<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApprochePedagogique;
class ApprochePedagogiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $aproches=ApprochePedagogique::paginate(5);

        return view('formations.approchepedagogique',compact('aproches'));


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

        $aproche=new ApprochePedagogique();

        $aproche->approchePedagogique=$request->input('approchePedagogique');


        $aproche->save();

        return redirect('/approche-pedagogique');

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
    public function update(Request $request)
    {
        //

        $aproche=ApprochePedagogique::find($request->input('id'));

        $aproche->approchePedagogique=$request->input('approchePedagogique');

        $aproche->save();
        return redirect('/approche-pedagogique');
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

        $aproche=ApprochePedagogique::find($id);
        $aproche->delete();
        return redirect('/approche-pedagogique');

    }
}
