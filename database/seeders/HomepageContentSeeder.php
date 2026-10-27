<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class HomepageContentSeeder extends Seeder
{
    public function run(): void
    {
        $content = [
            'home_hero_title' => 'T-Shirt Printing in Nairobi, Kenya',
            'home_hero_description' => 'Custom T-shirt printing and branding for businesses, schools, organisations, events and personal projects. Share your design, quantities and preferred garments for a personalised quote.',
            'home_primary_cta' => 'Request a Quote',
            'home_provider_cta' => 'Explore Printing Options',
            'home_services_title' => 'T-Shirt Printing Services',
            'home_services_subtitle' => 'Start with the order type that matches your project.',
            'home_how_title_1' => '1. Share your brief',
            'home_how_text_1' => 'Send the design, reference images or a clear description of what you want printed.',
            'home_how_title_2' => '2. Confirm the details',
            'home_how_text_2' => 'Confirm quantities, sizes, colours, garment preferences and print placement.',
            'home_how_title_3' => '3. Approve the quote and proof',
            'home_how_text_3' => 'Review the quotation and, where a proof applies, check the artwork before production.',
            'home_how_title_4' => '4. Confirm production',
            'home_how_text_4' => 'Confirm the production details and the collection or delivery arrangement.',
            'home_why_title' => 'Why choose T-Shirt Printing Kenya',
            'home_why_text' => 'T-shirt printing is the main service. We quote from your exact requirements, confirm the artwork and sizes, and keep the process clear from enquiry to collection or delivery.',
            'home_video_url' => '',
            'home_areas_title' => 'T-shirt printing in Nairobi and across Kenya',
            'home_areas_text' => 'Orders are coordinated from Nairobi and can serve customers in other parts of Kenya. Share your location and required date so collection or delivery can be confirmed with your quote.',
            'home_hero_image' => 'https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?auto=format&fit=crop&w=1800&h=1000&q=80',
        ];

        foreach ($content as $key => $value) {
            Setting::putValue($key, $value);
        }
    }
}
