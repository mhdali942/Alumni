<?php

namespace App\Exports;

use App\Models\alumni;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;



class alumnisExport implements FromQuery, WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {


        return alumni::select('id','fullname','MobileNumber','nationality','email','faculty','refrenceNumber','leanringmode','clubtasks','Membershiptype','payment_status','amount');
    }


    public function map($alumnis): array
    {
        return [
           $alumnis->id,
           $alumnis->fullname,
          $alumnis->nationality,
           $alumnis->MobileNumber,
            $alumnis->email,
          $alumnis->faculty,
          $alumnis->refrenceNumber,
          $alumnis->leanringmode,
           $alumnis->clubtasks,
        
         
          $alumnis->Membershiptype,
          $alumnis->payment_status,
          $alumnis->amount,
         
         

           
           
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
