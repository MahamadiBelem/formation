<?php

namespace App\Exports;

use App\Models\Activiteorgane;
use Maatwebsite\Excel\Concerns\FromCollection;

class aoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Activiteorgane::all();
    }
}
