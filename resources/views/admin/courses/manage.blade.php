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
                        <div class="row">

                            <!-- ADD COURSE -->
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-header">Add Course</div>
                                    <div class="card-body">

                                        <form method="POST" action="{{ route('admin.courses.store') }}">
                                            @csrf

                                            <input type="text" name="name" class="form-control mb-2"
                                                placeholder="Course Name">

                                            <!-- courese -->
                                            <textarea name="description" class="form-control" id="description" placeholder="Course description"></textarea>

                                            <select name="level" class="form-control mb-2">
                                                <option value="">Level</option>
                                                <option value="UG">UG</option>
                                                <option value="PG">PG</option>
                                                <option value="Diploma">Diploma</option>
                                            </select>

                                            <button class="btn btn-primary w-100">Add</button>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- LIST -->
                            <div class="col-md-8">

                                @foreach($courses as $course)
                                    <div class="card mb-3">
                                        <div class="card-header d-flex justify-content-between">
                                            <strong>{{ $course->name }}</strong>

                                            <form method="POST" action="{{ route('admin.courses.destroy', $course) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </div>

                                        <div class="card-body">

                                            <!-- SPECIALIZATION LIST -->
                                            <ul class="list-group mb-3">
                                                @foreach($course->specializations as $spec)
                                                    <li class="list-group-item d-flex justify-content-between">
                                                        {{ $spec->name }}

                                                        <form method="POST"
                                                            action="{{ route('admin.specializations.destroy', $spec) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-danger">X</button>
                                                        </form>
                                                    </li>
                                                @endforeach
                                            </ul>

                                            <!-- ADD SPECIALIZATION -->
                                            <form method="POST" action="{{ route('admin.specializations.store') }}">
                                                @csrf

                                                <input type="hidden" name="course_id" value="{{ $course->id }}">

                                                <div class="input-group">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Add Specialization">
                                                    <button class="btn btn-success">Add</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                @endforeach

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