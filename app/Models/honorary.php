<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class honorary extends Model
{
    use HasFactory;


      protected $fillable = ['user_id','Regulations','fullname', 'nationality', 'gender','IcNo', 'edulevel',
	 'currentaddress','Currentwork', 'CurrentPosition', 'Currentworkaddress','Previouswork','Previouspositions', 'Scientificliterature',
	 'Communityposts', 'Otherachievements', 'SkillsAbilities','SalaryFirst', 
   		 'MobileNumber', 'LandlineNumber','email', 'clubtasks','additionaltask', 'Membershiptype'];



   		  public function user(){
        return $this->belongsTo(User::class);
    }

}
