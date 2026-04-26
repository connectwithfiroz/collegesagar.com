@extends('frontend.layouts.app')
@push('header')
    <!-- extra header -->
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
@endpush

@section('content')
    <div class="container py-2">
        <div class="row mb-5">
            <div class="col-lg-8">
                <h1 class="fw-bold text-dark display-5">Best Colleges for {{ $course->name }} in India</h1>
                <p class="lead text-muted">
                    Explore top-rated {{ $course->name }} colleges in India based on placement records,
                    average fee structures, and student reviews.
                </p>
            </div>
        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-12">
                <div class="card border-0 shadow-sm p-4 sticky-lg-top" style="top: 20px;">
                    <h6 class="text-uppercase text-muted fw-bold mb-3">Popular Courses</h6>

                    <div class="d-flex flex-lg-column flex-row overflow-auto gap-2 pb-2 pb-lg-0">
                        @foreach($courses as $c)
                            <a href="{{ url('best-colleges-for-' . $c->slug . '-in-india') }}"
                                class="btn btn-outline-primary btn-sm text-nowrap">
                                {{ $c->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="mb-0">Showing {{ $colleges->count() }} Colleges</h5>
                    <select class="form-select w-auto shadow-sm d-none">
                        <option>Sort by: Popularity</option>
                        <option>Fees: Low to High</option>
                    </select>
                </div>

                @include('frontend.partials.college-cards', ['colleges' => $colleges, 'course_id' => $course_id])
            </div>
        </div>
    </div>
@endsection


@push('footer')
    <script type="application/ld+json">
                        {
                         "@context": "https://schema.org",
                         "@type": "ItemList",
                         "itemListElement": [
                            @foreach($colleges as $index => $college)
                                {
                                    "@type": "ListItem",
                                    "position": {{ $index + 1 }},
                                    "name": "{{ $college->name }}"
                                }@if(!$loop->last),@endif
                            @endforeach
                         ]
                        }
                        </script>
@endpush