@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Pharmacy | Studysparrow</title>
    <link rel="stylesheet" href="{{  asset('frontend/assets/css/pharmacy.css') }}">
@endpush

@section('section')
    <section class="pharma-hero">
        <div class="container">
            <h1 class="hero-title">Pharmacy <span style="color: #4CAF50;">Admissions</span> 2026</h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                The field of healthcare focused on the preparation, dispensing, and proper use of medicines for patient
                treatment.
            </p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="pharma-card">
                    <div class="icon-hexagon"><i class="bi bi-capsule"></i></div>
                    <span class="course-tag">2 Year Diploma</span>
                    <h4 class="course-title">D.Pharma</h4>
                    <p class="text-muted small">D.Pharma (Diploma in Pharmacy) focuses on pharmaceutical knowledge, drug
                        preparation, dispensing, and basic healthcare services for community and hospital pharmacies.
                    </p>
                    <div class="button-wrapper">
                        <a href="student?college=D.Pharma" class="apply-now-btn text-center">Apply Now</a>
                        <a href="https://wa.me/yournumber" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pharma-card">
                    <div class="icon-hexagon"><i class="bi bi-capsule"></i></div>
                    <span class="course-tag">4 Year Degree</span>
                    <h4 class="course-title">B.Pharma</h4>
                    <p class="text-muted small">B.Pharma (Bachelor of Pharmacy) focuses on pharmaceutical sciences, drug
                        formulation, clinical pharmacy, and healthcare management for careers in medicine and research.
                    </p>
                    <div class="button-wrapper">
                        <a href="student?college=B.Pharma" class="apply-now-btn text-center">Apply Now</a>
                        <a href="https://wa.me/yournumber" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pharma-card">
                    <div class="icon-hexagon"><i class="bi bi-capsule"></i></div>
                    <span class="course-tag">2 Year PG Degree</span>
                    <h4 class="course-title">M.Pharma</h4>
                    <p class="text-muted small">M.Pharma (Master of Pharmacy) focuses on advanced pharmaceutical
                        research, drug development, clinical studies, and specialized healthcare solutions</p>
                    <div class="button-wrapper">
                        <a href="student?college=M.Pharma" class="apply-now-btn text-center">Apply Now</a>
                        <a href="https://wa.me/yournumber" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pharma-card">
                    <div class="icon-hexagon"><i class="bi bi-clipboard2-pulse"></i></div>
                    <span class="course-tag">6 Year Doctorate</span>
                    <h4 class="course-title">Pharma.D</h4>
                    <p class="text-muted small">Pharm.D (Doctor of Pharmacy) is a professional degree that trains
                        students in clinical pharmacy, patient care, medication therapy, and advanced pharmaceutical
                        practices.</p>
                    <div class="button-wrapper">
                        <a href="student?college=Pharma.D" class="apply-now-btn text-center">Apply Now</a>
                        <a href="https://wa.me/yournumber" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('footer')
<!-- extra footer -->
@endpush