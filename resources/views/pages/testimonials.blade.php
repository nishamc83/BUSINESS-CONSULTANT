@extends('layouts.app')

@section('title','Client Testimonials')
@section('meta_description','Read what our clients say about our professional business consulting services and proven results.')

@section('content')

<!-- Page Header -->
<section class="py-5 text-center" style="background:#F8F9FA;">
    <div class="container">
        <h1 class="fw-bold">What Our Clients Say</h1>
        <p class="text-muted">
            Trusted by businesses across industries for strategic excellence.
        </p>
    </div>
</section>

<!-- Testimonials Section -->
<section class="container py-5">
    <div class="row">

        @forelse($testimonials as $testimonial)

        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm border-0 h-100">

                <div class="card-body d-flex flex-column">

                    <!-- Quote -->
                    <p class="card-text">
                        “{{ $testimonial->review }}”
                    </p>

                    <!-- Client Info -->
                    <div class="mt-auto pt-3 border-top">
                        <h6 class="fw-bold mb-0">
                            {{ $testimonial->name }}
                        </h6>
                        <small class="text-muted">
                            {{ $testimonial->company }}
                        </small>
                    </div>

                </div>

            </div>
        </div>

        @empty

        <div class="col-12 text-center">
            <p class="text-muted">No testimonials available yet.</p>
        </div>

        @endforelse

    </div>
</section>

<!-- Why Clients Choose Us -->
<section class="py-5" style="background:#F8F9FA;">
    <div class="container text-center">

        <h2 class="fw-bold mb-4">Why Clients Choose Us</h2>

        <div class="row">

            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Proven Expertise</h5>
                <p class="text-muted">
                    Years of industry experience delivering measurable results.
                </p>
            </div>

            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Customized Solutions</h5>
                <p class="text-muted">
                    Strategies tailored to your unique business goals.
                </p>
            </div>

            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Long-Term Partnership</h5>
                <p class="text-muted">
                    We focus on sustainable growth and continuous improvement.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Call to Action -->
<section class="py-5 text-center" style="background:#0B1F3A; color:white;">
    <div class="container">
        <h2 class="fw-bold mb-3">Ready to Join Our Success Stories?</h2>
        <p class="mb-4">
            Let’s work together to achieve your business goals.
        </p>
        <a href="{{ route('book') }}" class="btn btn-light px-4">
            Book a Consultation
        </a>
    </div>
</section>

@endsection
