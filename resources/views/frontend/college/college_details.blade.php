@extends('frontend.layouts.app')

@section('content')
<div class="container py-4">

    <!-- COVER -->
    <div class="card mb-4">
        <img src="{{ $college->cover_image_url }}" class="card-img-top" style="height:300px; object-fit:cover;">
        <div class="card-body d-flex align-items-center">
            <img src="{{ $college->logo_url }}" width="80" class="me-3">
            <div>
                <h3 class="mb-1">{{ $college->name }}</h3>
                <p class="mb-0 text-muted">
                    {{ $college->locations->pluck('city')->join(', ') }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- LEFT -->
        <div class="col-md-8">

            <!-- ABOUT -->
            <div class="card mb-3">
                <div class="card-header">About College</div>
                <div class="card-body">
                    {!! $college->description !!}
                </div>
            </div>

            <!-- COURSES -->
            <div class="card mb-3">
                <div class="card-header">Courses & Fees</div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Specialization</th>
                                <th>Fees</th>
                                <th>Duration</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($college->collegeCourses as $cc)
                                <tr>
                                    <td>{{ $cc->course->name }}</td>
                                    <td>{{ $cc->specialization->name ?? '-' }}</td>
                                    <td>₹{{ number_format($cc->fees) }}</td>
                                    <td>{{ $cc->duration }} {{ $cc->duration_type }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{ route('apply.now_form', ['college_id' => $college->id, 'course_id' => $cc->course_id, 'specialization_id' => $cc->specialization_id ?? null, 'college' => $college->name]) }}">Apply</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

        <!-- RIGHT -->
        <div class="col-md-4">

            <!-- DETAILS -->
            <div class="card mb-3">
                <div class="card-header">College Details</div>
                <div class="card-body">

                    <p><strong>Established:</strong> {{ $college->established_year }}</p>

                    <p><strong>Approved By:</strong>
                        {{ $college->approved_by ? implode(', ', $college->approved_by) : '-' }}
                    </p>

                    <p><strong>Address:</strong> {{ $college->address }}</p>

                    <p><strong>Website:</strong>
                        <a href="{{ $college->website }}" target="_blank">Visit</a>
                    </p>

                </div>
            </div>

            <!-- APPLY BUTTON -->
            <div class="card">
                <div class="card-body text-center">
                    <a class="btn btn-success w-100" href="{{ route('apply.now_form', ['college_id' => $college->id, 'college' => $college->name]) }}">Apply Now</a>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection