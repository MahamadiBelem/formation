<?php

namespace App\Exports;

use App\Models\rencontre_statuaire;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class rstatExport implements FromView
{

    public function view(): View
    {
        return view('cra.rstatexport', [
            'rstats' => rencontre_statuaire::all()
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
