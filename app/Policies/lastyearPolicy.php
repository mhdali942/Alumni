<?php

namespace App\Policies;

use App\Models\User;
use App\Models\lastyear;
use Illuminate\Auth\Access\HandlesAuthorization;

class lastyearPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
       
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\alumni  $alumni
     * @return mixed
     */
    public function view(User $user, lastyear $lastyears)
    {
       

             return $user->id === $lastyears->user_id; 
    
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        
         return $user->is($user);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\alumni  $alumni
     * @return mixed
     */
    public function update(User $user,lastyear $lastyears)
    {
          return $user->id === $lastyears->user_id;  
            }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\alumni  $alumni
     * @return mixed
     */
    public function delete(User $user, lastyear $lastyears)
    {
            return $user->id === $lastyears->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\alumni  $alumni
     * @return mixed
     */
    public function restore(User $user, lastyear $lastyears)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\alumni  $alumni
     * @return mixed
     */
    public function forceDelete(User $user, lastyear $lastyears)
    {
        //
    }
}
