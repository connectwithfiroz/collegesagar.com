@forelse($colleges as $college)

<div class="slider-card-container">
    <div class="u-card">

        <div class="u-banner">
            <span class="u-rating">4.5 <i class="bi bi-star-fill ms-1"></i></span>

            <img src="{{ $college->cover_image_url ?? asset('default.jpg') }}">

            <div class="u-logo">
                <img src="{{ $college->logo_url ?? asset('logo.png') }}" class="img-fluid">
            </div>
        </div>

        <div class="u-body">
            <div class="u-title">{{ $college->name }}</div>

            <div class="u-meta">
                <i class="bi bi-geo-alt"></i>
                {{ $college->locations->pluck('city')->join(', ') }}
            </div>

            @php 
            if(!empty($course_id)) {
                $cc = $college->collegeCourses()->where('course_id', $course_id)->first();
            } else {    
                $cc = $college->collegeCourses->first(); 
            }
            @endphp

            @if($cc)
                <div class="u-course-box">
                    <div class="u-course-name">
                        {{ $cc->course->name }} 
                        {{ $cc->specialization->name ?? '' }}
                    </div>

                    <div class="u-fee">
                        ₹ {{ number_format($cc->fees) }}
                        <span>/ Total Fees</span>
                    </div>
                </div>
            @endif

        </div>

        <div class="u-footer">

            <a href="{{ route('college.show', $college->slug) }}" class="btn-link-view">
                View All Details <i class="bi bi-arrow-right small"></i>
            </a>

            <div class="d-flex gap-2">
                <button class="btn-brochure flex-fill">
                    <i class="bi bi-download"></i>
                </button>

                <a class="btn-apply-now w-100" href="{{ route('apply.now_form') }}?college_id={{ $college->id }}&college={{ $college->name }}">
                    Apply Now
                </a>
            </div>

        </div>

    </div>
</div>
@empty
    <div class="text-center py-5">
        <h5 class="text-muted">No colleges found for this course yet.</h5>
        <!-- apply now btn -->
        <a href="{{ route('apply.now_form') }}" class="btn btn-primary mt-3">
            Apply Now  
        </a> 
    </div>
@endforelse