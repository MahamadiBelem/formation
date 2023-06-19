<?php

namespace App\Exports;

use App\Models\Fonctionnementassociation;
use Maatwebsite\Excel\Concerns\FromCollection;

class faExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fonctionnementassociation::all();
    }
}
