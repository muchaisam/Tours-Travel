<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name' => 'Photography'
        ]);

        $category2 = Category::create([
            'name' => 'Health'
        ]);

        $category3 = Category::create([
            'name' => 'Visas'
        ]);

        $blog1 = Blog::create([
            'title' => 'Camera Backpacks',
            'description' => 'What to look for',
            'content' => ' In the best camera backpacks, you can count on having a separate pocket to keep a laptop and some extra space to store other camera accessories like lenses, SD cards, cables, external hard drives, and so on. And of course, some personal essentials like documents, passport, your phone, and so on.',
            'category_id' => $category1->id,
            'image' => 'destinations/1.jpeg'
        ]);


        $blog2 = Blog::create([
            'title' => 'Avoid Getting Sick',
            'description' => 'Tips to reduce chances of sickness',
            'content' => ' As basic as this sounds, this is an essential component of preventing sickness. I’m sure you’ve seen countless PSA all over the world about washing your hands during Covid-19, and that is because washing your hands with water and soap for 20 seconds does help reduce the spread of germs that cause respiratory and diarrheal infections.',
            'category_id' => $category2->id,
            'image' => 'destinations/2.jpeg'
        ]);
    }
}
