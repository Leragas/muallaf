<?php
namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;


class sheetsearch2 implements WithMappedCells, ToModel 
{
    public function mapping(): array
    {
        //Read Cells Via Coordiantes 

        return [
            'data1'  => 'B1',
            'data' => 'B2',
            'data2' => 'B4',
            
        ];
    }
    
    public function model(array $row)
    {// show all the cells we read in a array then fill in the model information
        dd("We're Ready to read the excel",$row);
        return new User([
            'name' => $row[0],
            'email' => $row[1],
           
        ]);
    }
}
