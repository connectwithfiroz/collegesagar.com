@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Engineering | Studysparrow</title>
    <link rel="stylesheet" href="{{  asset('frontend/assets/css/engineering.css') }}">
@endpush

@section('section')
    <section class="eng-hero">
        <div class="container">
            <span class="section-tag">B.Tech / B.E. Admissions 2026</span>
            <h1 class="hero-title display-4">Engineering your <span style="color: #2d5a27;">Future</span></h1>
            <p class="text-muted fs-5">Build the skills, knowledge, and innovation needed for tomorrow’s engineering
                world.
            </p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="eng-card">
                    <div class="icon-wrapper"><i class="bi bi-laptop"></i></div>
                    <h4 class="eng-name">Computer Science (CSE)</h4>
                    <p class="text-muted small">Computer Science (CSE) focuses on software development, programming, and
                        computing technologies that drive modern applications and digital innovation.</p>
                    <div class="btn-group-custom">
                        <a href="student?college=Computer Science (CSE)" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-icon-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="eng-card">
                    <div class="icon-wrapper"><i class="bi bi-cloud-arrow-up"></i></div>
                    <h4 class="eng-name">Information Tech (IT)</h4>
                    <p class="text-muted small">Information Technology (IT) focuses on managing computer systems,
                        networks, and data to support businesses and digital services efficiently.</p>
                    <div class="btn-group-custom">
                        <a href="student?college=Information Tech (IT)" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-icon-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="eng-card">
                    <div class="icon-wrapper"><i class="bi bi-cloud-arrow-up"></i></div>
                    <h4 class="eng-name">Artificial Intelligence & Data Science</h4>
                    <p class="text-muted small">Artificial Intelligence & Data Science empowers machines to learn from
                        data, automate decisions, and solve complex real-world problems across industries.</p>
                    <div class="btn-group-custom">
                        <a href="student?college=Artificial Intelligence & Data Science" class="apply-btn">Apply
                            Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-icon-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="eng-card">
                    <div class="icon-wrapper"><i class="bi bi-cloud-arrow-up"></i></div>
                    <h4 class="eng-name">Artificial Intelligence & Meachine Learning</h4>
                    <p class="text-muted small">Artificial Intelligence & Machine Learning enables systems to learn from
                        data, recognize patterns, and make intelligent decisions without human intervention.</p>
                    <div class="btn-group-custom">
                        <a href="student?college=Artificial Intelligence & Meachine Learning"
                            class="apply-btn">Apply
                            Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-icon-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="eng-card">
                    <div class="icon-wrapper"><i class="bi bi-cloud-arrow-up"></i></div>
                    <h4 class="eng-name">Computer Science Engineering & Cyber Security</h4>
                    <p class="text-muted small">Computer Science Engineering & Cyber Security focuses on building
                        advanced software systems while protecting networks, data, and digital infrastructure from cyber
                        threats</p>
                    <div class="btn-group-custom">
                        <a href="student?college=Computer Science Engineering & Cyber Security"
                            class="apply-btn">Apply
                            Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-icon-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="eng-card">
                    <div class="icon-wrapper"><i class="bi bi-gear-wide-connected"></i></div>
                    <h4 class="eng-name">Mechanical Engg.</h4>
                    <p class="text-muted small">Mechanical Engineering focuses on the design, manufacturing, and
                        maintenance of machines, engines, and mechanical systems used in industries and everyday life.
                    </p>
                    <div class="btn-group-custom">
                        <a href="student?college=Mechanical Engg" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-icon-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="eng-card">
                    <div class="icon-wrapper"><i class="bi bi-buildings"></i></div>
                    <h4 class="eng-name">Civil Engineering</h4>
                    <p class="text-muted small">Civil Engineering focuses on designing and constructing infrastructure
                        such as buildings, roads, bridges, and dams that shape modern society.
                    </p>
                    <div class="btn-group-custom">
                        <a href="student?college=Civil Engineering" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-icon-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="eng-card">
                    <div class="icon-wrapper"><i class="bi bi-cpu"></i></div>
                    <h4 class="eng-name">Electronics (ECE)</h4>
                    <p class="text-muted small">Electronics & Communication Engineering (ECE) focuses on electronic
                        devices, circuits, and communication systems that power modern technology and connectivity.</p>
                    <div class="btn-group-custom">
                        <a href="student?college=Electronics (ECE)" class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-icon-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="eng-card">
                    <div class="icon-wrapper"><i class="bi bi-lightning-charge"></i></div>
                    <h4 class="eng-name">Electrical Engg.</h4>
                    <p class="text-muted small">Electrical Engineering focuses on the generation, transmission, and
                        application of electrical power and systems used in industries and daily life.</p>
                    <div class="btn-group-custom">
                        <a href="student?college=Electrical Engg." class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-icon-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="eng-card">
                    <div class="icon-wrapper"><i class="bi bi-lightning-charge"></i></div>
                    <h4 class="eng-name">VLSI & Embedded Systems (Electronics)</h4>
                    <p class="text-muted small">VLSI & Embedded Systems (Electronics) focuses on designing microchips
                        and intelligent hardware systems that power modern devices, from smartphones to smart machines
                    </p>
                    <div class="btn-group-custom">
                        <a href="student?VLSI & Embedded Systems (Electronics)." class="apply-btn">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="wa-icon-btn"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('footer')
<!-- extra footer -->
@endpush