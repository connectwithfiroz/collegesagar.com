@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Admission - {{ config('app.name') }}</title>
    <meta name="description"
        content="Collegesagar is your ultimate guide to finding the perfect college. Explore comprehensive information, reviews, and resources to make informed decisions about your education journey. Discover top colleges, courses, and career paths with us.">

    <link rel="stylesheet" href="{{  asset('website/assests/css/footer.css') }}">
@endpush

@section('content')
    <header class="hero-banner text-center mb-5">
        <div class="container">
            <h1 class="fw-800">Your Professional Journey</h1>
            <p class="opacity-75">Streamlined Admission Process with 100% Legal Protection</p>
        </div>
    </header>
    <div class="container pb-5">
        <div class="row g-3">
            <div class="col-lg col-md-4 col-6">
                <div class="step-card">
                    <span class="step-badge">Phase 01</span>
                    <i class="bi bi-file-earmark-ruled fs-3 text-primary d-block mb-2"></i>
                    <h6 class="fw-bold">Assessment</h6>
                    <p class="text-muted mb-0" style="font-size: 0.7rem;">Qualify our merit test for 100% scholarship.
                    </p>
                </div>
            </div>
            <div class="col-lg col-md-4 col-6">
                <div class="step-card">
                    <span class="step-badge">Phase 02</span>
                    <i class="bi bi-mortarboard fs-3 text-primary d-block mb-2"></i>
                    <h6 class="fw-bold">Selection</h6>
                    <p class="text-muted mb-0" style="font-size: 0.7rem;">Choose Technical or Paramedical courses.</p>
                </div>
            </div>
            <div class="col-lg col-md-4 col-6">
                <div class="step-card border-primary-subtle">
                    <span class="step-badge">Phase 03</span>
                    <i class="bi bi-patch-check fs-3 text-primary d-block mb-2"></i>
                    <h6 class="fw-bold">Registration</h6>
                    <p class="fw-800 text-success mb-0">₹1,000/-</p>
                    <p class="text-muted mb-0" style="font-size: 0.6rem;">Official Fee</p>
                </div>
            </div>
            <div class="col-lg col-md-6 col-6">
                <div class="step-card">
                    <span class="step-badge">Phase 04</span>
                    <i class="bi bi-headset fs-3 text-primary d-block mb-2"></i>
                    <h6 class="fw-bold">Counseling</h6>
                    <p class="text-muted mb-0" style="font-size: 0.7rem;">Complete documentation guidance.</p>
                </div>
            </div>
            <div class="col-lg col-md-6 col-12">
                <div class="step-card">
                    <span class="step-badge">Phase 05</span>
                    <i class="bi bi-building-up fs-3 text-primary d-block mb-2"></i>
                    <h6 class="fw-bold">Reporting</h6>
                    <p class="text-muted mb-0" style="font-size: 0.7rem;">Physical reporting at your college campus.</p>
                </div>
            </div>
        </div>

        <div class="legal-premium-box">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="legal-icon-wrap">
                        <i class="bi bi-shield-lock-fill"></i>
                    </div>
                    <span class="guarantee-label fw-bold text-primary small">Official Protection</span>
                    <h2 class="fw-800 my-3 h3">Legal Service <span class="text-primary">Agreement</span></h2>
                    <p class="text-muted mb-4 small">We issue a <strong>signed legal document</strong> ensuring your
                        100% scholarship and seat protection.</p>

                    <div class="d-flex align-items-center price-circle d-inline-flex px-3 py-2">
                        <div class="text-start me-3">
                            <small class="d-block opacity-75" style="font-size: 0.7rem;">Processing Charge</small>
                            <h5 class="mb-0 fw-bold">₹1,000/-</h5>
                        </div>
                        <i class="bi bi-info-circle-fill opacity-50"></i>
                    </div>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-5 mt-4 mt-lg-0">
                    <h6 class="fw-800 mb-3 text-uppercase small">Student Responsibility</h6>
                    <div class="resp-pill"><i class="bi bi-house-door-fill text-primary me-2"></i> Hostel & Messing Fees
                    </div>
                    <div class="resp-pill"><i class="bi bi-book-half text-primary me-2"></i> Library & Lab Charges</div>
                    <div class="resp-pill"><i class="bi bi-person-badge-fill text-primary me-2"></i> Uniform & Dress
                        Code</div>
                    <div class="resp-pill"><i class="bi bi-journal-text text-primary me-2"></i> University Exam Fees
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('footer')
    <!-- extra footer -->
@endpush