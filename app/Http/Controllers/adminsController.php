<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lastyear;
use App\Models\alumni;


class adminsController extends Controller
{
    
   public function index(){

   	
   			

   			return view('admin.index');

   		
        

    }
}
