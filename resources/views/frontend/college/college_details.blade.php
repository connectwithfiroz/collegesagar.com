@extends('frontend.layouts.app')

@section('content')
    <div class="bg-light pb-5">
        <div class="position-relative" style="height: 350px;">
            <img src="{{ $college->cover_image_url }}" class="w-100 h-100" style="object-fit:cover;">
            <div class="position-absolute bottom-0 start-0 w-100 p-4"
                style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                <div class="container d-flex align-items-end">
                    <img src="{{ $college->logo_url }}" width="120" height="120"
                        class="rounded-3 border border-4 border-white shadow bg-white me-4">
                    <div class="text-white pb-2">
                        <h1 class="fw-bold mb-1">{{ $college->name }}</h1>
                        <p class="mb-0 opacity-75"><i class="bi bi-geo-alt-fill me-1"></i>
                            {{ $college->locations->pluck('city')->join(', ') }}</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-4">
            <div class="row g-4">
                <div class="col-lg-8">

                    <section class="card border-0 shadow-sm p-4 mb-4 rounded-4">
                     

                        <h4 class="fw-bold mb-3 text-primary">Advanced Highlights</h4>
                        <div class="text-muted lh-lg">
                            <p class="mb-0"><strong>Avg Package:</strong> {{ $college->getMeta('placement_avg', 'Not Disclosed') }} LPA
                            </p>
                            <p class="mb-0"><strong>Facilities:</strong>
                                @foreach(explode(',', $college->getMeta('facilities', '')) as $facility)
                                    <span class="badge bg-info">{{ trim($facility) }}</span>
                                @endforeach
                            </p>
                        </div>
                    </section>
                    <section class="card border-0 shadow-sm p-4 mb-4 rounded-4">
                        <h4 class="fw-bold mb-3 text-primary">About {{ $college->name }}</h4>
                        <div class="text-muted lh-lg">
                            {!! $college->description !!}
                        </div>
                    </section>

                    <section class="card border-0 shadow-sm p-4 mb-4 rounded-4">
                        <h4 class="fw-bold mb-3 text-primary">Campus Gallery</h4>
                        <div class="row g-2">
                            @for($i = 1; $i <= 4; $i++)
                                <div class="col-6 col-md-3">
                                    <div class="bg-secondary rounded-3" style="height: 120px; background: #eee;"></div>
                                </div>
                            @endfor
                        </div>
                    </section>

                    <section class="card border-0 shadow-sm p-4 rounded-4">
                        <h4 class="fw-bold mb-3 text-primary">Courses & Fees</h4>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
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
                                            <td><strong>{{ $cc->course->name }}</strong></td>
                                            <td>{{ $cc->specialization->name ?? '-' }}</td>
                                            <td><span class="text-success fw-bold">₹{{ number_format($cc->fees) }}</span></td>
                                            <td>{{ $cc->duration }} {{ $cc->duration_type }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-outline-primary rounded-pill"
                                                    href="{{ route('apply.now_form', ['college_id' => $college->id, 'course_id' => $cc->course_id]) }}">Apply</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>

                <div class="col-lg-4">
                    <div class="sticky-top" style="top: 20px;">
                        <div class="card border-0 shadow-sm rounded-4 p-4 mb-3">
                            <h5 class="fw-bold mb-4">Quick Information</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3"><small class="text-muted d-block">Established</small>
                                    {{ $college->established_year }}</li>
                                <li class="mb-3"><small class="text-muted d-block">Approved By</small>
                                    {{ $college->approved_by ? implode(', ', $college->approved_by) : '-' }}</li>
                                <li class="mb-3"><small class="text-muted d-block">Address</small> {{ $college->address }}
                                </li>
                            </ul>
                            <a href="{{ $college->website }}" target="_blank" class="btn btn-light w-100 mt-2">Visit
                                Website</a>
                        </div>

                        <div class="card border-0 shadow-primary p-3 rounded-4 bg-primary text-white text-center">
                            <div class="card-body">
                                <h5 class="mb-3">Ready to Join?</h5>
                                <a class="btn btn-light btn-lg w-100 fw-bold shadow"
                                    href="{{ route('apply.now_form', ['college_id' => $college->id, 'college' => $college->name]) }}">Apply
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection