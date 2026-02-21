<?php

namespace Tests\Feature;

use App\Destinations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_can_be_rendered(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_about_page_can_be_rendered(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function test_packages_page_can_be_rendered(): void
    {
        $response = $this->get('/packages');

        $response->assertStatus(200);
    }

    public function test_news_page_can_be_rendered(): void
    {
        $response = $this->get('/news');

        $response->assertStatus(200);
    }

    public function test_contact_page_can_be_rendered(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    public function test_checkout_page_can_be_rendered(): void
    {
        // Checkout page requires a destination in database
        Destinations::factory()->create();

        $response = $this->get('/checkout');

        $response->assertStatus(200);
    }
}
