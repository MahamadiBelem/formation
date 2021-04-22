<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formateurs;
use Illuminate\Support\Facades\DB;
class FormationHomeController extends Controller
{
    //


   public function index()
   {
       $formateurs=Formateurs::select('emploi', DB::raw('count(*)'))
       ->groupBy('emploi')
       ->get();

       $data=[];

       foreach($formateurs as $row) {
        $data['label'][] = $row->emploi;
        $data['data'][] = (int) $row->count;
      }

      $data['chart_data'] = json_encode($data);

      return view('acceuilformation',$data);
      
   }
}
