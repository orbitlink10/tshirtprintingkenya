@extends('layouts.dashboard')
@section('title', 'Homepage Content')
@section('dashboard-title', 'Homepage Content')
@section('dashboard-subtitle', 'Edit the homepage hero, service cards, ordering steps, reasons and service-area copy.')
@section('dashboard-actions')
<div class="d-flex gap-2 flex-wrap">
    <a class="btn btn-outline-primary" href="{{ route('home') }}" target="_blank">View Homepage</a>
    <a class="btn btn-outline-secondary" href="{{ route('dashboard') }}">Back to Dashboard</a>
</div>
@endsection
@section('content')
@php
    $currentHeroImage = $content['home_hero_image'];
    $currentHeroImageUrl = str_starts_with($currentHeroImage, 'http') ? $currentHeroImage : asset('storage/'.$currentHeroImage);
@endphp
<form method="post" action="{{ route('admin.homepage.update') }}" enctype="multipart/form-data" class="card">
    @csrf
    @method('put')
    <div class="card-body p-4">
        <div class="row g-3">
            <div class="col-12">
                <h2 class="h6 fw-bold text-uppercase text-muted mb-0">Hero Section</h2>
            </div>
            <div class="col-md-7">
                <label class="form-label">Hero title</label>
                <input class="form-control" name="home_hero_title" value="{{ old('home_hero_title', $content['home_hero_title']) }}" required>
            </div>
            <div class="col-md-5">
                <label class="form-label">Upload hero image</label>
                <input class="form-control" type="file" name="home_hero_image" accept="image/*">
            </div>
            <div class="col-12">
                <label class="form-label">Hero description</label>
                <textarea class="form-control" name="home_hero_description" rows="3" required>{{ old('home_hero_description', $content['home_hero_description']) }}</textarea>
            </div>
            <div class="col-md-7">
                <label class="form-label">Current hero image</label>
                <div class="border rounded p-2 bg-light">
                    <img src="{{ $currentHeroImageUrl }}" alt="Current hero image" class="img-fluid rounded" style="max-height:180px; object-fit:cover; width:100%;">
                </div>
            </div>
            <div class="col-md-5">
                <label class="form-label">Optional hero image URL</label>
                <input class="form-control" name="home_hero_image_url" value="{{ old('home_hero_image_url', str_starts_with($content['home_hero_image'], 'http') ? $content['home_hero_image'] : '') }}" placeholder="Use only if you are not uploading a file">
                <div class="form-text">Uploading an image replaces this URL and is the recommended option.</div>
                <label class="form-label mt-3">Hero video YouTube link</label>
                <input class="form-control" name="home_video_url" value="{{ old('home_video_url', $content['home_video_url']) }}" placeholder="YouTube URL, shorts URL, embed URL, or video ID">
                <div class="form-text">This video appears on the right side of the hero section.</div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Primary CTA label</label>
                <input class="form-control" name="home_primary_cta" value="{{ old('home_primary_cta', $content['home_primary_cta']) }}" required>
                <div class="form-text">Links to the quote form.</div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Secondary CTA label</label>
                <input class="form-control" name="home_provider_cta" value="{{ old('home_provider_cta', $content['home_provider_cta']) }}" required>
                <div class="form-text">Links to the services overview page.</div>
            </div>

            <div class="col-12 pt-3">
                <h2 class="h6 fw-bold text-uppercase text-muted mb-0">Services Section</h2>
            </div>
            <div class="col-md-6">
                <label class="form-label">Services title</label>
                <input class="form-control" name="home_services_title" value="{{ old('home_services_title', $content['home_services_title']) }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Services subtitle</label>
                <input class="form-control" name="home_services_subtitle" value="{{ old('home_services_subtitle', $content['home_services_subtitle']) }}">
            </div>

            <div class="col-12 pt-3">
                <h2 class="h6 fw-bold text-uppercase text-muted mb-0">How It Works</h2>
            </div>
            @for($i = 1; $i <= 4; $i++)
                <div class="col-md-6 col-lg-3">
                    <label class="form-label">Step {{ $i }} title</label>
                    <input class="form-control mb-2" name="home_how_title_{{ $i }}" value="{{ old('home_how_title_'.$i, $content['home_how_title_'.$i]) }}" required>
                    <label class="form-label">Step {{ $i }} text</label>
                    <textarea class="form-control" name="home_how_text_{{ $i }}" rows="3" required>{{ old('home_how_text_'.$i, $content['home_how_text_'.$i]) }}</textarea>
                </div>
            @endfor

            <div class="col-12 pt-3">
                <h2 class="h6 fw-bold text-uppercase text-muted mb-0">Why T-Shirt Printing Kenya</h2>
            </div>
            <div class="col-md-4">
                <label class="form-label">Section title</label>
                <input class="form-control" name="home_why_title" value="{{ old('home_why_title', $content['home_why_title']) }}" required>
            </div>
            <div class="col-md-8">
                <label class="form-label">Section text</label>
                <textarea class="form-control" name="home_why_text" rows="3" required>{{ old('home_why_text', $content['home_why_text']) }}</textarea>
            </div>

            <div class="col-12 pt-3">
                <h2 class="h6 fw-bold text-uppercase text-muted mb-0">Service Area</h2>
            </div>
            <div class="col-md-4">
                <label class="form-label">Service area title</label>
                <input class="form-control" name="home_areas_title" value="{{ old('home_areas_title', $content['home_areas_title']) }}" required>
            </div>
            <div class="col-md-8">
                <label class="form-label">Service area text</label>
                <input class="form-control" name="home_areas_text" value="{{ old('home_areas_text', $content['home_areas_text']) }}" required>
                <div class="form-text">Keep this to verified coverage. Collection and delivery are confirmed per quote.</div>
            </div>
        </div>
    </div>
    <div class="card-footer bg-white border-0 p-4 pt-0">
        <button class="btn btn-brand">Save Homepage Content</button>
    </div>
</form>
@endsection
