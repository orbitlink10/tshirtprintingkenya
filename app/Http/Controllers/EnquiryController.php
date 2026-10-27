<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Throwable;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        if ($request->filled('website')) {
            return redirect()->route('pages.preview', 'contact')->with('success', 'Thank you. Your quote request has been received.');
        }

        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['nullable', 'email', 'max:190', 'required_without:phone'],
            'phone' => ['nullable', 'string', 'max:40', 'required_without:email'],
            'service' => ['required', 'string', 'in:Bulk T-shirt printing,Corporate T-shirt branding,Event T-shirt printing,T-shirt printing prices,Other T-shirt printing or branding,Not sure yet'],
            'quantity' => ['nullable', 'integer', 'min:1', 'max:1000000'],
            'garment' => ['nullable', 'string', 'max:120'],
            'placement' => ['nullable', 'string', 'max:80'],
            'required_date' => ['nullable', 'date', 'after_or_equal:today'],
            'location' => ['nullable', 'string', 'max:190'],
            'message' => ['nullable', 'string', 'max:3000'],
            'artwork' => ['nullable', 'file', 'max:10240', 'extensions:jpg,jpeg,png,pdf,ai,eps,psd,svg,cdr'],
        ]);

        $artworkPath = null;

        if ($request->hasFile('artwork')) {
            $artworkPath = $request->file('artwork')->store('enquiries/artwork', 'local');
        }

        $record = [
            'id' => (string) Str::uuid(),
            'created_at' => now()->toIso8601String(),
            'name' => $data['name'],
            'email' => $data['email'] ?? null,
            'phone' => $data['phone'] ?? null,
            'service' => $data['service'],
            'quantity' => $data['quantity'] ?? null,
            'garment' => $data['garment'] ?? null,
            'placement' => $data['placement'] ?? null,
            'required_date' => $data['required_date'] ?? null,
            'location' => $data['location'] ?? null,
            'message' => $data['message'] ?? null,
            'artwork' => $artworkPath,
        ];

        Storage::disk('local')->append(
            'enquiries.jsonl',
            json_encode($record, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE).PHP_EOL,
        );

        $this->notify($record);

        return redirect()->route('pages.preview', 'contact')->with('success', 'Thank you. Your quote request has been received. We will respond using the contact details you provided.');
    }

    private function notify(array $record): void
    {
        $to = config('mail.enquiries_address');

        if (! $to) {
            return;
        }

        try {
            Mail::raw($this->message($record), function ($message) use ($to, $record) {
                $message->to($to)->subject('New T-shirt printing quote request');

                if (! empty($record['email'])) {
                    $message->replyTo($record['email'], $record['name']);
                }
            });
        } catch (Throwable $exception) {
            report($exception);
        }
    }

    private function message(array $record): string
    {
        return implode("\n", [
            'New quote request',
            '',
            'Name: '.$record['name'],
            'Email: '.($record['email'] ?: 'Not provided'),
            'Phone: '.($record['phone'] ?: 'Not provided'),
            'Service: '.$record['service'],
            'Quantity: '.($record['quantity'] ?: 'Not specified'),
            'Garment: '.($record['garment'] ?: 'Not specified'),
            'Print placement: '.($record['placement'] ?: 'Not specified'),
            'Required date: '.($record['required_date'] ?: 'Not specified'),
            'Location: '.($record['location'] ?: 'Not specified'),
            'Artwork: '.($record['artwork'] ?: 'No file uploaded'),
            '',
            'Message:',
            $record['message'] ?: 'No additional message.',
            '',
            'Submitted: '.$record['created_at'],
        ]);
    }
}
