<?php

  
//this php file is to pick which pages in excel file to read and 
//send to another function


namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class UsersImport4 implements WithMultipleSheets 
{
   
    public function sheets(): array
    {
        return [
            0 => new sheetsearch4(),  // number of pages declare here (firstsheet is the name of another php  file to run another function) 
         // 'table customer' => new SecondSheetImport(), //can set name of page also
        ];
    }
}