<?php

namespace Database\Seeders;

use App\Category;
use App\Destinations;
use App\Tag;
use Illuminate\Database\Seeder;

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
            'description' => 'The City of Lights — iconic landmarks, world-class cuisine, and timeless romance await around every cobblestone corner.',
            'content' => 'Paris needs no introduction. From the iron lattice of the Eiffel Tower piercing the skyline to the hallowed halls of the Louvre housing the Mona Lisa, every moment in Paris feels cinematic. Stroll along the Seine at sunset, lose yourself in the charming streets of Montmartre, and savour buttery croissants at a sidewalk café. Visit the gothic masterpiece of Notre-Dame, explore the bohemian Marais district, and watch the city sparkle from the steps of Sacré-Cœur. Whether you\'re sipping wine in a hidden courtyard or browsing the bookstalls along the Left Bank, Paris delivers an experience that lingers long after you leave. This tour includes guided visits to Versailles, a Seine river cruise, and a food-tasting walk through Le Marais.',
            'category_id' => $category1->id,
            'image' => 'images/destination-1.jpg',
            'published_at' => now(),
            'duration' => '5 Days / 4 Nights',
            'group_size' => '8-12 People',
            'tour_type' => 'Cultural & Sightseeing',
        ]);

        $destination2 = Destinations::create([
            'pricing' => 'Kshs 60000',
            'title' => 'Italian Riviera',
            'description' => 'Sun-drenched coastlines, pastel villages clinging to cliffs, and the freshest Mediterranean cuisine you\'ll ever taste.',
            'content' => 'The Italian Riviera, stretching along the Ligurian coast, is where dramatic cliff faces meet crystal-clear turquoise waters. Begin in glamorous Portofino, where luxury yachts bob in a tiny harbour surrounded by painted facades. Hike the legendary Cinque Terre trail connecting five centuries-old fishing villages — Monterosso, Vernazza, Corniglia, Manarola, and Riomaggiore — each more photogenic than the last. Feast on fresh pesto (invented right here in Genoa), focaccia di Recco, and locally caught seafood paired with crisp Vermentino wine. Explore the elegant promenades of Santa Margherita Ligure, swim in secluded coves accessible only by boat, and watch the sunset paint the Mediterranean gold from a terraced vineyard. This tour includes boat transfers between villages, a cooking class, and guided coastal hikes.',
            'category_id' => $category3->id,
            'image' => 'images/destination-2.jpg',
            'published_at' => now(),
            'duration' => '6 Days / 5 Nights',
            'group_size' => '6-10 People',
            'tour_type' => 'Beach & Adventure',
        ]);

        $destination3 = Destinations::create([
            'pricing' => 'Kshs 45000',
            'title' => 'Mombasa, Kenya',
            'description' => 'Where Swahili culture meets pristine Indian Ocean beaches — Kenya\'s vibrant coastal gem with centuries of history.',
            'content' => 'Mombasa is Kenya\'s second-largest city and its oldest, with a history stretching back over a thousand years as a major trading port on the Indian Ocean. Walk through the narrow streets of Old Town where ornately carved Swahili doors open to hidden courtyards, and coral stone buildings whisper tales of Arab, Portuguese, and British traders. Explore the 16th-century Fort Jesus, a UNESCO World Heritage Site built by the Portuguese to guard the old port. Then trade history for paradise on the stunning white-sand beaches of Diani and Nyali, where warm turquoise waters teem with dolphins, whale sharks, and colourful reef fish. Enjoy fresh Swahili cuisine — pilau rice, coconut fish curry, and freshly grilled prawns at beachside restaurants. This all-inclusive package covers airport transfers, beachfront accommodation, a dhow sailing excursion, Haller Park wildlife visit, and a guided Old Town walking tour.',
            'category_id' => $category4->id,
            'image' => 'images/destination-3.jpg',
            'published_at' => now(),
            'duration' => '7 Days / 6 Nights',
            'group_size' => '10-15 People',
            'tour_type' => 'Beach & Culture',
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
