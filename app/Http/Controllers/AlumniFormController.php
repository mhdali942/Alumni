<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\UpgradeRequest;
use App\Exports\alumnisExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\alumni;
use App\Models\honorary;
use App\Models\lastyear;
use App\Models\User;
use App\Models\cotnact;
use Auth;
use Session;
use Mail;

class  AlumniFormController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $alumnis = auth()->user()->alumnis()->latest()->paginate(5);
    return view('admin/alumniForms/index',['alumnis'=>  $alumnis]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(User $user, alumni $alumnis)
  {
    if ((Auth::check() && Auth::user()->statues == "general")) {
      return view('admin/alumniForms/create');
    } elseif (Auth::user()->alumnis()->count() >= 1) {
      session()->flash('errors', 'Your form already submitted');
      return redirect('/admin');
    } elseif ((Auth::check() && Auth::user()->statues == "alumni")){
      return view('admin/alumniForms/create');
    } elseif ((Auth::check() && Auth::user()->statues == "cooperative")){
      session()->flash('errors', 'you are not authorized to access  this form');
      return redirect('/admin');
    } elseif((Auth::check() && Auth::user()->statues == "lastyear")){
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
  public function store( User $user, Request $request)
  {
    // $merchant_id = "175158702325924";
    // $secretkey = "19324-602";
      
    $merchant_id= "914154477351038";
    $secretkey = "11696-234";
      

    if($request->isMethod('post')){
      $alumnis = alumni::where('email', $request->email)->get();

      # check if email is more than 1
      if(sizeof($alumnis) > 0){
        session()->flash('errors', 'e-mail already exists');
        return back();
      }
    }
    $data = $request->all();
          
    if($data['Membershiptype'] == 'silver'){
      $membership = $data['Membershiptype'];
      $amount = $data['silverMembershipAmount'];

      $inputs = request()->validate([
        'silverMembershipAmount'=>'min:10|integer|max:499', 
        'fullname'=>'required',
        'nationality'=>'required',
        'gender'=>'required',
        'refrenceNumber'=>'required',
        'faculty'=>'required',
        'edulevel'=>'required',
        'leanringmode'=>'required',
        'SalaryFirst'=>'required',
        'MobileNumber'=>'required',
        'LandlineNumber'=>'',
        'clubtasks' => 'required',
        'email' => ['required', 'string', 'email', 'max:255'],
        'paymenttype' => 'required',
        'Subspecialty'=>'',
        'currentaddress'=>'required',
        'Currentwork'=>'required',
        'CurrentPosition'=>'',
        'Currentworkaddress' => '',
        'Scientificliterature'=>'',
        'Communityposts'=>'',
        'Otherachievements'=>'',
        'SkillsAbilities'=>'',
        'additionaltask'=>'',
        'Membershiptype'=>'required',
        'termsCondtions'=>'required']);
    } elseif($data['Membershiptype'] == 'golden'){
      $membership = $data['Membershiptype'];
      $amount = $data['goldenMembershipAmount'];
      $inputs = request()->validate([
        'goldenMembershipAmount'=>'min:500|integer|max:999', 
        'fullname'=>'required',
        'nationality'=>'required',
        'gender'=>'required',
        'refrenceNumber'=>'required',
        'faculty'=>'required',
        'edulevel'=>'required',
        'leanringmode'=>'required',
        'SalaryFirst'=>'required',
        'MobileNumber'=>'required',
        'LandlineNumber'=>'',
        'clubtasks' => 'required',
        'email' => ['required', 'string', 'email', 'max:255'],
        'paymenttype' => 'required',
        'Subspecialty'=>'',
        'currentaddress'=>'required',
        'Currentwork'=>'required',
        'CurrentPosition'=>'',
        'Currentworkaddress' => '',
        'Scientificliterature'=>'',
        'Communityposts'=>'',
        'Otherachievements'=>'',
        'SkillsAbilities'=>'',
        'additionaltask'=>'',
        'Membershiptype'=>'required',
        'termsCondtions'=>'required']);
    } elseif($data['Membershiptype'] == 'platinum'){
      $amount = $data['PlatinumMembershipAmount'];
      $membership = $data['Membershiptype'];
      $inputs = request()->validate([
        'PlatinumMembershipAmount'=>'min:1000|integer',
        'fullname'=>'required',
        'nationality'=>'required',
        'gender'=>'required',
        'refrenceNumber'=>'required',
        'faculty'=>'required',
        'edulevel'=>'required',
        'leanringmode'=>'required',
        'SalaryFirst'=>'required',
        'MobileNumber'=>'required',
        'LandlineNumber'=>'',
        'clubtasks' => 'required',
        'email' => ['required', 'string', 'email', 'max:255'],
        'paymenttype' => 'required',
        'Subspecialty'=>'',
        'currentaddress'=>'required',
        'Currentwork'=>'required',
        'CurrentPosition'=>'',
        'Currentworkaddress' => '',
        'Scientificliterature'=>'',
        'Communityposts'=>'',
        'Otherachievements'=>'',
        'SkillsAbilities'=>'',
        'additionaltask'=>'',
        'Membershiptype'=>'required',
        'termsCondtions'=>'required']);
    }

    //session()->flash('toast_success', 'Your form has been submitted successfully ');
    //echo "<pre>";print_r($data);die();

    auth()->user()->alumnis()->create($inputs);

    $order_id = "alumniclub-".time();
    
    $hashed_string = hash_hmac("md5", $secretkey.$membership.$amount.$order_id, $secretkey);

    $post = [
      'detail' => $membership,
      'amount' => $amount,
      'order_id' => $order_id,
      'hash' => $hashed_string,
      'name' => $data['fullname'],
      'email' => $data['email'],
      'phone' => $data['MobileNumber']
    ];

    Session::put('form_names','Alumni');
    //echo Session::get('form_names');die();
    Session::put('user_id', Auth::user()->id);
    Session::put('membership_type', $membership);
    Session::put('amount', $amount);

    //$ch = curl_init('https://sandbox.senangpay.my/payment/343154510969262');
    $ch = curl_init('https://app.senangpay.my/payment/914154477351038');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    // execute!
    $response = curl_exec($ch);

    // close the connection, release resources used
    curl_close($ch);

    // do anything you want with your response
    echo $response;
    //echo "<pre>";print_r($response);
    //die();

    //return redirect('https://sandbox.senangpay.my/payment/343154510969262');
  }

  //echo "<pre>";print_r($data);
    

  public function payment_response(alumni $alumnis,lastyear $lastyears, honorary $honoraries,  Request $request)
  {
    if(isset($_GET['status_id']) && isset($_GET['order_id']) && isset($_GET['msg']) && isset($_GET['transaction_id']) && isset($_GET['hash'])){
      
      $merchant_id= "914154477351038";
      $secretkey = "11696-234";

      # verify that the data was not tempered, verify the hash
      $hashed_string = hash_hmac("md5", $secretkey.$_GET['status_id'].$_GET['order_id'].$_GET['transaction_id'].$_GET['msg'], $secretkey);

      # if hash is the same then we know the data is valid
      if($hashed_string == $_GET['hash']){
        # this is a simple result page showing either the payment was successful or failed. In real life you will need to process the order made by the customer
        if($_GET['status_id'] == '1'){
          //echo "ok";
          echo 'Payment was successful with message: '.$_GET['msg'];
          //$alumni = Alumni::where('id', Session::get('user_id'))->first();
          //echo "ok2";
          //echo $alumni;

          //echo Session::get('form_names');die();
          if(Session::get('form_names') == "Alumni"){
            auth()->user()->alumnis()->update(['amount'=>Session::get('amount'), 'payment_status'=>1]);

            session()->flash('success', 'The Payment has been done successfully');

            return redirect('admin/alumniForms');
          } elseif(Session::get('form_names') == "Cooperativeform"){
            auth()->user()->honorary()->update(['amount'=>Session::get('amount'), 'payment_status'=>1]);
            session()->flash('success', 'The Payment has been done successfully');
            return redirect('admin/honoraryForm');
          } elseif(Session::get('form_names') == "lastyear"){
            auth()->user()->lastyears()->update(['amount'=>Session::get('amount'), 'payment_status'=>1]);
            session()->flash('success', 'The Payment has been done successfully');
            return redirect('/admin/lastyear');
          }
        } elseif($_GET['status_id'] == '0'){
          //echo Session::get('form_names');die();
          if(Session::get('form_names') == "Alumni"){
            auth()->user()->alumnis()->update(['amount'=>Session::get('amount'), 'payment_status'=>0]);
            session()->flash('errors', 'The Payment Failed');
            return redirect('/admin');
          } elseif(Session::get('form_names') == "Cooperativeform"){
            auth()->user()->honorary()->update(['amount'=>Session::get('amount'), 'payment_status'=>0]);
            session()->flash('errors', 'The Payment Failed');
            return redirect('/admin');
          } elseif(Session::get('form_names') == "lastyear"){
            auth()->user()->lastyears()->update(['amount'=>Session::get('amount'), 'payment_status'=>0]);
            session()->flash('errors', 'The Payment Failed');
            return redirect('/admin');
          }
        }
      } else {
        echo 'Hashed value is not correct';
      }
    }
  }
  
  public function show(alumni $alumnis)
  {
    // $alumnis = auth()->user()->alumnis()->latest()->paginate(10);
    // $this->authorize('view', $alumnis);

    return view('admin/alumniForms/detalis',['alumnis'=>  $alumnis]);
  }

  /*
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(alumni $alumnis)
  {
    if(( Auth::check() && Auth::user()->role == "user")){
      $this->authorize('view', $alumnis);
      return view('admin/alumniForms/edit',['alumnis'=>  $alumnis]);
    } elseif(( Auth::check() && Auth::user()->role == "admin")){
      return view('admin/alumniForms/edit',['alumnis'=>  $alumnis]);
    }
  }

  public function upgrade(alumni $alumnis)
  {
    if(( Auth::check() && Auth::user()->role == "user")){
      $this->authorize('view', $alumnis);
      return view('admin/alumniForms/upgrade',['alumnis'=> $alumnis]);
    }
  }

  public function upgradePlan(alumni $alumnis, Request $request)
  {
    $merchant_id= "914154477351038";
    $secretkey = "11696-234";

    $data = $request->all();

    if($data['Membershiptype'] == 'Silver'){
      $membership = $data['Membershiptype'];
      $amount = $data['silverMembershipAmount'];
      $inputs = request()->validate([
        'Membershiptype'=>'required',
        'email'=>'required',
        'MobileNumber'=>'required',
        'fullname'=>'required',
        'paymenttype'=>'required',
        'silverMembershipAmount'=>'min:10|integer|max:499'
      ]);

      $alumnis->Membershiptype = $inputs['Membershiptype'];
      $alumnis->email = $inputs['email'];
      $alumnis->MobileNumber = $inputs['MobileNumber'];
      $alumnis->fullname = $inputs['fullname'];
      $alumnis->paymenttype = $inputs['paymenttype'];
    } else if($data['Membershiptype'] == 'Golden'){
      $membership = $data['Membershiptype'];
      $amount = $data['goldenMembershipAmount'];

      $inputs = request()->validate([
        'Membershiptype'=>'required',
        'email'=>'required',
        'MobileNumber'=>'required',
        'fullname'=>'required',
        'paymenttype'=>'required',
        'goldenMembershipAmount'=>'min:500|integer|max:999'
      ]);

      $alumnis->Membershiptype = $inputs['Membershiptype'];
      $alumnis->email = $inputs['email'];
      $alumnis->MobileNumber = $inputs['MobileNumber'];
      $alumnis->fullname = $inputs['fullname'];
      $alumnis->paymenttype = $inputs['paymenttype'];
    } else if($data['Membershiptype'] == 'Platinum'){
      $amount = $data['PlatinumMembershipAmount'];
      $membership = $data['Membershiptype'];

      $inputs = request()->validate([
        'Membershiptype'=>'required',
        'email'=>'required',
        'MobileNumber'=>'required',
        'fullname'=>'required',
        'paymenttype'=>'required',
        'PlatinumMembershipAmount'=>'min:1000|integer'
      ]);

      $alumnis->Membershiptype = $inputs['Membershiptype'];
      $alumnis->email = $inputs['email'];
      $alumnis->MobileNumber = $inputs['MobileNumber'];
      $alumnis->fullname = $inputs['fullname'];
      $alumnis->paymenttype = $inputs['paymenttype'];
    }

    $order_id = "alumniclub-".time();

    $hashed_string = hash_hmac("md5", $secretkey.$membership.$amount.$order_id, $secretkey);

    $post = [
      'detail' => $membership,
      'amount' => $amount,
      'order_id' => $order_id,
      'hash' => $hashed_string,
      'name' => $data['fullname'],
      'email' => $data['email'],
      'phone' => $data['MobileNumber']
    ];

    Session::put('form_names','Alumni');
    //echo Session::get('form_names');die();
    Session::put('user_id', Auth::user()->id);
    Session::put('membership_type', $membership);
    Session::put('amount', $amount);

    $ch = curl_init('https://app.senangpay.my/payment/914154477351038');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    // execute!
    $response = curl_exec($ch);

    // close the connection, release resources used
    curl_close($ch);

    // do anything you want with your response
    echo $response;
    echo "<pre>";print_r($response);

    auth()->user()->alumnis()->save($alumnis);

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(alumni $alumnis)
  {
    $inputs = request()->validate([
      // 'fullname'=>'required',
      // 'nationality'=>'required',
      // 'gender'=>'required',
      // 'refrenceNumber'=>'required',
      'faculty'=>'required',
       
      'Membershiptype'=>'',
      'edulevel'=>'required',
      'leanringmode'=>'required',
      'SalaryFirst'=>'required',
      'MobileNumber'=>'required',
      'email' => 'required',

      'LandlineNumber'=>'',
      'clubtasks' => 'required',
    
      'Subspecialty'=>'',
      'currentaddress'=>'required',
      'Currentwork'=>'required',
      'CurrentPosition'=>'',
      'Currentworkaddress' => '',
     
      'Scientificliterature'=>'',
      'Communityposts'=>'',
      'Otherachievements'=>'',
      'SkillsAbilities'=>'',
      'additionaltask'=>'',
      'upgrade_request'=>'',
      // 'termsCondtions'=>'required',
    ]);

    // $alumnis->fullname = $inputs['fullname'];
    // $alumnis->nationality = $inputs['nationality'];
    // $alumnis->gender = $inputs['gender'];
    // $alumnis->refrenceNumber = ['refrenceNumber'];
    $alumnis->faculty = $inputs['faculty'];
    $alumnis->Membershiptype = $inputs['Membershiptype'];

    $alumnis->upgrade_request = $inputs['upgrade_request'];
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

    $alumnis->Scientificliterature =$inputs['Scientificliterature'];
    $alumnis->Communityposts = $inputs['Communityposts'];
    $alumnis->Otherachievements = $inputs['Otherachievements'];
    $alumnis->SkillsAbilities = $inputs['SkillsAbilities'];
    $alumnis->additionaltask = $inputs['additionaltask'];

    $alumnis->save();

    session()->flash('toast_info', 'Form has been Updated Successfully');

    return redirect('admin');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(alumni $alumnis,Request $request)
  {
    if(( Auth::check() && Auth::user()->role == "user")){
      $this->authorize('delete', $alumnis);
      $alumnis->delete();

      $request->session()->flash('toast_warning', 'Form was deleted');

      return back();
    } elseif (( Auth::check() && Auth::user()->role == "admin")){
      $alumnis->delete();
      $request->session()->flash('toast_warning', 'Form was deleted');
      return back();
    }
  }

  /**
   *.contact us form
   */
  public function contactForm(){
    $alumnis = auth()->user()->alumnis()->latest()->paginate(10);

    return view('admin/alumniForms/contact-us',['alumnis'=>  $alumnis]);
  }

  public function contact(User $user, Request $request){
    $inputs = request()->validate([
      'name'=>['required', 'string', 'max:40', 'min:3'],
      'email'=> ['required', 'string', 'email', 'max:255'],
      'subject'=>['required', 'string', 'max:40', 'min:5'],
      'body'=> ['required', 'string', 'max:1000']
    ]);

    $contacts = new cotnact;
    $contacts->name = $inputs['name'];
    $contacts->email = $inputs['email'];
    $contacts->subject = $inputs['subject'];
    $contacts->body = $inputs['body'];

    $contacts->save();

    Mail::send('emails.contact-message', ['msg'=> $request->body,'name'=>$request->name, 'email'=> $request->email, 'subject'=>$request->subject], function($mail) use($request){
        // $mail->from($request->email,$request->name);
        $mail->to('alumni.club@mediu.edu.my')->subject('Contact form inquiry');
      });

    Mail::send('emails.auto-reply-contact-form', ['email'=> $request->email, 'name'=>$request->name],
      function($mail) use($request){
        // $mail->from('alumni.club@mediu.edu.my','Alumni Club Contact Form');
        $mail->to($request->email)->subject('Contact form inquiry');
      });

    session()->flash('success', 'Your contact form he been sent successfully');

    return redirect('admin');
  }

  public function upgradeRequestt(alumni $alumnis){
    if(( Auth::check() && Auth::user()->role == "user")){
      $this->authorize('update', $alumnis);
      return view('admin/alumniForms/upgradeRequestt',['alumnis'=>  $alumnis]);
    }
  }

  public function UpgradRequest(alumni $alumnis, Request $request){

    $inputs = request()->validate([
      'upgrade_request'=>'required',
      'fullname'=>'required',
      'Membershiptype'=>'required',
      'MobileNumber'=>'required',
      'email'=>'required'
    ]);

    $alumnis = alumni::find($alumnis->id);

    if(Auth::check() && Auth::user() && $alumnis->Membershiptype == $inputs['upgrade_request']){

      session()->flash('errors', 'choose another plan');

      return redirect('admin');
    } else {
      $alumnis->upgrade_request = $inputs['upgrade_request'];
      $alumnis->fullname = $inputs['fullname'];
      $alumnis->Membershiptype = $inputs['Membershiptype'];
      $alumnis->MobileNumber = $inputs['MobileNumber'];
      $alumnis->email = $inputs['email'];

      auth()->user()->alumnis()->save($alumnis);
    }

    Mail::send('emails.upgrade-request', ['upgrade_request'=> $request->upgrade_request,'fullname'=>$request->fullname, 'email'=> $request->email, 'Membershiptype'=>$request->Membershiptype,'MobileNumber'=>$request->MobileNumber], 
      function($mail) use($request){
        // $mail->from($request->email,'Alumni User');

        $mail->to('alumni.club@mediu.edu.my')->subject('Upgrade Request');
      });

    Mail::send('emails.auto-reply-uprgdae-request', ['upgrade_request'=> $request->upgrade_request,'fullname'=>$request->fullname, 'email'=> $request->email], function($mail) use($request){
      // $mail->from('alumni.club@mediu.edu.my','Alumni Club');
      $mail->to($request->email)->subject('Upgrade Request');
    });

    session()->flash('success', 'Your Request has been sent successfully');

    return redirect('admin');
  }
}
