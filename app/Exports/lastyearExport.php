<?php

namespace App\Exports;

use App\Models\lastyear;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class lastyearExport implements FromQuery, WithMapping,WithHeadings
{
    public function query()
    {


        return lastyear::select('id','fullname','MobileNumber','nationality','email','faculty','refrenceNumber','leanringmode','clubtasks','Membershiptype','payment_status','amount');
    }


    public function map($lastyears): array
    {
        return [
            $lastyears->id,
          $lastyears->fullname,
         $lastyears->nationality,
          $lastyears->MobileNumber,
           $lastyears->email,
         $lastyears->faculty,
         $lastyears->refrenceNumber,
         $lastyears->leanringmode,
          $lastyears->clubtasks,
        
         
         $lastyears->Membershiptype,
         $lastyears->payment_status,
         $lastyears->amount,
           
        ];
    }



    public function headings(): array
    {
        return [
            '#',
            'Full Name',
          
            'Nationality',
              'Mobile Number',
              'E-mail',
              'Faculty',
              'Ref.No',
              'Learning Mode',
              'Club Task',
              'Membership type',
             'Payment status',
             'Amount'
        ];
    }

}
