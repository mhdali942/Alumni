<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class honorary extends Model
{
    use HasFactory;


      protected $fillable = ['user_id','Regulations','fullname', 'nationality', 'gender','IcNo', 'edulevel',
	 'currentaddress','Currentwork', 'CurrentPosition', 'Currentworkaddress','Previouswork','Previouspositions', 'Scientificliterature',
	 'Communityposts', 'Otherachievements','SalaryFirst', 
   		 'MobileNumber', 'LandlineNumber','email',  'Membershiptype','amount','payment_status','paymenttype','upgrade_request'];



   		  public function user(){
        return $this->belongsTo(User::class);
    }

     public function payments(){
        return $this->belongsTo(payment::class);
    }
    

}
