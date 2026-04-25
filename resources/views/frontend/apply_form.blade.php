@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Apply Now - {{ config('app.name') }}</title>
    <meta name="description"
        content="Collegesagar is your ultimate guide to finding the perfect college. Explore comprehensive information, reviews, and resources to make informed decisions about your education journey. Discover top colleges, courses, and career paths with us.">

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <link rel="icon" type="image/x-icon" href="assests/image/log.png" />

    <style>
        :root {
            --primary: #6366f1;
            --secondary: #a855f7;
            --accent: #f59e0b;
            --glass: rgba(255, 255, 255, 0.95);
        }

        

        .glass-card {
            background: var(--glass);
            backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 35px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
            color: #1e293b;
            overflow: hidden;
        }

        /* Top Progress Indicator */
        .scroll-progress {
            position: absolute;
            top: 0;
            left: 0;
            height: 6px;
            background: linear-gradient(to right,
                    var(--accent),
                    var(--secondary));
            width: 0%;
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .scholarship-badge {
            background: linear-gradient(90deg, #f59e0b, #fbbf24);
            color: #000;
            padding: 10px;
            font-weight: 800;
            font-size: 0.8rem;
            letter-spacing: 1px;
            text-align: center;
            width: 100%;
        }

        /* Input Styling */
        .form-floating>.form-control,
        .form-floating>.form-select {
            border: 2px solid #e2e8f0;
            background: #f8fafc;
            border-radius: 18px;
            transition: all 0.2s;
        }

        .form-floating>.form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
            background: #fff;
        }

        /* Special Styling for the Auto-Filled Field */
        .college-locked {
            background-color: #eef2ff !important;
            border: 2px dashed var(--primary) !important;
            color: var(--primary) !important;
            font-weight: 700 !important;
            cursor: not-allowed;
        }

        .btn-submit {
            background: linear-gradient(135deg,
                    var(--primary),
                    var(--secondary));
            border: none;
            border-radius: 18px;
            padding: 16px;
            font-weight: 700;
            color: white;
            transition:
                transform 0.2s,
                box-shadow 0.2s;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(168, 85, 247, 0.3);
        }

        .floating-icon-box {
            width: 70px;
            height: 70px;
            background: #eef2ff;
            border-radius: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: -60px auto 20px auto;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            color: var(--primary);
            font-size: 1.8rem;
        }

        #successOverlay {
            display: none;
            text-align: center;
            padding: 40px;
        }

        .timer-text {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.6);
        }
    </style>
