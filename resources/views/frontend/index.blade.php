@extends('frontend.layouts.app')


@push('header')
    <!-- extra header -->
    <title>Studysparrow - Your Trusted Partner for Global Admissions</title>
    <meta name="description"
        content="Studysparrow is your trusted partner for global admissions. We provide expert guidance for Medical, Engineering, and Management courses in India & Abroad. Explore top career paths and secure your future with us.">
@endpush

@section('section')
    <!-- main section -->
    <section class="hero-section position-relative overflow-hidden">
        <div class="container">
            <div class="row align-items-center min-vh-75 pt-5 pb-5">

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="badge px-3 py-2 rounded-pill bg-light text-success border border-success mb-3 fw-bold">
                        <i class="fa-solid fa-graduation-cap me-2"></i> Your Future Starts Here
                    </div>
                    <h1 class="display-4 fw-800 text-dark mb-3">
                        Your Trusted Partner for <span class="text-success">Global Admissions</span>
                    </h1>
                    <p class="lead text-muted mb-4">
                        Expert guidance for Medical, Engineering, and Management courses in India & Abroad. We help you
                        choose the right path for your career success.
                    </p>

                    <div class="search-box p-2 bg-white rounded-4 shadow-sm border mb-4">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-8 px-3 border-end">
                                <div class="input-group border-0">
                                    <span class="input-group-text bg-transparent border-0 text-muted"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
                                    <input type="text" class="form-control border-0 shadow-none"
                                        placeholder="Find your dream course...">
                                </div>
                            </div>
                            <div class="col-md-4 ps-md-2">
                                <button class="btn btn-main w-100 py-3 rounded-3">Explore Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-4 pt-3">
                        <div class="stat-item">
                            <h4 class="fw-bold mb-0">5k+</h4>
                            <small class="text-muted">Students Guided</small>
                        </div>
                        <div class="border-start ps-4">
                            <h4 class="fw-bold mb-0">100+</h4>
                            <small class="text-muted">College Partners</small>
                        </div>
                        <div class="border-start ps-4">
                            <h4 class="fw-bold mb-0">99%</h4>
                            <small class="text-muted">Student Success</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 position-relative text-center">
                    <div class="blob-bg"></div>

                    <div class="hero-img-container">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=1000'"
                            alt="Student" class="img-fluid rounded-5 shadow-lg position-relative z-index-1">

                        <div class="floating-badge badge-top shadow-lg animate-bounce">
                            <div class="d-flex align-items-center gap-2">
                                <div class="icon-circle bg-success text-white"><i class="fa-solid fa-check"></i></div>
                                <span class="fw-bold">MBBS Expert</span>
                            </div>
                        </div>

                        <!-- <div class="floating-badge badge-bottom shadow-lg">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('frontend/https://img.icons8.com/color/48/university.png') }}" width="24" alt="Uni">
                                <span class="fw-bold">Top Universities</span>
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- main section -->
    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="row mb-5 text-center">
                <div class="col-lg-7 mx-auto">
                    <h6 class="text-success fw-bold text-uppercase ls-2">Our Specialization</h6>
                    <h2 class="display-5 fw-800 text-dark">Explore Top <span class="text-success">Career Paths</span>
                    </h2>
                    <p class="text-muted">Direct Admission Guidance in Top Universities of India and Abroad.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="course-card border-0 shadow-sm rounded-4 p-4 h-100 transition-up">
                        <div class="icon-box-lg bg-light-green rounded-3 mb-4">
                            <i class="fa-solid fa-stethoscope text-success fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Medical Sciences</h4>
                        <p class="text-muted mb-4 small">MBBS, MD, MS, BDS - Get admission in top medical colleges
                            worldwide.</p>
                        <a href="student?college=Medical Sciences"
                            class="text-decoration-none fw-bold text-dark hover-green">Apply Now <i
                                class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-card border-0 shadow-sm rounded-4 p-4 h-100 transition-up active-card">
                        <div class="icon-box-lg bg-success text-white rounded-3 mb-4">
                            <i class="fa-solid fa-microchip fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Engineering</h4>
                        <p class="text-muted mb-4 small">B.Tech/M.Tech in CS, AI, and more from NAAC A+ Accredited
                            Universities.</p>
                        <a href="student?college=Engineering"
                            class="text-decoration-none fw-bold text-dark hover-green">Apply Now <i
                                class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-card border-0 shadow-sm rounded-4 p-4 h-100 transition-up">
                        <div class="icon-box-lg bg-light-green rounded-3 mb-4">
                            <i class="fa-solid fa-kit-medical text-success fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Paramedical</h4>
                        <p class="text-muted mb-4 small">BMLT, BPT, OTT - Professional training in healthcare support
                            and diagnostics.</p>
                        <a href="student?college=Paramedical"
                            class="text-decoration-none fw-bold text-dark hover-green">Apply Now <i
                                class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-card border-0 shadow-sm rounded-4 p-4 h-100 transition-up">
                        <div class="icon-box-lg bg-light-green rounded-3 mb-4">
                            <i class="fa-solid fa-user-nurse text-success fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Nursing</h4>
                        <p class="text-muted mb-4 small">B.Sc Nursing, GNM, ANM - Compassionate career paths with 100%
                            job security.</p>
                        <a href="student?college=Nursing"
                            class="text-decoration-none fw-bold text-dark hover-green">Apply Now<i
                                class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-card border-0 shadow-sm rounded-4 p-4 h-100 transition-up">
                        <div class="icon-box-lg bg-light-green rounded-3 mb-4">
                            <i class="fa-solid fa-pills text-success fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Pharmacy</h4>
                        <p class="text-muted mb-4 small">B.Pharm, D.Pharm - Join the growing pharmaceutical industry
                            with expert guidance.</p>
                        <a href="student?college=Pharmacy"
                            class="text-decoration-none fw-bold text-dark hover-green">Apply Now <i
                                class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-card border-0 shadow-sm rounded-4 p-4 h-100 transition-up">
                        <div class="icon-box-lg bg-light-green rounded-3 mb-4">
                            <i class="fa-solid fa-briefcase text-success fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Management</h4>
                        <p class="text-muted mb-4 small">MBA, BBA - Shape your corporate career with top business
                            schools.</p>
                        <a href="student?college=Management"
                            class="text-decoration-none fw-bold text-dark hover-green">Apply Now <i
                                class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-card border-0 shadow-sm rounded-4 p-4 h-100 transition-up">
                        <div class="icon-box-lg bg-light-green rounded-3 mb-4">
                            <i class="fa-solid fa-screwdriver-wrench text-success fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3"> ITI & Diploma</h4>
                        <p class="text-muted mb-4 small">Skill-based technical courses for immediate career start in
                            various industries.</p>
                        <a href="student?college=ITI & Diploma"
                            class="text-decoration-none fw-bold text-dark hover-green">Apply Now <i
                                class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div
                        class="course-card border-0 bg-dark rounded-4 p-4 h-100 d-flex flex-column justify-content-center align-items-center text-center">
                        <h4 class="text-white fw-bold mb-3">Not Sure What to Choose?</h4>
                        <p class="text-light small mb-4">Talk to our expert counselors and find your perfect fit.</p>
                        <a href="student?college=Free Consultation">
                            <button class="btn btn-main w-100">Free Consultation</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Your Journy Section -->
    <section class="py-5" style="background-color: var(--header-bg);">
        <div class="container py-lg-5">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 mx-auto">
                    <h6 class="text-success fw-bold text-uppercase ls-2">How It Works</h6>
                    <h2 class="display-5 fw-800 text-dark">Your Journey to Your <span class="text-success">Dream
                            College</span></h2>
                    <p class="text-muted">4 simple steps to secure your seat in your preferred university.</p>
                </div>
            </div>

            <div class="row g-4 position-relative">
                <div class="d-none d-lg-block position-absolute top-50 start-0 w-100 translate-middle-y"
                    style="height: 2px; border-top: 2px dashed rgba(0, 208, 132, 0.3); z-index: 0;"></div>

                <div class="col-lg-3 col-md-6 position-relative z-index-1">
                    <div class="process-card text-center p-4 bg-white rounded-4 shadow-sm h-100 border-0">
                        <div class="step-number shadow-sm">1</div>
                        <div class="icon-circle-md bg-light-green text-success mx-auto mb-3">
                            <i class="fa-solid fa-comments fs-4"></i>
                        </div>
                        <h5 class="fw-bold">Counseling</h5>
                        <p class="small text-muted mb-0">Book a free session to discuss your career goals and interests.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 position-relative z-index-1">
                    <div class="process-card text-center p-4 bg-white rounded-4 shadow-sm h-100 border-0">
                        <div class="step-number shadow-sm">2</div>
                        <div class="icon-circle-md bg-light-green text-success mx-auto mb-3">
                            <i class="fa-solid fa-file-signature fs-4"></i>
                        </div>
                        <h5 class="fw-bold">Selection</h5>
                        <p class="small text-muted mb-0">Shortlist the best colleges based on your budget and profile.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 position-relative z-index-1">
                    <div class="process-card text-center p-4 bg-white rounded-4 shadow-sm h-100 border-0">
                        <div class="step-number shadow-sm">3</div>
                        <div class="icon-circle-md bg-light-green text-success mx-auto mb-3">
                            <i class="fa-solid fa-paper-plane fs-4"></i>
                        </div>
                        <h5 class="fw-bold">Application</h5>
                        <p class="small text-muted mb-0">We handle your documentation and application processing.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 position-relative z-index-1">
                    <div class="process-card text-center p-4 bg-white rounded-4 shadow-sm h-100 border-0">
                        <div class="step-number shadow-sm">4</div>
                        <div class="icon-circle-md bg-success text-white mx-auto mb-3">
                            <i class="fa-solid fa-graduation-cap fs-4"></i>
                        </div>
                        <h5 class="fw-bold">Admission</h5>
                        <p class="small text-muted mb-0">Get your offer letter and start your bright future journey!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 bg-white border-top overflow-hidden">
        <div class="container text-center mb-4">
            <h6 class="text-success fw-bold text-uppercase mb-1" style="letter-spacing: 2px; font-size: 0.85rem;">
                OUR UNIVERSITY PARTNERS
            </h6>
            <h2 class="display-6 fw-bold text-dark" style="font-weight: 800 !important;">
                Get Admission in Top <span class="text-success">Institutions</span>
            </h2>
        </div>

        <div class="logo-slider-container"
            style="width: 100%; overflow: hidden; background: #fff; padding: 10px 0; position: relative;">
            <div class="logo-moving-track"
                style="display: flex; width: max-content; animation: fast-scroll 25s linear infinite;">

                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/amruta-logo.jpg') }}"
                        style="width: 200px; height: auto; max-height: 100px; object-fit: contain; display: block !important;"
                        alt="Amrita">
                </div>

                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/shridevi-logo.png') }}"
                        style="width: 200px; height: auto; max-height: 90px; object-fit: contain; display: block !important;"
                        alt="BITS">
                </div>

                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/shiridevi-nursing-logo.jpeg') }}"
                        style="width: 200px; height: auto; max-height: 100px; object-fit: contain; display: block !important;"
                        alt="VIT">
                </div>

                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/ajiet-logo.png') }}"
                        style="width: 200px; height: auto; max-height: 90px; object-fit: contain; display: block !important;"
                        alt="Manipal">
                </div>

                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/gj-surya-logo.jpg') }}"
                        style="width: 200px; height: auto; max-height: 90px; object-fit: contain; display: block !important;"
                        alt="SRM">
                </div>

                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/karvali-logo.png') }}"
                        style="width: 200px; height: auto; max-height: 90px; object-fit: contain; display: block !important;"
                        alt="LPU">
                </div>

                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/amruta-logo.jpg') }}"
                        style="width: 200px; height: auto; max-height: 100px; object-fit: contain; display: block !important;">
                </div>
                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/slv-logo.jpg') }}"
                        style="width: 200px; height: auto; max-height: 90px; object-fit: contain; display: block !important;">
                </div>
                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/viveka-logo.jpg') }}"
                        style="width: 200px; height: auto; max-height: 100px; object-fit: contain; display: block !important;">
                </div>
                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/ayurvedic-log.png') }}"
                        style="width: 200px; height: auto; max-height: 90px; object-fit: contain; display: block !important;">
                </div>
                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/muniyal-logi.png') }}"
                        style="width: 200px; height: auto; max-height: 90px; object-fit: contain; display: block !important;">
                </div>
                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/aadhya-logo.png') }}"
                        style="width: 200px; height: auto; max-height: 90px; object-fit: contain; display: block !important;">
                </div>
                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/pvs-logo.jpg') }}"
                        style="width: 200px; height: auto; max-height: 90px; object-fit: contain; display: block !important;">
                </div>
                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/sofia-logo.png') }}"
                        style="width: 200px; height: auto; max-height: 90px; object-fit: contain; display: block !important;">
                </div>
                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/kaveri-logo.png') }}"
                        style="width: 200px; height: auto; max-height: 90px; object-fit: contain; display: block !important;">
                </div>
                <div class="logo-item"
                    style="flex: 0 0 250px; width: 250px; display: flex; justify-content: center; align-items: center; padding: 0 20px;">
                    <img src="{{ asset('frontend/assets/logo/excle-logo.png') }}"
                        style="width: 200px; height: auto; max-height: 90px; object-fit: contain; display: block !important;">
                </div>

            </div>
        </div>
    </section>
    <!-- Year of excellance Guidence  -->
    <section class="py-5 bg-white position-relative">
        <div class="container py-lg-5">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="position-relative pe-lg-5">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800"
                            class="img-fluid rounded-5 shadow-lg" alt="Counseling">

                        <div class="position-absolute bottom-0 start-0 mb-4 ms-n3 p-4 bg-success text-white rounded-4 shadow-lg animate-float d-none d-md-block"
                            style="max-width: 200px;">
                            <h2 class="fw-800 mb-0">5+</h2>
                            <p class="small mb-0 fw-bold">Years of Excellence in Admission Guidance</p>
                        </div>

                        <div class="position-absolute top-0 end-0 mt-n3 me-n3 bg-light-green p-4 rounded-circle z-index-n1"
                            style="width: 150px; height: 150px;"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h6 class="text-success fw-bold text-uppercase ls-2 mb-3">Why Studysparrow?</h6>
                    <h2 class="display-6 fw-800 text-dark mb-4">We Don't Just Give Admission, We <span
                            class="text-success">Build Careers</span></h2>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="feature-item p-3 rounded-4 transition-up">
                                <div class="icon-circle bg-light-green text-success mb-3"><i
                                        class="fa-solid fa-handshake-angle fs-4"></i></div>
                                <h5 class="fw-bold">Free Counseling</h5>
                                <p class="small text-muted">Personalized sessions to understand your strengths and
                                    goals.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-item p-3 rounded-4 transition-up">
                                <div class="icon-circle bg-light-green text-success mb-3"><i
                                        class="fa-solid fa-file-shield fs-4"></i></div>
                                <h5 class="fw-bold">Verified Colleges</h5>
                                <p class="small text-muted">We only partner with UGC, AICTE, and MCI approved
                                    institutions.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-item p-3 rounded-4 transition-up">
                                <div class="icon-circle bg-light-green text-success mb-3"><i
                                        class="fa-solid fa-piggy-bank fs-4"></i></div>
                                <h5 class="fw-bold">Low Fee Structure</h5>
                                <p class="small text-muted">Get admission at the most competitive and transparent fee.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-item p-3 rounded-4 transition-up">
                                <div class="icon-circle bg-light-green text-success mb-3"><i
                                        class="fa-solid fa-headset fs-4"></i></div>
                                <h5 class="fw-bold">24/7 Support</h5>
                                <p class="small text-muted">From application to hostel allotment, we are with you.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Our core College image -->
    <section class="university-section overflow-hidden">
        <div class="container text-center mb-5">
            <h6 class="text-success fw-bold text-uppercase">Partner Institutions</h6>
            <h2 class="display-6 fw-bold">Premium Admission Portal</h2>

        </div>

        <div class="container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="custom-card">
                            <div class="img-box">
                                <img src="{{ asset('frontend/assets/image/amruta-college.jpeg') }}" alt="Amity">
                                <span class="badge-top">Top Rated</span>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-bold mb-1">Amruta Institute of Engineering and Management Science</h5>
                                <p class="text-muted small mb-4"><i class="bi bi-geo-alt-fill me-1"></i> Karnataka</p>
                                <div class="d-flex gap-2">
                                    <a href="https://wa.me/919999999999" target="_blank" class="btn-wa"><i
                                            class="bi bi-whatsapp"></i></a>
                                    <a href="student?college=Amruta Institute of Engineering and Management"
                                        class="btn-apply flex-grow-1">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="custom-card">
                            <div class="img-box">
                                <img src="{{ asset('frontend/assets/image/shirdevi.jpg') }}" alt="BITS">
                                <span class="badge-top">Premium</span>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-bold mb-1">Shridevi Institute of Engineering & Technology</h5>
                                <p class="text-muted small mb-4"><i class="bi bi-geo-alt-fill me-1"></i>Tumkur Karnataka
                                </p>
                                <div class="d-flex gap-2">
                                    <a href="https://wa.me/919999999999" target="_blank" class="btn-wa"><i
                                            class="bi bi-whatsapp"></i></a>
                                    <a href="student?college=Shridevi Institute of Engineering & Technology"
                                        class="btn-apply flex-grow-1">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="custom-card">
                            <div class="img-box">
                                <img src="{{ asset('frontend/assets/image/shridevi-nursing.jpg') }}" alt="VIT">
                                <span class="badge-top">Top Tech</span>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-bold mb-1">Shiridevi Institute of Nursing Science</h5>
                                <p class="text-muted small mb-4"><i class="bi bi-geo-alt-fill me-1"></i> Tumkur
                                    Karnataka</p>
                                <div class="d-flex gap-2">
                                    <a href="https://wa.me/919999999999" target="_blank" class="btn-wa"><i
                                            class="bi bi-whatsapp"></i></a>
                                    <a href="student?college=Shiridevi Institute of Nursing Science"
                                        class="btn-apply flex-grow-1">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="custom-card">
                            <div class="img-box">
                                <img src="{{ asset('frontend/assets/image/shiridevi-pharmace.jpg') }}" alt="Manipal">
                                <span class="badge-top">Medical</span>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-bold mb-1">Shridevi Institute of Pharmaceutical Sciences</h5>
                                <p class="text-muted small mb-4"><i class="bi bi-geo-alt-fill me-1"></i> Tumkur
                                    Karnataka</p>
                                <div class="d-flex gap-2">
                                    <a href="https://wa.me/919999999999" target="_blank" class="btn-wa"><i
                                            class="bi bi-whatsapp"></i></a>
                                    <a href="student?college=Shridevi Institute of Pharmaceutical Sciences"
                                        class="btn-apply flex-grow-1">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="custom-card">
                            <div class="img-box">
                                <img src="{{ asset('frontend/assets/image/shirdevi-allied.jpeg') }}" alt="Manipal">
                                <span class="badge-top">Medical</span>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-bold mb-1">Shridevi Institute of Allied Health Sciences</h5>
                                <p class="text-muted small mb-4"><i class="bi bi-geo-alt-fill me-1"></i> Tumkur
                                    Karnataka</p>
                                <div class="d-flex gap-2">
                                    <a href="https://wa.me/919999999999" target="_blank" class="btn-wa"><i
                                            class="bi bi-whatsapp"></i></a>
                                    <a href="student?college=Shridevi Institute of Allied Health Sciences"
                                        class="btn-apply flex-grow-1">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="custom-card">
                            <div class="img-box">
                                <img src="{{ asset('frontend/assets/image/shiridevi-physo.jpg') }}" alt="Manipal">
                                <span class="badge-top">Medical</span>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-bold mb-1">Shridevi Institute of Physiotherapy </h5>
                                <p class="text-muted small mb-4"><i class="bi bi-geo-alt-fill me-1"></i> Tumkur
                                    Karnataka</p>
                                <div class="d-flex gap-2">
                                    <a href="https://wa.me/919999999999" target="_blank" class="btn-wa"><i
                                            class="bi bi-whatsapp"></i></a>
                                    <a href="student?college=Shridevi Institute of Physiotherapy"
                                        class="btn-apply flex-grow-1">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="custom-card">
                            <div class="img-box">
                                <img src="{{ asset('frontend/assets/image/G.J surya college.png') }}" alt="Manipal">
                                <span class="badge-top">Medical</span>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-bold mb-1">G.J Surya college of Nursing</h5>
                                <p class="text-muted small mb-4"><i class="bi bi-geo-alt-fill me-1"></i> Shivamogga,
                                    Karnataka</p>
                                <div class="d-flex gap-2">
                                    <a href="https://wa.me/919999999999" target="_blank" class="btn-wa"><i
                                            class="bi bi-whatsapp"></i></a>
                                    <a href="student?college=G.J Surya college of Nursing"
                                        class="btn-apply flex-grow-1">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="custom-card">
                            <div class="img-box">
                                <img src="{{ asset('frontend/assets/image/karavli-institute.jpg') }}" alt="Manipal">
                                <span class="badge-top">Medical</span>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-bold mb-1">Karavali institutions</h5>
                                <p class="text-muted small mb-4"><i class="bi bi-geo-alt-fill me-1"></i> Mangalore,
                                    Karnataka</p>
                                <div class="d-flex gap-2">
                                    <a href="https://wa.me/919999999999" target="_blank" class="btn-wa"><i
                                            class="bi bi-whatsapp"></i></a>
                                    <a href="student?college=Karavali institutions" class="btn-apply flex-grow-1">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="custom-card">
                            <div class="img-box">
                                <img src="{{ asset('frontend/assets/image/a.j institute.jpg') }}" alt="Manipal">
                                <span class="badge-top">Engineering</span>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-bold mb-1">A. J. Institute of Engineering & Technology</h5>
                                <p class="text-muted small mb-4"><i class="bi bi-geo-alt-fill me-1"></i> Mangalore,
                                    Karnataka</p>
                                <div class="d-flex gap-2">
                                    <a href="https://wa.me/919999999999" target="_blank" class="btn-wa"><i
                                            class="bi bi-whatsapp"></i></a>
                                    <a href="student?college=A. J. Institute of Engineering & Technology"
                                        class="btn-apply flex-grow-1">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="custom-card">
                            <div class="img-box">
                                <img src="{{ asset('frontend/assets/image/slv-college of nursing.jpg') }}" alt="Manipal">
                                <span class="badge-top">Medical</span>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-bold mb-1">S.L.V college of Nursing</h5>
                                <p class="text-muted small mb-4"><i class="bi bi-geo-alt-fill me-1"></i>Chitradurga,
                                    karnataka</p>
                                <div class="d-flex gap-2">
                                    <a href="https://wa.me/919999999999" target="_blank" class="btn-wa"><i
                                            class="bi bi-whatsapp"></i></a>
                                    <a href="student?college=S.L.V college of Nursing"
                                        class="btn-apply flex-grow-1">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>


    <!--Admission Alerts  -->
    <section class="py-5" style="background-color: #fcfdfd;">
        <div class="container">
            <div class="row g-4 align-items-stretch">

                <div class="col-lg-7">
                    <div class="bg-white rounded-5 p-4 p-md-5 shadow-sm border h-100 position-relative overflow-hidden">
                        <div class="d-flex align-items-center mb-4">
                            <span class="pulse-icon me-3"></span>
                            <h4 class="fw-800 mb-0">Live <span class="text-success">Admission Alerts</span></h4>
                        </div>

                        <div class="notification-list" style="max-height: 350px; overflow-y: auto;">
                            <div class="alert-item d-flex gap-3 mb-4 p-3 rounded-4 transition-up">
                                <div class="date-badge text-center">
                                    <span class="d-block fw-bold fs-5">25</span>
                                    <small class="text-uppercase">Feb</small>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">NEET 2026 Counseling Registration Started!</h6>
                                    <p class="small text-muted mb-0">Contact us for choice filling and document
                                        verification support.</p>
                                </div>
                            </div>

                            <div class="alert-item d-flex gap-3 mb-4 p-3 rounded-4 transition-up">
                                <div class="date-badge text-center">
                                    <span class="d-block fw-bold fs-5">20</span>
                                    <small class="text-uppercase">Feb</small>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Top Engineering College: Direct Admission Open</h6>
                                    <p class="small text-muted mb-0">Limited seats available in CS and AI branches for
                                        2026 batch.</p>
                                </div>
                            </div>

                            <div class="alert-item d-flex gap-3 mb-4 p-3 rounded-4 transition-up">
                                <div class="date-badge text-center">
                                    <span class="d-block fw-bold fs-5">15</span>
                                    <small class="text-uppercase">Feb</small>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Scholarship Exam for MBA Aspirants</h6>
                                    <p class="small text-muted mb-0">Register now for the National Management Talent
                                        Search exam.</p>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-link text-success fw-bold p-0 mt-3 text-decoration-none">View All
                            Notifications <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="scholarship-card rounded-5 p-5 text-white h-100 position-relative overflow-hidden shadow-lg"
                        style="background: var(--brand-black);">
                        <div class="bg-success opacity-25 position-absolute rounded-circle"
                            style="width: 300px; height: 300px; top: -100px; right: -100px;"></div>

                        <div class="position-relative z-index-1">
                            <div class="icon-box-lg bg-success rounded-4 mb-4 shadow-sm">
                                <i class="fa-solid fa-graduation-cap fs-2"></i>
                            </div>
                            <h2 class="fw-800 mb-3">Financial <span class="text-success">Support</span></h2>
                            <p class="text-light-50 mb-4 opacity-75">Don't let budget stop your dreams. We provide 100%
                                assistance for Education Loans & Scholarship programs.</p>

                            <ul class="list-unstyled mb-5">
                                <li class="mb-3"><i class="fa-solid fa-circle-check text-success me-2"></i> Up to 100%
                                    Scholarship</li>
                                <li class="mb-3"><i class="fa-solid fa-circle-check text-success me-2"></i> Instant Loan
                                    Approval</li>
                                <li class="mb-3"><i class="fa-solid fa-circle-check text-success me-2"></i> Zero
                                    Interest Schemes</li>
                            </ul>

                            <button class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold">Apply for
                                Support</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection