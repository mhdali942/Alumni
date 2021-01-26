<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lastyear;
use App\Models\User;
use App\Models\cotnact;
use App\Exports\lastyearExport;
use Maatwebsite\Excel\Facades\Excel;
use Auth;
use Session;
use Mail;

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
    public function create( User $user,lastyear $lastyears)
   {

            if ((Auth::check() && Auth::user()->statues == "general")) {

                 
                    return view('admin/lastyear/create');

                  }elseif (Auth::user()->lastyears()->count() >= 1) {
                    session()->flash('errors', 'Your form already submitted');
                  return redirect('/admin');
                  }elseif((Auth::check() && Auth::user()->statues == "lastyear")){

                    return view('admin/lastyear/create');

                  }else{
                      session()->flash('errors', 'you are not authorized to access  this form');
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
        $merchant_id= "343154510969262";
        $secretkey = "223-756271100";
        


        $lastyears = lastyear::where('email', $request->email)->get();

    # check if email is more than 1
    if(sizeof($lastyears) > 0){
       
         session()->flash('errors', 'e-mail already exists');
        return back();
    }
      $data = $request->all();

       if($data['Membershiptype'] == 'Bronze'){

                  $membership = $data['Membershiptype'];
                  $amount = $data['bronzeMembershipAmount'];

                          $inputs = request()->validate([
                              
                               'bronzeMembershipAmount'=>'min:10|integer|max:1000000',
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
                               'paymenttype' => 'required',
                            
                              'Subspecialty'=>'required',
                              'currentaddress'=>'required',
                              'Currentwork'=>'',
                              'CurrentPosition'=>'',
                              'Currentworkaddress' => '',
                             
                              'Scientificliterature'=>'',
                              'Communityposts'=>'',
                              'Otherachievements'=>'',
                              'SkillsAbilities'=>'',
                              'additionaltask'=>'',

                              'Membershiptype'=>'required',
                              'termsCondtions'=>'required',
                      ]);

           }
            

          //echo "<pre>";print_r($data);die();
        
        auth()->user()->lastyears()->create($inputs);
       
       
            $hashed_string = hash_hmac('sha256', $secretkey.urldecode($membership).urldecode($amount).urldecode(time()), $secretkey);

            $order_id = time();


            $post = [
                'detail' => $membership,
                'amount' => $amount,
                'order_id' => time(),
                'name' => $data['fullname'],
                'email' => $data['email'],
                'phone' => $data['MobileNumber'],
                'hash' => $hashed_string,

            ];
            Session::put('form_names', 'lastyear');
            Session::put('user_id', Auth::user()->id);
            Session::put('membership_type', $membership);
            Session::put('amount', $amount);

            $ch = curl_init('https://sandbox.senangpay.my/payment/343154510969262');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

            // execute!
            $response = curl_exec($ch);

            // close the connection, release resources used
            curl_close($ch);

            // do anything you want with your response
            echo $response;
            
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


     public function upgrade(lastyear $lastyears){



      return view('admin/lastyear/upgrade',['lastyears'=>  $lastyears]);
    }


   public function upgradePlan(lastyear $lastyears , Request $request){
       
        
        $merchant_id= "343154510969262";
        $secretkey = "223-756271100";

            $data = $request->all();

              if($data['Membershiptype'] == 'Bronze'){

                          $membership = $data['Membershiptype'];
                          $amount = $data['bronzeMembershipAmount'];

                          $inputs = request()->validate([



                              'Membershiptype'=>'required',
                           'email'=>'required',
                            'MobileNumber'=>'required',
                             'fullname'=>'required',

                             'paymenttype'=>'required',
                             
                               'bronzeMembershipAmount'=>'min:10|integer|max:1000000',


                                ]);
              }
         

     



     $hashed_string = hash_hmac('sha256', $secretkey.urldecode($membership).urldecode($amount).urldecode(time()), $secretkey);

            $order_id = time();


            $post = [
                'detail' => $membership,
                'amount' => $amount,
                'order_id' => time(),
                'name' => $data['fullname'],
                'email' => $data['email'],
                'phone' => $data['MobileNumber'],
                'hash' => $hashed_string,

            ];
            Session::put('form_names', 'lastyear');
            Session::put('user_id', Auth::user()->id);
            Session::put('membership_type', $membership);
            Session::put('amount', $amount);

            $ch = curl_init('https://sandbox.senangpay.my/payment/343154510969262');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

            // execute!
            $response = curl_exec($ch);

            // close the connection, release resources used
            curl_close($ch);

            // do anything you want with your response
            echo $response;





     auth()->user()->lastyears()->save($lastyears);


       }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(lastyear $lastyears)
    {
         
           if(( Auth::check() && Auth::user()->role == "user")){

               $this->authorize('view', $lastyears);

        return view('admin/lastyear/edit',['lastyears'=>  $lastyears]);

         }elseif(( Auth::check() && Auth::user()->role == "admin")){


              return view('admin/lastyear/edit',['lastyears'=>  $lastyears]);
         }   
          
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

        
        $inputs = request()->validate([
            
            // 'fullname'=>'required',
            // 'nationality'=>'required',
            // 'gender'=>'required',
            // 'refrenceNumber'=>'required',
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
           
            'Scientificliterature'=>'',
            'Communityposts'=>'',
            'Otherachievements'=>'',
            'SkillsAbilities'=>'',
            'additionaltask'=>'',

            
            // 'termsCondtions'=>'required',
    ]);

       

           // $lastyears->fullname = $inputs['fullname'];
           // $lastyears->nationality = $inputs['nationality'];
           // $lastyears->gender = $inputs['gender'];
           // $lastyears->refrenceNumber = $inputs['refrenceNumber'];
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
          
           $lastyears->Scientificliterature = $inputs['Scientificliterature'];
           $lastyears->Communityposts = $inputs['Communityposts'];
           $lastyears->Otherachievements = $inputs['Otherachievements'];
           $lastyears->SkillsAbilities = $inputs['SkillsAbilities'];
           $lastyears->additionaltask =$inputs['additionaltask'];
           // $lastyears->Membershiptype = $inputs['Membershiptype'];
           // $lastyears->termsCondtions = $inputs['termsCondtions'];
         
               $lastyears->save();
           

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




      public function contactForm(){

          $lastyears = auth()->user()->lastyears()->latest()->paginate(10);

          
      return view('admin/lastyear/contact-us',['lastyears'=>  $lastyears]);

    }

    public function contact(User $user, Request $request){

        
            $inputs = request()->validate([
      
               'name'=>['required', 'string', 'max:40', 'min:3'], 
               'email'=> ['required', 'string', 'email', 'max:255'],
               'subject'=>['required', 'string', 'max:40', 'min:5'],
                'body'=> ['required', 'string', 'max:1000'],
                                                   
                            
                                     
              
            ]);


            $contacts = new cotnact;
           $contacts->name = $inputs['name'];
            $contacts->email = $inputs['email'];
             $contacts->subject = $inputs['subject'];
              $contacts->body = $inputs['body'];

             $contacts->save();


             Mail::send('emails.contact-message',[

                  'msg'=> $request->body,'name'=>$request->name, 'email'=> $request->email, 'subject'=>$request->subject], function($mail) use($request){

                    // $mail->from($request->email,$request->name);

                    $mail->to('alumni.club@mediu.edu.my')->subject('Contact form inquiry');
                  });




             Mail::send('emails.auto-reply-contact-form',[

                 'email'=> $request->email, 'name'=>$request->name], function($mail) use($request){

                    // $mail->from('alumni.club@mediu.edu.my','Alumni Club Contact Form');
                   $mail->to($request->email)->subject('Contact form inquiry');
                
                  });   




                session()->flash('success', 'Your contact form he been sent successfully');


      return redirect('admin');

    }

}
