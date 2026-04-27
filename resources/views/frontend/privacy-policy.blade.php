@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Privacy & Policy - {{ config('app.name') }}</title>
    <meta name="description"
        content="Collegesagar is your ultimate guide to finding the perfect college. Explore comprehensive information, reviews, and resources to make informed decisions about your education journey. Discover top colleges, courses, and career paths with us.">
@endpush

@section('content')
    <header class="policy-header text-center mb-5">
        <div class="container">
            <span class="badge bg-white text-primary mb-3 px-3 py-2 rounded-pill fw-bold">Updated: Feb 2026</span>
            <h1 class="fw-800 display-5">Privacy Policy</h1>
            <p class="opacity-75 lead">Your trust is our priority. Learn how we protect your data at CollegeSagar.</p>
        </div>
    </header>

    <div class="container mb-5 pb-5">
        <div class="row gx-lg-5">

            <div class="col-lg-3 d-none d-lg-block">
                <div class="sticky-sidebar">
                    <h6 class="fw-800 text-uppercase small mb-3" style="letter-spacing: 1px;">Contents</h6>
                    <nav>
                        <a href="#introduction" class="nav-link-custom mb-1 rounded">1. Introduction</a>
                        <a href="#data-collection" class="nav-link-custom mb-1 rounded">2. Data We Collect</a>
                        <a href="#how-we-use" class="nav-link-custom mb-1 rounded">3. Usage of Data</a>
                        <a href="#security" class="nav-link-custom mb-1 rounded">4. Data Security</a>
                        <a href="#scholarship-info" class="nav-link-custom mb-1 rounded">5. Scholarship Terms</a>
                        <a href="#cookies" class="nav-link-custom mb-1 rounded">6. Cookies Policy</a>
                        <a href="#contact" class="nav-link-custom mb-1 rounded">7. Contact Us</a>
                    </nav>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="policy-card">

                    <section id="introduction" class="policy-section">
                        <h3>1. Introduction</h3>
                        <p>Welcome to <strong>CollegeSagar</strong>. We are committed to protecting your personal
                            information and your right to privacy. This policy explains how we handle your data when you
                            use our website for admissions, scholarship evaluations, and counseling services.</p>
                    </section>

                    <section id="data-collection" class="policy-section">
                        <h3>2. Information We Collect</h3>
                        <p>We collect information that you provide directly to us when you register for a scholarship
                            test or book a counseling session:</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i><strong>Personal
                                    Identifiers:</strong> Name, Email, Phone Number.</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i><strong>Academic
                                    Details:</strong> 10th/12th marks for merit evaluation.</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i><strong>Payment
                                    Info:</strong> Registration fee transaction details (₹1,000).</li>
                        </ul>
                    </section>

                    <section id="how-we-use" class="policy-section">
                        <h3>3. How We Use Your Data</h3>
                        <p>Your information is used to provide you with the best educational opportunities:</p>
                        <ul>
                            <li>To verify your merit eligibility for UP To 100% scholarships.</li>
                            <li>To process your ₹1,000 registration fee securely.</li>
                            <li>To facilitate direct reporting at our partner colleges.</li>
                            <li>To issue the <strong>Legal Service Agreement</strong> protecting your admission.</li>
                        </ul>
                    </section>

                    <section id="security" class="policy-section">
                        <div class="p-4 rounded-4 bg-light border-start border-5 border-primary">
                            <h3 class="mb-2 mt-0"><i class="bi bi-shield-lock-fill me-2"></i>4. Data Security</h3>
                            <p class="mb-0">CollegeSagar uses industry-standard encryption to protect your academic
                                records and payment data. We do not sell your personal information to third-party
                                advertisers.</p>
                        </div>
                    </section>

                    <section id="scholarship-info" class="policy-section mt-5">
                        <h3>5. Scholarship Transparency</h3>
                        <p>Our Merit Assessment process is fair and transparent. Data provided for scholarship
                            evaluation is strictly shared only with the specific college chosen by the student during
                            Phase 02 of the admission flow.</p>
                    </section>

                    <section id="cookies" class="policy-section">
                        <h3>6. Cookies Policy</h3>
                        <p>We use cookies to enhance your browsing experience, remember your course preferences, and
                            analyze website traffic to improve our counseling services.</p>
                    </section>

                    <hr class="my-5 opacity-10">

                    <section id="contact" class="policy-section text-center">
                        <h3 class="mb-3">Questions?</h3>
                        <p>If you have any questions about this Privacy Policy, please contact our support team.</p>
                        <div class="mt-4">
                            <a href="mailto:support@collegesagar.com"
                                class="btn btn-primary px-4 py-2 rounded-pill fw-bold me-2">
                                <i class="bi bi-envelope-at me-2"></i>Email Us
                            </a>
                            <a href="contact.html" class="btn btn-outline-primary px-4 py-2 rounded-pill fw-bold">
                                <i class="bi bi-telephone me-2"></i>Call Support
                            </a>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('footer')
    <!-- extra footer -->
@endpush