<?php

namespace App\Exports;

use App\Models\LoanRequest;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LeadExport implements FromQuery
{
    use Exportable;

    public function query()
    {
        return LoanRequest::query();
    }

    public function headings(): array
    {
        return [
           
        ];
    }
}
