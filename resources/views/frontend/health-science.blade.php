@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Health Sciences | Studysparrow</title>
    <link rel="stylesheet" href="{{  asset('frontend/assets/css/paramedical.css') }}">
@endpush

@section('section')
    <section class="para-hero">
        <div class="container">
            <div class="hero-badge">Allied Health Sciences Admissions 2026</div>
            <h1 class="display-5 fw-bold">Allied Health <span style="color: #4CAF50;">Sciences</span></h1>
            <p class="text-muted">Specialized healthcare programs preparing students for essential roles in modern
                medical services.
            </p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-droplet-fill"></i></div>
                    <h4 class="course-title">B.Sc Cardiology</h4>
                    <p class="text-muted small">B.Sc Cardiology focuses on the study of heart health, diagnostic
                        procedures, and assisting specialists in managing cardiovascular diseases and treatments</p>
                    <div class="cta-flex">
                        <a href="student?college=B.Sc Cardiology" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-person-bounding-box"></i></div>
                    <h4 class="course-title">B.Sc Perfusion</h4>
                    <p class="text-muted small">B.Sc Perfusion focuses on operating heart-lung machines and supporting
                        cardiac surgeons by maintaining blood circulation and oxygen levels during heart surgeries
                    </p>
                    <div class="cta-flex">
                        <a href="student?college=B.Sc Perfusion" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-universal-access"></i></div>
                    <h4 class="course-title">B.Sc Anaesthesia - OT</h4>
                    <p class="text-muted small">B.Sc Anaesthesia – OT focuses on assisting anesthesiologists, managing
                        operation theatre equipment, and ensuring patient safety during surgical procedures.
                    </p>
                    <div class="cta-flex">
                        <a href="student?college=B.Sc Anaesthesia - OT" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-universal-access"></i></div>
                    <h4 class="course-title">B.Sc Neurology</h4>
                    <p class="text-muted small">B.Sc Neurology focuses on the study of the brain and nervous system,
                        assisting specialists in diagnosing and managing neurological disorders.
                    </p>
                    <div class="cta-flex">
                        <a href="student?college=B.Sc Neurology" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-scissors"></i></div>
                    <h4 class="course-title">B.Sc Radiology</h4>
                    <p class="text-muted small">B.Sc Radiology focuses on medical imaging techniques like X-ray, CT, and
                        MRI to help diagnose and monitor diseases.</p>
                    <div class="cta-flex">
                        <a href="student?college=B.Sc Radiology" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-scissors"></i></div>
                    <h4 class="course-title">B.Sc Opthmetry</h4>
                    <p class="text-muted small">B.Sc Optometry focuses on eye care, vision testing, and diagnosing
                        visual disorders while assisting in prescribing corrective lenses</p>
                    <div class="cta-flex">
                        <a href="student?college=B.Sc Opthmetry" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-scissors"></i></div>
                    <h4 class="course-title">B.Sc Emergency Medical</h4>
                    <p class="text-muted small">B.Sc Emergency Medical focuses on providing critical pre-hospital care,
                        trauma management, and life-saving support during medical emergencies.</p>
                    <div class="cta-flex">
                        <a href="student?college=B.Sc Emergency Medical" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-scissors"></i></div>
                    <h4 class="course-title">B.Sc MLT</h4>
                    <p class="text-muted small">B.Sc MLT (Medical Laboratory Technology) focuses on diagnostic testing
                        of blood, tissues, and body fluids to help doctors detect and monitor diseases.</p>
                    <div class="cta-flex">
                        <a href="student?college=B.Sc MLT" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-scissors"></i></div>
                    <h4 class="course-title">B.Sc MLT (Letral Entery All Course)</h4>
                    <p class="text-muted small">B.Sc MLT (Lateral Entry) allows diploma holders to directly enter
                        advanced years of the program, focusing on specialized laboratory diagnostics and clinical
                        testing skills.</p>
                    <div class="cta-flex">
                        <a href="student?college=B.Sc MLT (Letral Entery All Course)" class="apply-btn">Apply
                            Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="para-card">
                    <div class="icon-circle"><i class="bi bi-scissors"></i></div>
                    <h4 class="course-title">M.Sc MLT </h4>
                    <p class="text-muted small">M.Sc MLT (Medical Laboratory Technology) focuses on advanced diagnostic
                        techniques, research, and laboratory management for accurate disease detection and healthcare
                        support</p>
                    <div class="cta-flex">
                        <a href="student?college=M.Sc MLT " class="apply-btn">Apply Now</a>
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