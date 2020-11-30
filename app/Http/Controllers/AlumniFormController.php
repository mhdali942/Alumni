<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\alumni;
use App\Models\User;
use Auth;





class  AlumniFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
     
    $alumnis = auth()->user()->alumnis()->latest()->paginate(10);

    return view('admin/alumniForms/index',['alumnis'=>  $alumnis]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ((Auth::check() && Auth::user()->statues == "alumni")){
          return view('admin/alumniForms/create');

      }elseif((Auth::check() && Auth::user()->statues == "general")) {
          
            return view('admin/alumniForms/create');
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
    public function store( User $user, Request $request)
    {

        $alumnis = alumni::where('email', $request->email)->get();

    # check if email is more than 1
    if(sizeof($alumnis) > 0){
       
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
            
            'LandlineNumber'=>'required',
            'clubtasks' => 'required',
            'email' => 'required',

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

         

           auth()->user()->alumnis()->create($inputs);

        session()->flash('toast_success', 'Your form has been submitted successfully ');

      return redirect('https://sandbox.senangpay.my/payment/343154510969262');
      


       }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(alumni $alumnis)
    {
    
     

         // $this->authorize('view', $alumnis);

       return view('admin/alumniForms/detalis',['alumnis'=>  $alumnis]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(alumni $alumnis)
    {
            
       $this->authorize('view', $alumnis);

        return view('admin/alumniForms/edit',['alumnis'=>  $alumnis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(alumni $alumnis, Request $request)
    {
        
        


    
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

         

           $alumnis->fullname = $inputs['fullname'];
           $alumnis->nationality = $inputs['nationality'];
           $alumnis->gender = $inputs['gender'];
           $alumnis->refrenceNumber = ['refrenceNumber'];
           $alumnis->faculty = $inputs['faculty'];
           $alumnis->edulevel = $inputs['edulevel'];
           $alumnis->leanringmode = $inputs['leanringmode'];
           $alumnis->SalaryFirst = $inputs['SalaryFirst'];
           $alumnis->MobileNumber = $inputs['MobileNumber'];
           $alumnis->email = $inputs['email'];
           $alumnis->LandlineNumber = $inputs['LandlineNumber'];
           $alumnis->clubtasks = $inputs['clubtasks'];
           $alumnis->Subspecialty = $inputs['Subspecialty'];
           $alumnis->currentaddress = $inputs['currentaddress'];
           $alumnis->Currentwork = $inputs['Currentwork'];
           $alumnis->CurrentPosition = $inputs['CurrentPosition'];
           $alumnis->Currentworkaddress = $inputs['Currentworkaddress'];
           $alumnis->Previouswork = $inputs['Previouswork'];
           $alumnis->Previouspositions = $inputs['Previouspositions'];
           $alumnis->Scientificliterature =$inputs['Scientificliterature'];
           $alumnis->Communityposts = $inputs['Communityposts'];
           $alumnis->Otherachievements = $inputs['Otherachievements'];
           $alumnis->SkillsAbilities = $inputs['SkillsAbilities'];
           $alumnis->additionaltask = $inputs['additionaltask'];
           $alumnis->Membershiptype = $inputs['Membershiptype'];
           $alumnis->termsCondtions =$inputs['termsCondtions'];
            
          

            auth()->user()->alumnis()->save($alumnis);

             session()->flash('toast_info', 'Form has been Updated Successfully');

        return back();

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(alumni $alumnis,Request $request)
    {
        // $this->authorize('delete', $alumnis);


        $alumnis->delete();

        $request->session()->flash('toast_warning', 'Form was deleted');

        return back();
    }
}
