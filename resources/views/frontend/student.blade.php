@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Studysparrow - Student Enquiry</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/form.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@section('section')
    <section class="enquiry-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="main-card">
                        <div class="row g-0">
                            <div class="col-lg-5 info-side">
                                <span class="badge bg-white text-success mb-3 p-2 px-3 fw-800">ADMISSION 2026</span>
                                <h2 class="display-6 fw-800 mb-4">Secure Your Future with Experts</h2>
                                <div class="feature-item">
                                    <div class="feature-icon"><i class="fa-solid fa-user-tie"></i></div>
                                    <div>
                                        <h6 class="mb-0 fw-bold">Free Counseling</h6>
                                        <p class="small mb-0 opacity-75">Talk to experts</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon"><i class="fa-solid fa-building-columns"></i></div>
                                    <div>
                                        <h6 class="mb-0 fw-bold">Top Colleges</h6>
                                        <p class="small mb-0 opacity-75">100+ Partners</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 form-side">
                                <div class="mb-4">
                                    <h3 class="fw-800 text-dark">Get in Touch</h3>
                                    <p class="text-muted">Fill the form, our team will call you back.</p>
                                </div>

                                <form id="proEnquiryForm" novalidate>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label text-uppercase">Interested College/Course</label>
                                            <input type="text" id="targetCollege" class="form-control"
                                                placeholder="General Enquiry" readonly>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label class="form-label text-uppercase">Full Name</label>
                                            <input type="text" id="userName" class="form-control"
                                                placeholder="Enter Full Name" required minlength="3">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label text-uppercase">Email</label>
                                            <input type="email" id="userEmail" class="form-control"
                                                placeholder="Email Address" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label text-uppercase">WhatsApp Phone</label>
                                            <input type="tel" id="userPhone" class="form-control"
                                                placeholder="10 Digit Number" required pattern="[0-9]{10}">
                                        </div>


                                    </div>

                                    <button type="submit" class="btn-submit" id="submitBtn">
                                        Talk to Our Experts <i class="fa-solid fa-arrow-right ms-2"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('footer')
    <!-- extra footer -->
    <script>
        // 1. URL Se College Name detect karne ka logic
        window.onload = function () {
            const params = new URLSearchParams(window.location.search);
            const college = params.get('college');
            if (college) {
                document.getElementById('targetCollege').value = decodeURIComponent(college);
            }
        };

        const form = document.getElementById('proEnquiryForm');
        const btn = document.getElementById('submitBtn');

        // Validation & Submission
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            if (!form.checkValidity()) {
                form.querySelectorAll(':invalid').forEach(el => el.classList.add('is-invalid'));
                btn.classList.add('shake');
                setTimeout(() => btn.classList.remove('shake'), 400);
                return;
            }

            btn.innerHTML = 'Submitting...';
            btn.disabled = true;

            fetch("{{ route('student.enquiry') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    target_college: document.getElementById('targetCollege').value,
                    name: document.getElementById('userName').value,
                    email: document.getElementById('userEmail').value,
                    phone: document.getElementById('userPhone').value
                })
            })
                .then(async response => {

                    const data = await response.json();

                    if (!response.ok) {
                        throw new Error(data.message || "Something went wrong");
                    }

                    return data;

                })
                .then(data => {

                    Swal.fire({
                        title: 'Success!',
                        text: data.message,
                        icon: 'success',
                        confirmButtonColor: '#16a34a'
                    });

                    form.reset();

                })
                .catch(error => {

                    Swal.fire({
                        title: 'Error!',
                        text: error.message,
                        icon: 'error',
                        confirmButtonColor: '#dc2626'
                    });

                })
                .finally(() => {

                    btn.innerHTML = 'Talk to Our Experts <i class="fa-solid fa-arrow-right ms-2"></i>';
                    btn.disabled = false;

                });
        });

        // Restrict phone to numbers only
        document.getElementById('userPhone').addEventListener('keypress', (e) => {
            if (e.which < 48 || e.which > 57) e.preventDefault();
        });
    </script>
@endpush