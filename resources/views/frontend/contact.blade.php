@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Contact | Studysparrow</title>
    <link rel="stylesheet" href="{{  asset('frontend/assets/css/contact.css') }}">
@endpush

@section('section')
    <section class="container mb-5">
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="contact-card bg-white p-4 p-md-5">
                    <h3 class="fw-bold mb-4">Send us a message</h3>
                    <form action="#">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Full Name</label>
                                <input type="text" class="form-control" placeholder="Aman Sharma">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email" class="form-control" placeholder="name@college.com">
                            </div>
                            <div class="col-12 mt-4">
                                <label class="form-label fw-semibold">Subject</label>
                                <select class="form-select form-control">
                                    <option selected>Admission Inquiry</option>
                                    <option>Technical Support</option>
                                    <option>Feedback</option>
                                    <option>Others</option>
                                </select>
                            </div>
                            <div class="col-12 mt-4">
                                <label class="form-label fw-semibold">Your Message</label>
                                <textarea class="form-control" rows="5"
                                    placeholder="Write your message here..."></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-send">Send Message <i
                                        class="bi bi-send-fill ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="info-box d-flex flex-column justify-content-between shadow-lg">
                    <div>
                        <h3 class="fw-bold mb-5">Contact Information</h3>

                        <div class="d-flex mb-4">
                            <div class="icon-shape me-3">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Our Location</h6>
                                <p class="opacity-75">123 Education Hub, Sector 5, New Delhi, India</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="icon-shape me-3">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Phone Number</h6>
                                <p class="opacity-75">+91 98765 43210</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="icon-shape me-3">
                                <i class="bi bi-envelope-at-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Email Support</h6>
                                <p class="opacity-75">hello@yourcollegeproject.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h6 class="fw-bold mb-3">Follow Us</h6>
                        <div class="d-flex gap-3">
                            <a href="#" class="text-white fs-4"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-white fs-4"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-white fs-4"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="text-white fs-4"><i class="bi bi-twitter-x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('footer')
<!-- extra footer -->
@endpush