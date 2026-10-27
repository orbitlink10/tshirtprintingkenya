@extends('layouts.dashboard')

@section('title', 'Quote Requests')
@section('dashboard-title', 'Quote Requests')
@section('dashboard-subtitle', 'Review T-shirt printing enquiries submitted through the website.')
@section('dashboard-actions')
<a class="btn btn-outline-secondary" href="{{ route('home') }}" target="_blank">View Website</a>
@endsection

@section('content')
@if(! config('mail.enquiries_address'))
    <div class="alert alert-info">
        Enquiries are stored on this page. To also receive an email notification, set <code>ENQUIRIES_EMAIL</code> in the environment file.
    </div>
@endif

<div class="card">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th scope="col">Received</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Service</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Required date</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($enquiries as $enquiry)
                        <tr>
                            <td class="text-nowrap">
                                {{ \Illuminate\Support\Carbon::parse($enquiry['created_at'])->format('d M Y, H:i') }}
                            </td>
                            <td>
                                <strong>{{ $enquiry['name'] }}</strong>
                                @if(! empty($enquiry['email']))
                                    <br><a href="mailto:{{ $enquiry['email'] }}">{{ $enquiry['email'] }}</a>
                                @endif
                                @if(! empty($enquiry['phone']))
                                    <br><span class="text-muted">{{ $enquiry['phone'] }}</span>
                                @endif
                                @if(empty($enquiry['email']) && empty($enquiry['phone']))
                                    <br><span class="text-muted">No contact method</span>
                                @endif
                            </td>
                            <td>{{ $enquiry['service'] }}</td>
                            <td>{{ $enquiry['quantity'] ?: 'Not specified' }}</td>
                            <td>{{ $enquiry['required_date'] ?: 'Not specified' }}</td>
                            <td>
                                <details>
                                    <summary>View enquiry</summary>
                                    <div class="mt-2 small">
                                        <p class="mb-1"><strong>Garment:</strong> {{ $enquiry['garment'] ?: 'Not specified' }}</p>
                                        <p class="mb-1"><strong>Placement:</strong> {{ $enquiry['placement'] ?: 'Not specified' }}</p>
                                        <p class="mb-1"><strong>Location:</strong> {{ $enquiry['location'] ?: 'Not specified' }}</p>
                                        <p class="mb-1"><strong>Message:</strong><br>{!! nl2br(e($enquiry['message'] ?: 'No additional message.')) !!}</p>
                                        @if(! empty($enquiry['artwork']))
                                            <a href="{{ route('admin.enquiries.artwork', $enquiry['id']) }}">Download artwork</a>
                                        @else
                                            <span class="text-muted">No artwork uploaded.</span>
                                        @endif
                                    </div>
                                </details>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">No quote requests yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="mt-3">
    {{ $enquiries->links() }}
</div>
@endsection
