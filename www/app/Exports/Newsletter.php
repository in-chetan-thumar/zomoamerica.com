<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class Newsletter implements FromCollection,WithHeadings,ShouldAutoSize,WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array {
        return [
            "Email",
            "Created at"
        ];
    }
    public function collection()
    {
        return \App\Models\NewsLetter::all();
    }

    public function map($newsLetter): array
    {
        return [

            $newsLetter->email,
            $newsLetter->created_at->format('d-m-Y '),
        ];
    }

}
