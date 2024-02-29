<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\ContactDetail;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;

class ContactData implements FromCollection, WithHeadings, WithEvents, ShouldAutoSize, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public $params = [];
    function __construct($params = [])
    {
        $this->params = $params;
    }

    public function collection()
    {
        $this->params['path'] = '';
        $this->params['return_type'] = 'object';
        // dd($this->params);
        $contact_data = resolve('contact-repo')->filter($this->params);
        return $contact_data;
    }

    public function headings(): array
    {
        return ['#', 'Email', 'Subject', 'Message'];
    }

    public function map($contact_data): array
    {
        return [
            $contact_data->id,
            $contact_data->email,
            $contact_data->subject,
            $contact_data->message,
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
