<?php

namespace App\Exports;

use App\Models\Cooperative;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CooperativeExport implements FromView
{
    public function view(): View
    {
        return view('cooperatives.export', [
            'cooperatives' => Cooperative::all()
        ]);
    }

    /*
    * @return \Illuminate\Support\Collection
    */
    /*
    public function collection()
    {
       // return Cooperative::all();
       return collect(Cooperative::getcooperative());
    }
    */
}
