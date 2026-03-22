@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Colleges in Karnataka | Studysparrow</title>
    <link rel="stylesheet" href="{{  asset('frontend/assets/css/study_india.css') }}">
@endpush

@section('section')
    <section class="state-header text-center">
        <div class="container position-relative">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-4">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white-50 text-decoration-none small">Home</a>
                    </li>
                   
                    <li class="breadcrumb-item active text-white small" aria-current="page">Karnataka</li>
                </ol>
            </nav>
            <h1 class="state-title">Colleges in <span class="state-highlight">Karnataka</span></h1>
            <p class="header-subtext">Discover top-tier educational institutions in Karnataka. From engineering to
                medical, find the perfect campus for your career goals.</p>
        </div>
    </section>

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div>
                <h2 class="fw-bold m-0" style="color: var(--navy-blue);">Top Recommended</h2>
                <div
                    style="width: 50px; height: 5px; background: var(--hover-green); border-radius: 10px; margin-top: 8px;">
                </div>
            </div>
            <span class="text-muted small">Showing 24 Colleges</span>
        </div>

        <div class="row g-4">

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/./assets/image/shirdevi.jpg') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i> Tumkur Karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">Shridevi Institute of Engineering & Technology</h5>
                        <div class="btn-group-custom">
                            <a href="student?college=Shridevi+Institute+of+Engineering+&+Technology" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210?text=Hi, I am interested in Shridevi Institute of Engineering & Technology admission."
                                class="btn btn-wa-icon" title="WhatsApp Inquiry">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/./assets/image/shridevi-nursing.jpg') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i>Tumkur Karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">Shridevi Institute of Nursing Science</h5>
                        <div class="btn-group-custom">
                            <a href="student?college=Shridevi+Institute+of+Nursing+Science" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210?text=Hi, I am intrested in Shiridevi of Nursing Science College." class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/./assets/image/shirdevi-institute-of-paramedical.jpg') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i> Tumkur Karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">Shridevi Institute of Pharmaceutical Science</h5>
                        <div class="btn-group-custom">
                            <a href="student?college=Shridevi+Institute+of+Pharmaceutical+Science" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210?text=Hi, I am intrested in Shiridevi of Pharmaceutical Science College" class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/assets/image/shiridevi-medical.png') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i>Tumkur Karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">Shridevi Institute of Allied Health Sciences</h5>
                        <div class="btn-group-custom">
                            <a href="student?college=Shridevi+Institute+of+Allied+Health+Sciences" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210text=Hi, I am intrested in Shridevi Institute of Allied Health Sciences College" class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/assets/image/shiridevi-phisiotherpy.jpg') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i>Tumkur Karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">Shridevi Institute of Physiotherapy </h5>
                        <div class="btn-group-custom">
                            <a href="student?college=Shridevi+Institute+of+Physiotherapy" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210text=Hi, I am intrested in Shridevi Institute of Physiotherapy  College" class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/assets/image/G.J surya college.png') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i>Shivamogga, Karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">G.J Surya college of Nursing </h5>
                        <div class="btn-group-custom">
                            <a href="student?college=G.J+Surya+college+of+Nursing" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210text=Hi, I am intrested in G.J Surya college of Nursing College" class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/assets/image/karavli-institute.jpg') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i>Mangalore, Karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">Karavali institutions </h5>
                        <div class="btn-group-custom">
                            <a href="student?college=Karavali+institutions" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210text=Hi, I am intrested in Karavali institutions of  College" class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/assets/image/a.j institute.jpg') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i>Mangalore, Karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">A. J. Institute of Engineering & Technology</h5>
                        <div class="btn-group-custom">
                            <a href="student?college=A.+J.+Institute+of+Engineering+&+Technology" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210?text=Hi, I am interested in A. J. Institute of Engineering & Technology" class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/assets/image/slv-college of nursing.jpg') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i>Chitradurga, karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">S.L.V college of Nursing </h5>
                        <div class="btn-group-custom">
                            <a href="student?college=S.L.V+college+of+Nursing" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210?text=Hi, I am interested in S.L.V college of Nursing" class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/assets/image/viveka-campus.jpg') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i>Chitradurga, karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">Vivekananda College of Nursing</h5>
                        <div class="btn-group-custom">
                            <a href="student?college=Vivekananda+College+of+Nursing" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210text=Hi, I am intrested in Vivekananda College of Nursing" class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/assets/image/dhanvantari.jpg') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i>Siddapur, Karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">Dhanvantari Ayurveda Medical College</h5>
                        <div class="btn-group-custom">
                            <a href="student?college=Dhanvantari+Ayurveda+Medical+College" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210text=Hi, I am intrested in Dhanvantari Ayurveda Medical College" class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/assets/image/muniyal-college.jpg') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i>Udupi, Karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">Muniyal ayurvedic medical College</h5>
                        <div class="btn-group-custom">
                            <a href="student?college=Muniyal+ayurvedic+medical+College" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210text=Hi, I am intrested in Muniyal ayurvedic medical College" class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/assets/image/adya-college.jpg') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i>Chitradurga karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">Aadya College of Pharmacy</h5>
                        <div class="btn-group-custom">
                            <a href="student?college=Aadya+College+of+Pharmacy" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210text=Hi, I am intrested in Muniyal ayurvedic medical College" class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

             <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/assets/image/pvs-college.jpg') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i>Chitradurga karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">PVS college of nursing</h5>
                        <div class="btn-group-custom">
                            <a href="student?college=PVS+college+of+Nursing" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210text=Hi, I am intrested in PVS college of nursing College" class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/assets/image/sofia-college.jpeg') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i>Tumkur. Karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">Sophia College of Nursing</h5>
                        <div class="btn-group-custom">
                            <a href="student?college=Sophia+College+of+Nursing" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210text=Hi, I am intrested in Sophia College of Nursing" class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="college-card">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/assets/image/aruna-college.png') }}"
                            alt="College">
                        <span class="location-badge"><i class="fas fa-map-marker-alt me-1"></i>Tumkur. Karnataka</span>
                    </div>
                    <div class="college-body">
                        <h5 class="college-name">Aruna College of Nursing</h5>
                        <div class="btn-group-custom">
                            <a href="student?college=Aruna+College+of+Nursing" class="btn btn-apply">Apply Now</a>
                            <a href="https://wa.me/919876543210text=Hi, I am intrested in Aruna College of Nursing" class="btn btn-wa-icon">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
@push('footer')
<!-- extra footer -->
@endpush