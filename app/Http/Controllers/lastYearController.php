<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lastyear;
use App\Models\User;
use Auth;


class lastYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
     
    $lastyears = auth()->user()->lastyears()->latest()->paginate(10);


       return view('admin.lastyear.index')->with('lastyears', $lastyears);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


          if ((Auth::check() && Auth::user()->statues == "lastyear")){
                return view('admin/lastyear/create');    
      }elseif((Auth::check() && Auth::user()->statues == "general")) {
          
              return view('admin/lastyear/create');
      }else{

         return redirect('/admin');
      }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user,Request $request)
    {
        

        // $this->authorize('create', lastyear::class);


        $lastyears = lastyear::where('email', $request->email)->get();

    # check if email is more than 1
    if(sizeof($lastyears) > 0){
       
         session()->flash('errors', 'e-mail already exists');
        return back();
    }


        $inputs = request()->validate([
            
            'fullname'=>'required',
            'nationality'=>'required',
            'gender'=>'required',
            'refrenceNumber'=>'required',
            'faculty'=>'required',
            'edulevel'=>'required',
            'leanringmode'=>'required',
            'SalaryFirst'=>'required',
            'MobileNumber'=>'required',
             'email' => 'required|email|unique:alumnis,email', 
            'LandlineNumber'=>'required',
            'clubtasks' => 'required',
          
            'Subspecialty'=>'required',
            'currentaddress'=>'required',
            'Currentwork'=>'',
            'CurrentPosition'=>'',
            'Currentworkaddress' => '',
            'Previouswork'=>'',
            'Previouspositions'=>'',
            'Scientificliterature'=>'',
            'Communityposts'=>'',
            'Otherachievements'=>'',
            'SkillsAbilities'=>'',
            'additionaltask'=>'',

            'Membershiptype'=>'required',
            'termsCondtions'=>'required',
    ]);


        
        auth()->user()->lastyears()->create($inputs);

        session()->flash('toast_success', 'Your form has been submitted successfully ');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(lastyear $lastyears)
    {
         
         // $this->authorize('view', $lastyears);
           

       return view('admin/lastyear/detalis',['lastyears'=>  $lastyears]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(lastyear $lastyears)
    {
            
           $this->authorize('view', $lastyears);

        return view('admin/lastyear/edit',['lastyears'=>  $lastyears]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(lastyear $lastyears)
    {

           $this->authorize('update', $lastyears);
        $inputs = request()->validate([
            
            'fullname'=>'required',
            'nationality'=>'required',
            'gender'=>'required',
            'refrenceNumber'=>'required',
            'faculty'=>'required',
            'edulevel'=>'required',
            'leanringmode'=>'required',
            'SalaryFirst'=>'required',
            'MobileNumber'=>'required',
            'email' => 'required',

            'LandlineNumber'=>'required',
            'clubtasks' => 'required',
          
            'Subspecialty'=>'required',
            'currentaddress'=>'required',
            'Currentwork'=>'',
            'CurrentPosition'=>'',
            'Currentworkaddress' => '',
            'Previouswork'=>'',
            'Previouspositions'=>'',
            'Scientificliterature'=>'',
            'Communityposts'=>'',
            'Otherachievements'=>'',
            'SkillsAbilities'=>'',
            'additionaltask'=>'',

            'Membershiptype'=>'required',
            'termsCondtions'=>'required',
    ]);

       

           $lastyears->fullname = $inputs['fullname'];
           $lastyears->nationality = $inputs['nationality'];
           $lastyears->gender = $inputs['gender'];
           $lastyears->refrenceNumber = $inputs['refrenceNumber'];
           $lastyears->faculty = $inputs['faculty'];
           $lastyears->edulevel = $inputs['edulevel'];
           $lastyears->leanringmode = $inputs['leanringmode'];
           $lastyears->SalaryFirst = $inputs['SalaryFirst'];
           $lastyears->MobileNumber = $inputs['MobileNumber'];
           $lastyears->email = $inputs['email'];
           $lastyears->LandlineNumber = $inputs['LandlineNumber'];
           $lastyears->clubtasks = $inputs['clubtasks'];
           $lastyears->Subspecialty = $inputs['Subspecialty'];
           $lastyears->currentaddress = $inputs['currentaddress'];
           $lastyears->Currentwork = $inputs['Currentwork'];
           $lastyears->CurrentPosition =$inputs['CurrentPosition']; 
           $lastyears->Currentworkaddress = $inputs['Currentworkaddress'];
           $lastyears->Previouswork = $inputs['Previouswork'];
           $lastyears->Previouspositions =$inputs['Previouspositions'];
           $lastyears->Scientificliterature = $inputs['Scientificliterature'];
           $lastyears->Communityposts = $inputs['Communityposts'];
           $lastyears->Otherachievements = $inputs['Otherachievements'];
           $lastyears->SkillsAbilities = $inputs['SkillsAbilities'];
           $lastyears->additionaltask =$inputs['additionaltask'];
           $lastyears->Membershiptype = $inputs['Membershiptype'];
           $lastyears->termsCondtions = $inputs['termsCondtions'];
         

            auth()->user()->alumnis()->save($lastyears);

             session()->flash('toast_info', 'Form has been Updated Successfully');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(lastyear $lastyears ,Request $request)
    {

        // $this->authorize('delete', $lastyears);
        
        $lastyears->delete();

        $request->session()->flash('toast_warning', 'Form was deleted');

        return back();
    }
}
