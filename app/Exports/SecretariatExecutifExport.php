<?php

namespace App\Exports;
use App\Models\SecretariatExecutif;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SecretariatExecutifExport implements FromView
{
    public function view(): View
    {
        return view('cooperatives.exportse', [
            'secretariatexecutifs' =>SecretariatExecutif::all()
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
