<?php

namespace App\Exports;

use App\Models\Export;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ScholarshipsExport implements FromCollection
{
   
    public function headings(): array
    {
        return [
            "Nama", 
            "NIS", 
            "Rayon", 
            "Pembimbing", 
        ];
    }
    public function collection()
    {
        return Export::select(
            "name",
            "nis",
            "region",
            "ps",
        )->get();
    }
}
