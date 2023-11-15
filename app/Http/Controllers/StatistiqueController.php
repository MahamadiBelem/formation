<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regions;


class StatistiqueController extends Controller
{
    public function index()
    {
        //

        $regions=Regions::paginate(10);

        $regionsCount = Regions::all();
        $total = $regionsCount->count();
        /* autre maniere de proceder
        $total = Subscriber::count();
        $confirmed = Subscriber::where('status', 'confirmed')->count();
        $unconfirmed = Subscriber::where('status', 'unconfirmed')->count();
        $cancelled = Subscriber::where('status', 'cancelled')->count();
        $bounced = Subscriber::where('status', 'bounced')->count(); //

       /* $specialites=Specialites::paginate(10);

        $formations=Formations::all(); */

        $subscribers = Subscriber::all();
        $total = $subscribers->count();
        $confirmed = $subscribers->where('status', 'confirmed')->count();
        $unconfirmed = $subscribers->where('status', 'unconfirmed')->count();
        $cancelled = $subscribers->where('status', 'cancelled')->count();
        $bounced = $subscribers->where('status', 'bounced')->count();

        return view('formations.statistiques',compact('regions','total'));

    }

   
}
