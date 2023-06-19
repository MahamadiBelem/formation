<?php

namespace App\Exports;

use App\Models\Secretariatexecutifassociation;
use Maatwebsite\Excel\Concerns\FromCollection;

class seaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Secretariatexecutifassociation::all();
    }
}
