<?php

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
        $category1 = Category::create([
            'name' => 'Family travel'
        ]);

        $category2 = Category::create([
            'name' => 'Weekend Getaway'
        ]);

        $category3 = Category::create([
            'name' => 'Summer'
        ]);

        $category4 = Category::create([
            'name' => 'Explore the wild'
        ]);


        $destination1 = Destinations::create([
            //'pricing' => 'Kshs 90000',
            'title' => 'Paris, France',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'content' => ' Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh',
            'category_id' => $category1->id,
            'image' => '/destination/1.jpg'
        ]);


        $destination2 = Destinations::create([
            //'pricing' => 'Kshs 90000',
            'title' => 'Italian Riviera',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'content' => ' Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh',
            'category_id' => $category3->id,
            'image' => '{{asset($destination->2.jpg)}}'
        ]);

        $destination3 = Destinations::create([
            //'pricing' => 'Kshs 9000',
            'title' => 'Mombasa, Kenya',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'content' => ' Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh',
            'category_id' => $category4->id,
            'image' => '/destination/6.jpg'
        ]);

        $tag1 = Tag::create([
            'name' => 'travel'
        ]);

        $tag2 = Tag::create([
            'name' => 'cruise'
        ]);

        $tag3 = Tag::create([
            'name' => 'beach'
        ]);

        $tag4 = Tag::create([
            'name' => 'adventure'
        ]);

        $destination1->tags()->attach([$tag1->id, $tag2->id]);
        $destination2->tags()->attach([$tag4->id, $tag3->id]);
        $destination3->tags()->attach([$tag1->id, $tag4->id]);
        $destination1->tags()->attach([$tag3->id, $tag2->id]);
    }
}
