@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Colleges in Tamilnadu | Studysparrow</title>
    <link rel="stylesheet" href="{{  asset('frontend/assets/css/study_india.css') }}">
@endpush

@section('section')
    <section class="state-header text-center">
        <div class="container position-relative">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-4">
                    <li class="breadcrumb-item"><a href="index.html"
                            class="text-white-50 text-decoration-none small">Home</a>
                    </li>

                    <li class="breadcrumb-item active text-white small" aria-current="page">Tamilnadu</li>
                </ol>
            </nav>
            <h1 class="state-title">Colleges in <span class="state-highlight">Tamilnadu</span></h1>
            <p class="header-subtext">Discover top-tier educational institutions in Tamilnadu. From engineering to
                medical, find the perfect campus for your career goals.</p>
        </div>
    </section>

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div>
                <h2 class="fw-bold m-0" style="color: var(--navy-blue);">Top Recommended</h2>
                <div
                    style="width: 50px; height: 5px; background: var(--hover-green); border-radius: 10px; margin-top: 8px;">
                </div>
            </div>
            <span class="text-muted small">Showing 4 Colleges</span>
        </div>

        <div class="row g-4">

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/./assets/image/karavli-institute.jpg') }}" alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i> Selam. Tamilnadu</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">Kaveri Institution</h5>
                        <div class="btn-group-custom">
                            <a href="student?college=Kaveri+Institution" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210?text=Hi, I am interested  Amruta Institute of Engineering and Management Sciences in admission."
                                class="btn btn-wa-icon" title="WhatsApp Inquiry">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/./assets/image/excle-img.png') }}" alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i> Tamilnadu</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">Excel institutions</h5>
                        <div class="btn-group-custom">
                            <a href="student?college=Excel+institutions" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210?text=Hi, I am interested in Excel institutions admission."
                                class="btn btn-wa-icon" title="WhatsApp Inquiry">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('footer')
    <!-- extra footer -->
@endpush