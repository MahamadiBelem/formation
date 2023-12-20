<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CentreformationDashboard extends Component
{

    

    /**
     * calcul la duree entre 2 dates
     */
    public function duration(){

          $last_date = "2018-01-10 00:00:00";
          $current_date = Carbon::now()->toDateTimeString();
          //NUMBER DAYS BETWEEN TWO DATES CALCULATOR
          $start_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $last_date);
          $end_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $current_date);
          $different_days = $start_date->diffInDays($end_date);

    }
    
    // Product.php
    public function getProfitAttribute(){
        return $this->purchase_price - $this->selling_price;
    }
    protected $appends = ['profit']; // to append to json

    /**
     * function render pour retourner la vue
     */
    public function render()
    {
        
        return view('livewire.centreformation-dashboard');
    }
}
