@extends('admin.layout.app')
@section('css')
@endsection
@section('content')
    <!--app-content open-->
    <div class="app-content">
        <section class="section">
            <!--page-header open-->
            <div class="page-header">
                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Course </li>
                </ol>
                <!-- End breadcrumb -->
                @include('admin.layout.notifications')
            </div>
            <!--page-header closed-->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Course Management</h4>


                    </div>
                    <div class="card-body">
                        <div class="row g-4">

                            <div class="col-lg-4 col-md-5">
                                <div class="card border-0 shadow-sm rounded-3 sticky-md-top" style="top: 20px;">
                                    <div class="card-header bg-primary text-white rounded-top-3 py-3">
                                        <h5 class="mb-0 fw-semibold">Add New Course</h5>
                                    </div>
                                    <div class="card-body p-4">
                                        <form method="POST" action="{{ route('admin.courses.store') }}">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="courseName"
                                                    class="form-label text-muted small fw-bold mb-1">Course Name</label>
                                                <input type="text" name="name" id="courseName" class="form-control"
                                                    placeholder="e.g. Bachelor of Science" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="description"
                                                    class="form-label text-muted small fw-bold mb-1">Description</label>
                                                <textarea name="description" id="description" class="form-control" rows="3"
                                                    placeholder="Brief overview of the course..." required></textarea>
                                            </div>

                                            <div class="mb-4">
                                                <label for="level"
                                                    class="form-label text-muted small fw-bold mb-1">Level</label>
                                                <select name="level" id="level" class="form-control" required>
                                                    <option value="" disabled selected>Select Level...</option>
                                                    <option value="UG">Undergraduate (UG)</option>
                                                    <option value="PG">Postgraduate (PG)</option>
                                                    <option value="Diploma">Diploma</option>
                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-primary w-100 fw-bold py-2">Create
                                                Course</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-7" style="max-height: 100vh; overflow-y: auto;">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="mb-0 text-dark fw-bold">Manage Courses</h4>
                                </div>

                                @forelse($courses as $course)
                                    <div class="card border-0 shadow-sm rounded-3 mb-4">

                                        <div
                                            class="card-header bg-white border-bottom p-3 d-flex justify-content-between align-items-center">
                                            <div>
                                                <h5 class="mb-0 fw-bold text-primary">{{ $course->name }}</h5>
                                                <span
                                                    class="badge bg-light text-dark border mt-1">{{ $course->level ?? 'Level Unassigned' }}</span>
                                            </div>

                                            <form method="POST" action="{{ route('admin.courses.destroy', $course) }}"
                                                onsubmit="return confirm('Are you sure you want to delete this course and all its specializations?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                            </form>
                                        </div>

                                        <div class="card-body p-4 bg-light rounded-bottom-3">
                                            <h6 class="text-muted fw-semibold mb-3">Specializations</h6>

                                            @if($course->specializations->count() > 0)
                                                <ul class="list-group list-group-flush mb-4 rounded-3 border">
                                                    @foreach($course->specializations as $spec)
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-center py-2 bg-white">
                                                            <span class="text-dark">{{ $spec->name }}</span>
                                                            <small class="text-muted">{{ $spec->description }}</small>

                                                            <form method="POST"
                                                                action="{{ route('admin.specializations.destroy', $spec) }}"
                                                                class="m-0"  onsubmit="return confirm('Are you sure you want to delete this course and all its specializations?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-link text-danger p-0 text-decoration-none fs-5"
                                                                    title="Remove Specialization">
                                                                    &times;
                                                                </button>
                                                            </form>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <p class="text-muted small mb-4 fst-italic">No specializations added to this course
                                                    yet.</p>
                                            @endif

                                            <form method="POST" action="{{ route('admin.specializations.store') }}"
                                                class="mt-4 border-top pt-3">
                                                @csrf
                                                <input type="hidden" name="course_id" value="{{ $course->id }}">

                                                <h6 class="text-muted fw-semibold mb-3">Add New Specialization</h6>

                                                <div class="mb-2">
                                                    <label for="name-{{ $course->id }}"
                                                        class="form-label text-muted small fw-bold mb-1">Name</label>
                                                    <input type="text" name="name" id="name-{{ $course->id }}"
                                                        class="form-control shadow-sm" placeholder="Type new specialization..."
                                                        required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="description-{{ $course->id }}"
                                                        class="form-label text-muted small fw-bold mb-1">Description</label>
                                                    <textarea name="description" id="description-{{ $course->id }}"
                                                        class="form-control shadow-sm" rows="2"
                                                        placeholder="Brief overview of the specialization..."
                                                        required></textarea>
                                                </div>

                                                <div class="text-end">
                                                    <button type="submit"
                                                        class="btn btn-success px-4 fw-semibold shadow-sm">Add</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                @empty
                                    <div class="alert alert-secondary border-0 shadow-sm text-center py-5 rounded-3">
                                        <h5 class="text-muted mb-0">No courses available yet.</h5>
                                        <p class="text-muted small mb-0 mt-2">Use the form on the left to add your first course.
                                        </p>
                                    </div>
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <!--app-content closed-->
@endsection
@section('custom-script')

@endsection