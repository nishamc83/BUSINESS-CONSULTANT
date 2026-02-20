@extends('layouts.app')

@section('title','About Us')
@section('meta_description','Learn more about our business consulting firm, our mission, vision, and leadership expertise.')

@section('content')

<!-- Page Header -->
<section class="py-5 text-center" style="background:#F8F9FA;">
    <div class="container">
        <h1 class="fw-bold">About Our Consulting Firm</h1>
        <p class="text-muted">
            Delivering strategic guidance and measurable business growth.
        </p>
    </div>
</section>

<!-- Company Overview -->
<section class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold mb-3">Who We Are</h2>
            <p>
                We are a professional business consulting firm dedicated to helping organizations 
                achieve sustainable growth, operational excellence, and strategic transformation.
            </p>
            <p>
                With years of industry expertise, we partner with startups, SMEs, and large enterprises 
                to deliver actionable solutions that drive measurable results.
            </p>
        </div>

        <div class="col-md-6">
            <img src="{{ asset('images/about.jpg') }}" 
                 class="img-fluid rounded shadow-sm" 
                 alt="Business Consulting Team">
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-5" style="background:#F8F9FA;">
    <div class="container">
        <div class="row text-center">

            <div class="col-md-6 mb-4">
                <div class="p-4 shadow-sm bg-white h-100">
                    <h3 class="fw-bold mb-3">Our Mission</h3>
                    <p>
                        To empower businesses with strategic insights, innovative thinking, 
                        and practical solutions that accelerate growth and improve performance.
                    </p>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="p-4 shadow-sm bg-white h-100">
                    <h3 class="fw-bold mb-3">Our Vision</h3>
                    <p>
                        To become a trusted global consulting partner recognized 
                        for excellence, integrity, and impactful results.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Leadership Section -->
<section class="container py-5">
    <h2 class="text-center fw-bold mb-5">Leadership Team</h2>

    <div class="row text-center">

        <div class="col-md-4 mb-4">
            <div class="shadow-sm p-4 h-100">
                <img src="{{ asset('images/leader1.jpg') }}" 
                     class="rounded-circle mb-3" 
                     width="120" height="120" 
                     alt="Founder">
                <h5 class="fw-bold">John Smith</h5>
                <p class="text-muted">Founder & Chief Consultant</p>
                <p>
                    15+ years of experience in strategic consulting and corporate advisory.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="shadow-sm p-4 h-100">
                <img src="{{ asset('images/leader2.jpg') }}" 
                     class="rounded-circle mb-3" 
                     width="120" height="120" 
                     alt="Operations Head">
                <h5 class="fw-bold">Sarah Johnson</h5>
                <p class="text-muted">Head of Operations</p>
                <p>
                    Expert in operational efficiency and digital transformation initiatives.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="shadow-sm p-4 h-100">
                <img src="{{ asset('images/leader3.jpg') }}" 
                     class="rounded-circle mb-3" 
                     width="120" height="120" 
                     alt="Financial Advisor">
                <h5 class="fw-bold">Michael Lee</h5>
                <p class="text-muted">Senior Financial Advisor</p>
                <p>
                    Specializes in financial planning, risk management, and growth strategies.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- Call to Action -->
<section class="py-5 text-center" style="background:#0B1F3A; color:white;">
    <div class="container">
        <h2 class="fw-bold mb-3">Ready to Transform Your Business?</h2>
        <p class="mb-4">
            Let’s discuss how we can help you achieve your strategic goals.
        </p>
        <a href="{{ route('book') }}" class="btn btn-light px-4">
            Book a Consultation
        </a>
    </div>
</section>

@endsection
