<?php

namespace App\Exports;

use App\Models\ProjetInstallations;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class piExport implements FromView
{
    public function view(): View
    {
        return view('formations.export.piexport', [
            'pi' => ProjetInstallations::all()
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
