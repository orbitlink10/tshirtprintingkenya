@extends('layouts.app')
@php
    $heroImage = $content['home_hero_image'];
    $heroImageUrl = str_starts_with($heroImage, 'http') ? $heroImage : asset('storage/'.$heroImage);

    $services = [
        [
            'title' => 'Bulk T-Shirt Printing',
            'text' => 'Consistent T-shirts for teams, schools, organisations and large groups. Share your quantities, size breakdown and artwork so the order can be quoted accurately.',
            'url' => url('/services/bulk-t-shirt-printing'),
            'link' => 'See how bulk orders work',
        ],
        [
            'title' => 'Corporate T-Shirt Branding',
            'text' => 'Branded staff and promotional T-shirts for businesses that want a clear, consistent brand presence on their team.',
            'url' => url('/services/corporate-t-shirt-branding'),
            'link' => 'Explore corporate branding',
        ],
        [
            'title' => 'Event T-Shirt Printing',
            'text' => 'T-shirts for events, campaigns, school activities and group projects, planned around your artwork and required date.',
            'url' => url('/services/event-t-shirt-printing'),
            'link' => 'Plan event T-shirts',
        ],
        [
            'title' => 'T-Shirt Printing Prices',
            'text' => 'Understand the factors that change a quote, from quantity and garment choice to print size, colours and finishing.',
            'url' => url('/t-shirt-printing-prices'),
            'link' => 'See pricing factors',
        ],
        [
            'title' => 'All Printing Services',
            'text' => 'Compare the confirmed T-shirt printing services available and choose the page that matches your order.',
            'url' => url('/services'),
            'link' => 'View all services',
        ],
        [
            'title' => 'Request a Quote',
            'text' => 'Tell us what you need and receive a quote based on your actual specification, not a generic price list.',
            'url' => url('/contact'),
            'link' => 'Start a quote request',
        ],
    ];

    $useCases = [
        ['title' => 'Businesses and teams', 'text' => 'Staff uniforms, team days, promotions and internal campaigns.'],
        ['title' => 'Schools and colleges', 'text' => 'Sports days, clubs, trips, graduations and school events.'],
        ['title' => 'Events and campaigns', 'text' => 'Conferences, fun runs, community drives and awareness campaigns.'],
        ['title' => 'Promotions and giveaways', 'text' => 'Promotional T-shirts for launches, activations and customer gifts.'],
        ['title' => 'Organisations and groups', 'text' => 'Community groups, associations, churches and volunteer teams.'],
        ['title' => 'Personal designs', 'text' => 'Family events, celebrations, gifts and small personal projects.'],
    ];

    $quoteFactors = [
        'Quantity and the size breakdown you need.',
        'Garment type, fabric, colour and fit.',
        'Print size and where the print sits on the T-shirt.',
        'Number of colours, where the print method uses colour separations.',
        'Artwork preparation, redrawing or cleanup.',
        'Finishing, collection or delivery and the required date.',
    ];

    $faqs = [
        ['q' => 'How much does T-shirt printing cost in Kenya?', 'a' => 'It depends on the quantity, garment, print size and placement, colours, artwork and finishing. We do not publish a single price because orders vary. Send your details through the quote form for a personalised quote.'],
        ['q' => 'What is the minimum order quantity?', 'a' => 'Minimum quantities depend on the garment and print method. Tell us how many pieces you need and we will confirm what is possible for your job.'],
        ['q' => 'Can you print our logo or design?', 'a' => 'Send your logo or artwork with the enquiry. If the file is not print-ready, tell us and we will confirm what preparation is needed before quoting.'],
        ['q' => 'Which printing method do you use?', 'a' => 'The method is confirmed per order based on the artwork, fabric, colours, quantity and finish. We will explain the suitable option in your quote.'],
        ['q' => 'Can one order include different sizes?', 'a' => 'Yes. Provide a size breakdown so the quantities can be checked and priced correctly.'],
        ['q' => 'Do you deliver?', 'a' => 'Collection and delivery are confirmed with each quote. Include your location and required date so the arrangement can be checked.'],
        ['q' => 'How long will my order take?', 'a' => 'Production time depends on quantity, garment availability, artwork approval and finishing. We confirm the expected timing with your quote.'],
        ['q' => 'Can I approve a proof before production?', 'a' => 'Where a proof is needed for your order, we will share it for approval before production. Ask about the proof process when you enquire.'],
    ];
