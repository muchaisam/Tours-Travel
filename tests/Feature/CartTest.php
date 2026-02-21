<?php

namespace Tests\Feature;

use App\Cart;
use App\Category;
use App\Destinations;
use App\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CartTest extends TestCase
{
    use RefreshDatabase;

    public function test_cart_page_can_be_rendered(): void
    {
        // Cart page requires destination, tags, and categories
        Destinations::factory()->create();
        Tag::factory()->create();
        Category::factory()->create();

        $response = $this->get('/cart');

        $response->assertStatus(200);
    }

    public function test_cart_remove_requires_delete_method(): void
    {
        // GET request should not work anymore (security fix)
        $response = $this->get('/cart/1/remove');

        $response->assertStatus(405); // Method Not Allowed
    }

    public function test_cart_remove_accepts_delete_method(): void
    {
        // Create a cart item to remove
        $cart = Cart::create([]);

        $response = $this->delete("/cart/{$cart->id}/remove");

        // Should redirect (cart handling)
        $response->assertRedirect();
    }
}
