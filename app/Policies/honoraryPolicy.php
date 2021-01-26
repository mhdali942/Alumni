<?php

namespace App\Policies;

use App\Models\User;

use App\Models\honorary;


use Illuminate\Auth\Access\HandlesAuthorization;

class honoraryPolicy
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
    public function view(User $user, honorary $honoraries)
    {
       

             return $user->id === $honoraries->user_id; 
    
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
    public function update(User $user, honorary $honoraries)
    {
          return $user->id === $honoraries->user_id;  
            }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\alumni  $alumni
     * @return mixed
     */
    public function delete(User $user, honorary $honoraries)
    {
            return $user->id === $honoraries->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\alumni  $alumni
     * @return mixed
     */
    public function restore(User $user, honorary $honoraries)
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
    public function forceDelete(User $user, honorary $honoraries)
    {
        //
    }
}
