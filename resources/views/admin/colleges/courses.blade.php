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
                    <li class="breadcrumb-item active" aria-current="page">Starter </li>
                </ol>
                <!-- End breadcrumb -->
                @include('admin.layout.notifications')
            </div>
            <!--page-header closed-->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                        <h4 class="mb-2 mb-md-0">{{ $college->name }} - Courses</h4>

                        <div class="d-flex gap-2">

                        </div>
                    </div>

                    <div class="card-body overflow-auto">
                        <form method="POST" action="{{ route('admin.colleges.courses.store', $college) }}">
                            @csrf

                            <table class="table" id="courseTable">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Specialization</th>
                                        <th>Fees</th>
                                        <th>Duration</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($collegeCourses as $cc)
                                        <tr>
                                            <td>
                                                <select name="courses[{{ $loop->index }}][course_id]"
                                                    class="form-control course-select">
                                                    @foreach($courses as $course)
                                                        <option value="{{ $course->id }}" {{ $cc->course_id == $course->id ? 'selected' : '' }}>
                                                            {{ $course->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>

                                            <td>
                                                <select name="courses[{{ $loop->index }}][specialization_id]"
                                                    class="form-control spec-select">
                                                    <option value="">Select</option>
                                                    @foreach($cc->course->specializations as $spec)
                                                        <option value="{{ $spec->id }}" {{ $cc->specialization_id == $spec->id ? 'selected' : '' }}>
                                                            {{ $spec->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>

                                            <td>
                                                <input type="number" name="courses[{{ $loop->index }}][fees]"
                                                    value="{{ $cc->fees }}" class="form-control">
                                            </td>

                                            <td>
                                                <input type="number" name="courses[{{ $loop->index }}][duration]"
                                                    value="{{ $cc->duration }}" class="form-control">
                                            </td>

                                            <td>
                                                <button type="button" class="btn btn-danger removeRow">X</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <button type="button" class="btn btn-success mb-3" id="addRow">+ Add Course</button>

                            <br>
                            <button class="btn btn-primary">Save</button>
                        </form>
                    </div>

                </div>
            </div>

        </section>
    </div>
    <!--app-content closed-->
@endsection
@section('custom-script')
    <script>
        let index = {{ $collegeCourses->count() }};
        let courses = @json($courses);

        $('#addRow').click(function () {

            let row = `
        <tr>
            <td>
                <select name="courses[${index}][course_id]" class="form-control course-select">
                    <option value="">Select</option>
                    ${courses.map(c => `<option value="${c.id}">${c.name}</option>`).join('')}
                </select>
            </td>

            <td>
                <select name="courses[${index}][specialization_id]" class="form-control spec-select">
                    <option value="">Select</option>
                </select>
            </td>

            <td><input type="number" name="courses[${index}][fees]" class="form-control"></td>

            <td><input type="number" name="courses[${index}][duration]" class="form-control"></td>

            <td><button type="button" class="btn btn-danger removeRow">X</button></td>
        </tr>`;

            $('#courseTable tbody').append(row);

            index++;
        });
        // Dependent Dropdown (Course → Specialization)
        $(document).on('change', '.course-select', function () {
            let courseId = $(this).val();
            let row = $(this).closest('tr');
            let specSelect = row.find('.spec-select');

            let course = courses.find(c => c.id == courseId);

            let options = '<option value="">Select</option>';

            if (course && course.specializations) {
                course.specializations.forEach(s => {
                    options += `<option value="${s.id}">${s.name}</option>`;
                });
            }

            specSelect.html(options);
        });
        // Remove Row
        $(document).on('click', '.removeRow', function () {
            $(this).closest('tr').remove();
        });
    </script>
@endsection