<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lastyear;
use App\Models\alumni;
use App\Models\honorary;
use auth;


class adminsController extends Controller
{
    

    
   public function index(){



 $alumnis = alumni::latest()->paginate(5);

$lastyears=lastyear::latest()->paginate(5);

$Coorperatives=honorary::latest()->paginate(5);


$CountAlumnis= alumni::count();
$CountLastYears= lastyear::count();
$CountCoorperative= honorary::count();




           if ((Auth::check() && Auth::user()->statues == "alumni")) {

                      if((Auth::user()->alumnis()->count() >= 1)){
                    
                       return redirect('admin/alumniForms');

                      }elseif((Auth::user()->alumnis()->count() >= 0)){

                        
                           return redirect('/admin/alumniForms/create');
                       }
                          elseif ((Auth::check() && Auth::user()->statues == "cooperative")){

                         session()->flash('errors', 'you are not authorized to access  this form');
                           return redirect('/');

                      }elseif((Auth::check() && Auth::user()->statues == "lastyear")){

                         session()->flash('errors', 'you are not authorized to access  this form');
                           return redirect('/');
                      }
                 

                  } 


                   if ((Auth::check() && Auth::user()->statues == "lastyear")) {

                      if((Auth::user()->lastyears()->count() >= 1)){
                    
                       return redirect('admin/lastyear');

                      }elseif((Auth::user()->lastyears()->count() >= 0)){

                        
                           return redirect('/admin/lastyear/create');
                       }
                          elseif ((Auth::check() && Auth::user()->statues == "cooperative")){

                         session()->flash('errors', 'you are not authorized to access  this form');
                           return redirect('/');

                      }elseif((Auth::check() && Auth::user()->statues == "alumni")){

                         session()->flash('errors', 'you are not authorized to access  this form');
                           return redirect('/');
                      }
                 

                  } 



                    if ((Auth::check() && Auth::user()->statues == "cooperative")) {

                      if((Auth::user()->honorary()->count() >= 1)){
                    
                       return redirect('admin/honoraryForm');

                      }elseif((Auth::user()->honorary()->count() >= 0)){

                        
                           return redirect('/admin/honoraryForm/create');
                       }
                          elseif ((Auth::check() && Auth::user()->statues == "alumni")){

                         session()->flash('errors', 'you are not authorized to access  this form');
                           return redirect('/');

                      }elseif((Auth::check() && Auth::user()->statues == "lastyear")){

                         session()->flash('errors', 'you are not authorized to access  this form');
                           return redirect('/');
                      }
                 

                  } 






   	
    return view('admin.index',compact('CountAlumnis','CountLastYears','CountCoorperative','alumnis','lastyears','Coorperatives'));
   				

   	
    }


  

}
