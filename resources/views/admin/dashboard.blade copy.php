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
                <li class="breadcrumb-item active" aria-current="page">Dashboard </li>
            </ol>
            <!-- End breadcrumb -->
            @include('admin.layout.notifications')
        </div>
        <!--page-header closed-->
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">

                    <h4>Student Enquiries</h4>

                    <a href="{{ route('admin.student.enquiries.export') }}" class="btn btn-success">
                        Export Excel
                    </a>

                </div>

                <div class="card-body">

                    <table class="table table-bordered" id="enquiryTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Course</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>IP</th>
                                <th>Date</th>
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
        $(document).ready(function () {

            $('#enquiryTable').DataTable({

                processing: true,
                serverSide: false,

                ajax: "{{ route('admin.student.enquiries.data') }}",

                columns: [
                    { data: 'id' },
                    { data: 'target_college' },
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'phone' },
                    { data: 'ip_address' },
                    { data: 'created' }
                ]

            });

        });
    </script>
@endsection