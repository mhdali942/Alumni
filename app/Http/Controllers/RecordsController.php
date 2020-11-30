<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\lastyear;
use App\Models\alumni;
use App\Models\honorary;

class RecordsController extends Controller
{
    public function alumniRecords(){

    	 $alumnis = DB::table('alumnis')->paginate(10);

        return view('admin.alumniForms.alumniRecords', ['alumnis' => $alumnis]);

    	   
    }


     public function lastyearRecords(){

    	 $lastyears = DB::table('lastyears')->paginate(10);

        return view('admin.lastyear.lastyearRecords', ['lastyears' => $lastyears]);

    	   
    }
     
    

    public function honoraryFormRecords(){

         $honoraries = DB::table('honoraries')->paginate(10);

        return view('admin.honoraryForm.honoraryFormRecords', ['honoraries' => $honoraries]);

           
    }

}
