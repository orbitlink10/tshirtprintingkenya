@php
    $services = [
        'Bulk T-shirt printing',
        'Corporate T-shirt branding',
        'Event T-shirt printing',
        'T-shirt printing prices',
        'Other T-shirt printing or branding',
        'Business stationery',
        'Banners and signage',
        'Promotional items',
        'Not sure yet',
    ];
    $placements = [
        'Front',
        'Back',
        'Left chest',
        'Sleeve',
        'Multiple positions',
        'Business stationery',
        'Banners and signage',
        'Promotional items',
        'Not sure yet',
    ];
@endphp
<div class="quote-form-wrap">
    <h2 class="h3 fw-bold mb-2" id="quote-form-title">Request a printing quote</h2>
    <p class="text-muted mb-4">The more detail you share, the more accurate the quote. If you are missing a detail, send what you have and we will confirm the rest.</p>
    <form method="post" action="{{ route('enquiries.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label" for="enquiry-name">Full name <span class="text-danger">*</span></label>
                <input class="form-control @error('name') is-invalid @enderror" id="enquiry-name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" required>
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6">
                <label class="form-label" for="enquiry-email">Email address</label>
                <input class="form-control @error('email') is-invalid @enderror" id="enquiry-email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" aria-describedby="contact-help">
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6">
                <label class="form-label" for="enquiry-phone">Phone or WhatsApp number</label>
                <input class="form-control @error('phone') is-invalid @enderror" id="enquiry-phone" name="phone" type="tel" value="{{ old('phone') }}" autocomplete="tel" aria-describedby="contact-help">
                @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-12">
                <p class="form-text mb-0" id="contact-help">Provide at least one contact method so we can respond to your enquiry.</p>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="enquiry-service">What do you need? <span class="text-danger">*</span></label>
                <select class="form-select @error('service') is-invalid @enderror" id="enquiry-service" name="service" required>
                    <option value="">Select a service</option>
                    @foreach($services as $service)
                        <option value="{{ $service }}" @selected(old('service') === $service)>{{ $service }}</option>
                    @endforeach
                </select>
                @error('service')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label" for="enquiry-quantity">Quantity</label>
                <input class="form-control @error('quantity') is-invalid @enderror" id="enquiry-quantity" name="quantity" type="number" min="1" step="1" value="{{ old('quantity') }}" inputmode="numeric">
                @error('quantity')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label" for="enquiry-garment">Material or garment preference</label>
                <input class="form-control @error('garment') is-invalid @enderror" id="enquiry-garment" name="garment" type="text" value="{{ old('garment') }}" placeholder="Material, style or colour, if known">
                @error('garment')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label" for="enquiry-date">Required date</label>
                <input class="form-control @error('required_date') is-invalid @enderror" id="enquiry-date" name="required_date" type="date" value="{{ old('required_date') }}" min="{{ now()->toDateString() }}">
                @error('required_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6">
                <label class="form-label" for="enquiry-placement">Print placement</label>
                <select class="form-select @error('placement') is-invalid @enderror" id="enquiry-placement" name="placement">
                    <option value="">Select a placement</option>
                    @foreach($placements as $placement)
                        <option value="{{ $placement }}" @selected(old('placement') === $placement)>{{ $placement }}</option>
                    @endforeach
                </select>
                @error('placement')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6">
                <label class="form-label" for="enquiry-location">Collection or delivery location</label>
                <input class="form-control @error('location') is-invalid @enderror" id="enquiry-location" name="location" type="text" value="{{ old('location') }}" placeholder="Area, town or delivery address">
                @error('location')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-12">
                <label class="form-label" for="enquiry-artwork">Artwork or reference file</label>
                <input class="form-control @error('artwork') is-invalid @enderror" id="enquiry-artwork" name="artwork" type="file" accept=".jpg,.jpeg,.png,.pdf,.ai,.eps,.psd,.svg,.cdr">
                <div class="form-text">Optional. JPG, PNG, PDF, AI, EPS, PSD, SVG or CDR up to 10 MB.</div>
                @error('artwork')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-12">
                <label class="form-label" for="enquiry-message">Order details</label>
                <textarea class="form-control @error('message') is-invalid @enderror" id="enquiry-message" name="message" rows="5" placeholder="Tell us about your product, dimensions, colours, design and anything else we should know.">{{ old('message') }}</textarea>
                @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="d-none" aria-hidden="true">
                <label for="enquiry-website">Website</label>
                <input id="enquiry-website" name="website" type="text" tabindex="-1" autocomplete="off">
            </div>
            <div class="col-12 d-flex flex-wrap align-items-center gap-3">
                <button class="btn btn-brand btn-lg" type="submit">Send Quote Request</button>
                <span class="text-muted small">We use these details to respond to your enquiry.</span>
            </div>
        </div>
    </form>
</div>

