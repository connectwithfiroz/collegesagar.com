@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Diploma & ITI | Studysparrow</title>
    <link rel="stylesheet" href="{{  asset('frontend/assets/css/diploma-iti.css') }}">
@endpush

@section('section')
    <section class="tech-hero">
        <div class="container">
            <h1 class="hero-title">ITI & Polytechnic <span style="color: #2d5a27;">Diploma</span></h1>
            <p class="text-muted mt-3">Start your technical journey with career-focused ITI and Polytechnic programs.
            </p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <div class="icon-tech"><i class="bi bi-lightning-fill"></i></div>
                    <span class="type-badge">ITI Trade</span>
                    <h4 class="course-name">ITI Electrician</h4>
                    <p class="text-muted small">ITI Electrician focuses on practical skills in electrical wiring,
                        installation, maintenance, and repair of electrical systems for homes and industries</p>
                    <div class="button-flex">
                        <a href="student?college=ITI Electrician" class="btn-apply text-center">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="btn-wa"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <div class="icon-tech"><i class="bi bi-tools"></i></div>
                    <span class="type-badge">ITI Trade</span>
                    <h4 class="course-name">ITI Fitter</h4>
                    <p class="text-muted small">ITI Fitter focuses on practical skills in assembling, fitting,
                        maintaining, and repairing mechanical parts and industrial machinery.</p>
                    <div class="button-flex">
                        <a href="student?college=ITI Fitter" class="btn-apply text-center">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="btn-wa"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <div class="icon-tech"><i class="bi bi-gear-fill"></i></div>
                    <span class="type-badge">Polytechnic Diploma</span>
                    <h4 class="course-name">Diploma Mechanical</h4>
                    <p class="text-muted small">Diploma in Mechanical Engineering focuses on practical knowledge of
                        machines, manufacturing processes, and maintenance of mechanical systems used in industries.</p>
                    <div class="button-flex">
                        <a href="student?college=Diploma Mechanical" class="btn-apply text-center">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="btn-wa"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <div class="icon-tech"><i class="bi bi-cone-striped"></i></div>
                    <span class="type-badge">Polytechnic Diploma</span>
                    <h4 class="course-name">Diploma Civil</h4>
                    <p class="text-muted small">Diploma in Civil Engineering focuses on practical skills in
                        construction, surveying, and infrastructure development such as buildings, roads, and bridges.
                    </p>
                    <div class="button-flex">
                        <a href="student?college=Diploma Civil" class="btn-apply text-center">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="btn-wa"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <div class="icon-tech"><i class="bi bi-cpu-fill"></i></div>
                    <span class="type-badge">Polytechnic Diploma</span>
                    <h4 class="course-name">Diploma CS / IT</h4>
                    <p class="text-muted small">Diploma in CS / IT focuses on practical skills in programming, software
                        development, networking, and computer applications for the digital world.</p>
                    <div class="button-flex">
                        <a href="student?college=Polytechnic Diploma" class="btn-apply text-center">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="btn-wa"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <div class="icon-tech"><i class="bi bi-display"></i></div>
                    <span class="type-badge">ITI Trade</span>
                    <h4 class="course-name">ITI COPA</h4>
                    <p class="text-muted small">ITI COPA (Computer Operator & Programming Assistant) focuses on
                        practical computer skills, office applications, basic programming, and IT tools for digital
                        workplace roles.</p>
                    <div class="button-flex">
                        <a href="student?college=ITI COPA" class="btn-apply text-center">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="btn-wa"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('footer')
<!-- extra footer -->
@endpush