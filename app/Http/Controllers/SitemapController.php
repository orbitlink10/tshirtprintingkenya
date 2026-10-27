<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class SitemapController extends Controller
{
    public function __invoke()
    {
        $pages = [];

        if (Storage::disk('local')->exists('pages.json')) {
            $pages = json_decode(Storage::disk('local')->get('pages.json'), true) ?? [];
        }

        $lastmod = Storage::disk('local')->exists('pages.json')
            ? date('c', Storage::disk('local')->lastModified('pages.json'))
            : now()->toAtomString();

        $urls = collect($pages)
            ->filter(fn ($page) => ! empty($page['slug']) && empty($page['noindex']))
            ->map(fn ($page) => [
                'loc' => url($page['slug']),
                'lastmod' => $lastmod,
            ])
            ->values();

        return response()
            ->view('sitemap', [
                'home' => url('/'),
                'lastmod' => $lastmod,
                'urls' => $urls,
            ])
            ->header('Content-Type', 'application/xml');
    }
}
