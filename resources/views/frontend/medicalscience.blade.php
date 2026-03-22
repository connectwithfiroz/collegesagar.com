@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Colleges in Bengaluru | Studysparrow</title>
    <link rel="stylesheet" href="{{  asset('frontend/assets/css/medicalscinece.css') }}">
@endpush

@section('section')
    <section class="hero-bg text-center">
        <div class="container">
            <h1 class="hero-title">Medical Science <span style="color: #4CAF50;">Admissions</span></h1>
            <p class="lead text-muted mt-3">Medical Science Admissions focus on entry into healthcare programs that
                prepare students for careers in medicine, diagnostics, and patient care.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="section-header text-center">
                <h2>Explore All Medical Courses</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="medical-card">
                        <div class="icon-circle"><i class="bi bi-heart-pulse-fill"></i></div>
                        <h4 class="course-title">MBBS</h4>
                        <p class="text-muted small">MBBS (Bachelor of Medicine, Bachelor of Surgery) is a professional
                            medical degree that trains students to become qualified doctors in diagnosis, treatment, and
                            patient care.
                        </p>
                        <div class="cta-group">
                            <a href="student?college=MBBS" class="btn-apply-now">Apply Now</a>
                            <a href="https://wa.me/91XXXXXXXXXX" class="btn-whatsapp-icon"><i
                                    class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="medical-card">
                        <div class="icon-circle"><i class="bi bi-hospital"></i></div>
                        <h4 class="course-title">BDS (Dental)</h4>
                        <p class="text-muted small">BDS (Bachelor of Dental Surgery) is a professional degree that
                            trains students in oral health care, dental procedures, and treatment of teeth and gum
                            diseases.
                        </p>
                        <div class="cta-group">
                            <a href="student?college=BDS (Dental)" class="btn-apply-now">Apply Now</a>
                            <a href="https://wa.me/91XXXXXXXXXX" class="btn-whatsapp-icon"><i
                                    class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="medical-card">
                        <div class="icon-circle"><i class="bi bi-leaf-fill"></i></div>
                        <h4 class="course-title">BAMS / BHMS</h4>
                        <p class="text-muted small">BAMS / BHMS are medical degrees focused on Ayurvedic and Homeopathic
                            systems of medicine, emphasizing natural healing and holistic patient care.</p>
                        <div class="cta-group">
                            <a href="student?college=BAMS / BHMS" class="btn-apply-now">Apply Now</a>
                            <a href="https://wa.me/91XXXXXXXXXX" class="btn-whatsapp-icon"><i
                                    class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('footer')
<!-- extra footer -->
@endpush