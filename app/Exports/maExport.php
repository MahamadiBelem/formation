<?php

namespace App\Exports;

use App\Models\Maillon;
use Maatwebsite\Excel\Concerns\FromCollection;

class maExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Maillon::all();
    }
}
