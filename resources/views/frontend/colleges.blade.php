@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Starter - {{ config('app.name') }}</title>
    <meta name="description"
        content="Collegesagar is your ultimate guide to finding the perfect college. Explore comprehensive information, reviews, and resources to make informed decisions about your education journey. Discover top colleges, courses, and career paths with us.">
@endpush

@section('content')
    <div class="container py-2">
        <div class="search-container mt-2">
            <h3 class="section-title">Find Colleges</h3>
            <div class="row g-3">
                <div class="col-lg-4 col-md-12">
                    <label class="form-label">Search College</label>
                    <div class="input-group-custom">
                        <i class="fas fa-search"></i>
                        <input type="text" class="form-control" placeholder="Type college name...">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <label class="form-label">State</label>
                    <div class="input-group-custom">
                        <i class="fas fa-map-marker-alt"></i>
                        <select class="form-select">
                            <option selected>All States</option>
                            <option>Delhi</option>
                            <option>Maharashtra</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <label class="form-label">City</label>
                    <div class="input-group-custom">
                        <i class="fas fa-city"></i>
                        <select class="form-select">
                            <option selected>All Cities</option>
                            <option>Mumbai</option>
                            <option>New Delhi</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <label class="form-label">Course</label>
                    <div class="input-group-custom">
                        <i class="fas fa-book"></i>
                        <select class="form-select">
                            <option selected>All Courses</option>
                            <option>B.Tech</option>
                            <option>MBA</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-2 col-md-12 d-flex align-items-end">
                    <button class="btn btn-search">
                        Search Now
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- College List Sections start -->

    <!-- 1 st box -->
    <div class="container py-5">
        <div class="card college-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="college-img-wrapper">
                        <img src="{{ asset('website/assests/college-img/vgi-img.png') }}" class="college-img" alt="College Campus">
                        <span class="badge-nirf">150 by NIRF 2023</span>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start mb-3">
                            <img src="{{ asset('website/assests/college-img/vgi-logo.png') }}" class="rounded-circle me-3 border"
                                style="width: 100px; height: 100px;" alt="Logo">
                            <div>
                                <h4 class="fw-bold mb-1 text-dark">Vishveshwarya Group Of Institutions</h4>
                                <p class="text-muted small mb-0">
                                    <i class="fas fa-map-marker-alt me-1"></i> Greater Noida, Uttar Pradesh | AKTU |
                                    CCSU
                                    <i class="fas fa-users me-1 ms-2"></i> 15000+ Students
                                </p>
                            </div>
                        </div>

                        <p class="text-muted small mb-4" style="line-height: 1.6;">
                            Established in 2000, emerged as a leading private engineering institution in the
                            NCR region. The institute is the first private institution in UP to achieve UGC Autonomous
                            status...
                        </p>

                        <div class="row g-2 mb-4">
                            <div class="col-6 col-lg-3">
                                <div class="stat-box" style="background: #f0fdf4;">
                                    <i class="fas fa-star text-success"></i>
                                    <span class="badge-nirf">15 Test Seats</span>
                                    <span class="stat-title">4.5 Rating</span>

                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="stat-box" style="background: #eff6ff;">
                                    <i class="fas fa-building text-primary"></i>
                                    <span class="stat-title">Accenture, Cognizant, TCS, HCL, Infosys, Wipro, Zee TV,
                                        Nokia</span>
                                    <span class="stat-sub">Top Recruiters</span>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="stat-box" style="background: #fdf4ff;">
                                    <i class="fas fa-certificate text-purple" style="color:#a855f7;"></i>
                                    <span class="stat-title">AICTE, PCI, BCI, NCTE, BTEUP </span>
                                    <span class="stat-sub">Accredited</span>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm "
                                    style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                    <small class="text-muted text-decoration-line-through d-block"
                                        style="font-size: 11px;">Fee: ₹1,33,000 - ₹5,75,000</small>
                                    <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                            style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                    <span class="badge bg-success mt-1" style="font-size: 10px; letter-spacing: 0.5px;">UP
                                        To 100% SCHOLARSHIP<br>
                                        APPLIED</span>
                                </div>
                            </div>

                        </div>

                        <div class="mb-4">
                            <h6 class="fw-bold small text-uppercase mb-2 text-secondary">Placement Highlights</h6>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="pill-highlight">Highest Pkg: ₹20.5 LPA</span>
                                <span class="pill-highlight">Average Pkg: ₹7.35 LPA</span>
                                <span class="pill-highlight">Recent: ₹13.3 LPA (TCS)</span>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-lg-4 col-12">
                                <button class="btn btn-primary btn-apply">
                                    <a href="form.html" class="flex-fill text-white text-decoration-none"
                                        onclick="saveCollege('Vishveshwarya Group Of Institutions')">
                                        <i class="fas fa-paper-plane me-2"></i>Apply Now
                                    </a>
                                </button>
                                </a>
                            </div>

                            <div class="col-lg-4 col-6">
                                <a href="assests/broucher/vgi-broucher.pdf" download="VGI-Brochure.pdf"
                                    type="application/pdf" class="btn btn-outline-custom">
                                    <i class="fas fa-download me-2"></i>Download Brochure
                                </a>
                            </div>
                            <div class="col-lg-4 col-6">
                                <a href="collegedetails/vgi-details.html">
                                    <button class="btn btn-outline-custom">
                                        <i class="fas fa-info-circle me-2"></i>View Details
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2 nd box -->
        <div class="container py-5">
            <div class="card college-card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="college-img-wrapper">
                            <img src="{{ asset('website/assests/college-img/dindyal.png') }}" class="college-img" alt="College Campus">
                            <!-- <span class="badge-nirf"></span> -->
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start mb-3">
                                <img src="{{ asset('website/assests/college-img/dindyal-logo.png') }}" class="rounded-circle me-3 border"
                                    style="width: 100px; height: 100px;" alt="Logo">
                                <div>
                                    <h4 class="fw-bold mb-1 text-dark">Dayal Group of Institutions
                                    </h4>
                                    <p class="text-muted small mb-0">
                                        <i class="fas fa-map-marker-alt me-1"></i> Lucknow , Uttar Pradesh |AKTU
                                        <i class="fas fa-users me-1 ms-2"></i> 9000+ Students
                                    </p>
                                </div>
                            </div>

                            <p class="text-muted small mb-4" style="line-height: 1.6;">
                                Established in 2009, Dayal Group of Institutions is a leading private educational campus
                                near Lucknow, committed to quality technical, management, and pharmacy education.
                            </p>

                            <div class="row g-2 mb-4">
                                <div class="col-6 col-lg-3">
                                    <div class="stat-box" style="background: #f0fdf4;">
                                        <i class="fas fa-star text-success"></i>
                                        <span class="badge-nirf">14 Test Seats</span>
                                        <span class="stat-title">4.1 Rating</span>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="stat-box" style="background: #eff6ff;">
                                        <i class="fas fa-building text-primary"></i>
                                        <span class="stat-title">TCS, Wipro, HCL, Tech Mahindra, Infoys, Genpact</span>
                                        <span class="stat-sub">Top Recruiters</span>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="stat-box" style="background: #fdf4ff;">
                                        <i class="fas fa-certificate text-purple" style="color:#a855f7;"></i>
                                        <span class="stat-title">AICTE, PCI, NCTE</span>
                                        <span class="stat-sub">Accredited</span>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm "
                                        style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                        <small class="text-muted text-decoration-line-through d-block"
                                            style="font-size: 11px;">Fee: ₹1,73,000 - ₹6,75,000</small>
                                        <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                                style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                        <span class="badge bg-success mt-1"
                                            style="font-size: 10px; letter-spacing: 0.5px;">UP To 100% SCHOLARSHIP<br>
                                            APPLIED</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h6 class="fw-bold small text-uppercase mb-2 text-secondary">Placement Highlights</h6>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="pill-highlight">Highest Pkg: ₹12 LPA</span>
                                    <span class="pill-highlight">Average Pkg: ₹6 LPA</span>
                                    <span class="pill-highlight">Recent: ₹10 LPA (Wipro)</span>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-lg-4 col-12">
                                    <button class="btn btn-primary btn-apply">
                                        <a href="form.html" class="flex-fill text-white text-decoration-none"
                                            onclick="saveCollege('Dayal Group of Institutions')">
                                            <i class="fas fa-paper-plane me-2"></i>Apply Now
                                        </a>
                                    </button>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <a href="assests/broucher/dyal-group-institutions.pdf"
                                        download="dyal-group-institutions.pdf" type="application/pdf"
                                        class="btn btn-outline-custom">
                                        <i class="fas fa-download me-2"></i>Download Brochure
                                    </a>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <a href="collegedetails/dyalcollege.html">
                                        <button class="btn btn-outline-custom">
                                            <i class="fas fa-info-circle me-2"></i>View Details
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3rd  box -->
            <div class="container py-5">
                <div class="card college-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="college-img-wrapper">
                                <img src="{{ asset('website/assests/college-img/mc-sexena.JPG') }}" class="college-img" alt="College Campus">
                                <!-- <span class="badge-nirf">151-200 by NIRF 2025</span> -->
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start mb-3">
                                    <img src="{{ asset('website/assests/college-img/mc-sexenalogo.png') }}" class="rounded-circle me-3 border"
                                        style="width: 100px; height: 100px;" alt="Logo">
                                    <div>
                                        <h4 class="fw-bold mb-1 text-dark">Dr. M. C. Saxena Group of Institutions</h4>
                                        <p class="text-muted small mb-0">
                                            <i class="fas fa-map-marker-alt me-1"></i> Lucknow, Uttar Pradesh |AKTU |
                                            BTEU
                                            <i class="fas fa-users me-1 ms-2"></i> 10000+ Students
                                        </p>
                                    </div>
                                </div>

                                <p class="text-muted small mb-4" style="line-height: 1.6;">
                                    Established in 2004, Dr. M. C. Saxena Group of Institutions is a prominent private
                                    educational campus in Lucknow offering engineering, management, pharmacy, and
                                    professional programs with modern infrastructure and industry-oriented training.
                                </p>

                                <div class="row g-2 mb-4">
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #f0fdf4;">
                                            <i class="fas fa-star text-success"></i>
                                            <span class="badge-nirf">10 Test Seats</span>
                                            <span class="stat-title">4.2 Rating</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #eff6ff;">
                                            <i class="fas fa-building text-primary"></i>
                                            <span class="stat-title">TCS, Wipro, HCL, Infosys, Tech Mahindra,
                                                Capgemini</span>
                                            <span class="stat-sub">Top Recruiters</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #fdf4ff;">
                                            <i class="fas fa-certificate text-purple" style="color:#a855f7;"></i>
                                            <span class="stat-title">AICTE, PCI, NCTE</span>
                                            <span class="stat-sub">Accredited</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm "
                                            style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                            <small class="text-muted text-decoration-line-through d-block"
                                                style="font-size: 11px;">Fee: ₹1,43,000 - ₹5,78,000</small>
                                            <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                                    style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                            <span class="badge bg-success mt-1"
                                                style="font-size: 10px; letter-spacing: 0.5px;">UP To 100%
                                                SCHOLARSHIP<br>
                                                APPLIED</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h6 class="fw-bold small text-uppercase mb-2 text-secondary">Placement Highlights
                                    </h6>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="pill-highlight">Highest Pkg: ₹20 LPA</span>
                                        <span class="pill-highlight">Average Pkg: ₹3.35 LPA</span>
                                        <span class="pill-highlight">Recent: ₹7 LPA (IT)</span>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col-lg-4 col-12">
                                        <button class="btn btn-primary btn-apply">
                                            <a href="form.html" class="flex-fill text-white text-decoration-none"
                                                onclick="saveCollege('Dr. M. C. Saxena Group of Institutions')">
                                                <i class="fas fa-paper-plane me-2"></i>Apply Now
                                            </a>
                                        </button>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href="assests/broucher/Dr.mc-saxena.pdf"
                                            download="Dr. M. C. Saxena Group of Institutions" type="application/pdf"
                                            class="btn btn-outline-custom">
                                            <i class="fas fa-download me-2"></i>Download Brochure
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href="collegedetails/saxenacollege.html">
                                            <button class="btn btn-outline-custom">
                                                <i class="fas fa-info-circle me-2"></i>View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 4 boxs -->
            <div class="container py-5">
                <div class="card college-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="college-img-wrapper">
                                <img src="{{ asset('website/assests/college-img/himalaya.jpg') }}" class="college-img" alt="College Campus">
                                <!-- <span class="badge-nirf">151-200 by NIRF 2025</span> -->
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start mb-3">
                                    <img src="{{ asset('website/assests/college-img/himalya-logo.jpg') }}" class="rounded-circle me-3 border"
                                        style="width: 100px; height: 100px;" alt="Logo">
                                    <div>
                                        <h4 class="fw-bold mb-1 text-dark">Himalayan Group of Institutions</h4>
                                        <p class="text-muted small mb-0">
                                            <i class="fas fa-map-marker-alt me-1"></i> Himachal Pradesh, |HPTU |HPU
                                            <i class="fas fa-users me-1 ms-2"></i> 5000+ Students
                                        </p>
                                    </div>
                                </div>

                                <p class="text-muted small mb-4" style="line-height: 1.6;">
                                    Established in 2002, HGPI is a multidisciplinary educational group offering programs
                                    in engineering, management, pharmacy, nursing, law, computer applications, and
                                    education.
                                </p>

                                <div class="row g-2 mb-4">
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #f0fdf4;">
                                            <i class="fas fa-star text-success"></i>
                                            <span class="badge-nirf">14 Test Seats</span>
                                            <span class="stat-title">4.5 Rating</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #eff6ff;">
                                            <i class="fas fa-building text-primary"></i>
                                            <span class="stat-title">Cipla, Sun Pharma, Pfizer, Mankind
                                            </span>
                                            <span class="stat-sub">Top Recruiters</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #fdf4ff;">
                                            <i class="fas fa-certificate text-purple" style="color:#a855f7;"></i>
                                            <span class="stat-title">AICTE, PCI</span>
                                            <span class="stat-sub">Accredited</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm "
                                            style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                            <small class="text-muted text-decoration-line-through d-block"
                                                style="font-size: 11px;">Fee: ₹1,33,000 - ₹6,75,000</small>
                                            <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                                    style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                            <span class="badge bg-success mt-1"
                                                style="font-size: 10px; letter-spacing: 0.5px;">UP To 100%
                                                SCHOLARSHIP<br>
                                                APPLIED</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h6 class="fw-bold small text-uppercase mb-2 text-secondary">Placement Highlights
                                    </h6>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="pill-highlight">Highest Pkg: ₹5 LPA (Pharmacy)</span>
                                        <span class="pill-highlight">Average Pkg: ₹4.35 LPA</span>
                                        <span class="pill-highlight">Recent: ₹3.3 LPA </span>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col-lg-4 col-12">
                                        <button class="btn btn-primary btn-apply">
                                            <a href="form.html" class="flex-fill text-white text-decoration-none"
                                                onclick="saveCollege('Himalayan Group of Institutions')">
                                                <i class="fas fa-paper-plane me-2"></i>Apply Now
                                            </a>
                                        </button>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href="assests/broucher/Himalayan-Group-of-Institutions.pdf"
                                            download="Himalya Group of institutions.pdf" type="application/pdf"
                                            class="btn btn-outline-custom">
                                            <i class="fas fa-download me-2"></i>Download Brochure
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href="collegedetails/himalyagroup.html">
                                            <button class="btn btn-outline-custom">
                                                <i class="fas fa-info-circle me-2"></i>View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 5 Boxes -->
            <div class="container py-5">
                <div class="card college-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="college-img-wrapper">
                                <img src="{{ asset('website/assests/college-img/guru-tej.jpg') }}" class="college-img" alt="College Campus">
                                <!-- <span class="badge-nirf">151-200 by NIRF 2025</span> -->
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start mb-3">
                                    <img src="{{ asset('website/assests/college-img/guru-logo.png') }}" class="rounded-circle me-3 border"
                                        style="width: 100px; height: 100px;" alt="Logo">
                                    <div>
                                        <h4 class="fw-bold mb-1 text-dark">Guru Tegh Bahadur Institute of Engineering &
                                            Technology</h4>
                                        <p class="text-muted small mb-0">
                                            <i class="fas fa-map-marker-alt me-1"></i> Ludhiana, Punjab |IKGPTU
                                            <i class="fas fa-users me-1 ms-2"></i> 9000+ Students
                                        </p>
                                    </div>
                                </div>
                                <p class="text-muted small mb-4" style="line-height: 1.6;">
                                    Established in 1997, Guru Tegh Bahadur Institute of Engineering and Technology is a
                                    reputed engineering college in Ludhiana that focuses on quality technical education,
                                </p>

                                <div class="row g-2 mb-4">
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #f0fdf4;">
                                            <i class="fas fa-star text-success"></i>
                                            <span class="badge-nirf">13 Test Seats</span>
                                            <span class="stat-title">4.2 Rating</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #eff6ff;">
                                            <i class="fas fa-building text-primary"></i>
                                            <span class="stat-title">ICICI Bank, Reliance Jio, IBM,
                                                Capgemini</span>
                                            <span class="stat-sub">Top Recruiters</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #fdf4ff;">
                                            <i class="fas fa-certificate text-purple" style="color:#a855f7;"></i>
                                            <span class="stat-title">AICTE, NBA </span>
                                            <span class="stat-sub">Accredited</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm "
                                            style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                            <small class="text-muted text-decoration-line-through d-block"
                                                style="font-size: 11px;">Fee: ₹1,33,000 - ₹5,75,000</small>
                                            <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                                    style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                            <span class="badge bg-success mt-1"
                                                style="font-size: 10px; letter-spacing: 0.5px;">UP To 100%
                                                SCHOLARSHIP<br>
                                                APPLIED</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h6 class="fw-bold small text-uppercase mb-2 text-secondary">Placement Highlights
                                    </h6>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="pill-highlight">Highest Pkg: ₹10-12 LPA</span>
                                        <span class="pill-highlight">Average Pkg: ₹4.35 LPA</span>
                                        <span class="pill-highlight">Recent: ₹6.3 LPA (IT services) </span>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col-lg-4 col-12">
                                        <button class="btn btn-primary btn-apply">
                                            <a href="form.html" class="flex-fill text-white text-decoration-none"
                                                onclick="saveCollege('Guru Tegh Bahadur Institute')">
                                                <i class="fas fa-paper-plane me-2"></i>Apply Now
                                            </a>
                                        </button>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href="assests/broucher/Guru-Tegh-Bahadur-Institute.pdf"
                                            download="Guru Tegh Bahadur Institute of Engineering & Technology (GTBIET).pdf"
                                            type="application/pdf" class="btn btn-outline-custom">
                                            <i class="fas fa-download me-2"></i>Download Brochure
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href="collegedetails/gurutejcollege.html">
                                            <button class="btn btn-outline-custom">
                                                <i class="fas fa-info-circle me-2"></i>View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 6 boxe -->
            <div class="container py-5">
                <div class="card college-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="college-img-wrapper">
                                <img src="{{ asset('website/assests/college-img/puran.jpg') }}" class="college-img" alt="College Campus">
                                <!-- <span class="badge-nirf">151-200 by NIRF 2025</span> -->
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start mb-3">
                                    <img src="{{ asset('website/assests/college-img/puran-logo.png') }}" class="rounded-circle me-3 border"
                                        style="width: 100px; height: 100px;" alt="Logo">
                                    <div>
                                        <h4 class="fw-bold mb-1 text-dark">Puran Murti Group of Institutions</h4>
                                        <p class="text-muted small mb-0">
                                            <i class="fas fa-map-marker-alt me-1"></i> Sonipat, Haryana |DCRUST
                                            <i class="fas fa-users me-1 ms-2"></i> 8000+ Students
                                        </p>
                                    </div>
                                </div>

                                <p class="text-muted small mb-4" style="line-height: 1.6;">
                                    Established in 2008, Puran Murti Group of Institutions provides industry-focused
                                    education with practical exposure in the NCR region.
                                </p>

                                <div class="row g-2 mb-4">
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #f0fdf4;">
                                            <i class="fas fa-star text-success"></i>
                                            <span class="badge-nirf">14 Test Seats</span>
                                            <span class="stat-title">4.2 Rating</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #eff6ff;">
                                            <i class="fas fa-building text-primary"></i>
                                            <span class="stat-title">Infosys, Wipro, HCL, Tech Mahindra, Justdial,
                                                TCS</span>
                                            <span class="stat-sub">Top Recruiters</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #fdf4ff;">
                                            <i class="fas fa-certificate text-purple" style="color:#a855f7;"></i>
                                            <span class="stat-title">AICTE</span>
                                            <span class="stat-sub">Accredited</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm "
                                            style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                            <small class="text-muted text-decoration-line-through d-block"
                                                style="font-size: 11px;">Fee: ₹1,43,000 - ₹8,75,000</small>
                                            <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                                    style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                            <span class="badge bg-success mt-1"
                                                style="font-size: 10px; letter-spacing: 0.5px;">UP To 100%
                                                SCHOLARSHIP<br>
                                                APPLIED</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h6 class="fw-bold small text-uppercase mb-2 text-secondary">Placement Highlights
                                    </h6>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="pill-highlight">Highest Pkg: ₹11 LPA</span>
                                        <span class="pill-highlight">Average Pkg: ₹4.35 LPA</span>
                                        <span class="pill-highlight">Recent: ₹6.3 LPA (Infosys)</span>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-lg-4 col-12">
                                        <button class="btn btn-primary btn-apply">
                                            <a href="form.html" class="flex-fill text-white text-decoration-none"
                                                onclick="saveCollege('Puran Murti Group of Institutions')">
                                                <i class="fas fa-paper-plane me-2"></i>Apply Now
                                            </a>
                                        </button>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href="assests/broucher/Puran-Murti-Group-of-Institutions.pdf"
                                            download="Puran-Murti-Group-of-Institutions.pdf" type="application/pdf"
                                            class="btn btn-outline-custom">
                                            <i class="fas fa-download me-2"></i>Download Brochure
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href="collegedetails/puranmurti.html">
                                            <button class="btn btn-outline-custom">
                                                <i class="fas fa-info-circle me-2"></i>View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 7 box -->

            <div class="container py-5">
                <div class="card college-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="college-img-wrapper">
                                <img src="{{ asset('website/assests/college-img/Excel_College.png') }}" class="college-img" alt="College Campus">
                                <span class="badge-nirf">A+ Grade by NAAC</span>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start mb-3">
                                    <img src="{{ asset('website/assests/college-img/excel-logo.png') }}" class="rounded-circle me-3 border"
                                        style="width: 100px; height: 100px;" alt="Logo">
                                    <div>
                                        <h4 class="fw-bold mb-1 text-dark">Excel institution</h4>
                                        <p class="text-muted small mb-0">
                                            <i class="fas fa-map-marker-alt me-1"></i> Salem, Tamil Nadu, India |Anna
                                            University
                                            <i class="fas fa-users me-1 ms-2"></i> 5000+ Students
                                        </p>
                                    </div>
                                </div>

                                <p class="text-muted small mb-4" style="line-height: 1.6;">
                                    Established in 2007,Excel Group of Institutions is a prominent educational hub
                                    located in Namakkal, Tamil Nadu. Established by the Sri Rengaswamy Educational Trust
                                    (SRET), it has grown into a multi-disciplinary campus spanning over 100 acres
                                </p>

                                <div class="row g-2 mb-4">
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #f0fdf4;">
                                            <i class="fas fa-star text-success"></i>
                                            <span class="stat-title">4.2 Rating</span>
                                            <span class="badge-nirf">12 Test Seats</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #eff6ff;">
                                            <i class="fas fa-building text-primary"></i>
                                            <span class="stat-title">Infosys, Wipro, HCL, Tech Mahindra,
                                                Justdial,Hyundai.
                                                TCS</span>
                                            <span class="stat-sub">Top Recruiters</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #fdf4ff;">
                                            <i class="fas fa-certificate text-purple" style="color:#a855f7;"></i>
                                            <span class="stat-title">AICTE</span>
                                            <span class="stat-sub">Accredited</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm "
                                            style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                            <small class="text-muted text-decoration-line-through d-block"
                                                style="font-size: 11px;">Fee: ₹1,48,000 - ₹6,75,000</small>
                                            <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                                    style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                            <span class="badge bg-success mt-1"
                                                style="font-size: 10px; letter-spacing: 0.5px;">UP To 100%
                                                SCHOLARSHIP<br>
                                                APPLIED</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h6 class="fw-bold small text-uppercase mb-2 text-secondary">Placement Highlights
                                    </h6>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="pill-highlight">Highest Pkg: 10.2 LPA (Top offer from
                                            Multicoreware).</span>
                                        <span class="pill-highlight">Average Pkg: ₹4.35 LPA</span>
                                        <span class="pill-highlight">Recent: ₹6.8 LPA </span>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-lg-4 col-12">
                                        <button class="btn btn-primary btn-apply">
                                            <a href="form.html" class="flex-fill text-white text-decoration-none"
                                                onclick="saveCollege('Puran Murti Group of Institutions')">
                                                <i class="fas fa-paper-plane me-2"></i>Apply Now
                                            </a>
                                        </button>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href="assests/broucher/Excel-Group-of-Institutions.pdf"
                                            download="Excel Group of Institutions.pdf" type="application/pdf"
                                            class="btn btn-outline-custom">
                                            <i class="fas fa-download me-2"></i>Download Brochure
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href="collegedetails/excle-institutions.html">
                                            <button class="btn btn-outline-custom">
                                                <i class="fas fa-info-circle me-2"></i>View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 8 th box -->
            <div class="container py-5">
                <div class="card college-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="college-img-wrapper">
                                <img src="{{ asset('website/assests/college-img/kavery-img.jpg') }}" class="college-img" alt="College Campus">
                                <span class="badge-nirf">NAAC 'A' Grade</span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start mb-3">
                                    <img src="{{ asset('website/assests/college-img/kavery-logo.png') }}" class="rounded-circle me-3 border"
                                        style="width: 100px; height: 100px;" alt="Logo">
                                    <div>
                                        <h4 class="fw-bold mb-1 text-dark">Kavery Institutions</h4>
                                        <p class="text-muted small mb-0">
                                            <i class="fas fa-map-marker-alt me-1"></i> Salem, Tamil Nadu,|Anna
                                            University|Dr. M.G.R. Medical University
                                            <i class="fas fa-users me-1 ms-2"></i> 6000+ Students
                                        </p>
                                    </div>
                                </div>
                                <p class="text-muted small mb-4" style="line-height: 1.6;">
                                    Established in 2006, Kavery Institutions provides Empowering dreams through
                                    excellence, turning students into tomorrow's global leaders.
                                </p>

                                <div class="row g-2 mb-4">
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #f0fdf4;">
                                            <i class="fas fa-star text-success"></i>
                                            <span class="stat-title">4.5 Rating</span>
                                            <span class="badge-nirf">10 Test Seats</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #eff6ff;">
                                            <i class="fas fa-building text-primary"></i>
                                            <span class="stat-title">Deloitte, KPMG, LTI, and Mphasis.</span>
                                            <span class="stat-sub">Top Recruiters</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #fdf4ff;">
                                            <i class="fas fa-certificate text-purple" style="color:#a855f7;"></i>
                                            <span class="stat-title">AICTE, INC, PCI</span>
                                            <span class="stat-sub">Accredited</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm "
                                            style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                            <small class="text-muted text-decoration-line-through d-block"
                                                style="font-size: 11px;">Fee: ₹2,43,000 - ₹4,75,000</small>
                                            <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                                    style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                            <span class="badge bg-success mt-1"
                                                style="font-size: 10px; letter-spacing: 0.5px;">UP To 100%
                                                SCHOLARSHIP<br>
                                                APPLIED</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h6 class="fw-bold small text-uppercase mb-2 text-secondary">Placement Highlights
                                    </h6>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="pill-highlight">Highest Pkg: ₹7 LPA</span>
                                        <span class="pill-highlight">Average Pkg: ₹4.35 LPA</span>
                                        <span class="pill-highlight">Recent: ₹4.30 LPA</span>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-lg-4 col-12">
                                        <button class="btn btn-primary btn-apply">
                                            <a href="form.html" class="flex-fill text-white text-decoration-none"
                                                onclick="saveCollege('Kavery Institutions')">
                                                <i class="fas fa-paper-plane me-2"></i>Apply Now
                                            </a>
                                        </button>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href="assests/broucher/Kavery-Group-of-Institutions.pdf"
                                            download="Kavery Group of Institutions.pdf" type="application/pdf"
                                            class="btn btn-outline-custom">
                                            <i class="fas fa-download me-2"></i>Download Brochure
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href="collegedetails/kavery-institute.html">
                                            <button class="btn btn-outline-custom">
                                                <i class="fas fa-info-circle me-2"></i>View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 9th box -->
            <div class="container py-5">
                <div class="card college-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="college-img-wrapper">
                                <img src="{{ asset('website/assests/college-img/vivekanandha-img.jpg') }}" class="college-img"
                                    alt="College Campus">
                                <!-- <span class="badge-nirf">151-200 by NIRF 2025</span> -->
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start mb-3">
                                    <img src="{{ asset('website/assests/college-img/vivekanandha-logo.png') }}" class="rounded-circle me-3 border"
                                        style="width: 100px; height: 100px;" alt="Logo">
                                    <div>
                                        <h4 class="fw-bold mb-1 text-dark">Vivekananda College of Nursing</h4>
                                        <p class="text-muted small mb-0">
                                            <i class="fas fa-map-marker-alt me-1"></i> Sonipat, Haryana |DCRUST
                                            <i class="fas fa-users me-1 ms-2"></i> 8000+ Students
                                        </p>
                                    </div>
                                </div>

                                <p class="text-muted small mb-4" style="line-height: 1.6;">
                                    Established in 2008, Puran Murti Group of Institutions provides industry-focused
                                    education with practical exposure in the NCR region.
                                </p>

                                <div class="row g-2 mb-4">
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #f0fdf4;">
                                            <i class="fas fa-star text-success"></i>
                                            <span class="stat-title">4.2 Rating</span>
                                            <span class="badge-nirf">15 Test Seats</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #eff6ff;">
                                            <i class="fas fa-building text-primary"></i>
                                            <span class="stat-title">Infosys, Wipro, HCL, Tech Mahindra, Justdial,
                                                TCS</span>
                                            <span class="stat-sub">Top Recruiters</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="stat-box" style="background: #fdf4ff;">
                                            <i class="fas fa-certificate text-purple" style="color:#a855f7;"></i>
                                            <span class="stat-title">AICTE</span>
                                            <span class="stat-sub">Accredited</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="fee-box p-3 rounded-4 mt-2 mt-md-0 shadow-sm "
                                            style="background: #e8f5e9; border: 1px solid #c8e6c9;">
                                            <small class="text-muted text-decoration-line-through d-block"
                                                style="font-size: 11px;">Fee: ₹1,43,000 - ₹8,75,000</small>
                                            <h5 class="fw-bold mb-0 text-success" style="font-size: 1.4rem;">₹0 <span
                                                    style="font-size: 0.9rem;">(Tuition Fee)</span></h5>
                                            <span class="badge bg-success mt-1"
                                                style="font-size: 10px; letter-spacing: 0.5px;">UP To 100%
                                                SCHOLARSHIP<br>
                                                APPLIED</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h6 class="fw-bold small text-uppercase mb-2 text-secondary">Placement Highlights
                                    </h6>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="pill-highlight">Highest Pkg: ₹11 LPA</span>
                                        <span class="pill-highlight">Average Pkg: ₹4.35 LPA</span>
                                        <span class="pill-highlight">Recent: ₹6.3 LPA (Infosys)</span>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col-lg-4 col-12">
                                        <button class="btn btn-primary btn-apply">
                                            <a href="form.html" class="flex-fill text-white text-decoration-none"
                                                onclick="saveCollege('Puran Murti Group of Institutions')">
                                                <i class="fas fa-paper-plane me-2"></i>Apply Now
                                            </a>
                                        </button>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href="assests/broucher/Vivekanandha-Educational-Institutions.pdf"
                                            download="Vivekanandha Educational Institutions.pdf" type="application/pdf"
                                            class="btn btn-outline-custom">
                                            <i class="fas fa-download me-2"></i>Download Brochure
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href="collegedetails/vivekanandha.html">
                                            <button class="btn btn-outline-custom">
                                                <i class="fas fa-info-circle me-2"></i>View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--  -->
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
    <script>
        function saveCollege(name) {
            localStorage.setItem('selectedCollege', name);
        }
    </script>
@endsection
@push('footer')
    <!-- extra footer -->
@endpush