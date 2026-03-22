@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Our Developers | Studysparrow</title>
    <link rel="stylesheet" href="{{  asset('frontend/assets/css/developer.css') }}">
@endpush

@section('section')
<main class="container my-5">
        <div class="row g-4 justify-content-center">

            <div class="col-md-5 col-lg-4">
                <div class="dev-card">
                    <img src="{{ asset('frontend/assets/developer/firoz.png') }}" alt="Developer 1" class="dev-img">
                    <h3 class="dev-name">Firoz Ansari</h3>
                    <p class="dev-role">Fullstack Developer</p>
                    <p class="dev-role">3 Years+ Experience</p>
                    <div class="dev-social-box">
                        <a href="https://www.linkedin.com/in/hifiroz/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                            class="dev-icon icon-linkedin" title="LinkedIn">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="https://wa.me/+91 8789701916" class="dev-icon icon-whatsapp" title="WhatsApp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-lg-4">
                <div class="dev-card">
                    <img src="{{ asset('frontend/assets/developer/shahba.png') }}" alt="Developer 2" class="dev-img">
                    <h3 class="dev-name">Shahbaz Anjoom</h3>
                    <p class="dev-role">Frontend Developer</p>
                    <p class="dev-role">1 Year+ Experience</p>
                    <div class="dev-social-box">
                        <a href="https://www.linkedin.com/in/shahbaz-anjoom-55461b229" class="dev-icon icon-linkedin"
                            title="LinkedIn">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="https://wa.me/+91 6287011200" class="dev-icon icon-whatsapp" title="WhatsApp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
@push('footer')
<!-- extra footer -->
@endpush