@extends('frontend.layouts.app')
@push('header')
    <!-- extra header -->
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
@endpush

@section('content')
    <div class="container py-5">
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
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm p-4 sticky-top" style="top: 20px;">
                    <h6 class="text-uppercase text-muted fw-bold mb-3">Popular Courses</h6>
                    <div class="d-flex flex-column gap-2">
                        @foreach($courses as $c)
                            <a href="{{ url('best-colleges-for-' . $c->slug . '-in-india') }}"
                                class="text-decoration-none text-dark hover-primary">
                                {{ $c->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="mb-0">Showing {{ $colleges->count() }} Colleges</h5>
                    <select class="form-select w-auto shadow-sm">
                        <option>Sort by: Popularity</option>
                        <option>Fees: Low to High</option>
                    </select>
                </div>

                @forelse($colleges as $college)
                    @include('frontend.partials.college-cards', ['college' => $college])
                @empty
                    <div class="text-center py-5">
                        <h5 class="text-muted">No colleges found for this course yet.</h5>
                    </div>
                @endforelse
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