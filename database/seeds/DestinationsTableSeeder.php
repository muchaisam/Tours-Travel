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

        $category5 = Category::create([
            'name' => 'The Group Tour.'
        ]);

        $category6 = Category::create([
            'name' => 'The Gap Year.'
        ]);

        $category7 = Category::create([
            'name' => 'Road Trip.'
        ]);

        $category8 = Category::create([
            'name' => 'Solo travel'
        ]);

        $category9 = Category::create([
            'name' => 'Travel with friends'
        ]);


        $destination1 = Destinations::create([
            'pricing' => 'Kshs 90000',
            'title' => 'Paris, France',
            'description' => 'The City of Lights dazzles in every way',
            'content' => ' Nowhere else on earth makes the heart swoon like the mention of Paris. The city lures with its magnificent art, architecture, culture, and cuisine, but there’s also a quieter magic waiting to be explored: the quaint cobbled lanes, the sweet patisseries around the corner, and the cozy little bistros that beckon with a glass of Beaujolais. Get ready to make Paris your own.',
            'category_id' => $category1->id,
            'image' => 'destinations/1.jpeg'
        ]);


        $destination2 = Destinations::create([
            'pricing' => 'Kshs 60000',
            'title' => 'Italian Riviera',
            'description' => 'About Italian Riviera',
            'content' => ' Liguria, or the Italian Riviera, boasts a bounty of beaches and resort towns, such as tiny but tony Portofino and stylish Rapallo. Hiking trails lead from Portofino to the villages of Cinque Terre. The Riviera of the Setting Sun runs north from Genoa to the French border. Connected by an extensive rail network, most towns make easy daytrips from one another. Genoa is the regions principal city and is home to attractions from its famous Cathedral and the Palazzo Reale to an excellent aquarium.',
            'category_id' => $category3->id,
            'image' => 'destinations/2.jpeg'
        ]);

        $destination3 = Destinations::create([
            'pricing' => 'Kshs 9000',
            'title' => 'Mombasa, Kenya',
            'description' => 'About Mombasa',
            'content' => ' Mombasa, with a population of 900,000, is no sleepy seaside village. Its beachfront hotels appeal to travelers in search of sun, sand and surf, while its Arab, Indian and colonial European heritage makes for a wide variety of sights to see. Cannot find a taxi? Travel by tuk-tuk, a three-wheeled auto rickshaw.',
            'category_id' => $category4->id,
            'image' => 'destinations/3.jpeg'
        ]);

        $destination4 = Destinations::create([
            'pricing' => 'Kshs 109000',
            'title' => 'New York City',
            'description' => 'A city that never sleeps, never stops moving',
            'content' => ' Luxe hotels. Gritty dive bars. Broadway magic. Side-street snack carts. Whether you’re a first-time traveler or a long-time resident, NYC is a city that loves to surprise. The unrivaled mix of iconic arts spaces, endless shopping experiences, architectural marvels, and proudly distinct neighborhoods — along with the city’s accessible 24/7 transport — means there’s always more to explore in the five boroughs.',
            'category_id' => $category5->id,
            'image' => 'destinations/3.jpeg'
        ]);

        $destination5 = Destinations::create([
            'pricing' => 'Kshs 69000',
            'title' => 'Rome',
            'description' => 'Ancient sights with modern style, the Eternal City continues to shine',
            'content' => ' The sprawling city of Rome remains one of the most significant stops in the world, thanks to its seamless blend of Old World wonders and modern delights. The ruins of the Colosseum, her iconic fountains, lazy wanders through cobblestone streets with gelato in hand: All this and more beckon. Rome is a winding, spectacular city full of places to discover.',
            'category_id' => $category9->id,
            'image' => 'destinations/3.jpeg'
        ]);
        $destination6 = Destinations::create([
            'pricing' => 'Kshs 79000',
            'title' => 'Singapore',
            'description' => 'Small in size, the ‘Lion City’ offers big delights',
            'content' => ' This tiny island city-state is a study of fusions and contrasts bursting with wonders waiting to be explored. Tranquil parks abut futuristic skyscrapers and luxe shopping malls. A thriving street food scene and world-class restaurants offer countless ways to taste and sip your way through Singapore’s culinary melting pot. Your first trip to Singapore will prove that sometimes the best things come in small packages.',
            'category_id' => $category6->id,
            'image' => 'destinations/3.jpeg'
        ]);
        $destination7 = Destinations::create([
            'pricing' => 'Kshs 89000',
            'title' => 'Barcelona',
            'description' => 'A dreamy destination straight out of a fairytale',
            'content' => ' Bustling markets, tree lined blocks, and fantastical architecture cozy up to one another in this dreamy Mediterranean beach town. Paella and pintxos bars, exceptional seafood, standout local wines, a world-class arts scene, and bumping nightlife, Barcelona effortlessly blends the history of its districts with a healthy appetite for the new.',
            'category_id' => $category8->id,
            'image' => 'destinations/3.jpeg'
        ]);
        $destination8 = Destinations::create([
            'pricing' => 'Kshs 84000',
            'title' => 'London',
            'description' => 'A regal city surrounded by a rush of modern life',
            'content' => ' London is layered with history, where medieval and Victorian complement a rich and vibrant modern world. The Tower of London and Westminster neighbor local pubs and markets, and time-worn rituals like the changing of the guards take place as commuters rush to catch the Tube. It’s a place where travelers can time-hop through the city, and when they’re weary, do as Londoners do and grab a “cuppa” tea.',
            'category_id' => $category5->id,
            'image' => 'destinations/3.jpeg'
        ]);
        $destination9 = Destinations::create([
            'pricing' => 'Kshs 100,000',
            'title' => 'Tokyo',
            'description' => 'A nonstop city of thrilling contrasts',
            'content' => ' With its futuristic skyscrapers, unrivaled food scene, and wild nightlife, Tokyo is a rush of pure adrenaline. This vast and multifaceted city is famously cutting edge, yet its ancient Buddhist temples, vintage teahouses, and peaceful gardens offer a serene escape — and a poignant reminder of the city’s long history. And for those who know where to look, Tokyo’s smaller pleasures (secret ramen spots, shopping alleys, chill record bars) are often hiding in plain sight.',
            'category_id' => $category7->id,
            'image' => 'destinations/3.jpeg'
        ]);

        $tag1 = Tag::create([
            'name' => 'Travel'
        ]);

        $tag2 = Tag::create([
            'name' => 'Cruise'
        ]);

        $tag3 = Tag::create([
            'name' => 'Beach'
        ]);

        $tag4 = Tag::create([
            'name' => 'Adventure'
        ]);

        $tag5 = Tag::create([
            'name' => 'Sunset'
        ]);

        $tag6 = Tag::create([
            'name' => 'Travelphotography'
        ]);

        $tag7 = Tag::create([
            'name' => 'Nature'
        ]);

        $tag8 = Tag::create([
            'name' => 'Wanderlust'
        ]);

        $destination1->tags()->attach([$tag1->id, $tag2->id]);
        $destination2->tags()->attach([$tag4->id, $tag3->id]);
        $destination3->tags()->attach([$tag1->id, $tag4->id]);
        $destination1->tags()->attach([$tag3->id, $tag2->id]);

        $destination4->tags()->attach([$tag8->id, $tag1->id]);
        $destination5->tags()->attach([$tag7->id, $tag3->id]);
        $destination6->tags()->attach([$tag6->id, $tag8->id]);
        $destination7->tags()->attach([$tag5->id, $tag6->id]);
        $destination8->tags()->attach([$tag4->id, $tag8->id]);
        $destination9->tags()->attach([$tag7->id, $tag4->id]);
    }
}
