<?php

namespace App\Http\Livewire;

use Livewire\Component;

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
        return view('livewire.apprenants-dashboard');
    }
}
