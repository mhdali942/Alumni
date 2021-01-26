<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\payment;
use App\Model\alumni;
use App\Model\lastyear;
use App\Model\honorary;

class paymentsController extends Controller
{
   



   public function alumniPaymentRecords (){


   	return view('paymentsRecords.alumniPaymentRecords');
   }
}
