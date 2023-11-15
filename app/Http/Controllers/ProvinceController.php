<?php

namespace App\Http\Controllers;
use App\Models\Provinces;
use App\Models\Regions;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    //

     public function index()
    {
       $provinces=Provinces::paginate(10);
        $regions=Regions::all();
       return view('formations.provinces',compact(['provinces','regions']));
    }

    
    public function store(Request $request)
    {
        $id=$request->input('libelleRegion');
        $region= Regions::find($id);

        $province=new Provinces();

        $province->libelleProvince=$request->input('libelleProvince');

        $province->region()->associate($region);

         $province->save();

         return redirect('/provinces');

    }

    public function update(Request $request,$id)
    {
        $province=Provinces::find($id);
        $region=Regions::find($request->input('libelleRegion'));
        $province->region()->associate($region);

        $province->save();
        return redirect('/provinces');
    }
    
    public function delete($id)
    {
        $province=Provinces::find($id);

        $province->delete();

        return redirect('/provinces');
    }
}
