<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function admin (User $user){
        return $user->role_id==1;
    }

    public function redac (User $user){
        return $user->role_id==2 || $user->role_id==3;
    }
}
