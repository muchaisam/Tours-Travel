<?php

namespace Tests\Unit\Models;

use App\Category;
use App\Destinations;
use App\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DestinationTest extends TestCase
{
    use RefreshDatabase;

    public function test_destination_belongs_to_category(): void
    {
        $category = Category::factory()->create();
        $destination = Destinations::factory()->create(['category_id' => $category->id]);

        $this->assertInstanceOf(Category::class, $destination->category);
        $this->assertEquals($category->id, $destination->category->id);
    }

    public function test_destination_has_many_tags(): void
    {
        $destination = Destinations::factory()->create();
        $tags = Tag::factory()->count(3)->create();
        $destination->tags()->attach($tags);

        $this->assertCount(3, $destination->tags);
    }

    public function test_destination_has_tag_method(): void
    {
        $destination = Destinations::factory()->create();
        $tag = Tag::factory()->create();
        $destination->tags()->attach($tag);

        $this->assertTrue($destination->hasTag($tag->id));
        $this->assertFalse($destination->hasTag(999));
    }

    public function test_destination_can_be_soft_deleted(): void
    {
        $destination = Destinations::factory()->create();
        $destination->delete();

        $this->assertSoftDeleted('destinations', ['id' => $destination->id]);
    }

    public function test_destination_can_be_restored(): void
    {
        $destination = Destinations::factory()->create();
        $destination->delete();
        $destination->restore();

        $this->assertDatabaseHas('destinations', [
            'id' => $destination->id,
            'deleted_at' => null,
        ]);
    }

    public function test_published_scope_filters_published_destinations(): void
    {
        Destinations::factory()->create(['published_at' => now()->subDay()]);
        Destinations::factory()->create(['published_at' => null]);
        Destinations::factory()->create(['published_at' => now()->addDay()]);

        $published = Destinations::published()->get();

        $this->assertCount(1, $published);
    }

    public function test_recent_scope_orders_by_published_at(): void
    {
        $old = Destinations::factory()->create(['published_at' => now()->subDays(5)]);
        $new = Destinations::factory()->create(['published_at' => now()]);

        $recent = Destinations::recent(2)->get();

        $this->assertEquals($new->id, $recent->first()->id);
        $this->assertEquals($old->id, $recent->last()->id);
    }

    public function test_in_category_scope_filters_by_category(): void
    {
        $category1 = Category::factory()->create();
        $category2 = Category::factory()->create();

        Destinations::factory()->count(2)->create(['category_id' => $category1->id]);
        Destinations::factory()->create(['category_id' => $category2->id]);

        $filtered = Destinations::inCategory($category1->id)->get();

        $this->assertCount(2, $filtered);
    }
}
