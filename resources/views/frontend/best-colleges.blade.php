@extends('frontend.layouts.app')
@push('header')
    <!-- extra header -->
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
@endpush

@section('content')

    <h1>Best Colleges for {{ $course->name }} in India</h1>

    <p>
        Find top {{ $course->name }} colleges in India with fees, rankings,
        placements, and admission details.
    </p>

    {{-- Internal linking (SEO boost) --}}
    <div class="mb-3">
        <strong>Popular Courses:</strong>
        @foreach($courses as $c)
            <a href="{{ url('best-colleges-for-' . $c->slug . '-in-india') }}">
                {{ $c->name }}
            </a>,
        @endforeach
    </div>

    <hr>

    {{-- College List --}}
    @foreach($colleges as $college)
        <div class="college-card mb-3">
            <h2>{{ $college->name }}</h2>

            <p><strong>Location:</strong> {{ $college->city }}</p>
            <p><strong>Fees:</strong> ₹{{ $college->fees ?? 'N/A' }}</p>
            <p><strong>Rating:</strong> ⭐ {{ $college->rating ?? 'N/A' }}</p>

            <a href="{{ url('college/' . $college->slug) }}">View Details</a>
        </div>
    @endforeach

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