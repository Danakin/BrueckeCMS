<?php

namespace App\Policies;

use App\Models\PostType;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostTypePolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        if ($user->hasRole('superuser')) return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PostType  $posttype
     * @return mixed
     */
    public function view(User $user, PostType $posttype)
    {
        foreach ($user->role->permissions as $permission) {
            if ($permission->type && $permission->type->id == $posttype->id) return true;
        }
        return false;
    }
}
