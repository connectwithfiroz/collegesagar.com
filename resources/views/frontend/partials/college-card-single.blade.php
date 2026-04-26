<div class="u-card h-100">

    <div class="u-banner">
        <img src="{{ $college->cover_image_url ?? asset('default.jpg') }}">
    </div>

    <div class="u-body">
        <div class="u-title">{{ $college->name }}</div>

        <div class="u-meta">
            <i class="bi bi-geo-alt"></i>
            {{ $college->locations->pluck('city')->join(', ') }}
        </div>
    </div>

    <div class="u-footer">
        <a href="{{ route('college.show', $college->slug) }}"
           class="btn-link-view">
            View Details →
        </a>
    </div>

</div>