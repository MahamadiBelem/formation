<?php

namespace App\Http\Controllers;
use App\Models\Module;
use Illuminate\Http\Request;
use App\Models\TypeFormation; 
use App\Models\TypeFormations;



class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $modules=Module::paginate(10);
        $typeformations=TypeFormation::all();
        // ajout de kit au cas ou necessaire

        return view('formations.module',compact(['modules','typeformations']));

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

    $module=new Module();
    
    $module->libelleModule=$request->input('libelleModule');
    $module->typeformation()->associate(TypeFormation::find($request->input('type_formation_id')));
    $module->save();

    return redirect('/module');

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
        $module= Module::find($id);
        
        $module->libelleModule=$request->input('libelleModule');
        $module->typeformation()->associate(TypeFormation::find($request->input('type_formation_id')));
        $module->save();
        return redirect('/module');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module= Module::find($id);
        $module->delete();
        return redirect('/module');
    }
}
