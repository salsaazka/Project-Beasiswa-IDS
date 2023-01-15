<?php

namespace App\Imports;

use App\Models\ScholarshipApp;
use App\Exports\ScholarshipsExport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Facades\Excel;

class ScholarshipsImport implements ToModel
{
    public function model(array $row)
    {
        return new ScholarshipApp([
            'name'=> $row[0],
            'nis'=> $row[1],
            'region'=> $row[2],
            'ps'=> $row[3],
        ]);
    }
}
