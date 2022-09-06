<?php

namespace App\Exports;

use App\Models\secretariat_ex_cra;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class seExport implements FromView
{

    public function view(): View
    {
        return view('cra.seexport', [
            'secra' => secretariat_ex_cra::all()
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
