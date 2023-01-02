<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Works;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorksPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function view(User $user, Works $works): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function create(User $user): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function update(User $user, Works $works): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function delete(User $user, Works $works): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function restore(User $user, Works $works): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function forceDelete(User $user, Works $works): bool
    {
        return $user->hasRole('Super Admin');
    }
}
