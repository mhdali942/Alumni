<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lastyear extends Model
{
    use HasFactory;
    
      protected $fillable = ['user_id','termsCondtions','fullname', 'nationality', 'gender','refrenceNumber', 'faculty', 'edulevel',
	  'leanringmode','Subspecialty','currentaddress','Currentwork', 'CurrentPosition', 'Currentworkaddress','Scientificliterature','Communityposts', 'Otherachievements', 'SkillsAbilities','additionaltask','SalaryFirst', 
   		 'MobileNumber', 'LandlineNumber','email', 'clubtasks', 'Membershiptype','amount','payment_status','paymenttype'];



   		  public function user(){
        return $this->belongsTo(User::class);
}

	

	 public function payments(){
        return $this->belongsTo(payment::class);
    }

    
}