<?php

namespace Tests\Feature;

use App\Blog;
use App\Category;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class BlogTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('local');
    }

    public function test_blog_index_can_be_rendered(): void
    {
        $admin = User::factory()->admin()->create();

        $response = $this->actingAs($admin)->get('/blog');

        $response->assertStatus(200);
    }

    public function test_blog_create_page_requires_category(): void
    {
        $admin = User::factory()->admin()->create();

        $response = $this->actingAs($admin)->get('/blog/create');

        // Without categories, middleware should redirect
        $response->assertRedirect();
    }

    public function test_blog_create_page_can_be_rendered_with_category(): void
    {
        $admin = User::factory()->admin()->create();
        Category::factory()->create();

        $response = $this->actingAs($admin)->get('/blog/create');

        $response->assertStatus(200);
    }

    public function test_admin_can_create_blog_post(): void
    {
        $admin = User::factory()->admin()->create();
        $category = Category::factory()->create();

        $response = $this->actingAs($admin)->post('/blog', [
            'title' => 'Test Blog Post',
            'description' => 'Test description',
            'content' => 'Test content for blog post',
            'image' => UploadedFile::fake()->image('blog.jpg'),
            'category' => $category->id,
            'published_at' => now(),
        ]);

        $response->assertRedirect('/blog');
        $this->assertDatabaseHas('blogs', [
            'title' => 'Test Blog Post',
        ]);
    }

    public function test_admin_can_update_blog_post(): void
    {
        $admin = User::factory()->admin()->create();
        $blog = Blog::factory()->create();

        $response = $this->actingAs($admin)->put("/blog/{$blog->id}", [
            'title' => 'Updated Blog Title',
            'description' => 'Updated description',
            'content' => 'Updated content',
            'category' => $blog->category_id,
        ]);

        $response->assertRedirect('/blog');
        $this->assertDatabaseHas('blogs', [
            'id' => $blog->id,
            'title' => 'Updated Blog Title',
        ]);
    }

    public function test_non_admin_cannot_create_blog_post(): void
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();

        $response = $this->actingAs($user)->post('/blog', [
            'title' => 'Test Blog Post',
            'description' => 'Test description',
            'content' => 'Test content',
            'image' => UploadedFile::fake()->image('blog.jpg'),
            'category' => $category->id,
        ]);

        $response->assertStatus(403);
    }

    public function test_blog_post_requires_title(): void
    {
        $admin = User::factory()->admin()->create();
        $category = Category::factory()->create();

        $response = $this->actingAs($admin)->post('/blog', [
            'description' => 'Test description',
            'content' => 'Test content',
            'image' => UploadedFile::fake()->image('blog.jpg'),
            'category' => $category->id,
        ]);

        $response->assertSessionHasErrors('title');
    }
}
