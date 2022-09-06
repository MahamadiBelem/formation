<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class chartcarte extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //

        $data = DB::table('cooperatives')
        ->select(
            DB::raw('coordonnegpslong as long'),
            DB::raw('coordonnegpslat as lat'),
            DB::raw('denomination as name'),
        )
            ->groupBy('lat','long','name')
            ->get();



        $array="";

        foreach ($data as $value) {

            $array.="[".$value->lat.", ".$value->long.", '".$value->name."'],";
        }
        $arr['array']=rtrim($array,",");
        return view('acceuilcooperative',$arr);
  /*
        $test = "['Lat','Long','Name']";

        $test .= ",[13.113586344333864, -1.612793002277613, 'Work']";
        $test .= ",[11.804850609978578, -0.41528323665261274, 'Work']";





        $test .= ",[13.113586344333864, -1.612793002277613, 'Work']";

        $ligne = ",[";
        $lat = "000000";
        $long = "00000";
        $nom = "test";
        $ligne .= $lat;
        $ligne .= ", ";
        $ligne .= $long;
        $ligne .= ", '";
        $ligne .= $nom;
        $ligne .= "']";*/
/*
        foreach ($data as  $data) {
        $lignes = ",[".$lat.", ".$long.", '".$nom."'],";
        $test.=$lignes;
        }*/


      //  return view('chartcarte');->with('lat',json_encode($array));;


    }

}
