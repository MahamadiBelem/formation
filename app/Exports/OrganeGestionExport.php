<?php

namespace App\Exports;

use App\Models\OrganeGestion;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class OrganeGestionExport implements FromView
{
    public function view(): View
    {
        return view('cooperatives.exportog', [
            'organegestions' => OrganeGestion::all()
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