@endphp
@section('title', 'T-Shirt Printing in Nairobi & Kenya | T-Shirt Printing Kenya')
@section('meta_description', 'Custom T-shirt printing in Nairobi and across Kenya for businesses, schools, events and organisations. Request a personalised quote for your order.')
@section('canonical', url('/'))
@section('og_image', $heroImageUrl)

@section('content')
<section class="hero section" style="--hero-image:url('{{ $heroImageUrl }}')">
    <div class="container py-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <h1 class="display-4 fw-bold">{{ $content['home_hero_title'] }}</h1>
                <p class="lead mb-4">{{ $content['home_hero_description'] }}</p>
                <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-brand btn-lg" href="{{ url('/contact') }}">{{ $content['home_primary_cta'] }}</a>
                    <a class="btn btn-light btn-lg" href="{{ url('/services') }}">{{ $content['home_provider_cta'] }}</a>
                </div>
                <p class="mt-3 mb-0 small text-white-50">Nairobi-based T-shirt printing and branding. Quotes are prepared from your order details.</p>
            </div>
            <div class="col-lg-5">
                @if($homeVideoEmbedUrl)
                    <div class="hero-video">
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="{{ $homeVideoEmbedUrl }}" title="T-shirt printing video" allowfullscreen></iframe>
                        </div>
                    </div>
                @else
                    <div class="hero-quote-card">
                        <h2>What to send for a quote</h2>
                        <ul>
                            <li>Quantity and size breakdown</li>
                            <li>Garment style, fabric and colour</li>
                            <li>Print size and placement</li>
                            <li>Logo or artwork file</li>
                            <li>Required date and delivery location</li>
                        </ul>
                        <a class="btn btn-light w-100" href="{{ url('/contact') }}">Request a Quote</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<div class="trust-strip">
    <div class="container d-flex flex-wrap justify-content-center gap-4">
        <span><i class="bi bi-check-circle-fill" aria-hidden="true"></i> T-shirt printing is our main service</span>
        <span><i class="bi bi-check-circle-fill" aria-hidden="true"></i> Bulk, corporate and event orders</span>
        <span><i class="bi bi-check-circle-fill" aria-hidden="true"></i> Quote-based pricing</span>
    </div>
</div>

