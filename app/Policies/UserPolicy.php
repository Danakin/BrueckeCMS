<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * A user with the role 'superuser' can do everything.
     * 
     * @param \App\Models\User $user
     * @return boolean
     */
    public function before(User $user)
    {
        if ($user->role->name === 'superuser') {
            return true;
        }
    }

    public function updateUserData(User $user, User $target)
    {
        if (Auth::user()->id === $target->id) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update a user's password.
     * Generally, only the user can do this.
     * TODO: Add permission for this in the future?
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function updatePassword(User $user, User $target)
    {
        if (Auth::user()->id === $target->id) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update a user's permissions.
     * TODO: Add permission for this in the future?
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function updateRoles(User $requestUser, User $target)
    {
        if ($target->role->id === 1) { // Can't change a superuser's permission, only possible with Database access!
            return false;
        }
        if (Auth::user()->id === $target->id) {
            return true;
        }
        return false;
    }

    public function accessAdminPanel(User $user)
    {
        return Auth::user()->role->hasPermission('access_admin');
    }
}
