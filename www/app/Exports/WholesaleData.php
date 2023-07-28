<?php

namespace App\Exports;
use App\Models\wholesaleDetail;
use Maatwebsite\Excel\Concerns\FromCollection;

class WholesaleData implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array {
        return [
            'buisness_name',
            'first_name',
            'last_name',
            'adress',
            'city',
            'state',
            'zipcode',
            'website',
            'email',
            'wholesale',
            'telephone'
        ];
    }

    public function collection()
    {
        //
        $usersData = wholesaleDetail::get();
        return collect($usersData);

    }
}
