<?php

namespace App\Imports;

use App\student;
use Maatwebsite\Excel\Concerns\ToModel;

class importStudent implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new student([
            'id' => $row[0],
            'name' => $row[1],
            'address' => $row[2],
            'toan' => $row[3],
            'ly' => $row[4],
            'hoa' => $row[5],

        ]);
    }
}
