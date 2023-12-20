<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Regime;
use App\Models\Specialites;
use App\Models\Kits;
class ApprenantsDashboard extends Component
{

    public function calculDuration(){

        $fdate = $request->Fdate;
        $tdate = $request->Tdate;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');//now do whatever you like with $days
    }

    public function getPeriod(){
        
        Carbon::parse(request('start'))->diffInDays(Carbon::parse(request('end')));
        $period = new DatePeriod(Carbon::parse(request('start')), CarbonInterval::day(), Carbon::parse(request('end')));
        foreach ($period as $date) {
            echo $date;
        }
    }
    public $counter;
    public $size;

    public function increment()
    {
        // $this->counter = $this->counter + $this->size;
        $this->counter += $this->size;
    }


    public function decrement()
    {
        $this->counter -= $this->size;
    }

    public function mount()
    {
        $this->counter = 10;
        $this->size = 1; //default value 
    }

    public function render()
    {
        $date1 = Carbon::parse('23-07-01');
        $date2 = Carbon::parse('23-07-05');
        $duree = $date1->diffInDays($date2); 

        $totalregime=Regime::all()->count();
        $totalspecialite=Specialites::all()->count();
        $totalkits=Kits::all()->count();

        return view('livewire.apprenants-dashboard',compact('duree','totalregime','totalspecialite','totalkits'));
    }
}
