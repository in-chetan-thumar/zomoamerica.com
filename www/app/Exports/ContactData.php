<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\ContactDetail;
use Illuminate\Http\Request;
class ContactData implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array {
        return [
            "Email",
            "Subject",
            "Message",
        ];
    }

    public function collection()
    {
        $usersData = ContactDetail::get();
        return collect($usersData);

    }
}
