@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Privacy Policy | Studysparrow</title>
@endpush

@section('section')
<main class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="content-card">

                    <div class="policy-section">
                        <span class="section-tag">Information</span>
                        <h2>1. Data We Collect</h2>
                        <p>StudySparrow Consultancy collects personal information that you voluntarily provide to us
                            when you register on our platform, express an interest in obtaining information about our
                            services, or otherwise when you contact us.</p>
                        <p>The personal information we collect may include names, email addresses, phone numbers, and
                            academic documents required for the admission process.</p>
                    </div>

                    <div class="policy-section">
                        <span class="section-tag">Usage</span>
                        <h2>2. How We Use Your Data</h2>
                        <p>We use the information we collect to facilitate the admission process between students and
                            partner institutions. This includes:</p>
                        <ul>
                            <li>Verifying academic eligibility for specific courses.</li>
                            <li>Communicating updates regarding university applications.</li>
                            <li>Providing personalized career mentorship and guidance.</li>
                        </ul>
                    </div>

                    <div class="policy-section">
                        <span class="section-tag">Security</span>
                        <h2>3. Data Protection Measures</h2>
                        <p>We have implemented appropriate technical and organizational security measures designed to
                            protect the security of any personal information we process. However, please also remember
                            that we cannot guarantee that the internet itself is 100% secure.</p>
                    </div>

                    <div class="policy-section">
                        <span class="section-tag">Compliance</span>
                        <h2>4. Information Sharing</h2>
                        <p>We only share information with your consent, to comply with laws, to provide you with
                            services, or to fulfill business obligations. Your data is never sold to third-party
                            marketing agencies.</p>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
@push('footer')
<!-- extra footer -->
@endpush