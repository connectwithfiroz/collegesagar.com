@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>College List - {{ config('app.name') }}</title>
    <meta name="description"
        content="Collegesagar is your ultimate guide to finding the perfect college. Explore comprehensive information, reviews, and resources to make informed decisions about your education journey. Discover top colleges, courses, and career paths with us.">
@endpush

@section('content')
    <div class="container py-4">
    <div class="card border-0 shadow-sm p-4 rounded-4 bg-white">
        <h4 class="mb-4 fw-bold text-primary">Find Your Dream College</h4>
        
        <form method="GET" action="{{ route('colleges') }}" id="searchForm">
            <div class="row g-3 align-items-center">
                
                <div class="col-lg-3 col-md-6">
                    <div class="form-floating">
                        <input type="text" name="search" class="form-control" id="search" placeholder="College Name" value="{{ request('search') }}">
                        <label for="search"><i class="fas fa-search me-2"></i>College Name</label>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="form-floating">
                        <select name="state" class="form-select" id="state">
                            <option value="">All States</option>
                            @foreach($states ?? [] as $state)
                                <option value="{{ $state }}" {{ request('state') == $state ? 'selected' : '' }}>{{ $state }}</option>
                            @endforeach
                        </select>
                        <label for="state">State</label>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="form-floating">
                        <select name="city" class="form-select" id="city">
                            <option value="">All Cities</option>
                            @foreach($cities ?? [] as $city)
                                <option value="{{ $city }}" {{ request('city') == $city ? 'selected' : '' }}>{{ $city }}</option>
                            @endforeach
                        </select>
                        <label for="city">City</label>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="form-floating">
                        <select name="course" class="form-select" id="courseSelect">
                            <option value="">All Courses</option>
                            @foreach($courses ?? [] as $course)
                                <option value="{{ $course->slug }}" data-id="{{ $course->id }}" {{ request('course') == $course->slug ? 'selected' : '' }}>
                                    {{ $course->name }}
                                </option>
                            @endforeach
                        </select>
                        <label for="courseSelect">Course</label>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="form-floating">
                        <select name="spec" class="form-select" id="specSelect">
                            <option value="">Specialization</option>
                        </select>
                        <label for="specSelect">Specialization</label>
                    </div>
                </div>

                <div class="col-lg-1 col-md-12 d-grid">
                    <button type="submit" class="btn btn-primary btn-lg shadow-sm">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

    <!-- College sections  start-->
    <div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4 px-2">
        <div>
            <h2 class="fw-800 h4 mb-0">
                Top Featured Colleges
            </h2>
            
        </div>

        <!-- RESET FILTERS -->
        <a href="{{ route('colleges') }}"
           class="btn btn-sm btn-outline-dark rounded-pill px-3 fw-700">
            View All
        </a>
    </div>

    <!-- GRID -->
    <div class="row g-3" id="college-slider">

        @foreach($colleges as $college)
            <div class="col-lg-3 col-md-4 col-12">
                @include('frontend.partials.college-card-single', ['college' => $college])
            </div>
        @endforeach

    </div>

</div>
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
     <script>
    document.getElementById('searchForm').addEventListener('submit', function(e){

        e.preventDefault();

        let params = new URLSearchParams(new FormData(this));
        //filter only those params which value is not empty
        params = new URLSearchParams([...params].filter(([key, value]) => value));

        // update URL (important for SEO + share)
        history.pushState({}, '', '/colleges?' + params.toString());

        fetch('/ajax/colleges?' + params.toString())
            .then(res => res.text())
            .then(html => {
                document.getElementById('college-slider').innerHTML = html;
            });

    });
</script>
<script>
$('#courseSelect').change(function () {

    let courseSlug = $(this).val();
    let courseId = $(this).find('option:selected').data('id');

    if (!courseId) return;

    fetch(`/ajax/specializations?course_id=${courseId}`)
        .then(res => res.json())
        .then(data => {

            let options = '<option value="">All Specializations</option>';

            data.forEach(spec => {
                options += `<option value="${spec.slug}">${spec.name}</option>`;
            });

            $('#specSelect').html(options);
        });
});
</script>
@endpush