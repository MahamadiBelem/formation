<?php

namespace App\Exports;

use App\Models\chambre_regionale;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class craExport implements FromView
{

    public function view(): View
    {
        return view('cra.crexport', [
            'cra' => chambre_regionale::all()
        ]);
    }

    /*
    * @return \Illuminate\Support\Collection

    public function collection()
    {
        //
    }
    */
}
