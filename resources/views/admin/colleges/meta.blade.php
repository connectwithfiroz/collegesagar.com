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
                    <li class="breadcrumb-item active" aria-current="page">College</li>
                </ol>
                <!-- End breadcrumb -->
                @include('admin.layout.notifications')
            </div>
            <!--page-header closed-->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Advanced Details: {{ $college->name }}</h4>


                    </div>
                    <div class="card-body overflow-auto">
                        <form action="{{ route('admin.colleges.meta.store', $college->id) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Average Package (LPA)</label>
                                        <input type="number" name="meta[placement_avg]" class="form-control"
                                            value="{{ $college->getMeta('placement_avg') }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Facilities (Comma separated)</label>
                                        <input type="text" name="meta[facilities]" class="form-control"
                                            placeholder="Wi-Fi, Hostel, Gym..."
                                            value="{{ $college->getMeta('facilities') }}">
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h6>FAQ Section</h6>
                                    <textarea name="meta[faq_data]" class="form-control" rows="4"
                                        placeholder="JSON format for FAQs">{{ $college->getMeta('faq_data') }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Save Advanced Details</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <!--app-content closed-->
@endsection
@section('custom-script')

@endsection