@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Studysparrow - </title>
    <meta name="description" content="">
@endpush

@section('content')
<section class="bg-primary text-white py-5">
    <div class="container text-center">

        <h1 class="fw-bold">Find the Best College for Your Future</h1>
        <p class="mb-4">Search courses, compare colleges & apply easily</p>

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="bg-white p-3 rounded shadow">

                    <div class="row g-2">

                        <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Search course (B.Tech, MBA...)">
                        </div>

                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="City (Delhi, Noida...)">
                        </div>

                        <div class="col-md-3">
                            <button class="btn btn-primary w-100">Search</button>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

<section class="bg-primary text-white py-5">
    <div class="container text-center">

        <h1 class="fw-bold">Find the Best College for Your Future</h1>
        <p class="mb-4">Search courses, compare colleges & apply easily</p>

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="bg-white p-3 rounded shadow">

                    <div class="row g-2">

                        <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Search course (B.Tech, MBA...)">
                        </div>

                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="City (Delhi, Noida...)">
                        </div>

                        <div class="col-md-3">
                            <button class="btn btn-primary w-100">Search</button>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
</section>


<section class="py-5">
    <div class="container">

        <h3 class="mb-4">Popular Courses</h3>

        <div class="row">

            <div class="col-md-3">
                <div class="card p-3 text-center">
                    <h5>B.Tech</h5>
                    <small>120+ Colleges</small>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-3 text-center">
                    <h5>MBA</h5>
                    <small>80+ Colleges</small>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-3 text-center">
                    <h5>BCA</h5>
                    <small>60+ Colleges</small>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-3 text-center">
                    <h5>MBBS</h5>
                    <small>40+ Colleges</small>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="bg-light py-5">
    <div class="container">

        <h3 class="mb-4">Top Colleges</h3>

        <div id="college-list" class="row">
            <!-- AJAX will load here -->
            <div class="text-center py-5">Loading colleges...</div>
        </div>

    </div>
</section>

<section class="py-5">
    <div class="container text-center">

        <h3 class="mb-4">Why Choose CollegeSagar?</h3>

        <div class="row">

            <div class="col-md-4">
                <h5>Trusted Colleges</h5>
                <p>Only verified and approved colleges listed</p>
            </div>

            <div class="col-md-4">
                <h5>Easy Admission</h5>
                <p>Apply directly without hassle</p>
            </div>

            <div class="col-md-4">
                <h5>Expert Guidance</h5>
                <p>Get support from admission experts</p>
            </div>

        </div>

    </div>
</section>
@endsection
@push('footer')
    <!-- FIlter start -->
    <script>
        function loadColleges() {

            let params = new URLSearchParams({
                search: $('#search').val(),
                city: $('#city').val(),
                course: $('#course').val(),
                spec: $('#spec').val(),
                fees: $('#fees').val()
            });

            $('#college-list').html('<div class="text-center p-4">Loading...</div>');

            fetch('/ajax/colleges?' + params.toString())
                .then(res => res.text())
                .then(html => {
                    $('#college-list').html(html);
                });
        }

        // click
        $('#applyFilter').click(loadColleges);

        // auto search
        $('#search').on('keyup', function () {
            loadColleges();
        });
    </script>
    <script>
        $('#course').change(function () {

            let courseSlug = $(this).val();

            if (!courseSlug) return;

            fetch('/ajax/specializations?course=' + courseSlug)
                .then(res => res.json())
                .then(data => {

                    let options = '<option value="">All Specialization</option>';

                    data.forEach(s => {
                        options += `<option value="${s.slug}">${s.name}</option>`;
                    });

                    $('#spec').html(options);
                });
        });
        $('#course').change(function () {

            let courseSlug = $(this).val();

            if (!courseSlug) return;

            fetch('/ajax/specializations?course=' + courseSlug)
                .then(res => res.json())
                .then(data => {

                    let options = '<option value="">All Specialization</option>';

                    data.forEach(s => {
                        options += `<option value="${s.slug}">${s.name}</option>`;
                    });

                    $('#spec').html(options);
                });
        });
    </script>
    <!-- FIlter end -->
@endpush