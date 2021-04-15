<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promoteur;
class PromoteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $promoteurs=Promoteur::paginate(10);

        return view('formations.promoteurs',compact('promoteurs'));
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

        $promoteur=new Promoteur();

        $promoteur->promoteur=$request->input('promoteur');
        $promoteur->contact=$request->input('contact');
        $promoteur->save();
        return redirect('/promoteurs');
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
    public function update(Request $request,$id)
    {
        //

        $promoteur= Promoteur::find($request->input('id'));

        $promoteur->promoteur=$request->input('promoteur');
        $promoteur->contact=$request->input('contact');
        $promoteur->save();
        return redirect('/promoteurs');
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

        $promoteur= Promoteur::find($id);

        $promoteur->delete();
        return redirect('/promoteurs');

    }
}
