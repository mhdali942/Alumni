<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;


class userController extends Controller
{
    


    public function userPofile(User $users){


    	$users= User::latest()->paginate(20);

    	

    	    // $Users = auth()->user()->Users();


    	return view('admin/users/userProfile',['users'=> $users]);
    }



     public function destroy(User $users,Request $request)
    
    {
       
			 if ((Auth::check() && Auth::user()->role == "admin")) {

			 		  $users->delete();
			 		   $request->session()->flash('toast_warning', 'Form was deleted');
			 		    return back();

			 }else{

					 $request->session()->flash('toast_warning', 'Your are not authorized');

					  return reidrect('admin');

			 }
       
    }




}
