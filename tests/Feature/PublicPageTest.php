<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PublicPageTest extends TestCase
{
    public function test_public_pages_support_nested_and_single_segment_slugs(): void
    {
        Storage::fake('local');
        $slugs = ['services/bulk-t-shirt-printing', 'services/corporate-t-shirt-branding', 'services/event-t-shirt-printing', 'contact'];
        Storage::disk('local')->put('pages.json', json_encode(array_map(fn ($slug) => [
            'slug' => $slug,
            'title' => 'Printing service',
            'description' => '<p>Custom printing for your team.</p>',
        ], $slugs)));

        foreach ($slugs as $slug) {
            $this->get('/'.$slug)->assertOk()->assertSee('Custom printing for your team.');
        }

        $this->get('/services/missing-page')->assertNotFound();
        $this->get('/admin/missing-page')->assertNotFound();
    }
}
