<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{  asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @stack('header')
</head>

<body>

    <div class="top-bar">
        <div class="container d-flex justify-content-between">
            <div>
                <i class="fa-solid fa-phone-flip me-2 text-success"></i> +91 7411192123
            </div>
            <div class="d-flex gap-3">
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Study<span class="brand-accent">Sparrow</span></a> -->
             <img src="{{ asset('frontend/assets/logo/studysparro-logo.png') }}" style="height: 120px; width: 120px;" alt="studylogo">

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="">Home</a></li>

                    
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    

    <!-- Footer Section -->
    <footer class="pt-5 mt-5"
        style="background-color: var(--brand-black); color: white; border-radius: 60px 60px 0 0; box-shadow: 0 -10px 40px rgba(0,0,0,0.1);">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-4 col-md-12">
                    <a class="navbar-brand text-white fs-2 mb-4 d-block fw-800" href=""><span
                            class="text-success">StudySparrow</span></a>
                    <p class="text-light-50 opacity-75 mb-4" style="line-height: 1.8;">
                        India’s leading admission consultancy, helping thousands of students secure their future in top medical, engineering, and management colleges worldwide—your career is our mission.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#" class="social-btn"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-btn"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="social-btn"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#" class="social-btn"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>

                \

                <div class="col-lg-4 col-md-4">
                    <h5 class="fw-bold mb-4 text-success">Find Our Office</h5>
                    <div class="rounded-4 overflow-hidden mb-4 shadow-sm border border-secondary"
                        style="height: 160px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.839081279716!2d77.227321!3d28.634671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDM4JzA0LjgiTiA3N8KwMTMnMzguNCJF!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin"
                            width="100%" height="100%" style="border:0; filter: invert(90%) hue-rotate(180deg);"
                            allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="fa-solid fa-envelope text-success me-3"></i>
                        <span class="text-light-50">ssparrow.edu@gmail.com</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-phone-volume text-success me-3"></i>
                        <span class="text-light-50">+91 7411192123</span>
                    </div>
                </div>
            </div>

            <hr class="my-5 opacity-25">

            <div class="row align-items-center pb-4">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-white-50 small">© 2026 Studysparrow Consultancy Services. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <span class="small text-white-50">Designed with ❤️ for Student Success</span>
                </div>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/917411192123" class="whatsapp-float shadow-lg" target="_blank">
        <i class="fa-brands fa-whatsapp mt-3"></i>
        <span class="whatsapp-tooltip">Chat with Experts</span>
    </a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false, // Drag karne par autoplay band nahi hoga
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // Mobile: 1 card
                640: {
                    slidesPerView: 1,
                },
                // Tablet: 2 cards
                768: {
                    slidesPerView: 2,
                },
                // Desktop: 3 cards
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
    @stack('footer')
</body>

</html>