<section class="section services-kingdom" id="services">
    <div class="container">
        <h2 class="section-title">{{ $content['home_services_title'] }}</h2>
        @if($content['home_services_subtitle'])
            <p class="text-center text-muted lead mb-5">{{ $content['home_services_subtitle'] }}</p>
        @endif
        <div class="row g-4 justify-content-center">
            @foreach($services as $service)
                <div class="col-md-6 col-lg-4">
                    <article class="kingdom-service-card h-100">
                        <div class="kingdom-check"><i class="bi bi-check-lg" aria-hidden="true"></i></div>
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['text'] }}</p>
                        <a class="kingdom-link" href="{{ $service['url'] }}">{{ $service['link'] }} <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section" id="printing-options">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="option-panel">
                    <h2>Printing options for your T-shirt order</h2>
                    <p>T-shirt printing uses different production methods. The right one depends on your artwork, fabric, number of colours, order size and the finish you want. We confirm the available method for your job when we quote.</p>
                    <p>If you already know the method you need, include it in your enquiry. If not, describe the look you want and we will advise on the options that suit your order.</p>
                    <ul class="mb-4">
                        <li>Tell us the purpose of the T-shirts and where they will be worn.</li>
                        <li>Share any brand colours or artwork guidelines you need us to follow.</li>
                        <li>Point out deadlines, event dates or distribution requirements early.</li>
                    </ul>
                    <a class="btn btn-outline-success" href="{{ url('/services') }}">Compare printing services</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="option-panel">
                    <h2>What changes a T-shirt printing quote</h2>
                    <p>There is no single price for a printed T-shirt. We price each order from the details you provide.</p>
                    @foreach($quoteFactors as $factor)
                        <div class="quote-factor"><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>{{ $factor }}</span></div>
                    @endforeach
                    <a class="btn btn-brand mt-4" href="{{ url('/t-shirt-printing-prices') }}">See pricing factors</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-white" id="use-cases">
    <div class="container">
        <h2 class="section-heading text-center mb-2">T-shirts for teams, schools, events and promotions</h2>
        <p class="text-center text-muted lead mb-5">The same printing service can support very different orders. These are common ways customers use printed T-shirts.</p>
        <div class="row g-3">
            @foreach($useCases as $useCase)
                <div class="col-md-6 col-lg-4">
                    <div class="use-case-card">
                        <h3>{{ $useCase['title'] }}</h3>
                        <p>{{ $useCase['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section" id="how-it-works">
    <div class="container">
        <h2 class="section-heading text-center mb-2">How to place a T-shirt printing order</h2>
        <p class="text-center text-muted lead mb-5">A clear brief helps us quote accurately and reduces surprises before production.</p>
        <div class="row g-3">
            <div class="col-md-6 col-lg-3">
                <div class="process-card">
                    <div class="process-number">1</div>
                    <h3>{{ $content['home_how_title_1'] }}</h3>
                    <p>{{ $content['home_how_text_1'] }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="process-card">
                    <div class="process-number">2</div>
                    <h3>{{ $content['home_how_title_2'] }}</h3>
                    <p>{{ $content['home_how_text_2'] }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="process-card">
                    <div class="process-number">3</div>
                    <h3>{{ $content['home_how_title_3'] }}</h3>
                    <p>{{ $content['home_how_text_3'] }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="process-card">
                    <div class="process-number">4</div>
                    <h3>{{ $content['home_how_title_4'] }}</h3>
                    <p>{{ $content['home_how_text_4'] }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-white" id="why-tpk">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <h2 class="section-heading">{{ $content['home_why_title'] }}</h2>
                <p class="text-muted">{{ $content['home_why_text'] }}</p>
                <ul class="why-list">
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>T-shirt printing and branding is our focus, not an add-on to unrelated services.</span></li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Quotes are built from your actual quantity, garment and print requirements.</span></li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>We ask for the artwork, sizes and placement details before confirming an order.</span></li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>We serve businesses, schools, organisations, events and individuals in Nairobi and across Kenya.</span></li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="option-panel">
                    <h2 class="h4">Have an order in mind?</h2>
                    <p>Share what you know so far. If a detail is missing, we will confirm it before quoting.</p>
                    <a class="btn btn-brand w-100 mb-2" href="{{ url('/contact') }}">Request a Quote</a>
                    <a class="btn btn-outline-success w-100" href="{{ url('/t-shirt-printing-prices') }}">Read the pricing guide</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="service-areas">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <h2 class="section-heading">{{ $content['home_areas_title'] }}</h2>
                <p class="lead mb-2">{{ $content['home_areas_text'] }}</p>
                <p class="text-muted mb-0">Share your location and required date in the enquiry so collection or delivery can be confirmed with your quote.</p>
            </div>
            <div class="col-lg-5">
                <div class="option-panel">
                    <h2 class="h4">A note on delivery</h2>
                    <p class="mb-0">We do not publish a standard delivery promise because each order is different. Your quote will confirm the collection or delivery arrangement that applies to your order.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-white" id="faqs">
    <div class="container">
        <h2 class="section-heading text-center mb-2">T-shirt printing FAQs</h2>
        <p class="text-center text-muted lead mb-5">Straight answers to the questions that come up most often before an order.</p>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                @foreach($faqs as $faq)
                    <details class="faq-item">
                        <summary>{{ $faq['q'] }}</summary>
                        <p>{{ $faq['a'] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="section pt-0" id="request-quote">
    <div class="container">
        <div class="final-cta">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h2>Request a T-shirt printing quote</h2>
                    <p class="mb-0">Tell us the quantity, garment type, print placement, artwork and required date. We will respond with the next steps and a personalised quote.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-light btn-lg" href="{{ url('/contact') }}">Request a Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('structured_data')
<script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => collect($faqs)->map(fn ($faq) => [
            '@type' => 'Question',
            'name' => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['a'],
            ],
        ])->values()->all(),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush
