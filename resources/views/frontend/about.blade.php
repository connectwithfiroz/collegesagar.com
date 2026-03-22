@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Studysparrow - </title>
    <meta name="description" content="">
@endpush

@section('section')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800"
                        class="img-fluid rounded-5 shadow-lg" alt="Team">
                </div>
                <div class="col-lg-6">
                    <h2 class="display-5 fw-800 mb-4 text-dark">Why We Exist?</h2>
                    <p class="fs-5 text-muted mb-4 fw-bold">
                        Our purpose is to connect students with the best colleges and career opportunities.
                    </p>
                    <div class="d-flex flex-column gap-3">
                        <div class="p-3 bg-white shadow-sm rounded-4 border-start border-success border-4 fw-800">
                            <i class="fa-solid fa-circle-check text-success me-2"></i> Verified data from 100+ colleges.
                        </div>
                        <div class="p-3 bg-white shadow-sm rounded-4 border-start border-success border-4 fw-800">
                            <i class="fa-solid fa-circle-check text-success me-2"></i> Personalized mentorship.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4" id="counter-stats">
                <div class="col-6 col-md-3">
                    <div class="counter-card p-4 bg-white text-center rounded-4 shadow-sm h-100">
                        <span class="counter-number" data-target="5000">0</span>
                        <p class="text-muted small fw-800 mb-0">STUDENTS MENTORED</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="counter-card p-4 bg-white text-center rounded-4 shadow-sm h-100">
                        <span class="counter-number" data-target="100">0</span>
                        <p class="text-muted small fw-800 mb-0">PARTNER COLLEGES</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="counter-card p-4 bg-white text-center rounded-4 shadow-sm h-100">
                        <span class="counter-number" data-target="5">0</span>
                        <p class="text-muted small fw-800 mb-0">YEARS EXPERIENCE</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="counter-card p-4 bg-white text-center rounded-4 shadow-sm h-100">
                        <span class="counter-number" data-target="99">0</span>
                        <p class="text-muted small fw-800 mb-0">SUCCESS RATE %</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark-custom py-5 text-white">
        <div class="container py-5 text-center">
            <h2 class="display-6 fw-800 mb-5">Our Core Values</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 border border-secondary rounded-4 h-100">
                        <div class="fs-1 mb-3">💎</div>
                        <h4 class="fw-800 text-success">Transparency</h4>
                        <p class="text-secondary fw-bold italic">"We ensure honest guidance and complete transparency in
                            every step."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border border-secondary rounded-4 h-100">
                        <div class="fs-1 mb-3">🎓</div>
                        <h4 class="fw-800 text-success">Student First</h4>
                        <p class="text-secondary fw-bold italic">"Putting students’ success and future at the center of
                            everything we do."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border border-secondary rounded-4 h-100">
                        <div class="fs-1 mb-3">🚀</div>
                        <h4 class="fw-800 text-success">Innovation</h4>
                        <p class="text-secondary fw-bold italic">"Innovating the way students explore and access quality
                            education."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="mv-card p-5 rounded-5 bg-white h-100 d-flex align-items-start shadow-sm">
                        <div class="bg-success bg-opacity-10 p-3 rounded-4 me-4">
                            <i class="fa-solid fa-bullseye fs-2 text-success"></i>
                        </div>
                        <div>
                            <h3 class="fw-800 text-dark">Our Mission</h3>
                            <p class="text-muted fw-bold">Our mission is to provide every student across the country
                                with the right career guidance and reliable admission support, ensuring a clear and
                                confusion-free path to their future.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mv-card p-5 rounded-5 bg-white h-100 d-flex align-items-start shadow-sm">
                        <div class="bg-success bg-opacity-10 p-3 rounded-4 me-4">
                            <i class="fa-solid fa-eye fs-2 text-success"></i>
                        </div>
                        <div>
                            <h3 class="fw-800 text-dark">Our Vision</h3>
                            <p class="text-muted fw-bold">Our vision is to become India’s most trusted digital education
                                platform, making the entire admission process 100% transparent and reliable for every
                                student.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container pb-5">
        <div class="cta-box text-center shadow-lg">
            <h2 class="display-5 fw-800 mb-4">Ready to find your dream college?</h2>
            <p class="lead mb-4 fw-bold opacity-75">Join thousands of students on their perfect path.</p>
            <button class="btn btn-cta shadow px-5 py-3">Browse Colleges Now</button>
        </div>
    </section>
@endsection
@push('footer')
<!-- extra footer -->
@endpush