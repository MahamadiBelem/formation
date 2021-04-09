<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicCible;

class PublicCibleController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $publics=PublicCible::paginate(5);
    
        return view('formations.publiccible',compact('publics'));
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

        $public=new PublicCible();

        $public->libellePublicCible=$request->input('libellePublicCible');

        $public->save();

        return redirect('/public-cible');
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

        $public=PublicCible::find($request->input('id'));

        $public->libellePublicCible=$request->input('libellePublicCible');
        $public->save();

        return redirect('/public-cible');
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

        $public=PublicCible::find($id);

        $public->delete();

        return redirect('/public-cible');

    }
}
