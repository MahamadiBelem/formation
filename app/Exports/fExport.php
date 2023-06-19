<?php

namespace App\Exports;

use App\Models\Filiere;
use Maatwebsite\Excel\Concerns\FromCollection;

class fExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Filiere::all();
    }
}
