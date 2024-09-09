<?php
namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Post $post)
    {
        return $user->id === $post->user_id; // Only post owner can view
    }

    public function create(User $user)
    {
        return true; // Anyone logged in can create
    }

    public function update(User $user, Post $post)
    {
        return $user->id === $post->user_id; // Only post owner can update
    }

    public function delete(User $user, Post $post)
    {
        return $user->id === $post->user_id; // Only post owner can delete
    }
}
