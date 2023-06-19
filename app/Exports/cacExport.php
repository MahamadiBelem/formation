<?php

namespace App\Exports;

use App\Models\Commissariataucompteassociation;
use Maatwebsite\Excel\Concerns\FromCollection;

class cacExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Commissariataucompteassociation::all();
    }
}
