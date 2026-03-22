@extends('frontend.layouts.app')

@push('header')
    <!-- extra header -->
    <title>Terms and Conditions | Studysparrow</title>
    <link rel="stylesheet" href="{{  asset('frontend/assets/css/term_conditions.css') }}">
@endpush

@section('section')
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="content-card">

                    <div class="terms-section">
                        <div class="section-number">01</div>
                        <h2>Agreement to Terms</h2>
                        <p>By accessing the StudySparrow Consultancy website and using our admission services, you agree to
                            be bound by these Terms and Conditions. If you do not agree with any part of these terms, you
                            must not use our services.</p>
                    </div>

                    <div class="terms-section">
                        <div class="section-number">02</div>
                        <h2>Nature of Services</h2>
                        <p>StudySparrow acts as an authorized facilitator between students and educational institutions.
                            While we provide expert guidance and document processing support, the final decision regarding
                            admission rests solely with the respective University or College.</p>
                    </div>

                    <div class="terms-section">
                        <div class="section-number">03</div>
                        <h2>User Obligations</h2>
                        <p>Users are required to provide accurate, current, and complete information during the application
                            process. Providing fraudulent documents or misleading information will lead to immediate
                            termination of services and potential legal action by the institution.</p>
                        <div class="important-note">
                            <strong>Note:</strong> StudySparrow is not responsible for any rejection of applications based
                            on inaccurate data provided by the student.
                        </div>
                    </div>

                    <div class="terms-section">
                        <div class="section-number">04</div>
                        <h2>Fee Policy</h2>
                        <p>Any service fees charged by StudySparrow for consultancy are separate from the University tuition
                            fees. Detailed information regarding non-refundable deposits or processing fees will be provided
                            at the time of registration.</p>
                    </div>

                    <div class="terms-section">
                        <div class="section-number">05</div>
                        <h2>Limitation of Liability</h2>
                        <p>StudySparrow Consultancy shall not be liable for any indirect, incidental, or consequential
                            damages resulting from the use or inability to use our services, or for any changes in
                            university policies or government regulations.</p>
                    </div>

                    <div class="terms-section">
                        <div class="section-number">06</div>
                        <h2>Governing Law</h2>
                        <p>These terms shall be governed by and construed in accordance with the laws of India. Any disputes
                            arising under or in connection with these terms shall be subject to the exclusive jurisdiction
                            of the courts in India.</p>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
@push('footer')
    <!-- extra footer -->
@endpush