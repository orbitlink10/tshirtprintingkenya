<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomepageContentController extends Controller
{
    private array $fields = [
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

    public function edit()
    {
        $content = collect($this->fields)->mapWithKeys(fn ($default, $key) => [
            $key => Setting::valueFor($key, $default),
        ]);

        return view('admin.homepage.edit', ['content' => $content]);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'home_hero_title' => ['required', 'string', 'max:120'],
            'home_hero_description' => ['required', 'string', 'max:500'],
            'home_primary_cta' => ['required', 'string', 'max:80'],
            'home_provider_cta' => ['required', 'string', 'max:80'],
            'home_services_title' => ['required', 'string', 'max:120'],
            'home_services_subtitle' => ['nullable', 'string', 'max:255'],
            'home_how_title_1' => ['required', 'string', 'max:80'],
            'home_how_text_1' => ['required', 'string', 'max:255'],
            'home_how_title_2' => ['required', 'string', 'max:80'],
            'home_how_text_2' => ['required', 'string', 'max:255'],
            'home_how_title_3' => ['required', 'string', 'max:80'],
            'home_how_text_3' => ['required', 'string', 'max:255'],
            'home_how_title_4' => ['required', 'string', 'max:80'],
            'home_how_text_4' => ['required', 'string', 'max:255'],
            'home_why_title' => ['required', 'string', 'max:120'],
            'home_why_text' => ['required', 'string', 'max:500'],
            'home_video_url' => ['nullable', 'string', 'max:500'],
            'home_areas_title' => ['required', 'string', 'max:120'],
            'home_areas_text' => ['required', 'string', 'max:500'],
            'home_hero_image' => ['nullable', 'image', 'max:4096'],
            'home_hero_image_url' => ['nullable', 'string', 'max:500'],
        ]);

        foreach (array_keys($this->fields) as $key) {
            if ($key === 'home_hero_image') {
                continue;
            }

            Setting::putValue($key, $data[$key] ?? '');
        }

        if ($request->hasFile('home_hero_image')) {
            Setting::putValue('home_hero_image', $request->file('home_hero_image')->store('homepage', 'public'));
        } elseif (! empty($data['home_hero_image_url'])) {
            Setting::putValue('home_hero_image', $data['home_hero_image_url']);
        }

        return back()->with('success', 'Homepage content updated.');
    }
}
