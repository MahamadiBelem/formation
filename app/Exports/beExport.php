<?php

namespace App\Exports;

use App\Models\bureau_executif;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class beExport implements FromView
{
    public function view(): View
    {
        return view('cra.beexport', [
            'bes' =>bureau_executif::all()
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
