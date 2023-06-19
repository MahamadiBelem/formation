<?php

namespace App\Exports;

use App\Models\Bureauexecutifassociation;
use Maatwebsite\Excel\Concerns\FromCollection;

class beaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bureauexecutifassociation::all();
    }
}
