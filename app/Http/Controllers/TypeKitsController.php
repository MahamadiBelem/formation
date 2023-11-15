<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeKit;

//** KITS is my affecté kits for now  **/ 

class TypeKitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $types=TypeKits::paginate(10);

        return view('formations.kits',compact('kits'));
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

        $type=new TypeKits();

        $type->libelleKits=$request->input('libelleKits');
        $type->quantites=$request->input('quantites');
        

        $type->save();

        return redirect('/type-kits');
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

        $type= TypeKits::find($id);

        $type->libelleKits=$request->input('libelleKits');
        $type->quantites=$request->input('quantites');

        $type->save();

        return redirect('/type-kits');
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

        $type= TypeKits::find($id);

        $kit->delete();

        return redirect('/type-kits');
    }
}
