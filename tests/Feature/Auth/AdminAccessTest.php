<?php

namespace Tests\Feature\Auth;

use App\Category;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_access_users_list(): void
    {
        $admin = User::factory()->admin()->create();

        $response = $this->actingAs($admin)->get('/users');

        $response->assertStatus(200);
    }

    public function test_regular_user_cannot_access_users_list(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/users');

        // VerifyIsAdmin middleware redirects non-admins to home
        $response->assertRedirect('/home');
    }

    public function test_admin_can_access_destinations_create(): void
    {
        $admin = User::factory()->admin()->create();
        // verifyCategoriesCount middleware requires at least one category
        Category::factory()->create();

        $response = $this->actingAs($admin)->get('/destinations/create');

        $response->assertStatus(200);
    }

    public function test_admin_can_make_another_user_admin(): void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($admin)->post("/users/{$user->id}/make-admin");

        $response->assertRedirect('/users');
        $this->assertTrue($user->fresh()->isAdmin());
    }

    public function test_non_admin_cannot_make_another_user_admin(): void
    {
        $user = User::factory()->create();
        $otherUser = User::factory()->create();

        $response = $this->actingAs($user)->post("/users/{$otherUser->id}/make-admin");

        // VerifyIsAdmin middleware redirects non-admins to home
        $response->assertRedirect('/home');
        $this->assertFalse($otherUser->fresh()->isAdmin());
    }
}
