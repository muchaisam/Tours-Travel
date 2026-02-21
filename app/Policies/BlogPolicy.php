<?php

namespace App\Policies;

use App\Blog;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any blog posts.
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the blog post.
     */
    public function view(?User $user, Blog $blog): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create blog posts.
     */
    public function create(User $user): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the blog post.
     */
    public function update(User $user, Blog $blog): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the blog post.
     */
    public function delete(User $user, Blog $blog): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the blog post.
     */
    public function restore(User $user, Blog $blog): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the blog post.
     */
    public function forceDelete(User $user, Blog $blog): bool
    {
        return $user->isAdmin();
    }
}
