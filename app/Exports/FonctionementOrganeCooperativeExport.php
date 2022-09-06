<?php

namespace App\Exports;

use App\Models\FonctionementOrganeCooperative;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FonctionementOrganeCooperativeExport implements FromView
{
    public function view(): View
    {
        return view('cooperatives.exportfoc', [
            'fonctionement_organe_cooperatives' => FonctionementOrganeCooperative::all()
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
