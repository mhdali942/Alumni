<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\honorary;
use App\Models\User;
use Auth;


class honoraryController extends Controller
{
   

  public function index()
    {
       	
    $honoraries = auth()->user()->honorary()->latest()->paginate(10);

    return view('admin/honoraryForm/index',['honoraries'=> $honoraries]);

    }


       public function create(User $User, honorary $honoraries)
    {   

        if (Auth::user()->honorary()->count() >= 1) {

           session()->flash('errors', 'You cant submit more than a form');
                return redirect('/admin');
            }


        if ((Auth::check() && Auth::user()->statues == "cooperative")){
                return view('admin/honoraryForm/create');    
      }elseif((Auth::check() && Auth::user()->statues == "general")) {
          
              return view('admin/honoraryForm/create');
      }else{
           session()->flash('errors', 'you are not authorized to access  this form');
         return redirect('/admin');
      }

       
    }


      public function store(User $user, Request $request)
    {
       
  // $this->authorize('create', honorary::class);

       $honoraries = honorary::where('email', $request->email)->get();

    # check if email is more than 1
    if(sizeof( $honoraries) > 0){
       
         session()->flash('errors', 'e-mail already exists');
        return back();
    }

        $inputs = request()->validate([
            
            'fullname'=>'required',
            'nationality'=>'required',
            'gender'=>'required',
            'IcNo'=>'required',
           
            'edulevel'=>'required',
            'SalaryFirst'=>'required',
            'MobileNumber'=>'required',
             'email' =>  'required',
            'LandlineNumber'=>'required',
            'clubtasks' => 'required',
          
          
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
            'Regulations'=>'required',
    ]);


        

        auth()->user()->honorary()->create($inputs);

        

      return redirect('https://sandbox.senangpay.my/payment/343154510969262');

      session()->flash('toast_success', 'Your form has been submitted successfully ');
  
    }



      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(honorary $honoraries)
    {
    

       

       return view('admin/honoraryForm/detalis',['honoraries'=> $honoraries]);

    }


     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(honorary $honoraries)
    {
            
      

        return view('admin/honoraryForm/edit',['honoraries'=> $honoraries]);
    }


 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(honorary $honoraries, Request $request)
    {
       
        

          $inputs = request()->validate([
            
            
            'fullname'=>'required',
            'nationality'=>'required',
            'gender'=>'required',
            'IcNo'=>'required',
           
            'edulevel'=>'required',
            'SalaryFirst'=>'required',
            'MobileNumber'=>'required',
             'email' => 'required',
            'LandlineNumber'=>'required',
            'clubtasks' => 'required',
          
          
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

            // 'Membershiptype'=>'required',
            'Regulations'=>'required',
    ]);

          

            $honoraries->fullname = $inputs['fullname'];
            $honoraries->nationality = $inputs['nationality'];
            $honoraries->gender = $inputs['gender'];
            $honoraries->IcNo = $inputs['IcNo'];
          
            $honoraries->edulevel = $inputs['edulevel'];
           
            $honoraries->SalaryFirst = $inputs['SalaryFirst'];
            $honoraries->MobileNumber = $inputs['MobileNumber'];
            $honoraries->email = $inputs['email'];
            $honoraries->LandlineNumber = $inputs['LandlineNumber'];
            $honoraries->clubtasks = $inputs['clubtasks'];
         
            $honoraries->currentaddress = $inputs['currentaddress'];
            $honoraries->Currentwork = $inputs['Currentwork'];
            $honoraries->CurrentPosition = $inputs['CurrentPosition'];
            $honoraries->Currentworkaddress = $inputs['Currentworkaddress'];
           $honoraries->Previouswork = $inputs['Previouswork'];
           $honoraries->Previouspositions = $inputs['Previouspositions'];
            $honoraries->Scientificliterature = $inputs['Scientificliterature'];
            $honoraries->Communityposts = $inputs['Communityposts'];
            $honoraries->Otherachievements = $inputs['Otherachievements'];
            $honoraries->SkillsAbilities = $inputs['SkillsAbilities'];
            $honoraries->additionaltask =$inputs['additionaltask'];
            // $honoraries->Membershiptype = $inputs['Membershiptype'];
            $honoraries->Regulations = $inputs['Regulations'];
            
          

            auth()->user()->honorary()->save($honoraries);

             session()->flash('toast_info', 'Form has been Updated Successfully');

        return back();

        }



public function destroy(honorary $honoraries,Request $request)
    {
        


        $honoraries->delete();

        $request->session()->flash('toast_warning', 'Form was deleted');

        return back();
    }

}
