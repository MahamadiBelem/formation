<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regions;
use App\Models\Formateurs;
use App\Models\Apprenants;
use App\Models\ProjetInstallations;
use App\Models\Module;
use App\Models\TypeFormation;
use App\Models\CentreFormation;
use App\Models\SourceFinancements;
use Carbon\Carbon;

class StatistiqueController extends Controller
{
    public function index()
    {
        //

        $regions=Regions::paginate(10);
        

        $regionsCount = Regions::all();
        $total = $regionsCount->count();


        $formateurs=Formateurs::all();
        $totalformateurs = $formateurs->count();

        $apprenants=Apprenants::all();
        $totalapprenants = $apprenants->count();

        $affectes=ProjetInstallations::all();
        $totalprojet = $affectes->count();

        $modules=Module::all();
        $totalmodule = $modules->count();

        $cyles=TypeFormation::all();
        $cyletotal = $cyles->count();

        $cyles=TypeFormation::all()->count();

        $sources=SourceFinancements::all();
        $sourcetotal = $sources->count();

        $totalcentre=CentreFormation::all()->count();
        
        $date1 = Carbon::parse('23-07-01');
        $date2 = Carbon::parse('23-07-05');
        $duree = $date1->diffInDays($date2); 

        /* autre maniere de proceder
        $total = Subscriber::count();
        $confirmed = Subscriber::where('status', 'confirmed')->count();
        $unconfirmed = Subscriber::where('status', 'unconfirmed')->count();
        $cancelled = Subscriber::where('status', 'cancelled')->count();
        $province_concerne = Province::where('region_id', 'input_region_id')->equal(); //

       /* $specialites=Specialites::paginate(10); 

        $formations=Formations::all(); */ 

        /*$subscribers = Subscriber::all(); 
        $total = $subscribers->count(); 
        $confirmed = $subscribers->where('status', 'confirmed')->count();
        $unconfirmed = $subscribers->where('status', 'unconfirmed')->count();
        $cancelled = $subscribers->where('status', 'cancelled')->count();
        $bounced = $subscribers->where('status', 'bounced')->count();*/

        return view('formations.statistiques',compact('regions','total','totalformateurs','totalapprenants','totalprojet','totalmodule','cyletotal','sourcetotal','duree','totalcentre'));

    }

   
}
