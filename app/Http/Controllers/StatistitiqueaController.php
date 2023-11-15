<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistitiqueaController extends Controller
{
    public function index()
    {
        //

       /* $specialites=Specialites::paginate(10);

        $formations=Formations::all(); */

        return view('formations.statistiquesa');

    }
}
