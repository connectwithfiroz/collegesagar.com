@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Starter - {{ config('app.name') }}</title>
    <meta name="description"
        content="Collegesagar is your ultimate guide to finding the perfect college. Explore comprehensive information, reviews, and resources to make informed decisions about your education journey. Discover top colleges, courses, and career paths with us.">
@endpush

@section('content')
    <section class="hero-pro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="hero-badge">OFFICIAL 2026 ENTRANCE</span>
                    <h1 class="display-pro">Study in Top Colleges <br><span style="color: var(--accent-blue);">Pay Zero
                            Tuition Fee.</span></h1>
                    <p class="lead text-muted mb-5" style="font-size: 1.25rem;">We identify high-performing talent
                        through our national assessment and sponsor 100% of their academic tuition fees.</p>
                    <h3>Scholarship Program <br> Powered by: Eraglobal Education</h3>
                    <a href="https://eraglobaledu.com/" class="btn-pro"
                        style="background: var(--accent-blue); color: white;">Visit Us</a>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('website/assests/image/stude.jpg') }}" class="bento-img shadow-lg" alt="Students">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="bento-card">
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <div>
                                <h2 class="fw-800">100% Academic Coverage</h2>
                                <p class="text-muted">Perform in the top tier and eliminate your debt.</p>
                            </div>
                            <i class="bi bi-patch-check-fill text-primary fs-1"></i>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-white rounded-4 border">
                                    <span class="chip chip-free mb-2">Covered by us</span>
                                    <span class="chip chip-free mb-2">UP to 100% Scholarship</span>
                                    <h6 class="fw-bold mb-1">Full Tuition Fees</h6>
                                    <p class="small text-muted m-0">Entire course duration cost.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-white rounded-4 border">
                                    <span class="chip chip-pay mb-2">Student responsibility</span>
                                    <h6 class="fw-bold mb-1">Hostel , Exam Fees & Miscellaneous</h6>
                                    <p class="small text-muted m-0">Standard university payouts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bento-card bg-primary text-white">
                        <h1 class="display-4 fw-800">100+</h1>
                        <p class="opacity-75">Partnered Institutions across the country offering direct Admission UP to 100%
                            with Scholarship Program.</p>
                        <hr class="opacity-25">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-lightning-fill text-warning"></i>
                            <span>Immediate Admission Letters</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-800 display-6">The Leadership Team</h2>
                <p class="text-muted">Connecting merit to opportunity.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="team-card text-center">
                        <img src="{{ asset('website/assests/image/firoz.png') }}" class="team-avatar shadow-sm mb-3">
                        <h5 class="fw-bold mb-1">Firoz Ansari</h5>
                        <p class="text-muted small">Co-Founder</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="social-btn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-btn"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card text-center">
                        <img src="{{ asset('website/assests/image/shahba.png') }}" class="team-avatar shadow-sm mb-3">
                        <h5 class="fw-bold mb-1">Shahbaz Anjoom</h5>
                        <p class="text-muted small">C.E.O</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="social-btn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-btn"><i class="bi bi-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card text-center">
                        <img src="{{ asset('website/assests/image/shahiinn.PNG') }}" class="team-avatar shadow-sm mb-3">
                        <h5 class="fw-bold mb-1">Sahin Salaar</h5>
                        <p class="text-muted small">Businees Director</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="social-btn"><i class="bi bi-twitter-x"></i></a>
                            <a href="#" class="social-btn"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="glass-cta text-center">
            <h2 class="display-5 fw-800 mb-4">Start Your Merit Journey</h2>
            <p class="mb-5 opacity-75 mx-auto" style="max-width: 600px;">Take the 90-minute online scholarship test and
                get evaluated for a 100% tuition waiver today.</p>
            <a href="form.html" class="btn-pro">Apply for Scholarship Test</a>
        </div>
    </section>
@endsection
@push('footer')
    <!-- extra footer -->
@endpush