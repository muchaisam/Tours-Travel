<?php

namespace App\Policies;

use App\Destinations;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DestinationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any destinations.
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the destination.
     */
    public function view(?User $user, Destinations $destination): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create destinations.
     */
    public function create(User $user): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the destination.
     */
    public function update(User $user, Destinations $destination): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the destination.
     */
    public function delete(User $user, Destinations $destination): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the destination.
     */
    public function restore(User $user, Destinations $destination): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the destination.
     */
    public function forceDelete(User $user, Destinations $destination): bool
    {
        return $user->isAdmin();
    }
}
