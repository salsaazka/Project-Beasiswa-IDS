<?php

namespace App\Exports;

use App\Models\Donor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DonorsExport implements FromCollection, WithHeadings
{
     public function headings(): array
    {
        return [
            "Nama", 
            "Profesi", 
            "Alamat", 
            "Nomor Telepon", 
        ];
    }
    public function collection()
    {
        return Donor::select(
            "name",
            "profesi",
            "address",
            "no_telp",
        )->get();
    }
}