@endpush


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="glass-card position-relative">
                    <div class="scroll-progress" id="progressBar"></div>
                    <div class="scholarship-badge">
                        <i class="fas fa-bolt me-1"></i> PRIORITY 100%
                        SCHOLARSHIP ALLOTMENT
                    </div>

                    <div class="card-body p-4 p-md-5 pt-5" id="formContainer">
                        <div class="floating-icon-box">
                            <i class="fas fa-crown"></i>
                        </div>

                        <div class="text-center mb-4">
                            <h2 class="fw-800 mb-1">Elite Application</h2>
                            <p class="text-muted small">
                                Please verify your details for the final
                                selection round.
                            </p>
                        </div>

                        <form id="proScholarshipForm" action="/submit-form" method="POST">
                            @csrf

                            <!-- Hidden IDs -->
                            <input type="hidden" name="college_id" value="{{ request('college_id') }}">

                            <!-- College -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="college" value="{{ request('college') }}"
                                    placeholder="Selected College" readonly>
                                <label>College / Campus</label>
                            </div>

                            <!-- Name -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Enter your full name"
                                    required>
                                <label>Full Name</label>
                            </div>

                            <!-- Email -->
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email"
                                    placeholder="Enter your email address">
                                <label>Email Address</label>
                            </div>

                            <div class="row g-2 mb-3">

                                <!-- Course -->
                                <div class="col-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="course_id" id="courseSelect" required>
                                            <option value="">Select Course</option>

                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}" {{ request('course_id') == $course->id ? 'selected' : '' }}>
                                                    {{ $course->name }}
                                                </option>
                                            @endforeach

                                        </select>
                                        <label>Course</label>
                                    </div>
                                </div>

                                <!-- Specialization -->
                                <div class="col-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="specialization_id" id="specSelect">
                                            <option value="">Select Specialization</option>
                                        </select>
                                        <label>Specialization</label>
                                    </div>
                                </div>

                            </div>

                            <!-- Phone -->
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" name="phone" placeholder="Enter mobile number"
                                    required>
                                <label>Mobile Number</label>
                            </div>

                            <!-- Message -->
                            <div class="form-floating mb-4">
                                <textarea class="form-control" name="message" placeholder="Your career goal (optional)"
                                    style="height: 100px"></textarea>
                                <label>Career Goal (Optional)</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 mb-3">
                                Submit Application
                            </button>

                            <p class="text-center small text-muted mb-0">
                                Your information is safe & confidential.
                            </p>
                        </form>
                    </div>

                    <div id="successOverlay">
                        <div class="mb-4">
                            <i class="fas fa-check-circle text-success" style="font-size: 5rem"></i>
                        </div>
                        <h2 class="fw-800">Application Sent!</h2>
                        <p class="text-muted">
                            Your profile for
                            <span id="displayCollege" class="text-primary fw-bold"></span>
                            has been received. Our team will contact you
                            within 24 hours.
                        </p>
                        <button class="btn btn-outline-primary btn-sm mt-3 px-4"
                            onclick="window.location.href='{{ route('apply.now') }}'">
                            New Application
                        </button>
                    </div>
                </div>

                <div class="text-center mt-4 timer-text d-none">
                    <i class="far fa-clock me-1"></i> Application portal
                    closing in:
                    <span class="text-warning fw-bold">04:59:12</span>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('footer')
    <!-- extra footer -->
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        const selectedSpec = "{{ request('specialization_id') }}";

        $('#courseSelect').change(function () {

            let courseId = $(this).val();

            if (!courseId) return;

            fetch(`/ajax/specializations?course_id=${courseId}`)
                .then(res => res.json())
                .then(data => {

                    let options = '<option value="">Select Specialization</option>';

                    data.forEach(s => {
                        let selected = (selectedSpec == s.id) ? 'selected' : '';
                        options += `<option value="${s.id}" ${selected}>${s.name}</option>`;
                    });

                    $('#specSelect').html(options);
                });
        });


        // 🔥 AUTO TRIGGER IF course_id exists in URL
        @if(request('course_id'))
            $('#courseSelect').trigger('change');
        @endif
        //if request has specialization id then trigger change for specialization as well after fetching specialization options
        @if(request('specialization_id'))
            $(document).ajaxComplete(function () {
                $('#specSelect').val("{{ request('specialization_id') }}");
            });
        @endif
    </script>

    <!-- form submition handling -->
    <script id="ajaxScholarshipForm">
        document
            .getElementById("proScholarshipForm")
            .addEventListener("submit", function (e) {
                e.preventDefault();

                let form = this;
                let button = form.querySelector("button[type='submit']");
                let formData = new FormData(form);

                // Simple phone validation
                let phone = formData.get("phone");
                let phoneRegex = /^[6-9]\d{9}$/;

                if (!phoneRegex.test(phone)) {
                    alert("Please enter a valid 10-digit mobile number.");
                    return;
                }

                button.disabled = true;
                button.innerText = "Submitting...";

                fetch("/submit-scholarship", {
                    method: "POST",
                    headers: {
                        "X-Requested-With": "XMLHttpRequest",
                    },
                    body: formData,
                })
                    .then(async (response) => {

                        button.disabled = false;
                        button.innerText = "Submit Application";

                        // ✅ Handle validation error (Laravel 422)
                        if (response.status === 422) {
                            let data = await response.json();

                            let firstError = Object.values(data.errors)[0][0];
                            alert(firstError);

                            throw new Error("Validation error");
                        }

                        // ✅ Handle rate limit (429)
                        if (response.status === 429) {
                            let data = await response.json();

                            alert(data.message || "Too many requests");
                            throw new Error("Limit reached");
                        }

                        return response.json();
                    })

                    .then((data) => {

                        // ❌ Backend failure (status false)
                        if (!data.status) {
                            alert(data.message || "Something went wrong");
                            return;
                        }

                        // 🎉 Confetti
                        confetti({
                            particleCount: 120,
                            spread: 60,
                            origin: { y: 0.6 }
                        });

                        // College name
                        const collegeName =
                            document.getElementById("collegeInput")?.value || "selected college";

                        document.getElementById("displayCollege").innerText = collegeName;

                        // UI transition
                        document.getElementById("formContainer").style.opacity = "0";

                        setTimeout(() => {
                            document.getElementById("formContainer").style.display = "none";
                            document.getElementById("successOverlay").style.display = "block";
                            document.getElementById("successOverlay").style.opacity = "1";
                        }, 300);

                        form.reset();
                    })

                    .catch((error) => {

                        button.disabled = false;
                        button.innerText = "Submit Application";

                        console.error(error);

                        // Avoid double alert if already handled
                        if (error.message !== "Validation error" && error.message !== "Limit reached") {
                            alert("Something went wrong. Please try again.");
                        }
                    });
            });

    </script>
    <!-- form submition handling <<< -->
@endpush