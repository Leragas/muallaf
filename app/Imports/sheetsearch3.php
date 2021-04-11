<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;

class sheetsearch3 implements ToCollection
{
    public function collection(Collection $rows)
    {
        Validator::make($rows->toArray(), [
            '' => 'required',
        ])->validate();

        dd ($rows);
        //
    }
}