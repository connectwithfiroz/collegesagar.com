@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Home - {{ config('app.name') }}</title>
    <meta name="description"
        content="Collegesagar is your ultimate guide to finding the perfect college. Explore comprehensive information, reviews, and resources to make informed decisions about your education journey. Discover top colleges, courses, and career paths with us.">
    <!-- keyword -->
    <meta name="keywords"
        content="collegesagar, college finder, college reviews, education resources, top colleges, courses, career paths">
    <!-- seo related  -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="Collegesagar Team">

@endpush

@section('content')

    <section class="hero-slider p-0 m-0 border-0">
        <div id="heroCarousel" class="carousel slide carousel-fade p-0 m-0" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner p-0 m-0 overflow-hidden lh-1">

                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{ asset('website/assests/flayer/flayer-aa.png') }}" alt class="d-none d-md-block w-100"
                        alt="Desktop 1">
                    <img src="{{ asset('website/assests/flayer/mobile-aa.png') }}" alt class="d-block d-md-none w-100"
                        alt="Mobile 1">
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('website/assests/flayer/flayer-bb.png') }}" alt class="d-none d-md-block w-100"
                        alt="Desktop 2">
                    <img src="{{ asset('website/assests/flayer/mobile-bb.png') }}" alt class="d-block d-md-none w-100"
                        alt="Mobile 2">
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('website/assests/flayer/flayer-cc.png') }}" alt class="d-none d-md-block w-100"
                        alt="Desktop 3">
                    <img src="{{ asset('website/assests/flayer/mobile-cc.png') }}" alt class="d-block d-md-none w-100"
                        alt="Mobile 3">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <div class="container mt-4">
        <div class="course-slider-wrap">
            <div class="course-track">

                @foreach($courses as $course)
                    <div class="course-card-mini">
                        <a href="{{ url('best-colleges-for-' . $course->slug) }}"
                            class="text-decoration-none">{{ $course->name }}</a>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Select you Goal -->
    <div class="container py-5">
        <div class="section-header">
            <h2 class="fw-bold mb-0">Define Your Study Path</h2>
            <p class="text-muted">Choose your stream to see top colleges and exams</p>
        </div>

        <div class="slider-container">
            <div class="slider-view-window">
                <button class="nav-control prev-btn" onclick="moveSlider(-1)">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="nav-control next-btn" onclick="moveSlider(1)">
                    <i class="fas fa-chevron-right"></i>
                </button>

            </div>

            <div class="cards-wrapper" id="mainSlider">

                @foreach($courses as $course)

                    <div class="goal-card p-4">

                        <!-- HEADER -->
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-holder me-3">
                                <i class="bi bi-mortarboard"></i>
                            </div>
                            <div>
                                <!-- COURSE CLICK -->
                                <h5 class="mb-0 fw-bold">
                                    <a href="{{ url('best-colleges-for-' . $course->slug) }}"
                                        class="text-dark text-decoration-none">
                                        {{ $course->name }}
                                    </a>
                                </h5>

                                <small class="text-muted">
                                    {{ $course->college_count ?? 0 }} Colleges
                                </small>
                            </div>
                        </div>

                        <!-- SPECIALIZATIONS -->
                        <div class="course-list">

                            @forelse($course->specializations->take(5) as $spec)

                                <a href="{{ url($course->slug . '-' . $spec->slug . '-colleges') }}" class="course-item">

                                    {{ $spec->name }}
                                    <i class="bi bi-chevron-right small"></i>

                                </a>

                            @empty

                                <!-- fallback if no specialization -->
                                <a href="{{ url('best-colleges-for-' . $course->slug) }}" class="course-item">
                                    View Colleges
                                    <i class="bi bi-chevron-right small"></i>
                                </a>

                            @endforelse

                        </div>

                    </div>

                @endforeach

            </div>
        </div>
    </div>
    <!-- End Select you study Goal -->
    <!-- College sections  start-->
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4 px-2">
            <div>
                <h2 class="fw-800 h4 mb-0">Top Featured College with UP to 100% Scholarship</h2>
                <p class="text-muted small mb-0">Handpicked premium College for your career</p>
            </div>
            <a href="college.html" class="btn btn-sm btn-outline-dark rounded-pill px-3 fw-700">View All</a>
        </div>

        <div class="slider-wrapper">
            <button class="nav-btn btn-prev" onclick="handleSlide('left')"><i class="bi bi-chevron-left"></i></button>
            <button class="nav-btn btn-next" onclick="handleSlide('right')"><i class="bi bi-chevron-right"></i></button>

            <div class="custom-slider" id="uni-slider">
                <!-- 1 box -->
                <div class="slider-card-container">
                    <div class="u-card">
                        <div class="u-banner">
                            <span class="u-rating">4.8 <i class="bi bi-star-fill ms-1"></i></span>
                            <img src="{{ asset('website/assests/college-img/vgi-img.png') }}" alt alt="IIMA">
                            <div class="u-logo"><img src="{{ asset('website/assests/college-img/vgi-logo.png') }}" alt
                                    class="img-fluid" alt="logo">
                            </div>
                        </div>
                        <div class="u-body">
                            <div class="u-title">Vishveshwarya Group Of Institutions</div>
                            <div class="u-meta"><i class="bi bi-geo-alt"></i> Gratter Noida Dadri </div>
                            <div class="u-course-box">
                                <div class="u-course-name">B.Tech Computer Science</div>
                                <div class="u-fee">₹ 27.50 L <span>/ Total Fees</span></div>

                            </div>
                        </div>
                        <div class="u-footer">
                            <a href="collegedetails/vgi-details.html" class="btn-link-view">View All Details <i
                                    class="bi bi-arrow-right small"></i></a>
                            <div class="d-flex gap-2">
                                <a href="assests/broucher/vgi-broucher.pdf" download="Vishveshwaraya Group of College.pdf">
                                    <button class="btn-brochure flex-fill">
                                        <i class="bi bi-download"></i>
                                    </button>
                                </a>
                                <a href="form.html" class="flex-fill"
                                    onclick="saveCollege('Vishveshwarya Group Of Institutions')">
                                    <button class="btn-apply-now w-100">Apply Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2 box -->
                <div class="slider-card-container">
                    <div class="u-card">
                        <div class="u-banner">
                            <span class="u-rating">4.9 <i class="bi bi-star-fill ms-1"></i></span>
                            <img src="{{ asset('website/assests/college-img/dindyal.png') }}" alt alt="IITB">
                            <div class="u-logo"><img src="{{ asset('website/assests/college-img/dindyal-logo.png') }}" alt
                                    class="img-fluid" alt="logo">
                            </div>
                        </div>
                        <div class="u-body">
                            <div class="u-title">Dayal Group of Institutions</div>
                            <div class="u-meta"><i class="bi bi-geo-alt"></i> Lucknow | PCI</div>
                            <div class="u-course-box">
                                <div class="u-course-name">B.Tech Computer Science</div>
                                <div class="u-fee">₹ 8.82 L <span>/ Total Fees</span></div>
                            </div>
                        </div>
                        <div class="u-footer">
                            <a href="collegedetails/dyalcollege.html" class="btn-link-view">View All Details <i
                                    class="bi bi-arrow-right small"></i></a>
                            <div class="d-flex gap-2">
                                <a href="assests/broucher/dyal-group-institutions.pdf"
                                    download="Dayal Group of Institutions.pdf">
                                    <button class="btn-brochure flex-fill">
                                        <i class="bi bi-download"></i>
                                    </button>
                                </a>
                                <a href="form.html" class="flex-fill" onclick="saveCollege('Dayal Group of Institutions')">
                                    <button class="btn-apply-now w-100">Apply Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 3 box -->
                <div class="slider-card-container">
                    <div class="u-card">
                        <div class="u-banner">
                            <span class="u-rating">4.5 <i class="bi bi-star-fill ms-1"></i></span>
                            <img src="{{ asset('website/assests/college-img/mc-sexena.JPG') }}" alt alt="CU">
                            <div class="u-logo"><img src="{{ asset('website/assests/college-img/mc-sexenalogo.png') }}" alt
                                    class="img-fluid" alt="logo">
                            </div>
                        </div>
                        <div class="u-body">
                            <div class="u-title">Dr. M. C. Saxena Group of Institutions</div>
                            <div class="u-meta"><i class="bi bi-geo-alt"></i> Lucknow | AICTE</div>
                            <div class="u-course-box">
                                <div class="u-course-name">BE Artificial Intelligence</div>
                                <div class="u-fee">₹ 11.72 L <span>/ Total Fees</span></div>
                            </div>
                        </div>
                        <div class="u-footer">
                            <a href="collegedetails/saxenacollege.html" class="btn-link-view">View All Details
                                <i class="bi bi-arrow-right small"></i></a>
                            <div class="d-flex gap-2">
                                <a href="assests/broucher/Dr.mc-saxena.pdf"
                                    download="Dr. M. C. Saxena Group of Institutions.pdf">
                                    <button class="btn-brochure flex-fill">
                                        <i class="bi bi-download"></i>
                                    </button>
                                </a>
                                <a href="form.html" class="flex-fill"
                                    onclick="saveCollege('Dr. M. C. Saxena Group of Institutions')">
                                    <button class="btn-apply-now w-100">Apply Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 4 box -->
                <div class="slider-card-container">
                    <div class="u-card">
                        <div class="u-banner">
                            <span class="u-rating">4.6 <i class="bi bi-star-fill ms-1"></i></span>
                            <img src="{{ asset('website/assests/college-img/himalaya.jpg') }}" alt alt="VIT">
                            <div class="u-logo"><img src="{{ asset('website/assests/college-img/himalya-logo.jpg') }}" alt
                                    class="img-fluid" alt="logo">
                            </div>
                        </div>
                        <div class="u-body">
                            <div class="u-title">Himalayan Group of Institutions </div>
                            <div class="u-meta"><i class="bi bi-geo-alt"></i> Lucknow (U.P)</div>
                            <div class="u-course-box">
                                <div class="u-course-name">B.Tech Computer Science</div>
                                <div class="u-fee">₹ 7.80 L <span>/ Total Fees</span></div>
                            </div>
                        </div>
                        <div class="u-footer">
                            <a href="collegedetails/himalyagroup.html" class="btn-link-view">View All Details <i
                                    class="bi bi-arrow-right small"></i></a>
                            <div class="d-flex gap-2">
                                <a href="assests/broucher/Himalayan-Group-of-Institutions.pdf"
                                    download="Himalayan Group of Institutions.pdf">
                                    <button class="btn-brochure flex-fill">
                                        <i class="bi bi-download"></i>
                                    </button>
                                </a>
                                <a href="form.html" class="flex-fill"
                                    onclick="saveCollege('Himalayan Group of Institutions')">
                                    <button class="btn-apply-now w-100">Apply Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 5 box -->
                <div class="slider-card-container">
                    <div class="u-card">
                        <div class="u-banner">
                            <span class="u-rating">4.3 <i class="bi bi-star-fill ms-1"></i></span>
                            <img src="{{ asset('website/assests/college-img/guru-tej.jpg') }}" alt alt="VIT">
                            <div class="u-logo"><img src="{{ asset('website/assests/college-img/guru-logo.png') }}" alt
                                    class="img-fluid" alt="logo">
                            </div>
                        </div>
                        <div class="u-body">
                            <div class="u-title">Guru Tegh Bahadur Institute of Engineering & Technology </div>
                            <div class="u-meta"><i class="bi bi-geo-alt"></i> Ludhiana, Punjab</div>
                            <div class="u-course-box">
                                <div class="u-course-name">B.Tech Computer Science</div>
                                <div class="u-fee">₹ 7.80 L <span>/ Total Fees</span></div>
                            </div>
                        </div>
                        <div class="u-footer">
                            <a href="collegedetails/gurutejcollege.html" class="btn-link-view">View All Details
                                <i class="bi bi-arrow-right small"></i></a>
                            <div class="d-flex gap-2">
                                <a href="assests/broucher/Guru-Tegh-Bahadur-Institute.pdf"
                                    download="Guru Tegh Bahadur Institute of Engineering & Technology.pdf">
                                    <button class="btn-brochure flex-fill">
                                        <i class="bi bi-download"></i>
                                    </button>
                                </a>
                                <a href="form.html" class="flex-fill" onclick="saveCollege('Guru Tegh Bahadur Institute ')">
                                    <button class="btn-apply-now w-100">Apply Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 6 box -->
                <div class="slider-card-container">
                    <div class="u-card">
                        <div class="u-banner">
                            <span class="u-rating">4.2 <i class="bi bi-star-fill ms-1"></i></span>
                            <img src="{{ asset('website/assests/college-img/puran.jpg') }}" alt alt="VIT">
                            <div class="u-logo"><img src="{{ asset('website/assests/college-img/puran-logo.png') }}" alt
                                    class="img-fluid" alt="logo">
                            </div>
                        </div>
                        <div class="u-body">
                            <div class="u-title">Puran Murti Group of Institutions </div>
                            <div class="u-meta"><i class="bi bi-geo-alt"></i> Sonipat, Haryana</div>
                            <div class="u-course-box">
                                <div class="u-course-name">B.Tech Computer Science</div>
                                <div class="u-fee">₹ 9.80 L <span>/ Total Fees</span></div>
                            </div>
                        </div>
                        <div class="u-footer">
                            <a href="collegedetails/puranmurti.html" class="btn-link-view">View All Details <i
                                    class="bi bi-arrow-right small"></i></a>
                            <div class="d-flex gap-2">
                                <a href="assests/broucher/Puran-Murti-Group-of-Institutions.pdf"
                                    download="Puran Murti Group of Institutions.pdf">
                                    <button class="btn-brochure flex-fill">
                                        <i class="bi bi-download"></i>
                                    </button>
                                </a>
                                <a href="form.html" class="flex-fill"
                                    onclick="saveCollege('Puran Murti Group of Institutions')">
                                    <button class="btn-apply-now w-100">Apply Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 7 box -->
                <div class="slider-card-container">
                    <div class="u-card">
                        <div class="u-banner">
                            <span class="u-rating">4.2 <i class="bi bi-star-fill ms-1"></i></span>
                            <img src="{{ asset('website/assests/college-img/Excel_College.png') }}" alt alt="VIT">
                            <div class="u-logo"><img src="{{ asset('website/assests/college-img/excel-logo.png') }}" alt
                                    class="img-fluid" alt="logo">
                            </div>
                        </div>
                        <div class="u-body">
                            <div class="u-title">Excel Institutions </div>
                            <div class="u-meta"><i class="bi bi-geo-alt"></i> Salem, Tamil Nadu, India</div>
                            <div class="u-course-box">
                                <div class="u-course-name">B.E / B.Tech</div>
                                <div class="u-fee">₹ 7.80 L <span>/ Total Fees</span></div>
                            </div>
                        </div>
                        <div class="u-footer">
                            <a href="collegedetails/excle-institutions.html" class="btn-link-view">View All Details <i
                                    class="bi bi-arrow-right small"></i></a>
                            <div class="d-flex gap-2">
                                <a href="assests/broucher/Excel-Group-of-Institutions.pdf"
                                    download="Excel Group of Institution.pdf">
                                    <button class="btn-brochure flex-fill">
                                        <i class="bi bi-download"></i>
                                    </button>
                                </a>
                                <a href="form.html" class="flex-fill" onclick="saveCollege('Excel Institutions')">
                                    <button class="btn-apply-now w-100">Apply Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 8th box -->
                <div class="slider-card-container">
                    <div class="u-card">
                        <div class="u-banner">
                            <span class="u-rating">4.2 <i class="bi bi-star-fill ms-1"></i></span>
                            <img src="{{ asset('website/assests/college-img/kavery-img.jpg') }}" alt alt="VIT">
                            <div class="u-logo"><img src="{{ asset('website/assests/college-img/kavery-logo.png') }}" alt
                                    class="img-fluid" alt="logo">
                            </div>
                        </div>
                        <div class="u-body">
                            <div class="u-title">Kavery Institutions </div>
                            <div class="u-meta"><i class="bi bi-geo-alt"></i>Salem, Tamil Nadu, India</div>
                            <div class="u-course-box">
                                <div class="u-course-name">B.E / B.Tech</div>
                                <div class="u-fee">₹ 6.80 L <span>/ Total Fees</span></div>
                            </div>
                        </div>
                        <div class="u-footer">
                            <a href="collegedetails/kavery-institute.html" class="btn-link-view">View All Details <i
                                    class="bi bi-arrow-right small"></i></a>
                            <div class="d-flex gap-2">
                                <a href="assests/broucher/Kavery-Group-of-Institutions.pdf"
                                    download="Kavery Group of Institutions.pdf">
                                    <button class="btn-brochure flex-fill">
                                        <i class="bi bi-download"></i>
                                    </button>
                                </a>
                                <a href="form.html" class="flex-fill" onclick="saveCollege('Kavery Institutions')">
                                    <button class="btn-apply-now w-100">Apply Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 9 box -->
                <div class="slider-card-container">
                    <div class="u-card">
                        <div class="u-banner">
                            <span class="u-rating">4.2 <i class="bi bi-star-fill ms-1"></i></span>
                            <img src="{{ asset('website/assests/college-img/vivekanandha-img.jpg') }}" alt alt="VIT">
                            <div class="u-logo"><img src="{{ asset('website/assests/college-img/vivekanandha-logo.png') }}"
                                    alt class="img-fluid" alt="logo">
                            </div>
                        </div>
                        <div class="u-body">
                            <div class="u-title">Vivekananda College of Nursing</div>
                            <div class="u-meta"><i class="bi bi-geo-alt"></i> Turuvanoor Road, Chitradurga, Karnataka
                            </div>
                            <div class="u-course-box">
                                <div class="u-course-name">B.Sc Nursing</div>
                                <div class="u-fee">₹ 2.80 L <span>/ Total Fees</span></div>
                            </div>
                        </div>
                        <div class="u-footer">
                            <a href="collegedetails/vivekanandha.html" class="btn-link-view">View All Details <i
                                    class="bi bi-arrow-right small"></i></a>
                            <div class="d-flex gap-2">
                                <a href="assests/broucher/Vivekanandha-Educational-Institutions.pdf"
                                    download="Vivekanandha Educational Institutions.pdf">
                                    <button class="btn-brochure flex-fill">
                                        <i class="bi bi-download"></i>
                                    </button>
                                </a>
                                <a href="form.html" class="flex-fill"
                                    onclick="saveCollege('Vivekananda College of Nursing')">
                                    <button class="btn-apply-now w-100">Apply Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <!-- University Sections -->
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4 px-2">
            <div>
                <h2 class="fw-800 h4 mb-0">Top Featured Universities</h2>
                <p class="text-muted small mb-0">Handpicked premium Universities for your career</p>
            </div>
            <!-- <a href="#" class="btn btn-sm btn-outline-dark rounded-pill px-3 fw-700">View All</a> -->
        </div>
        <div class="slider-wrapper">
            <button class="nav-btn btn-prev" onclick="handleSlide('left')"><i class="bi bi-chevron-left"></i></button>
            <button class="nav-btn btn-next" onclick="handleSlide('right')"><i class="bi bi-chevron-right"></i></button>

            <div class="container my-5 position-relative">
                <div class="custom-slider" id="uni-slider">
                    <!-- 1 box -->
                    <div class="slider-card-container">
                        <div class="u-card">
                            <div class="u-banner">
                                <span class="u-rating">4.8 <i class="bi bi-star-fill ms-1"></i></span>
                                <img src="{{ asset('website/assests/university-img/aktu.jpg') }}" alt alt="IIMA">
                                <div class="u-logo"><img src="{{ asset('website/assests/university-img/aktu-logo.jpg') }}"
                                        alt class="img-fluid" alt="logo"></div>
                            </div>
                            <div class="u-body">
                                <div class="u-title">Dr. A.P.J. Abdul Kalam Technical University </div>
                                <div class="u-meta"><i class="bi bi-geo-alt"></i>Lucknow, Uttar Pradesh</div>
                                <div class="u-course-box">
                                    <div class="u-course-name">B.Tech in CSE, Electronics & Communication, and MBA</div>
                                    <div class="u-fee">₹ 11.50 L <span>/ Total Fees</span></div>
                                </div>
                            </div>
                            <div class="u-footer">
                                <a href="university-details/aktu.html" class="btn-link-view">View All Details <i
                                        class="bi bi-arrow-right small"></i></a>
                                <div class="d-flex gap-2">
                                    <a href="assests/university-broucher/AKTU.pdf"
                                        download="Dr. A.P.J. Abdul Kalam Technical University.pdf">
                                        <button class="btn-brochure flex-fill">
                                            <i class="bi bi-download"></i>
                                        </button>
                                    </a>
                                    <a href="university-form/aktu-form.html" class="flex-fill"
                                        onclick="saveCollege('Dr. A.P.J. Abdul Kalam Technical University')">
                                        <button class="btn-apply-now w-100">Apply Now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2 box -->
                    <div class="slider-card-container">
                        <div class="u-card">
                            <div class="u-banner">
                                <span class="u-rating">4.9 <i class="bi bi-star-fill ms-1"></i></span>
                                <img src="{{ asset('website/assests/university-img/ccsu-img.jpg') }}" alt alt="IITB">
                                <div class="u-logo"><img src="{{ asset('website/assests/university-img/ccsu-logo.png') }}"
                                        alt class="img-fluid" alt="logo">
                                </div>
                            </div>
                            <div class="u-body">
                                <div class="u-title">Chaudhary Charan Singh University</div>
                                <div class="u-meta"><i class="bi bi-geo-alt"></i> Meerut</div>
                                <div class="u-course-box">
                                    <div class="u-course-name">B.Tech, B.A.LLB, M.Sc, MBA,M.A</div>
                                    <div class="u-fee">₹ 8.82 L <span>/ Total Fees</span></div>
                                </div>
                            </div>
                            <div class="u-footer">
                                <a href="university-details/ccs-university.html" class="btn-link-view">View All
                                    Details <i class="bi bi-arrow-right small"></i></a>
                                <div class="d-flex gap-2">
                                    <a href="assests/university-broucher/ccs university.pdf"
                                        download="Chaudhary Charan Singh University.pdf">
                                        <button class="btn-brochure flex-fill">
                                            <i class="bi bi-download"></i>
                                        </button>
                                    </a>
                                    <a href="university-form/ccs-form.html" class="flex-fill"
                                        onclick="saveCollege('Chaudhary Charan Singh University')">
                                        <button class="btn-apply-now w-100">Apply Now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3 box -->
                    <div class="slider-card-container">
                        <div class="u-card">
                            <div class="u-banner">
                                <span class="u-rating">4.5 <i class="bi bi-star-fill ms-1"></i></span>
                                <img src="{{ asset('website/assests/university-img/utu-img.jpg') }}" alt alt="CU">
                                <div class="u-logo"><img src="{{ asset('website/assests/university-img/utu-logo.png') }}"
                                        alt class="img-fluid" alt="logo">
                                </div>
                            </div>
                            <div class="u-body">
                                <div class="u-title">Uttarakhand Technical University</div>
                                <div class="u-meta"><i class="bi bi-geo-alt"></i> Dehradun </div>
                                <div class="u-course-box">
                                    <div class="u-course-name">B.Tech in AI, Cyber Security,<br>B.Pharm/D.Pharm, MCA,
                                        BCA
                                    </div>
                                    <div class="u-fee">₹ 11.72 L <span>/ Total Fees</span></div>
                                </div>
                            </div>
                            <div class="u-footer">
                                <a href="university-details/utu.html" class="btn-link-view">View All Details <i
                                        class="bi bi-arrow-right small"></i></a>
                                <div class="d-flex gap-2">
                                    <a href="assests/university-broucher/utu-university.pdf"
                                        download="Uttarakhand Technical University.pdf">
                                        <button class="btn-brochure flex-fill">
                                            <i class="bi bi-download"></i>
                                        </button>
                                    </a>
                                    <a href="university-form/utu-form.html" class="flex-fill"
                                        onclick="saveCollege('Uttarakhand Technical University')">
                                        <button class="btn-apply-now w-100">Apply Now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4th box -->
                    <div class="slider-card-container">
                        <div class="u-card">
                            <div class="u-banner">
                                <span class="u-rating">4.6 <i class="bi bi-star-fill ms-1"></i></span>
                                <img src="{{ asset('website/assests/university-img/btu-img.jpg') }}" alt alt="VIT">
                                <div class="u-logo"><img src="{{ asset('website/assests/university-img/btu-logo.jpg') }}"
                                        alt class="img-fluid" alt="logo">
                                </div>
                            </div>
                            <div class="u-body">
                                <div class="u-title">Board of Technical Education Uttar Pradesh</div>
                                <div class="u-meta"><i class="bi bi-geo-alt"></i> Lucknow </div>
                                <div class="u-course-box">
                                    <div class="u-course-name">Diploma in C.S.E</div>
                                    <div class="u-fee">₹ 5.80 L <span>/ Total Fees</span></div>
                                </div>
                            </div>
                            <div class="u-footer">
                                <a href="university-details/board-of-up.html" class="btn-link-view">View All
                                    Details <i class="bi bi-arrow-right small"></i></a>
                                <div class="d-flex gap-2">
                                    <a href="assests/university-broucher/Board-of-technical-up.pdf"
                                        download="Board of Technical Education Uttar Pradesh.pdf">
                                        <button class="btn-brochure flex-fill">
                                            <i class="bi bi-download"></i>
                                        </button>
                                    </a>
                                    <a href="university-form/btu-up-form.html" class="flex-fill"
                                        onclick="saveCollege('Board of Technical Education')">
                                        <button class="btn-apply-now w-100">Apply Now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 5 th box -->
                    <div class="slider-card-container">
                        <div class="u-card">
                            <div class="u-banner">
                                <span class="u-rating">4.7 <i class="bi bi-star-fill ms-1"></i></span>
                                <img src="{{ asset('website/assests/image/college-b.jpg') }}" alt alt="BITS">
                            </div>
                            <div class="u-body">
                                <div class="u-title">BITS Pilani - Premiere Institute</div>
                                <div class="u-meta"><i class="bi bi-geo-alt"></i> Pilani, Rajasthan | UGC</div>
                                <div class="u-course-box">
                                    <div class="u-course-name">B.E. Mechanical Eng</div>
                                    <div class="u-fee">₹ 19.50 L <span>/ Total Fees</span></div>
                                </div>
                            </div>
                            <div class="u-footer">
                                <a href="university-detials.html" class="btn-link-view">View All Details <i
                                        class="bi bi-arrow-right small"></i></a>
                                <div class="d-flex gap-2">
                                    <button class="btn-brochure flex-fill"><i class="bi bi-download"></i></button>
                                    <a href="form.html" class="flex-fill"
                                        onclick="saveCollege('BITS Pilani - Premiere Institute')">
                                        <button class="btn-apply-now w-100">Apply Now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Top Collage in India   -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="page-title fw-bold" style="font-size: 3rem;">Top Colleges in <span class="text-gradient">India</span>
            </h1>
            <div class="mt-3">
                <p class="text-muted fs-5 mb-2">
                    Empowering students with access to Quality Education and
                    <span class="fw-bold text-dark border-bottom border-primary border-3">Elite Placement
                        Opportunities.</span>
                </p>
                <div class="d-inline-block p-2 px-4 rounded-pill shadow-sm mb-3 animate-pulse"
                    style="background: linear-gradient(90deg, #fff176, #ffd54f); border: 1px solid #ffca28; animation: pulse 2s infinite;">
                    <i class="bi bi-patch-check-fill text-dark me-2"></i>
                    <span class="fw-bold text-dark">Exclusive: Platform provides colleges with UP to 100% Tuition Fee
                        Coverage</span>
                </div>
            </div>
            <div class="title-underline mx-auto"></div>
        </div>

        <div class="search-stats-wrapper p-3 mb-5 shadow-sm bg-white rounded-4 d-flex align-items-center flex-wrap gap-3">
            <div class="search-input-group flex-grow-1 position-relative">
                <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                <input type="text" class="form-control ps-5 py-2 border-light shadow-none rounded-3"
                    style="background: #f8f9fa;" placeholder="Search colleges or locations...">
            </div>
            <div class="stat-box d-flex gap-4 border-start ps-4 ms-md-2">
                <div class="stat-item text-center">
                    <span class="stat-num text-primary fw-bold fs-5">100</span>
                    <span class="stat-label d-block text-muted small">Colleges</span>
                </div>
                <div class="stat-item text-center">
                    <span class="stat-num text-success fw-bold fs-5">82.3%</span>
                    <span class="stat-label d-block text-muted small">Avg. Placement</span>
                </div>
                <div class="stat-item text-center">
                    <span class="stat-num fw-bold fs-5" style="color: #a855f7;">₹6,44,333</span>
                    <span class="stat-label d-block text-muted small">Avg. Package</span>
                </div>
            </div>
        </div>

        <!-- 1-box -->
        <div class="row g-4">
            <div class="col-12 col-xl-6">
                <div class="college-card p-4 border-0 shadow-sm position-relative overflow-hidden bg-white"
                    style="border-radius: 24px; transition: 0.4s;">
                    <div class="position-absolute top-0 end-0 bg-success text-white px-3 py-1 fw-bold"
                        style="font-size: 10px; border-bottom-left-radius: 15px;">
                        FULL SCHOLARSHIP ELIGIBLE
                    </div>

                    <div class="d-flex align-items-start gap-3">
                        <div class="rank-badge rounded-3"
                            style="width: 50px; height: 50px; background: #1a73e8; color: white; display: flex; align-items: center; justify-content: center; font-weight: 800; position: relative;">
                            #1 <div
                                class="position-absolute top-0 end-0 translate-middle bg-warning rounded-circle p-1 border border-white"
                                style="width: 18px; height: 18px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-check-lg text-white" style="font-size: 10px;"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <img src="{{ asset('website/assests/college-img/vgi-logo.png') }}" alt width="70"
                                    alt="logo">
                                <h5 class="fw-bold mb-0" style="color: #1e293b; font-size: 1.1rem;">Vishveshwarya Group
                                    Of Institutions</h5>
                            </div>
                            <p class="text-muted mb-2 small"><i class="bi bi-geo-alt-fill text-danger me-1"></i>
                                Gratter Noida Dadri</p>
                            <div class="d-flex gap-2">
                                <span class="badge bg-light text-dark border-0 px-2 py-1">⭐ 4.5</span>
                                <span class="badge bg-light text-secondary border-0 fw-normal">Est. 2000</span>
                                <span class="badge bg-blue-subtle text-primary border-0 px-3"
                                    style="background: #eef2ff;">Private</span>
                                <!-- <span class="badge bg-light text-secondary border-0 fw-normal">NIRF Ranking 151-200
                                                by
                                                NIRF 2025 </span> -->
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 align-items-center">
                        <div class="col-md-7">
                            <div class="d-flex flex-wrap gap-1">
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">B.Tech CSE</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">AI</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Data Science </span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Meachine Learning </span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Electronics</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border" style="font-size: 11px;">B.
                                    Pharm</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border" style="font-size: 11px;">M.
                                    Pharm</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Management</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Fashion Designing</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Agriculture</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">BA</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">B.Ed</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Journalism</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Law</span>


                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm"
                                style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                <small class="text-muted text-decoration-line-through d-block" style="font-size: 11px;">Fee:
                                    ₹1,33,000 - ₹5,75,000</small>
                                <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                        style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                <span class="badge bg-success mt-1 w-100" style="font-size: 10px; letter-spacing: 0.5px;">UP
                                    to 100% SCHOLARSHIP
                                    APPLIED</span>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" style="opacity: 0.05;">

                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="small text-muted">Cutoff: <span class="fw-bold text-dark">JEE Main:
                                44,712</span>
                        </div>
                        <div class="small text-muted">Entrance: <span class="fw-bold text-dark">CUET, JEE</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="collegedetails/vgi-details.html"><button class="btn btn-brand-outline">View
                                    Details</button></a>
                            <a href="form.html" class="flex-fill"
                                onclick="saveCollege('Vishveshwaraya Group Of Institutions')">
                                <button class="btn-apply-now w-100">Apply Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2-box -->
            <div class="col-12 col-xl-6">
                <div class="college-card p-4 border-0 shadow-sm position-relative overflow-hidden bg-white"
                    style="border-radius: 24px; transition: 0.4s;">
                    <div class="position-absolute top-0 end-0 bg-success text-white px-3 py-1 fw-bold"
                        style="font-size: 10px; border-bottom-left-radius: 15px;">
                        FULL SCHOLARSHIP ELIGIBLE
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="rank-badge rounded-3"
                            style="width: 50px; height: 50px; background: #06b6d4; color: white; display: flex; align-items: center; justify-content: center; font-weight: 800;">
                            #2
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <img src="{{ asset('website/assests/college-img/dindyal-logo.png') }}" alt width="70"
                                    alt="logo">
                                <h5 class="fw-bold mb-0" style="color: #1e293b; font-size: 1.1rem;">Dayal Group of
                                    Institutions
                                </h5>
                            </div>
                            <p class="text-muted mb-2 small"><i class="bi bi-geo-alt-fill text-danger me-1"></i>
                                Lucknow </p>
                            <div class="d-flex gap-2">
                                <span class="badge bg-light text-dark border-0 px-2 py-1">⭐ 4.2</span>
                                <span class="badge bg-light text-secondary border-0 fw-normal">Est. 2014</span>
                                <span class="badge bg-blue-subtle text-primary border-0 px-3"
                                    style="background: #eef2ff;">Private</span>
                                <!-- <span class="badge bg-light text-secondary border-0 fw-normal">NIRF Ranking 170 by
                                                NIRF 2025 </span> -->
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 align-items-center">
                        <div class="col-md-7">
                            <div class="d-flex flex-wrap gap-1">
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Management</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Pharmacy</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Higher Studies</span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm"
                                style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                <small class="text-muted text-decoration-line-through d-block" style="font-size: 11px;">Fee:
                                    ₹1,35,000 - ₹8,37,000</small>
                                <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                        style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                <span class="badge bg-success mt-1 w-100" style="font-size: 10px; letter-spacing: 0.5px;">UP
                                    to 100% SCHOLARSHIP
                                    APPLIED</span>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" style="opacity: 0.05;">

                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="small text-muted">Entrance: <span class="fw-bold text-dark">CUET</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="collegedetails/dyalcollege.html"><button class="btn btn-brand-outline">View
                                    Details</button></a>
                            <a href="form.html" class="flex-fill" onclick="saveCollege('Dayal Group of Institutions')">
                                <button class="btn-apply-now w-100">Apply Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3-box -->
            <div class="col-12 col-xl-6">
                <div class="college-card p-4 border-0 shadow-sm position-relative overflow-hidden bg-white"
                    style="border-radius: 24px; transition: 0.4s;">
                    <div class="position-absolute top-0 end-0 bg-success text-white px-3 py-1 fw-bold"
                        style="font-size: 10px; border-bottom-left-radius: 15px;">
                        FULL SCHOLARSHIP ELIGIBLE
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="rank-badge rounded-3"
                            style="width: 50px; height: 50px; background: #06b6d4; color: white; display: flex; align-items: center; justify-content: center; font-weight: 800;">
                            #3
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <img src="{{ asset('website/assests/college-img/mc-sexenalogo.png') }}" alt width="70"
                                    alt="logo">
                                <h5 class="fw-bold mb-0" style="color: #1e293b; font-size: 1.1rem;">Dr. M. C. Saxena
                                    Group of Institutions
                                </h5>
                            </div>
                            <p class="text-muted mb-2 small"><i class="bi bi-geo-alt-fill text-danger me-1"></i>
                                Lucknow</p>
                            <div class="d-flex gap-2">
                                <span class="badge bg-light text-dark border-0 px-2 py-1">⭐ 4.2</span>
                                <span class="badge bg-light text-secondary border-0 fw-normal">Est. 2004</span>
                                <span class="badge bg-blue-subtle text-primary border-0 px-3"
                                    style="background: #eef2ff;">Private</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 align-items-center">
                        <div class="col-md-7">
                            <div class="d-flex flex-wrap gap-1">
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Mechanical Eng.</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border" style="font-size: 11px;">Cse
                                    Eng.</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Data Science</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">AI</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Meachine Learning</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Electical Eng.</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Data Science</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Management</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border" style="font-size: 11px;">B.
                                    Pharm</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border" style="font-size: 11px;">D.
                                    Pharm</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Higher Studies</span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm"
                                style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                <small class="text-muted text-decoration-line-through d-block" style="font-size: 11px;">Fee:
                                    ₹1,35,000 - ₹8,37,000</small>
                                <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                        style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                <span class="badge bg-success mt-1 w-100" style="font-size: 10px; letter-spacing: 0.5px;">UP
                                    to 100% SCHOLARSHIP
                                    APPLIED</span>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" style="opacity: 0.05;">

                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="small text-muted">Entrance: <span class="fw-bold text-dark">JEE, CUET</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="collegedetails/saxenacollege.html"><button class="btn btn-brand-outline">View
                                    Details</button></a>
                            <a href="form.html" class="flex-fill"
                                onclick="saveCollege('D.r M C Saxena Group Of Institutions ')">
                                <button class="btn-apply-now w-100">Apply Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4-box -->
            <div class="col-12 col-xl-6">
                <div class="college-card p-4 border-0 shadow-sm position-relative overflow-hidden bg-white"
                    style="border-radius: 24px; transition: 0.4s;">
                    <div class="position-absolute top-0 end-0 bg-success text-white px-3 py-1 fw-bold"
                        style="font-size: 10px; border-bottom-left-radius: 15px;">
                        FULL SCHOLARSHIP ELIGIBLE
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="rank-badge rounded-3"
                            style="width: 50px; height: 50px; background: #06b6d4; color: white; display: flex; align-items: center; justify-content: center; font-weight: 800;">
                            #4
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <img src="{{ asset('website/assests/college-img/himalya-logo.jpg') }}" alt width="70"
                                    alt="logo">
                                <h5 class="fw-bold mb-0" style="color: #1e293b; font-size: 1.1rem;">Himalayan Group of
                                    Institutions
                                </h5>
                            </div>
                            <p class="text-muted mb-2 small"><i class="bi bi-geo-alt-fill text-danger me-1"></i>
                                Knowledge Park II, Greater Noida</p>
                            <div class="d-flex gap-2">
                                <span class="badge bg-light text-dark border-0 px-2 py-1">⭐ 4.2</span>
                                <span class="badge bg-light text-secondary border-0 fw-normal">Est. 2002</span>
                                <span class="badge bg-blue-subtle text-primary border-0 px-3"
                                    style="background: #eef2ff;">Private</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 align-items-center">
                        <div class="col-md-7">
                            <div class="d-flex flex-wrap gap-1">
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">B.Tech CSE</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Mechanical Eng.</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Electrical Eng.</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Civil Eng.</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">D.Pharm</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">B.Pharm</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">M.Pharm</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">BBA</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">MBA</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Law</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Nursing Program</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Education Program</span>

                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm"
                                style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                <small class="text-muted text-decoration-line-through d-block" style="font-size: 11px;">Fee:
                                    ₹1,35,000 - ₹7,37,000</small>
                                <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                        style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                <span class="badge bg-success mt-1 w-100" style="font-size: 10px; letter-spacing: 0.5px;">
                                    UP to 100% SCHOLARSHIP
                                    APPLIED</span>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" style="opacity: 0.05;">

                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="small text-muted">Entrance: <span class="fw-bold text-dark">JEE,CUET</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="collegedetails/himalyagroup.html"><button class="btn btn-brand-outline">View
                                    Details</button></a>
                            <a href="form.html" class="flex-fill" onclick="saveCollege('Himalayan Group of Institutions')">
                                <button class="btn-apply-now w-100">Apply Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5-box -->
            <div class="col-12 col-xl-6">
                <div class="college-card p-4 border-0 shadow-sm position-relative overflow-hidden bg-white"
                    style="border-radius: 24px; transition: 0.4s;">
                    <div class="position-absolute top-0 end-0 bg-success text-white px-3 py-1 fw-bold"
                        style="font-size: 10px; border-bottom-left-radius: 15px;">
                        FULL SCHOLARSHIP ELIGIBLE
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="rank-badge rounded-3"
                            style="width: 50px; height: 50px; background: #06b6d4; color: white; display: flex; align-items: center; justify-content: center; font-weight: 800;">
                            #5
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <img src="{{ asset('website/assests/college-img/guru-logo.png') }}" alt width="70"
                                    alt="logo">
                                <h5 class="fw-bold mb-0" style="color: #1e293b; font-size: 1.1rem;">Guru Tegh Bahadur
                                    Institute of Engineering & Technology
                                </h5>
                            </div>
                            <p class="text-muted mb-2 small"><i class="bi bi-geo-alt-fill text-danger me-1"></i>
                                Knowledge Park II, Greater Noida</p>
                            <div class="d-flex gap-2">
                                <span class="badge bg-light text-dark border-0 px-2 py-1">⭐ 4.2</span>
                                <span class="badge bg-light text-secondary border-0 fw-normal">Est. 1998</span>
                                <span class="badge bg-blue-subtle text-primary border-0 px-3"
                                    style="background: #eef2ff;">Private</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 align-items-center">
                        <div class="col-md-7">
                            <div class="d-flex flex-wrap gap-1">
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">BBA</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">MBA</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">BCA</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">B.Sc. Medical Lab</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">B.Sc (IT)</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">M.Sc (IT)</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">PGDCA</span>

                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm"
                                style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                <small class="text-muted text-decoration-line-through d-block" style="font-size: 11px;">Fee:
                                    ₹1,25,000 - ₹5,37,000</small>
                                <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                        style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                <span class="badge bg-success mt-1 w-100" style="font-size: 10px; letter-spacing: 0.5px;">
                                    UP to 100% SCHOLARSHIP
                                    APPLIED</span>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" style="opacity: 0.05;">

                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="small text-muted">Entrance: <span class="fw-bold text-dark">JEE,CUET</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="collegedetails/gurutejcollege.html"><button class="btn btn-brand-outline">View
                                    Details</button></a>
                            <a href="form.html" class="flex-fill" onclick="saveCollege('Guru Tegh Bahadur Institute')">
                                <button class="btn-apply-now w-100">Apply Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6-box -->
            <div class="col-12 col-xl-6">
                <div class="college-card p-4 border-0 shadow-sm position-relative overflow-hidden bg-white"
                    style="border-radius: 24px; transition: 0.4s;">
                    <div class="position-absolute top-0 end-0 bg-success text-white px-3 py-1 fw-bold"
                        style="font-size: 10px; border-bottom-left-radius: 15px;">
                        FULL SCHOLARSHIP ELIGIBLE
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="rank-badge rounded-3"
                            style="width: 50px; height: 50px; background: #06b6d4; color: white; display: flex; align-items: center; justify-content: center; font-weight: 800;">
                            #6
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <img src="{{ asset('website/assests/college-img/puran-logo.png') }}" alt width="70"
                                    alt="logo">
                                <h5 class="fw-bold mb-0" style="color: #1e293b; font-size: 1.1rem;">Puran Murti Group of
                                    Institutions
                                </h5>
                            </div>
                            <p class="text-muted mb-2 small"><i class="bi bi-geo-alt-fill text-danger me-1"></i>
                                Sonipat, Haryana</p>
                            <div class="d-flex gap-2">
                                <span class="badge bg-light text-dark border-0 px-2 py-1">⭐ 4.1</span>
                                <span class="badge bg-light text-secondary border-0 fw-normal">Est. 2008</span>
                                <span class="badge bg-blue-subtle text-primary border-0 px-3"
                                    style="background: #eef2ff;">Private</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 align-items-center">
                        <div class="col-md-7">
                            <div class="d-flex flex-wrap gap-1">
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">B.Tech CSE</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border" style="font-size: 11px;">AI
                                    & ML</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">M.Tech</span>

                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">MBA</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">BBA</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">Executive Training</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">B.Pharm</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">D.Pharm</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border" style="font-size: 11px;">LLB
                                    & Integrated Legal Programs.</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border" style="font-size: 11px;">BA
                                    LL.B (Hons.)</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border" style="font-size: 11px;">BBA
                                    LL.B (Hons.)</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border" style="font-size: 11px;">ITI
                                    Program</span>
                                <span class="px-2 py-1 rounded-pill bg-light text-muted border"
                                    style="font-size: 11px;">B.Voc / D.Voc courses</span>

                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm"
                                style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                <small class="text-muted text-decoration-line-through d-block" style="font-size: 11px;">Fee:
                                    ₹1,25,000 - ₹5,37,000</small>
                                <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                        style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                <span class="badge bg-success mt-1 w-100" style="font-size: 10px; letter-spacing: 0.5px;">
                                    UP to 100% SCHOLARSHIP
                                    APPLIED</span>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" style="opacity: 0.05;">

                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="small text-muted">Entrance: <span class="fw-bold text-dark">JEE,CUET</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="collegedetails/gurutejcollege.html"><button class="btn btn-brand-outline">View
                                    Details</button></a>
                            <a href="form.html" class="flex-fill"
                                onclick="saveCollege('Puran Murti Group Of Institutions')">
                                <button class="btn-apply-now w-100">Apply Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="college.html">
        <div class="d-flex justify-content-center py-4">
            <button type="button" class="btn btn-primary btn-lg px-4">Explore Now</button>
        </div>
    </a>
    <!-- Find Near BY PG And Hostel -->
    <!-- <div class="d-flex justify-content-between align-items-center flex-wrap mb-4 p-3 bg-white shadow-sm rounded-4"
                    style="border: 1px solid #edf2f7; margin-left:100px; margin-right:100px;">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <h4 class="fw-bold mb-1" style="color: #1e293b; ">Find Nearby Hostel/PG</h4>
                        <p class="text-muted small mb-0">Discover 100% Scholarship verified stays near your campus</p>
                    </div>

                    <div class="col-12 col-md-6 d-flex gap-2">
                        <div class="input-group search-box-container shadow-sm flex-grow-1">
                            <span class="input-group-text bg-white border-end-0 py-2">
                                <i class="bi bi-search text-primary"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 shadow-none ps-0 py-2" id="hostelSearch"
                                onkeyup="filterHostels()" placeholder="Search by location or hostel name...">

                            <span class="input-group-text bg-white border-start-0 py-2">
                                <i class="bi bi-geo-alt text-danger" style="cursor: pointer;" title="Detect my location"></i>
                            </span>
                        </div>

                        <div class="dropdown">
                            <button class="btn btn-outline-primary dropdown-toggle rounded-3 py-2 px-3" type="button"
                                data-bs-toggle="dropdown">
                                <i class="bi bi-filter-left me-1"></i> Filter
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
                                <li><a class="dropdown-item" href="#"> <i class="bi bi-gender-male me-2"></i> Male Only</a></li>
                                <li><a class="dropdown-item" href="#"> <i class="bi bi-gender-female me-2"></i> Female Only</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#"> <i class="bi bi-currency-rupee me-2"></i> Low to High</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->

    <!-- <div class="container py-5">
                    <div class="hostel-card bg-white p-3 shadow-sm position-relative overflow-hidden"
                        style="border-radius: 24px; border: 1px solid #f1f5f9;">
                        <div class="row g-4">
                            <div class="col-md-5 col-lg-4">
                                <div class="position-relative h-100">
                                    <img src="{{ asset('website/assests/image/room.jpg') }}" alt class="img-fluid rounded-4 h-100 w-100 shadow-sm"
                                        style="object-fit: cover; min-height: 300px;" alt="Hostel Room">
                                    <div class="position-absolute top-0 start-0 m-3 d-flex gap-2">
                                        <span
                                            class="badge rounded-pill bg-warning text-dark px-3 py-2 fw-bold shadow-sm">LUXURY</span>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 col-lg-8 d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h3 class="fw-bold mb-1" style="color: #0f172a;">Mangal Hostel</h3>
                                        <p class="text-muted small"><i class="bi bi-geo-alt-fill text-danger me-1"></i>
                                            Knowledge
                                            Park III, Greater Noida</p>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm rounded-pill px-3 fw-600">
                                        <i class="bi bi-compass me-1"></i> View direction
                                    </button>
                                </div>

                                <div class="d-flex flex-wrap gap-4 my-3 text-secondary" style="font-size: 13px;">
                                    <span><i class="bi bi-snow text-primary me-1"></i> AC Available</span>
                                    <span><i class="bi bi-droplet text-primary me-1"></i> Attached Washroom</span>
                                    <span><i class="bi bi-cup-hot text-primary me-1"></i> Food Available</span>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-bold text-dark small mb-3">SELECT OCCUPANCY</label>
                                    <div class="d-flex gap-3" id="roomSelector">
                                        <button class="btn btn-room active" onclick="updatePrice(this, 12000, 'Single')">
                                            <i class="bi bi-person-fill me-2"></i>Single Bed
                                        </button>
                                        <button class="btn btn-room" onclick="updatePrice(this, 8500, 'Double')">
                                            <i class="bi bi-people-fill me-2"></i>Double Bed
                                        </button>
                                        <button class="btn btn-room" onclick="updatePrice(this, 6500, 'Triple')">
                                            <i class="bi bi-group me-2"></i>Triple Bed
                                        </button>
                                    </div>
                                </div>

                                <div class="mt-auto p-3 rounded-4 bg-light d-flex justify-content-between align-items-center">
                                    <div>
                                        <small class="text-muted d-block fw-500">Starts from</small>
                                        <div class="d-flex align-items-baseline gap-1">
                                            <h3 class="fw-bold mb-0" class="displayPrice" style="color: #1a73e8; transition: 0.3s;">
                                                ₹12,000</h3>
                                            <span class="text-muted" style="font-size: 14px;">/month</span>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-visit">Schedule a Visit</button>
                                        <button class="btn btn-brand-primary shadow-blue">Request to Call</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->


    <!-- 2--box -->
    <!-- <div class="hostel-card bg-white p-3 shadow-sm position-relative overflow-hidden"
                        style="border-radius: 24px; border: 1px solid #f1f5f9;">
                        <div class="row g-4">
                            <div class="col-md-5 col-lg-4">
                                <div class="position-relative h-100">
                                    <img src="{{ asset('website/assests/image/room-2.jpg') }}" alt class="img-fluid rounded-4 h-100 w-100 shadow-sm"
                                        style="object-fit: cover; min-height: 300px;" alt="Hostel Room">
                                    <div class="position-absolute top-0 start-0 m-3 d-flex gap-2">
                                        <span
                                            class="badge rounded-pill bg-warning text-dark px-3 py-2 fw-bold shadow-sm">LUXURY</span>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 col-lg-8 d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h3 class="fw-bold mb-1" style="color: #0f172a;">Annapurna Hostels</h3>
                                        <p class="text-muted small"><i class="bi bi-geo-alt-fill text-danger me-1"></i>
                                            Knowledge
                                            Park III, Greater Noida</p>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm rounded-pill px-3 fw-600">
                                        <i class="bi bi-compass me-1"></i> View direction
                                    </button>
                                </div>

                                <div class="d-flex flex-wrap gap-4 my-3 text-secondary" style="font-size: 13px;">
                                    <span><i class="bi bi-snow text-primary me-1"></i> AC Available</span>
                                    <span><i class="bi bi-droplet text-primary me-1"></i> Attached Washroom</span>
                                    <span><i class="bi bi-cup-hot text-primary me-1"></i> Food Available</span>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-bold text-dark small mb-3">SELECT OCCUPANCY</label>
                                    <div class="d-flex gap-3" id="roomSelector">
                                        <button class="btn btn-room active" onclick="updatePrice(this, 12000, 'Single')">
                                            <i class="bi bi-person-fill me-2"></i>Single Bed
                                        </button>
                                        <button class="btn btn-room" onclick="updatePrice(this, 8500, 'Double')">
                                            <i class="bi bi-people-fill me-2"></i>Double Bed
                                        </button>
                                        <button class="btn btn-room" onclick="updatePrice(this, 6500, 'Triple')">
                                            <i class="bi bi-group me-2"></i>Triple Bed
                                        </button>
                                    </div>
                                </div>

                                <div class="mt-auto p-3 rounded-4 bg-light d-flex justify-content-between align-items-center">
                                    <div>
                                        <small class="text-muted d-block fw-500">Starts from</small>
                                        <div class="d-flex align-items-baseline gap-1">
                                            <h3 class="fw-bold mb-0" class="displayPrice" style="color: #1a73e8; transition: 0.3s;">
                                                ₹12,000</h3>
                                            <span class="text-muted" style="font-size: 14px;">/month</span>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-visit">Schedule a Visit</button>
                                        <button class="btn btn-brand-primary shadow-blue">Request to Call</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
    <!-- Career path Section -->


    <div class="container pb-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h1 class="hero-title">
                    Find the <span class="highlight-slate">perfect</span> career path <br>for your future.
                </h1>
                <p class="hero-description">
                    Using advanced behavioral science and AI to align your natural talents with the world's most
                    profitable industries.
                </p>

                <div class="d-flex gap-3 mb-5 justify-content-center justify-content-lg-start">
                    <a href="form.html" class="btn-action">
                        Start AI Assessment <i data-lucide="arrow-right"></i>
                    </a>
                </div>

                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="icon-circle"><i data-lucide="fingerprint"></i></div>
                            <h5 class="sora fw-bold">Trait Mapping</h5>
                            <p class="text-muted small">Deep analysis of your core psychological drivers.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="icon-circle"><i data-lucide="globe"></i></div>
                            <h5 class="sora fw-bold">Global Trends</h5>
                            <p class="text-muted small">Real-time matching with evolving job markets.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-visual">
                    <div class="status-pill">
                        <span class="me-2"
                            style="width:8px; height:8px; background:#10b981; border-radius:50%; display:inline-block"></span>
                        AI Engine Ready
                    </div>
                    <h3 class="sora fw-bold mb-4">Assessment Flow</h3>

                    <div class="step-row">
                        <div class="icon-circle m-0" style="width:40px; height:40px;"><i data-lucide="user" size="18"></i>
                        </div>
                        <div>
                            <p class="mb-0 fw-bold">User Profiling</p>
                            <span class="text-muted small">Completed</span>
                        </div>
                    </div>

                    <div class="step-row">
                        <div class="icon-circle m-0" style="width:40px; height:40px; background: #fffbeb; color: #d97706;">
                            <i data-lucide="layers" size="18"></i>
                        </div>
                        <div>
                            <p class="mb-0 fw-bold">Skill Synthesis</p>
                            <span class="text-muted small">Processing internal data...</span>
                        </div>
                    </div>

                    <div class="step-row border-0">
                        <div class="icon-circle m-0" style="width:40px; height:40px; background: #f1f5f9;"><i
                                data-lucide="check" size="18"></i></div>
                        <div>
                            <p class="mb-0 fw-bold">Final Matching</p>
                            <span class="text-muted small">Awaiting synthesis</span>
                        </div>
                    </div>

                    <div class="mt-4 p-4 rounded-4" style="background: var(--bg-subtle); border: 1px dashed #cbd5e1;">
                        <p class="small text-center text-muted mb-0">Your report will be ready in <b>2 minutes</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ask Our Expert Team section -->
    <section class="expert-container">
        <div class="container text-center">
            <h2 class="hero-title">Ask our experts <span class="text-brand">anything</span></h2>
            <p class="text-muted mx-auto mb-5" style="max-width: 600px;">
                Get personalized industry insights from verified career counselors within 1 hours.
            </p>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="input-group-custom">
                        <i data-lucide="message-square" class="ms-3 text-muted"></i>
                        <input type="text" class="expert-field"
                            placeholder="Ask about specific career paths, skills, or trends...">
                        <button class="btn-brand">Ask Expert <i data-lucide="send"></i></button>
                    </div>
                    <div class="d-flex justify-content-between px-3 mt-3">
                        <span class="small text-muted">Response time: ~1hrs</span>
                        <span class="small text-muted">0/500 characters</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- University section -->
    <script>
        const slider = document.getElementById('uni-slider');

        function handleSlide(direction) {
            // Find width of one card + its gap
            const card = document.querySelector('.slider-card-container');
            const moveDistance = card.clientWidth + 20;

            if (direction === 'left') {
                slider.scrollLeft -= moveDistance;
            } else {
                slider.scrollLeft += moveDistance;
            }
        }
    </script>

    <!-- find goal section -->
    <script>
        function moveSlider(direction) {
            const slider = document.getElementById('mainSlider');

            // Dynamic Card Width: Ye current card ki width + gap calculate karega
            // Isse responsive layout par sliding kabhi kharab nahi hogi.
            const firstCard = slider.querySelector('.goal-card');
            const gap = parseInt(window.getComputedStyle(slider).gap) || 24;
            const scrollStep = firstCard.offsetWidth + gap;

            slider.scrollBy({
                left: direction * scrollStep,
                behavior: 'smooth'
            });
        }

        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');

        slider.addEventListener('scroll', () => {
            // Hide/Show Prev Button
            if (slider.scrollLeft <= 5) {
                prevBtn.style.opacity = "0.3";
                prevBtn.style.pointerEvents = "none";
            } else {
                prevBtn.style.opacity = "1";
                prevBtn.style.pointerEvents = "auto";
            }

            // Hide/Show Next Button
            const isAtEnd = slider.scrollLeft + slider.offsetWidth >= slider.scrollWidth - 5;
            if (isAtEnd) {
                nextBtn.style.opacity = "0.3";
                nextBtn.style.pointerEvents = "none";
            } else {
                nextBtn.style.opacity = "1";
                nextBtn.style.pointerEvents = "auto";
            }
        });

        // Initial check on load
        window.addEventListener('load', () => {
            if (slider.scrollLeft <= 0) {
                prevBtn.style.opacity = "0.3";
                prevBtn.style.pointerEvents = "none";
            }
        });


    </script>

    <!-- Find Near Hostle And PG Sections Js  -->
    <script>
        function updatePrice(element, price) {
            try {
                // 1. Find the parent card first
                const parentCard = element.closest('.hostel-card');
                if (!parentCard) {
                    console.error("Error: .hostel-card class not found on parent!");
                    return;
                }

                // 2. Update Buttons (Active State)
                const buttons = parentCard.querySelectorAll('.btn-room');
                buttons.forEach(btn => btn.classList.remove('active'));
                element.classList.add('active');

                // 3. Update Price (Target by Class)
                const priceDisplay = parentCard.querySelector('.displayPrice');
                if (priceDisplay) {
                    priceDisplay.classList.add('price-pop');

                    setTimeout(() => {
                        priceDisplay.innerText = '₹' + price.toLocaleString('en-IN');
                        priceDisplay.classList.remove('price-pop');
                    }, 150);
                } else {
                    console.error("Error: .displayPrice class not found inside this card!");
                }
            } catch (err) {
                console.error("JS Error:", err);
            }
        }
    </script>
    <!-- Carrer Path sections -->
    <script>
        lucide.createIcons();
    </script>
    <!-- Ask Our Expert -->
    <script>
        lucide.createIcons();
    </script>

    <script>
        function saveCollege(name) {
            localStorage.setItem('selectedCollege', name);
        }
    </script>
@endsection
@push('footer')
    <!-- extra footer -->
@endpush