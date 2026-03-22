@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>paramedical | Studysparrow</title>
    <link rel="stylesheet" href="{{  asset('frontend/assets/css/paramedical.css') }}">
@endpush

@section('section')
    <section class="para-hero">
        <div class="container">
            <div class="hero-badge">Allied Healthcare Admissions 2026</div>
            <h1 class="display-5 fw-bold">Paramedical <span style="color: #4CAF50;">Sciences</span></h1>
            <p class="text-muted">Prepare for a vital role in the medical field with advanced paramedical education.
            </p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-droplet-fill"></i></div>
                    <h4 class="course-title">DMLT / B.MLT</h4>
                    <p class="text-muted small">DMLT / B.MLT (Diploma / Bachelor in Medical Laboratory Technology)
                        focuses on laboratory diagnostics, testing blood, tissues, and body fluids to support accurate
                        disease detection and patient care</p>
                    <div class="cta-flex">
                        <a href="student?college=DMLT / B.MLT" class="apply-now-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-person-bounding-box"></i></div>
                    <h4 class="course-title">Dip-Ophthalmology</h4>
                    <p class="text-muted small">Diploma in Ophthalmology focuses on eye care, vision testing, and
                        assisting in diagnosing and treating eye-related disorders</p>
                    <div class="cta-flex">
                        <a href="student?college=Dip-Ophthalmology" class="apply-now-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-universal-access"></i></div>
                    <h4 class="course-title">Dip-Dialysis</h4>
                    <p class="text-muted small">Diploma in Dialysis focuses on operating dialysis machines and providing
                        care to patients with kidney failure during hemodialysis treatment.
                    </p>
                    <div class="cta-flex">
                        <a href="student?college=Dip-Dialysis" class="apply-now-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-universal-access"></i></div>
                    <h4 class="course-title">Dip - X-ray</h4>
                    <p class="text-muted small">Diploma in X-Ray focuses on medical imaging techniques, operating X-ray
                        equipment, and assisting in diagnosing injuries and diseases.
                    </p>
                    <div class="cta-flex">
                        <a href="student?college=Dip - X-ray" class="apply-now-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-scissors"></i></div>
                    <h4 class="course-title">OTT (OT Tech)</h4>
                    <p class="text-muted small">OTT (Operation Theatre Technician) focuses on assisting surgeons,
                        preparing surgical instruments, and ensuring smooth operation theatre procedures</p>
                    <div class="cta-flex">
                        <a href="student?college=OTT (OT Tech)" class="apply-now-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-scissors"></i></div>
                    <h4 class="course-title">Dip - Hearing Instrument (H.I)</h4>
                    <p class="text-muted small">Diploma in Hearing Instrument (H.I) focuses on fitting, maintaining, and
                        repairing hearing aids, and assisting patients with hearing impairments.</p>
                    <div class="cta-flex">
                        <a href="student?college=Dip - Hearing Instrument (H.I)" class="apply-now-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-scissors"></i></div>
                    <h4 class="course-title">Dip - MRD</h4>
                    <p class="text-muted small">Diploma in MRD (Medical Records Department) focuses on managing,
                        organizing, and maintaining patient medical records for accurate hospital documentation and
                        efficient healthcare services.</p>
                    <div class="cta-flex">
                        <a href="student?college=Dip - MRD" class="apply-now-btn">Apply Now</a>
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