<?php

namespace App\Imports;

use App\Models\Donor;
use Maatwebsite\Excel\Concerns\ToModel;

class DonorsImport implements ToModel
{
    public function model(array $row)
    {
        return new ScholarshipApp([
            'name'=> $row[0],
            'profesi'=> $row[1],
            'address'=> $row[2],
            'no_telp'=> $row[3],
        ]);
    }
}
