@extends('layouts.app')

@section('title','Home')

@section('content')

<!-- HERO SECTION -->
<section class="text-center text-white p-5" style="background:#0B1F3A;">
    <div class="container">
        <h1 class="fw-bold display-5">Strategic Business Consulting for Sustainable Growth</h1>
        <p class="lead mt-3">
            We empower organizations to achieve measurable success through strategic planning,
            financial advisory, and operational excellence.
        </p>
        <a href="{{ route('book') }}" class="btn btn-light mt-3 px-4">Book Consultation</a>
    </div>
</section>

<!-- SERVICES SECTION -->
<section class="container py-5 text-center">
    <h2 class="fw-bold mb-4">Our Core Services</h2>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="p-4 shadow-sm border rounded h-100">
                <h5 class="fw-bold">Strategy Consulting</h5>
                <p>
                    Develop actionable strategies that align with your business vision and drive long-term growth.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 shadow-sm border rounded h-100">
                <h5 class="fw-bold">Financial Advisory</h5>
                <p>
                    Optimize financial performance, manage risks, and improve profitability with expert insights.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 shadow-sm border rounded h-100">
                <h5 class="fw-bold">Digital Transformation</h5>
                <p>
                    Leverage technology and innovation to streamline operations and stay competitive.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="bg-light py-5 text-center">
    <div class="container">
        <h2 class="fw-bold mb-4">Why Choose ConsultPro?</h2>
        <p class="mb-4">
            Our experienced consultants bring deep industry knowledge and data-driven approaches
            to deliver sustainable business results.
        </p>

        <div class="row">
            <div class="col-md-4">
                <h4 class="fw-bold">10+ Years Experience</h4>
            </div>
            <div class="col-md-4">
                <h4 class="fw-bold">200+ Projects Delivered</h4>
            </div>
            <div class="col-md-4">
                <h4 class="fw-bold">98% Client Satisfaction</h4>
            </div>
        </div>
    </div>
</section>

<!-- BLOG SECTION -->
<section class="container py-5">
    <h2 class="fw-bold mb-4 text-center">Latest Insights</h2>

    <div class="row">
        @forelse($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="p-3 shadow-sm border rounded h-100">
                    <h5 class="fw-bold">{{ $blog->title }}</h5>
                    <p>{{ \Illuminate\Support\Str::limit($blog->content, 100) }}</p>
                    <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-sm btn-primary">
                        Read More
                    </a>
                </div>
            </div>
        @empty
            <p class="text-center">No blog posts available.</p>
        @endforelse
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="text-center text-white py-5" style="background:#0B1F3A;">
    <div class="container">
        <h2 class="fw-bold">Ready to Elevate Your Business?</h2>
        <p class="mt-3">
            Schedule a consultation today and discover how we can help you achieve sustainable growth.
        </p>
        <a href="{{ route('book') }}" class="btn btn-light mt-3 px-4">Schedule Now</a>
    </div>
</section>

@endsection
