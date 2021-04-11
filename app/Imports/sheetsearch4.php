<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class sheetsearch1 implements ToCollection
{
    public function collection(Collection $rows)
    {
        

        dd ($rows);
        //
    }
}