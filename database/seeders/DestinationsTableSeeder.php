<?php

namespace Database\Seeders;

use App\Category;
use Illuminate\Database\Seeder;
use App\Destinations;
use App\Tag;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create(['name' => 'Family travel']);
        $category2 = Category::create(['name' => 'Weekend Getaway']);
        $category3 = Category::create(['name' => 'Summer']);
        $category4 = Category::create(['name' => 'Explore the wild']);
        $category5 = Category::create(['name' => 'The Group Tour.']);
        $category6 = Category::create(['name' => 'The Gap Year.']);
        $category7 = Category::create(['name' => 'Road Trip.']);
        $category8 = Category::create(['name' => 'Solo travel']);
        $category9 = Category::create(['name' => 'Travel with friends']);

        $destination1 = Destinations::create([
            'pricing' => 'Kshs 90000',
            'title' => 'Paris, France',
            'description' => 'The City of Lights dazzles in every way',
            'content' => 'Nowhere else on earth makes the heart swoon like the mention of Paris. The city lures with its magnificent art, architecture, culture, and cuisine.',
            'category_id' => $category1->id,
            'image' => 'destinations/1.jpeg'
        ]);

        $destination2 = Destinations::create([
            'pricing' => 'Kshs 60000',
            'title' => 'Italian Riviera',
            'description' => 'About Italian Riviera',
            'content' => 'Liguria, or the Italian Riviera, boasts a bounty of beaches and resort towns, such as tiny but tony Portofino and stylish Rapallo.',
            'category_id' => $category3->id,
            'image' => 'destinations/2.jpeg'
        ]);

        $destination3 = Destinations::create([
            'pricing' => 'Kshs 9000',
            'title' => 'Mombasa, Kenya',
            'description' => 'About Mombasa',
            'content' => 'Mombasa, with a population of 900,000, is no sleepy seaside village. Its beachfront hotels appeal to travelers in search of sun, sand and surf.',
            'category_id' => $category4->id,
            'image' => 'destinations/3.jpeg'
        ]);

        // Create tags
        $tag1 = Tag::create(['name' => 'Travel']);
        $tag2 = Tag::create(['name' => 'Cruise']);
        $tag3 = Tag::create(['name' => 'Beach']);
        $tag4 = Tag::create(['name' => 'Adventure']);

        // Attach tags to destinations
        $destination1->tags()->attach([$tag1->id, $tag2->id]);
        $destination2->tags()->attach([$tag4->id, $tag3->id]);
        $destination3->tags()->attach([$tag1->id, $tag4->id]);
    }
}