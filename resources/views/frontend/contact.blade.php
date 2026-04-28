@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>College List - {{ config('app.name') }}</title>
    <meta name="description"
        content="Collegesagar is your ultimate guide to finding the perfect college. Explore comprehensive information, reviews, and resources to make informed decisions about your education journey. Discover top colleges, courses, and career paths with us.">
    <link rel="stylesheet" href="{{ asset('website/assets/css/contact.css') }}" />
@endpush
@section('content')
    <!-- main section -->
    <section class="contact-header">
        <div class="container">
            <h1 class="fw-800 display-6 mb-2">Contact Our Counselors</h1>
            <p class="text-muted lead mx-auto" style="max-width: 600px">
                We are here to help you secure your 100% scholarship
                admission.
            </p>
        </div>
    </section>

    <div class="container mb-5 pb-5">
        <div class="contact-wrapper">
            <div class="row g-0">
                <div class="col-lg-5">
                    <div class="info-panel">
                        <h3 class="fw-bold mb-4">Visit Our Center</h3>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Location</h6>
                                <p class="small opacity-90 m-0">
                                    Jamia Nagar, Okhla<br />New Delhi, Delhi
                                    110025
                                </p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Email Us</h6>
                                <p class="small opacity-90 m-0">
                                    admissions@Collegesagar.edu.in
                                </p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Call Support</h6>
                                <p class="small opacity-90 m-0">
                                    +91 11 2698 XXXX
                                </p>
                            </div>
                        </div>

                        <div class="mt-5 pt-3">
                            <p class="small fw-bold text-uppercase opacity-75 mb-2">
                                Student Help Desk
                            </p>
                            <p class="small">
                                Available: Mon-Sat (9 AM - 6 PM)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="form-panel">
                        <h4 class="fw-bold mb-4">Send an Inquiry</h4>
                        <form action="{{ route('contact.send') }}" method="POST"
                            class="contact-form style-border php-email-form">
                            @csrf
                            <div class="row">
                                {{-- Name Field --}}
                                <div class="col-12 mb-3">
                                    <div class="it-contact-input-box">
                                        <label for="name">Name*</label>
                                        <input type="text" id="name" name="name" placeholder="Enter your full name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Email Address --}}
                                <div class="col-12 mb-3">
                                    <div class="it-contact-input-box">
                                        <label for="email">Email Address*</label>
                                        <input type="email" id="email" name="email" placeholder="Enter your email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Phone --}}
                                <div class="col-12 mb-3">
                                    <div class="it-contact-input-box">
                                        <label for="number">Phone*</label>
                                        <input type="text" id="number" name="number" placeholder="Enter your phone number"
                                            class="form-control @error('number') is-invalid @enderror"
                                            value="{{ old('number') }}" required>
                                        @error('number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Subject (Optional – hidden) --}}
                                <div class="col-12 mb-3 d-none">
                                    <div class="it-contact-input-box">
                                        <label for="subject">Subject*</label>
                                        <input type="text" id="subject" name="subject" placeholder="Enter subject"
                                            class="form-control @error('subject') is-invalid @enderror"
                                            value="{{ old('subject') }}">
                                        @error('subject')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Message --}}
                                <div class="col-12 mb-3">
                                    <div class="it-contact-textarea-box">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" placeholder="Type your message here"
                                            class="form-control @error('message') is-invalid @enderror"
                                            rows="4">{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Submit --}}
                                <div class="form-submit">
                                    <button type="submit">Send Message</button>
                                    <div class="social-links">
                                        <a href="https://youtu.be/Guvu6Hmdax4"><i class="bi bi-youtube"></i></a>
                                        <a href="https://www.facebook.com/share/p/1BxDwMhq2W/"><i
                                                class="bi bi-facebook"></i></a>
                                        <a href="https://www.instagram.com/eraglobal_education?igsh=MW5oYXZhZnV3OHR2Yg=="><i
                                                class="bi bi-instagram"></i></a>
                                        <a href="www.linkedin.com/in/eraglobal-education-5a60533a3"><i
                                                class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-section">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14016.923832168537!2d77.27641838715822!3d28.5628546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce38ba0774659%3A0x64e2d3e0988019c6!2sJamia%20Nagar%2C%20Okhla%2C%20New%20Delhi%2C%20Delhi%20110025!5e0!3m2!1sen!2sin!4v1700000000000"
                width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
@endsection
@push('js')
@endpush