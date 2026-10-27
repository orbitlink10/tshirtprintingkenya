<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class EnquiryController extends Controller
{
    public function index(Request $request)
    {
        $enquiries = $this->enquiries();
        $perPage = 20;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        return view('admin.enquiries.index', [
            'enquiries' => new LengthAwarePaginator(
                $enquiries->forPage($currentPage, $perPage)->values(),
                $enquiries->count(),
                $perPage,
                $currentPage,
                [
                    'path' => $request->url(),
                    'query' => $request->query(),
                ],
            ),
        ]);
    }

    public function artwork(string $id)
    {
        $record = $this->enquiries()->firstWhere('id', $id);

        abort_if(! $record || empty($record['artwork']), 404);
        abort_unless(Storage::disk('local')->exists($record['artwork']), 404);

        return Storage::disk('local')->download($record['artwork']);
    }

    private function enquiries(): Collection
    {
        if (! Storage::disk('local')->exists('enquiries.jsonl')) {
            return collect();
        }

        return collect(preg_split('/\R/', Storage::disk('local')->get('enquiries.jsonl')) ?: [])
            ->filter(fn ($line) => trim($line) !== '')
            ->map(fn ($line) => json_decode($line, true))
            ->filter(fn ($row) => is_array($row) && ! empty($row['id']))
            ->sortByDesc('created_at')
            ->values();
    }
}
