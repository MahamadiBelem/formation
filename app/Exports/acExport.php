<?php

namespace App\Exports;

use App\Models\assemblee_consulaire;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class acExport implements FromView
{

    public function view(): View
    {
        return view('cra.acexport', [
            'acs' => assemblee_consulaire::all()
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
