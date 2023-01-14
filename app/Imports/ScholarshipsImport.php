<?php

namespace App\Imports;

use App\Models\Import;
use Maatwebsite\Excel\Concerns\ToModel;

class ScholarshipsImport implements ToModel
{
    public function model(array $row)
    {
        return new Import([
            'name'=> $row[0],
            'nis'=> $row[1],
            'region'=> $row[2],
            'ps'=> $row[3],
        ]);
    }
}
