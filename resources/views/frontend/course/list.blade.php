@extends('frontend.layouts.app')
@push('header')
    <!-- extra header -->
    <title>{{ $course->name }} Colleges - {{config('app.name') ?? 'Collegesagar'}}</title>
    <meta name="description"
        content="Find the best {{ $course->name }} colleges with {{config('app.name') ?? 'Collegesagar'}}. Explore top institutions and make informed decisions about your education.">
@endpush
@section('content')

    <div class="container py-4">

        <!-- PAGE TITLE -->
        <h3 class="mb-3">
            Best Colleges for {{ $course->name }}
        </h3>

        <!-- FILTERS (future ready) -->
        <div class="card mb-3">
            <div class="card-body">

                <div class="row g-2">

                    <!-- Search -->
                    <div class="col-md-3">
                        <input type="text" id="search" class="form-control" placeholder="Search college...">
                    </div>

                    <!-- Location -->
                    <div class="col-md-2">
                        <select id="city" class="form-control">
                            <option value="">All Cities</option>
                            @foreach($locations as $loc)
                                <option value="{{ $loc->city }}">{{ $loc->city }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Course -->
                    <div class="col-md-2">
                        <select id="course" class="form-control">
                            <option value="">All Courses</option>
                            @foreach($courses as $c)
                                <option value="{{ $c->slug }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Specialization -->
                    <div class="col-md-2">
                        <select id="spec" class="form-control">
                            <option value="">All Specialization</option>
                        </select>
                    </div>

                    <!-- Fees -->
                    <div class="col-md-2">
                        <select id="fees" class="form-control">
                            <option value="">Fees</option>
                            <option value="100000">Below 1L</option>
                            <option value="300000">Below 3L</option>
                            <option value="500000">Below 5L</option>
                        </select>
                    </div>

                    <!-- Button -->
                    <div class="col-md-1">
                        <button class="btn btn-primary w-100" id="applyFilter">
                            Go
                        </button>
                    </div>

                </div>

            </div>
        </div>

        <!-- COLLEGE LIST -->
        <div class="custom-slider" id="college-list">

            <!-- LOADER -->
            <div id="college-loader" class="text-center py-5">
                <div class="spinner-border"></div>
                <p>Loading colleges...</p>
            </div>

        </div>

    </div>
@endsection
@push('footer')
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            let courseSlug = "{{ $course->slug }}";

            fetch(`/ajax/colleges?course=${courseSlug}`)
                .then(res => res.text())
                .then(html => {
                    document.getElementById('college-list').innerHTML = html;
                });

        });
    </script>
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
@endpush