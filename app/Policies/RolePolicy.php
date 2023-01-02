<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Spatie\Permission\Models\Role;

class RolePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function view(User $user, Role $role): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function create(User $user): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function update(User $user, Role $role): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function delete(User $user, Role $role): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function restore(User $user, Role $role): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function forceDelete(User $user, Role $role): bool
    {
        return $user->hasRole('Super Admin');
    }
}
