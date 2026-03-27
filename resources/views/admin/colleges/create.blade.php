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
                        <h4>Add College</h4>

                    </div>

                    <div class="card-body overflow-auto">
                        <form action="{{ route('admin.colleges.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <!-- LEFT -->
                                <div class="col-md-8">

                                    <div class="card mb-3">
                                        <div class="card-body">

                                            <div class="mb-3">
                                                <label class="form-label">College Name</label>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Enter college name" value="{{ old('name') }}">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea name="description" rows="5" class="form-control"
                                                    placeholder="Enter description">{{ old('description') }}</textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="Full address" value="{{ old('address') }}">
                                            </div>

                                        </div>
                                    </div>

                                    <!-- CONTACT -->
                                    <div class="card mb-3">
                                        <div class="card-header">Contact Info</div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" class="form-control"
                                                        value="{{ old('phone') }}">
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label>Email</label>
                                                    <input type="email" name="email" class="form-control"
                                                        value="{{ old('email') }}">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label>Website</label>
                                                <input type="url" name="website" class="form-control"
                                                    value="{{ old('website') }}">
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <!-- RIGHT -->
                                <div class="col-md-4">

                                    <!-- MEDIA -->
                                    <div class="card mb-3">
                                        <div class="card-header">Media</div>
                                        <div class="card-body">

                                            <div class="mb-3">
                                                <label>Logo</label>
                                                <input type="file" name="logo" class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <label>Cover Image</label>
                                                <input type="file" name="cover_image" class="form-control">
                                            </div>

                                        </div>
                                    </div>

                                    <!-- META -->
                                    <div class="card mb-3">
                                        <div class="card-header">Details</div>
                                        <div class="card-body">

                                            <div class="mb-3">
                                                <label>Established Year</label>
                                                <input type="number" name="established_year" class="form-control"
                                                    value="{{ old('established_year') }}">
                                            </div>

                                            <div class="mb-3">
                                                <label>Approved By</label>
                                                <select name="approved_by[]" class="form-control" multiple>
                                                    @php $approved = old('approved_by', []); @endphp
                                                    <option value="AICTE" {{ in_array('AICTE', $approved) ? 'selected' : '' }}>
                                                        AICTE</option>
                                                    <option value="UGC" {{ in_array('UGC', $approved) ? 'selected' : '' }}>
                                                        UGC
                                                    </option>
                                                    <option value="NAAC" {{ in_array('NAAC', $approved) ? 'selected' : '' }}>
                                                        NAAC
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label>Location</label>
                                                <select name="location_ids[]" class="form-control" multiple>
                                                    @foreach($locations as $loc)
                                                        <option value="{{ $loc->id }}">
                                                            {{ $loc->city }}, {{ $loc->state }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- STATUS -->
                                    <div class="card mb-3">
                                        <div class="card-header">Status</div>
                                        <div class="card-body">

                                            <div class="form-check mb-2">
                                                <input type="checkbox" name="is_featured" value="1"
                                                    class="form-check-input">
                                                <label class="form-check-label">Featured</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" name="status" value="1" class="form-check-input"
                                                    checked>
                                                <label class="form-check-label">Active</label>
                                            </div>

                                        </div>
                                    </div>

                                    <button class="btn btn-primary w-100">Save College</button>

                                </div>

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