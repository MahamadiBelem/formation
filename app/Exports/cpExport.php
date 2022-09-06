<?php

namespace App\Exports;

use App\Models\commission_permanante;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class cpExport implements FromView
{

    public function view(): View
    {
        return view('cra.cpexport', [
            'cps' => commission_permanante::all()
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
