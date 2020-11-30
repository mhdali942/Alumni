<?php

namespace App\Policies;

use App\Models\User;

use App\Models\honorary;


use Illuminate\Auth\Access\HandlesAuthorization;

class honoraryPolicy
{
    use HandlesAuthorization;


 // public function create(User $user)
 //    {
        
 //         return $user->is($user);
 //    }
  
}
