<?php

namespace Tests\Feature;

use App\Category;
use App\Destinations;
use App\Tag;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class DestinationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('local');
    }

    public function test_destinations_index_can_be_rendered_for_admin(): void
    {
        $admin = User::factory()->admin()->create();

        $response = $this->actingAs($admin)->get('/destinations');

        $response->assertStatus(200);
    }

    public function test_destinations_create_page_requires_category(): void
    {
        $admin = User::factory()->admin()->create();

        $response = $this->actingAs($admin)->get('/destinations/create');

        // Without categories, middleware should redirect
        $response->assertRedirect();
    }

    public function test_destinations_create_page_can_be_rendered_with_category(): void
    {
        $admin = User::factory()->admin()->create();
        Category::factory()->create();

        $response = $this->actingAs($admin)->get('/destinations/create');

        $response->assertStatus(200);
    }

    public function test_admin_can_create_destination(): void
    {
        $admin = User::factory()->admin()->create();
        $category = Category::factory()->create();
        $tag = Tag::factory()->create();

        $response = $this->actingAs($admin)->post('/destinations', [
            'title' => 'Test Destination',
            'description' => 'Test description',
            'content' => 'Test content for destination',
            'image' => UploadedFile::fake()->image('destination.jpg'),
            'pricing' => '$500',
            'category' => $category->id,
            'tags' => [$tag->id],
            'published_at' => now(),
        ]);

        $response->assertRedirect('/destinations');
        $this->assertDatabaseHas('destinations', [
            'title' => 'Test Destination',
        ]);
    }

    public function test_admin_can_update_destination(): void
    {
        $admin = User::factory()->admin()->create();
        $destination = Destinations::factory()->create();

        $response = $this->actingAs($admin)->put("/destinations/{$destination->id}", [
            'title' => 'Updated Title',
            'description' => 'Updated description',
            'content' => 'Updated content',
            'pricing' => '$750',
            'category' => $destination->category_id,
        ]);

        $response->assertRedirect('/destinations');
        $this->assertDatabaseHas('destinations', [
            'id' => $destination->id,
            'title' => 'Updated Title',
        ]);
    }

    public function test_admin_can_soft_delete_destination(): void
    {
        $admin = User::factory()->admin()->create();
        $destination = Destinations::factory()->create();

        $response = $this->actingAs($admin)->delete("/destinations/{$destination->id}");

        $response->assertRedirect('/destinations');
        $this->assertSoftDeleted('destinations', [
            'id' => $destination->id,
        ]);
    }

    public function test_admin_can_view_trashed_destinations(): void
    {
        $admin = User::factory()->admin()->create();
        $destination = Destinations::factory()->create();
        $destination->delete();

        $response = $this->actingAs($admin)->get('/trashed-destinations');

        $response->assertStatus(200);
    }

    public function test_admin_can_restore_destination(): void
    {
        $admin = User::factory()->admin()->create();
        $destination = Destinations::factory()->create();
        $destination->delete();

        $response = $this->actingAs($admin)->put("/restore-destinations/{$destination->id}");

        $response->assertRedirect();
        $this->assertDatabaseHas('destinations', [
            'id' => $destination->id,
            'deleted_at' => null,
        ]);
    }

    public function test_non_admin_cannot_create_destination(): void
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();

        $response = $this->actingAs($user)->post('/destinations', [
            'title' => 'Test Destination',
            'description' => 'Test description',
            'content' => 'Test content',
            'image' => UploadedFile::fake()->image('destination.jpg'),
            'pricing' => '$300',
            'category' => $category->id,
        ]);

        $response->assertStatus(403);
    }

    public function test_destination_requires_title(): void
    {
        $admin = User::factory()->admin()->create();
        $category = Category::factory()->create();

        $response = $this->actingAs($admin)->post('/destinations', [
            'description' => 'Test description',
            'content' => 'Test content',
            'image' => UploadedFile::fake()->image('destination.jpg'),
            'pricing' => '$400',
            'category' => $category->id,
        ]);

        $response->assertSessionHasErrors('title');
    }
}
