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
                    <div class="card-header d-flex justify-content-between">
                        <h4>Student Enquiries</h4>

                        <a href="{{ route('admin.student.enquiries.export') }}" class="btn btn-success px-2"
                            style="width:auto;">
                            Export Excel
                        </a>

                    </div>
                    <div class="card-body overflow-auto">
                        
                    </div>
                </div>
            </div>

        </section>
    </div>
    <!--app-content closed-->
@endsection
@section('custom-script')
  
@endsection