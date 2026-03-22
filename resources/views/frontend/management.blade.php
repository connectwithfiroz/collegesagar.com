@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Management | Studysparrow</title>
    <link rel="stylesheet" href="{{  asset('frontend/assets/css/management.css') }}">
@endpush

@section('section')
    <section class="biz-hero">
        <div class="container">
            <h1 class="hero-title">Business & <span style="color: #4CAF50;">Management</span></h1>
            <p class="lead text-muted mt-3">Develop the skills and knowledge needed to succeed in the modern business
                world.</p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row g-4">


            <div class="col-lg-4 col-md-6">
                <div class="mgmt-card">
                    <div class="icon-biz"><i class="bi bi-graph-up-arrow"></i></div>
                    <span class="duration-tag">3 Year Under Graduate</span>
                    <h4 class="course-name">BBA</h4>
                    <p class="text-muted small">BBA (Bachelor of Business Administration) focuses on business
                        management, entrepreneurship, and leadership skills for careers in the corporate world</p>
                    <div class="action-flex">
                        <a href="student?college=BBA" class="apply-now-link">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="whatsapp-link"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="mgmt-card">
                    <div class="icon-biz"><i class="bi bi-briefcase-fill"></i></div>
                    <span class="duration-tag">2 Year Post Graduate</span>
                    <h4 class="course-name">MBA</h4>
                    <p class="text-muted small">MBA (Master of Business Administration) focuses on advanced management,
                        leadership, and strategic skills for senior roles in business and organizations</p>
                    <div class="action-flex">
                        <a href="student?college=MBA" class="apply-now-link">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="whatsapp-link"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-6">
                <div class="mgmt-card">
                    <div class="icon-biz"><i class="bi bi-award-fill"></i></div>
                    <span class="duration-tag">2 Year Diploma</span>
                    <h4 class="course-name">PGDM</h4>
                    <p class="text-muted small">PGDM (Post Graduate Diploma in Management) focuses on industry-oriented
                        management skills, leadership, and practical business knowledge for corporate careers.</p>
                    <div class="action-flex">
                        <a href="student?college=PGDM" class="apply-now-link">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="whatsapp-link"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="mgmt-card">
                    <div class="icon-biz"><i class="bi bi-diagram-3-fill"></i></div>
                    <span class="duration-tag">B.Com</span>
                    <h4 class="course-name">B.Com</h4>
                    <p class="text-muted small">B.Com (Bachelor of Commerce) focuses on accounting, finance, taxation,
                        and business laws for careers in commerce and finance sectors.</p>
                    <div class="action-flex">
                        <a href="student?college=B.Com" class="apply-now-link">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="whatsapp-link"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="mgmt-card">
                    <div class="icon-biz"><i class="bi bi-diagram-3-fill"></i></div>
                    <span class="duration-tag">M.Com</span>
                    <h4 class="course-name">M.Com</h4>
                    <p class="text-muted small">M.Com (Master of Commerce) focuses on advanced knowledge in accounting,
                        finance, economics, and business management for professional and academic careers</p>
                    <div class="action-flex">
                        <a href="student?college=M.Com" class="apply-now-link">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="whatsapp-link"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="mgmt-card">
                    <div class="icon-biz"><i class="bi bi-building-fill-check"></i></div>
                    <span class="duration-tag">Degree / Diploma</span>
                    <h4 class="course-name">Hospitality Mgmt.</h4>
                    <p class="text-muted small">Hospitality Management focuses on hotel, tourism, and service industry
                        operations, emphasizing customer experience, management, and global career opportunities</p>
                    <div class="action-flex">
                        <a href="student?college=Hospitality Mgmt." class="apply-now-link">Apply Now</a>
                        <a href="https://wa.me/91XXXXXXXXXX" class="whatsapp-link"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('footer')
<!-- extra footer -->
@endpush