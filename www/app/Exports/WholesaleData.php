<?php

namespace App\Exports;

use App\Models\wholesaleDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;

class WholesaleData implements FromCollection, WithHeadings, WithEvents, ShouldAutoSize, WithMapping
{

    public $params = [];
    function __construct($params = [])
    {
        $this->params = $params;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $this->params['path'] = '';
        $this->params['return_type'] = 'object';
        $usersData = resolve('wholesale-repo')->filter($this->params);
        return $usersData;
    }

    public function headings(): array
    {
        return ['#', 'Business name', 'First name', 'Last name', 'Address', 'City', 'State', 'Zipcode', 'Website', 'Email', 'Telephone'];
    }


    public function map($usersData): array
    {
        return [
            $usersData->id,
            $usersData->buisness_name,
            $usersData->first_name,
            $usersData->last_name,
            $usersData->adress,
            $usersData->city,
            $usersData->state,
            $usersData->zipcode,
            $usersData->website,
            $usersData->email,
            $usersData->telephone,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('1')
                    ->getFont()
                    ->setBold(true);
            },
        ];
    }

}
