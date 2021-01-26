<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;



     public function alumniForm(){
        return $this->belongsTo(alumni::class);
}

 public function lastyearForm(){
        return $this->belongsTo(lastyear::class);
}


 public function honoraryForm(){
        return $this->belongsTo(honorary::class);
}


}
