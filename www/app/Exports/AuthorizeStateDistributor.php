<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AuthorizeStateDistributor implements FromCollection,WithHeadings,ShouldAutoSize,WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array {
        return [
            "First name",
            "Last name",
            "Telephone",
            "Email",
            "State",
            "city",
            "Created at"
        ];
    }
    public function collection()
    {
        return \App\Models\AuthorizeStateDistributor::all();
    }

    public function map($state_distributor): array
    {
        return [
            $state_distributor->first_name,
            $state_distributor->last_name,
            $state_distributor->telephone,
            $state_distributor->email,
            $state_distributor->state,
            $state_distributor->city,
            $state_distributor->created_at->format('d-m-Y'),
        ];
    }

}
