@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Nursing | Studysparrow</title>
    <link rel="stylesheet" href="{{  asset('frontend/assets/css/nursing.css') }}">
@endpush

@section('section')
    <section class="nurse-hero">
        <div class="container">
            <h1 class="hero-title display-5">Nursing <span style="color: #4CAF50;">Admissions</span> 2026</h1>
            <p class="text-muted mt-3">Apply for top nursing programs and begin a rewarding career in healthcare.
            </p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row g-4">


            <div class="col-lg-4 col-md-6">
                <div class="nurse-card">
                    <div class="icon-wrap"><i class="bi bi-shield-plus"></i></div>
                    <span class="reg-badge">4 Year Degree</span>
                    <h4 class="course-title">B.Sc Nursing</h4>
                    <p class="text-muted small">A professional healthcare degree that trains students in patient care,
                        clinical practice, and medical treatment in hospitals</p>
                    <div class="cta-box">
                        <a href="student?college=B.Sc Nursing" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="nurse-card">
                    <div class="icon-wrap"><i class="bi bi-heart-pulse"></i></div>
                    <span class="reg-badge">2 Year Diploma</span>
                    <h4 class="course-title">ANM</h4>
                    <p class="text-muted small">A healthcare course that trains students in basic nursing, maternal
                        care, and community health services.</p>
                    <div class="cta-box">
                        <a href="student?college=ANM" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="nurse-card">
                    <div class="icon-wrap"><i class="bi bi-bandaid"></i></div>
                    <span class="reg-badge">3.5 Year Diploma</span>
                    <h4 class="course-title">GNM</h4>
                    <p class="text-muted small">A professional nursing course that trains students in patient care,
                        clinical nursing, and maternal healthcare.</p>
                    <div class="cta-box">
                        <a href="student?college=GNM" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-6">
                <div class="nurse-card">
                    <div class="icon-wrap"><i class="bi bi-mortarboard"></i></div>
                    <span class="reg-badge">2 Year Program</span>
                    <h4 class="course-title">Post B.Sc Nursing</h4>
                    <p class="text-muted small">An advanced nursing degree designed for GNM-qualified nurses to upgrade
                        their clinical knowledge and professional skills</p>
                    <div class="cta-box">
                        <a href="student?college=Post B.Sc Nursing" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="nurse-card">
                    <div class="icon-wrap"><i class="bi bi-journal-medical"></i></div>
                    <span class="reg-badge">2 Year PG Degree</span>
                    <h4 class="course-title">M.Sc Nursing</h4>
                    <p class="text-muted small">A postgraduate degree that provides advanced knowledge in nursing
                        practice, research, and healthcare leadership.</p>
                    <div class="cta-box">
                        <a href="student?college=M.Sc Nursing" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
@push('footer')
<!-- extra footer -->
@endpush