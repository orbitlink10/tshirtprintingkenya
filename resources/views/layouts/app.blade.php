@php
    $siteName = 'T-Shirt Printing Kenya';
    $defaultDescription = 'Custom T-shirt printing in Nairobi and across Kenya for businesses, schools, events and organisations. Request a personalised quote for your order.';
    $metaDescription = trim($__env->yieldContent('meta_description', $defaultDescription));
    $metaTitle = trim($__env->yieldContent('title', $siteName));
    $titleText = $metaTitle;
    if (mb_strlen($titleText) < 25 && ! str_contains($titleText, $siteName)) {
        $titleText .= ' | '.$siteName;
    }
    $canonical = trim($__env->yieldContent('canonical', url()->current()));
    $ogImage = trim($__env->yieldContent('og_image', 'https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?auto=format&fit=crop&w=1200&h=630&q=80'));
    $ogType = trim($__env->yieldContent('og_type', 'website'));
    $robots = app()->environment(['local', 'staging']) ? 'noindex,nofollow' : 'index,follow';
@endphp
<!doctype html>
<html lang="en-KE">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{!! $metaDescription !!}">
    <meta name="robots" content="{{ $robots }}">
    <link rel="canonical" href="{!! $canonical !!}">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:type" content="{!! $ogType !!}">
    <meta property="og:title" content="{!! $titleText !!}">
    <meta property="og:description" content="{!! $metaDescription !!}">
    <meta property="og:url" content="{!! $canonical !!}">
    <meta property="og:image" content="{!! $ogImage !!}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{!! $titleText !!}">
    <meta name="twitter:description" content="{!! $metaDescription !!}">
    <meta name="twitter:image" content="{!! $ogImage !!}">
    <meta name="theme-color" content="#683bb3">
    <title>{!! $titleText !!}</title>
    <link rel="preconnect" href="https://images.unsplash.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root { --slk-green:#0f9f6e; --slk-blue:#0b5ed7; --slk-ink:#123; --slk-soft:#eef8f4; }
        body { background:#f6f9fb; color:var(--slk-ink); font-size:1rem; }
        .navbar { box-shadow:0 8px 30px rgba(16,24,40,.08); }
        .navbar .nav-link { color:#334155; font-size:1rem; font-weight:600; }
        .navbar .nav-link:hover,
        .navbar .nav-link.active { color:var(--slk-green); }
        .navbar .navbar-brand { color:#0f172a; white-space:nowrap; }
        .brand-mark { width:38px; height:38px; border-radius:8px; background:linear-gradient(135deg,var(--slk-green),var(--slk-blue)); display:inline-grid; place-items:center; color:#fff; font-weight:800; font-size:.72rem; letter-spacing:.02em; }
        .btn-brand { background:var(--slk-green); color:#fff; border:0; }
        .btn-brand:hover, .btn-brand:focus { background:#0a8a5f; color:#fff; }
        .text-brand { color:var(--slk-green); }
        .hero { background:linear-gradient(120deg,rgba(8,91,66,.92),rgba(9,75,151,.88)), var(--hero-image) center/cover; color:#fff; }
        .hero h1 { font-size:clamp(2.35rem, 4vw, 3.75rem); }
        .hero-video { background:rgba(255,255,255,.14); border:1px solid rgba(255,255,255,.28); border-radius:14px; padding:10px; backdrop-filter:blur(4px); }
        .hero-quote-card { background:rgba(255,255,255,.14); border:1px solid rgba(255,255,255,.28); border-radius:14px; padding:24px; backdrop-filter:blur(4px); }
        .hero-quote-card h2 { color:#fff; font-size:1.2rem; font-weight:800; margin-bottom:12px; }
        .hero-quote-card ul { margin:0 0 18px; padding-left:20px; color:#f2fbf7; }
        .hero-quote-card li { margin-bottom:7px; }
        .lead { font-size:1.16rem; }
        .section { padding:54px 0; }
        h2 { font-size:1.8rem; }
        h3 { font-size:1.3rem; }
        h5 { font-size:1.12rem; }
        .btn-lg { --bs-btn-font-size:1.08rem; --bs-btn-padding-y:.68rem; --bs-btn-padding-x:1.08rem; }
        .card { border:0; border-radius:8px; box-shadow:0 12px 35px rgba(16,24,40,.08); }
        .section-heading { color:#172342; font-size:clamp(1.7rem,3vw,2.35rem); font-weight:850; letter-spacing:0; }
        .services-kingdom { background:#fff; }
        .services-kingdom .section-title { color:#172342; font-size:clamp(1.7rem,3vw,2.6rem); font-weight:850; letter-spacing:0; text-align:center; margin-bottom:32px; }
        .kingdom-service-card { min-height:285px; border:2px solid #e8ebf0; border-radius:22px; box-shadow:none; background:#fff; padding:26px; display:flex; flex-direction:column; justify-content:flex-start; transition:transform .2s ease, box-shadow .2s ease; }
        .kingdom-service-card:hover { transform:translateY(-4px); box-shadow:0 18px 45px rgba(17,24,39,.08); }
        .kingdom-check { width:56px; height:56px; border-radius:50%; background:#f4b400; color:#fff; display:grid; place-items:center; font-size:1.7rem; font-weight:900; margin-bottom:24px; line-height:1; }
        .kingdom-service-card h3 { color:#172342; font-size:1.28rem; line-height:1.25; font-weight:850; margin-bottom:14px; }
        .kingdom-service-card p { color:#111827; font-size:1rem; line-height:1.45; margin-bottom:18px; }
        .kingdom-link { color:#0b5ed7; font-weight:800; text-decoration:none; margin-top:auto; }
        .kingdom-link:hover { color:#084298; text-decoration:underline; }
        .option-panel { background:#fff; border-radius:16px; padding:30px; box-shadow:0 12px 35px rgba(16,24,40,.08); height:100%; }
        .option-panel h2 { font-weight:850; color:#172342; }
        .quote-factor { display:flex; gap:12px; padding:10px 0; border-bottom:1px solid #eef1f5; }
        .quote-factor:last-child { border-bottom:0; }
        .quote-factor i { color:var(--slk-green); font-size:1.1rem; margin-top:2px; }
        .use-case-card { background:#fff; border-radius:14px; padding:22px; height:100%; box-shadow:0 10px 30px rgba(16,24,40,.06); border-top:4px solid var(--slk-green); }
        .use-case-card h3 { font-size:1.08rem; font-weight:800; color:#172342; }
        .use-case-card p { color:#4b5563; margin:0; }
        .process-card { background:#fff; border-radius:14px; padding:24px; height:100%; box-shadow:0 10px 30px rgba(16,24,40,.06); }
        .process-number { width:42px; height:42px; border-radius:50%; background:var(--slk-soft); color:#0a8a5f; display:grid; place-items:center; font-weight:900; margin-bottom:14px; }
        .process-card h3 { font-size:1.1rem; font-weight:800; color:#172342; }
        .why-list { list-style:none; margin:0; padding:0; }
        .why-list li { display:flex; gap:12px; padding:12px 0; border-bottom:1px solid #e6e8ee; }
        .why-list li:last-child { border-bottom:0; }
        .why-list i { color:var(--slk-green); font-size:1.15rem; margin-top:2px; }
        .faq-item { background:#fff; border:1px solid #e6e8ee; border-radius:10px; padding:18px 20px; margin-bottom:12px; }
        .faq-item summary { cursor:pointer; font-weight:800; color:#172342; }
        .faq-item p { margin:12px 0 0; color:#374151; }
        .final-cta { background:linear-gradient(120deg,#0a8a5f,#0b5ed7); border-radius:18px; color:#fff; padding:38px; }
        .final-cta h2 { color:#fff; font-weight:850; }
        .final-cta p { color:#eef8f4; }
        .trust-strip { background:#fff; border-bottom:1px solid #e6e8ee; padding:16px 0; }
        .trust-strip span { display:inline-flex; align-items:center; gap:8px; color:#334155; font-weight:700; font-size:.95rem; }
        .trust-strip i { color:var(--slk-green); }
        .site-footer { margin-top:56px; color:#fff; font-family:'Trebuchet MS', 'Segoe UI', Arial, sans-serif; font-size:13px; line-height:20px; }
        .footer-main { position:relative; overflow:hidden; background:linear-gradient(135deg,#0b1220,#123047); padding:46px 0 30px; }
        .footer-title { margin:0 0 16px; color:#fff; font-size:16px; line-height:22px; font-weight:700; }
        .footer-about { color:#cbd5e1; font-size:13px; line-height:20px; margin-bottom:18px; }
        .footer-brand { display:flex; align-items:center; gap:8px; margin-bottom:16px; color:#fff; text-decoration:none; }
        .footer-brand strong { font-size:18px; line-height:24px; }
        .footer-contact { display:grid; gap:9px; margin:0; padding:0; list-style:none; }
        .footer-contact li { display:flex; align-items:flex-start; gap:9px; color:#e2e8f0; font-size:13px; line-height:20px; }
        .footer-contact i, .footer-services i, .footer-links i { color:#ff8800; flex:0 0 auto; margin-top:3px; }
        .footer-services, .footer-links { columns:1; margin:0 0 18px; padding:0; list-style:none; }
        .footer-services li, .footer-links li { break-inside:avoid; display:flex; gap:8px; margin:0 0 9px; color:#e2e8f0; font-size:13px; line-height:20px; }
        .footer-services a, .footer-links a { color:#e2e8f0; text-decoration:none; }
        .footer-services a:hover, .footer-links a:hover { color:#ffad3d; }
        .footer-copy { padding-top:22px; margin-top:26px; border-top:1px solid rgba(255,255,255,.16); color:#cbd5e1; font-size:12px; line-height:18px; }
        @media (max-width: 991.98px) {
            .kingdom-service-card { min-height:auto; }
            .navbar .navbar-brand { font-size:1rem; }
        }
        @media (max-width: 575.98px) {
            .hero-quote-card { padding:18px; }
            .final-cta { padding:26px 22px; }
            .section { padding:40px 0; }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('print-theme.css') }}?v=1">
    @stack('head')
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => $siteName,
            'url' => url('/'),
            'description' => 'T-shirt printing and branding services for businesses, schools, organisations, events and individuals in Nairobi and across Kenya.',
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Nairobi'],
                ['@type' => 'Country', 'name' => 'Kenya'],
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    @stack('structured_data')
</head>
<body>
<a class="visually-hidden-focusable position-absolute top-0 start-0 p-2 bg-white text-dark" href="#main-content">Skip to content</a>
<div class="utility-bar"><div class="container"><span><i class="bi bi-palette"></i> Custom printing &amp; branding in Kenya</span><span>Business essentials. Event branding. Everyday impact.</span></div></div>
<nav class="navbar navbar-expand-lg bg-white sticky-top" aria-label="Main navigation">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('home') }}"><span class="brand-mark">TPK</span> T-Shirt Printing Kenya</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div id="nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url('/services') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">What we print</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/services') }}">T-shirt printing services</a></li>
                        <li><a class="dropdown-item" href="{{ url('/services/bulk-t-shirt-printing') }}">Bulk T-shirt printing</a></li>
                        <li><a class="dropdown-item" href="{{ url('/services/corporate-t-shirt-branding') }}">Corporate T-shirt branding</a></li>
                        <li><a class="dropdown-item" href="{{ url('/services/event-t-shirt-printing') }}">Event T-shirt printing</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ url('/t-shirt-printing-prices') }}">T-shirt printing prices</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#products">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Guides</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                @auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                    @if(auth()->user()->isRole(['admin', 'dispatcher']))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Manage</a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('admin.pages') }}">Pages</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.enquiries.index') }}">Quote Requests</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.homepage.edit') }}">Homepage Content</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.services.index') }}">What we print</a></li>
                                <li><a class="dropdown-item" href="{{ route('bookings.index') }}">Bookings</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.reports.index') }}">Reports</a></li>
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profile</a></li>
                    <li class="nav-item">
                        <form method="post" action="{{ route('logout') }}">@csrf<button class="btn btn-sm btn-outline-secondary">Logout</button></form>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                @endauth
                <li class="nav-item"><a class="btn btn-sm btn-brand" href="{{ url('/contact') }}">Request a Quote</a></li>
            </ul>
        </div>
    </div>
</nav>
<main id="main-content">
    @if(session('success'))<div class="container mt-3"><div class="alert alert-success" role="status">{{ session('success') }}</div></div>@endif
    @if($errors->any())<div class="container mt-3"><div class="alert alert-danger" role="alert">{{ $errors->first() }}</div></div>@endif
    @yield('content')
</main>
<footer class="site-footer">
    <section class="footer-main">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <a class="footer-brand" href="{{ route('home') }}"><span class="brand-mark">TPK</span><strong>T-Shirt Printing Kenya</strong></a>
                    <p class="footer-about">Make your mark with custom printing and branding for businesses, teams and events. From branded apparel to your next campaign, it starts with your idea.</p>
                    <ul class="footer-contact">
                        <li><i class="bi bi-geo-alt-fill"></i><span>Nairobi, Kenya</span></li>
                        <li><i class="bi bi-globe2"></i><span>Serving customers in Nairobi and across Kenya</span></li>
                        <li><i class="bi bi-receipt"></i><span>Quote-based pricing for each order</span></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h2 class="footer-title">Printing &amp; Branding</h2>
                    <ul class="footer-services">
                        <li><i class="bi bi-chevron-right"></i><a href="{{ url('/services') }}">T-shirt printing services</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="{{ url('/services/bulk-t-shirt-printing') }}">Bulk T-shirt printing</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="{{ url('/services/corporate-t-shirt-branding') }}">Corporate T-shirt branding</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="{{ url('/services/event-t-shirt-printing') }}">Event T-shirt printing</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="{{ url('/t-shirt-printing-prices') }}">T-shirt printing prices</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h2 class="footer-title">Get a Quote</h2>
                    <p class="footer-about">Share your product, quantity, artwork and required date. We will confirm the options and prepare a personalised quote.</p>
                    <a class="btn btn-brand mb-4" href="{{ url('/contact') }}">Request a Quote</a>
                    <h2 class="footer-title">Company</h2>
                    <ul class="footer-links">
                        <li><i class="bi bi-chevron-right"></i><a href="{{ url('/about') }}">About T-Shirt Printing Kenya</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="{{ url('/blog') }}">T-shirt printing guides</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="{{ url('/contact') }}">Contact and quote requests</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="{{ route('login') }}">Client and admin login</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-copy">&copy; {{ date('Y') }} T-Shirt Printing Kenya. T-shirt printing and branding services in Nairobi and Kenya.</div>
        </div>
    </section>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>

