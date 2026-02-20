@extends('layouts.app')

@section('title','Industries Served')
@section('meta_description','Discover the industries we serve including healthcare, education, technology, manufacturing, and startups.')

@section('content')

<!-- Page Header -->
<section class="py-5 text-center" style="background:#F8F9FA;">
    <div class="container">
        <h1 class="fw-bold">Industries We Serve</h1>
        <p class="text-muted">
            Delivering tailored consulting solutions across diverse sectors.
        </p>
    </div>
</section>

<!-- Industries Section -->
<section class="container py-5">
    <div class="row">

        <!-- Healthcare -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 border-0">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Healthcare</h4>
                    <p>
                        Strategic advisory for hospitals, clinics, and healthcare providers 
                        focused on operational efficiency, compliance, and digital transformation.
                    </p>
                </div>
            </div>
        </div>

        <!-- Education -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 border-0">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Education</h4>
                    <p>
                        Supporting educational institutions with modernization strategies, 
                        technology integration, and performance improvement initiatives.
                    </p>
                </div>
            </div>
        </div>

        <!-- IT & Technology -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 border-0">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">IT & Technology</h4>
                    <p>
                        Helping tech companies scale operations, optimize resources, 
                        and implement sustainable growth models.
                    </p>
                </div>
            </div>
        </div>

        <!-- Manufacturing -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 border-0">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Manufacturing</h4>
                    <p>
                        Process optimization, supply chain enhancement, and operational 
                        excellence strategies for manufacturing enterprises.
                    </p>
                </div>
            </div>
        </div>

        <!-- Startups -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 border-0">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Startups</h4>
                    <p>
                        Business model validation, financial planning, and strategic 
                        roadmap development for early-stage ventures.
                    </p>
                </div>
            </div>
        </div>

        <!-- Financial Services -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 border-0">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Financial Services</h4>
                    <p>
                        Risk management, compliance advisory, and growth strategy 
                        consulting for financial institutions and firms.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-5" style="background:#F8F9FA;">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Why Businesses Trust Us</h2>

        <div class="row">
            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Industry Expertise</h5>
                <p class="text-muted">Deep understanding of market challenges and opportunities.</p>
            </div>

            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Customized Solutions</h5>
                <p class="text-muted">Tailored strategies aligned with your specific goals.</p>
            </div>

            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Proven Results</h5>
                <p class="text-muted">Data-driven approach delivering measurable success.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 text-center" style="background:#0B1F3A; color:white;">
    <div class="container">
        <h2 class="fw-bold mb-3">Let’s Build Your Industry Success Story</h2>
        <p class="mb-4">
            Our experts are ready to support your growth journey.
        </p>
        <a href="{{ route('book') }}" class="btn btn-light px-4">
            Book a Consultation
        </a>
    </div>
</section>

@endsection
