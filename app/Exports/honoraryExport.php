<?php

namespace App\Exports;

use App\Models\honorary;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class honoraryExport implements FromQuery, WithMapping,WithHeadings
{
    public function query()
    {


        return honorary::select('id','fullname','MobileNumber','nationality','email','IcNo','Scientificliterature','Membershiptype','payment_status','amount');
    }


    public function map($honoraries): array
    {
        return [
        $honoraries->id,
          $honoraries->fullname,
         $honoraries->nationality,
          $honoraries->MobileNumber,
           $honoraries->email,
         $honoraries->IcNo,
      
          $honoraries->Scientificliterature ,
        
         
         $honoraries->Membershiptype,
         $honoraries->payment_status,
         $honoraries->amount,
           
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
              'IcNo',
              'Scientific literature ',
              'Membership type',
             'Payment status',
             'Amount'
        ];
    }
}
