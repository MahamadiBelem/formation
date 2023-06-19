<?php

namespace App\Exports;

use App\Models\Association;
use Maatwebsite\Excel\Concerns\FromCollection;

class asExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Association::all();
    }
}
