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
                    <li class="breadcrumb-item active" aria-current="page">College </li>
                </ol>
                <!-- End breadcrumb -->
                @include('admin.layout.notifications')
            </div>
            <!--page-header closed-->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                        <h4 class="mb-2 mb-md-0">College List</h4>

                        <div class="d-flex gap-2">
                            <a href="{{ route('admin.colleges.create') }}" class="btn btn-outline-success">
                                Add College
                            </a>

                            <a href="{{ route('admin.student.enquiries.export') }}" class="btn btn-success">
                                Export Excel
                            </a>
                        </div>
                    </div>

                    <div class="card-body overflow-auto">
                        <table class="table table-bordered" id="collegesList">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Logo</th>
                                    <th>Website</th>
                                    <th>Phone</th>
                                    <th>Established Year</th>
                                    <th>Approved By</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <!--app-content closed-->
@endsection
@section('custom-script')
    <script>
        $('#collegesList').DataTable({
            processing: true,
            serverSide: false,
            ajax: "{{ route('admin.colleges.data') }}",

            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'slug' },
                { data: 'logo' },
                { data: 'website' },
                { data: 'phone' },
                { data: 'established_year' },
                { data: 'approved_by' },
                { data: 'status' },
                { data: 'created' },
                { data: 'action', orderable: false, searchable: false }
            ]
        });
    </script>
@endsection