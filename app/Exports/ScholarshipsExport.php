<?php

namespace App\Exports;

use App\Models\ScholarshipApp;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ScholarshipsExport implements FromCollection, WithHeadings
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
        return ScholarshipApp::select(
            "name",
            "nis",
            "region",
            "ps",
        )->get();
    }
}
