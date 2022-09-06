<?php

namespace App\Exports;

use App\Models\OrganeControle;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class OrganeControleExport implements FromView
{
    public function view(): View
    {
        return view('cooperatives.exportoc', [
            'organescontroles' => OrganeControle::all()
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
