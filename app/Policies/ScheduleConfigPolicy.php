<?php

namespace App\Policies;

use App\Models\ScheduleConfig;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ScheduleConfigPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, ScheduleConfig $scheduleConfig): bool
    {
        if ($user->hasRole('Super Admin')) {
            return true;
        }

        if ($scheduleConfig->user_id === $user->id) {
            return true;
        }

        return false;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, ScheduleConfig $scheduleConfig): bool
    {
        if ($user->hasRole('Super Admin')) {
            return true;
        }

        if ($scheduleConfig->user_id === $user->id) {
            return true;
        }

        return false;
    }

    public function delete(User $user, ScheduleConfig $scheduleConfig): bool
    {
        if ($user->hasRole('Super Admin')) {
            return true;
        }

        if ($scheduleConfig->user_id === $user->id) {
            return true;
        }

        return false;
    }

    public function restore(User $user, ScheduleConfig $scheduleConfig): bool
    {
        if ($user->hasRole('Super Admin')) {
            return true;
        }

        return false;
    }

    public function forceDelete(User $user, ScheduleConfig $scheduleConfig): bool
    {
        if ($user->hasRole('Super Admin')) {
            return true;
        }

        return false;
    }
}
