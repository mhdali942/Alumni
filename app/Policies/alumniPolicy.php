<?php

namespace App\Policies;

use App\Models\User;
use App\Models\alumni;
use Illuminate\Auth\Access\HandlesAuthorization;

class alumniPolicy
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
    public function view(User $user, alumni $alumni)
    {
       

             return $user->id === $alumni->user_id; 
    
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
    public function update(User $user, alumni $alumni)
    {
          return $user->id === $alumni->user_id;  
            }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\alumni  $alumni
     * @return mixed
     */
    public function delete(User $user, alumni $alumni)
    {
            return $user->id === $alumni->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\alumni  $alumni
     * @return mixed
     */
    public function restore(User $user, alumni $alumni)
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
    public function forceDelete(User $user, alumni $alumni)
    {
        //
    }
}
