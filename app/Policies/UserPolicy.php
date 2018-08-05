<?php

namespace App\Policies;

use App\Model\admin\admin;

use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function view(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        if($user->id == 1){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function update(admin $user)
    {
        if($user->id == 1){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function delete(admin $user)
    {
        if($user->id == 1){
            return true;
        }
        return false;
    }

    public function role(admin $user)
    {
        if($user->id == 1){
            return true;
        }
        return false;
    }

    public function permission(admin $user)
    {
        if($user->id == 1){
            return true;
        }
        return false;
    }
}
