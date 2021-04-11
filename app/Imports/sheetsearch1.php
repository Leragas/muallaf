<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithLimit;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;   // to get the calculated values not formula 

class sheetsearch1 implements ToCollection , WithStartRow , WithLimit , WithCalculatedFormulas
{
    public function collection(Collection $rows)   // grab all the data in sheet
    {
        

        dd ($rows);
        
    }

    public function startRow(): int          // start reading from which row
    {
        return 1;                            // start at row number 1
    }

    public function limit(): int               // limit  how many row u want 
    {
        return 1;                             // only read 1 row
    }
}
