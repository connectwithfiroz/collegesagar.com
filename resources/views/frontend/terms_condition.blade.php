@extends('frontend.layouts.app')

@push('header')
<!-- extra header -->
<title>Terms & Conditions - {{ config('app.name') }}</title>
<meta name="description"
    content="Collegesagar is your ultimate guide to finding the perfect college. Explore comprehensive information, reviews, and resources to make informed decisions about your education journey. Discover top colleges, courses, and career paths with us.">
@endpush

@section('content')
<!--  -->
<header class="terms-header text-center mb-5">
    <div class="container">
        <h1 class="fw-800 display-5">Terms & Conditions</h1>
        <p class="opacity-75 lead">Please read these rules carefully before proceeding with your admission.</p>
    </div>
</header>

<div class="container mb-5 pb-5">
    <div class="row g-4">

        <div class="col-lg-8">
            <div class="accordion" id="termsAccordion">

                <div class="accordion-item shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sec1">
                            <i class="bi bi-person-check me-2"></i> 1. Admission & Eligibility
                        </button>
                    </h2>
                    <div id="sec1" class="accordion-collapse collapse show" data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            Students must provide authentic academic documents (10th/12th Marksheets). Any discrepancy
                            in marks during campus reporting will lead to immediate cancellation of the scholarship.
                            <br><br>
                            <strong>Note:</strong> Admission is subject to seat availability in the specific technical
                            or paramedical branch selected.
                        </div>
                    </div>
                </div>

                <div class="accordion-item shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#sec2">
                            <i class="bi bi-award me-2"></i> 2. Scholarship & Merit Policy
                        </button>
                    </h2>
                    <div id="sec2" class="accordion-collapse collapse" data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            100% Tuition Fee scholarship is only applicable to students who qualify for the CollegeSagar
                            Merit Assessment Test.
                            <ul>
                                <li>The scholarship covers <strong>only Tuition Fees</strong>.</li>
                                <li>Scholarship is valid for the entire duration of the course, provided the student
                                    maintains minimum required attendance and academic performance in college.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item shadow-sm border-primary">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#sec3">
                            <i class="bi bi-currency-rupee me-2"></i> 3. Registration Fee (₹1,000)
                        </button>
                    </h2>
                    <div id="sec3" class="accordion-collapse collapse" data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            The ₹1,000 registration fee is a <strong>one-time platform processing charge</strong>.
                            <div class="imp-note">
                                This fee is non-refundable once the Legal Service Agreement has been issued and the seat
                                has been blocked in the partner college.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#sec4">
                            <i class="bi bi-file-earmark-lock me-2"></i> 4. Legal Service Agreement
                        </button>
                    </h2>
                    <div id="sec4" class="accordion-collapse collapse" data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            Upon successful registration, CollegeSagar will issue a legally binding service agreement.
                            This document ensures:
                            <ul>
                                <li>We issue a signed legal document ensuring your UP to 100% scholarship and seat
                                    protection for charge 1000/-.</li>
                                <li>Your seat is reserved in the chosen college.</li>
                                <li>No extra tuition fee will be charged by the institution.</li>
                                <li>Full transparency in the admission process.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#sec5">
                            <i class="bi bi-info-circle me-2"></i> 5. Additional Charges
                        </button>
                    </h2>
                    <div id="sec5" class="accordion-collapse collapse" data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            Students are responsible for the following expenses which are <strong>NOT</strong> covered
                            by the scholarship:
                            <ol>
                                <li>Hostel & Messing (Fooding) Fees.</li>
                                <li>University Examination & Enrollment Fees.</li>
                                <li>Library, Laboratory & Book Charges.</li>
                                <li>College Uniform & Identity Card Fees.</li>
                            </ol>
                            These must be paid directly to the college at the time of reporting.
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-4">
            <div class="contact-sidebar shadow-sm text-center">
                <i class="bi bi-shield-check display-4 text-primary mb-3"></i>
                <h5 class="fw-bold">Hassle-Free Process</h5>
                <p class="text-muted small">By continuing with the registration, you agree to the terms mentioned in our
                    official policy.</p>
                <button class="btn btn-accept w-100 mb-3">I Accept Terms</button>
                <hr>
                <p class="small mb-2">Need Clarification?</p>
                <a href="contact.html" class="text-primary fw-bold text-decoration-none small">
                    <i class="bi bi-headset me-1"></i> Contact Support Team
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
@push('footer')
<!-- extra footer -->
@endpush