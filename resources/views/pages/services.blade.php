@extends('layouts.app')

@section('title','Our Services')
@section('meta_description','Explore our professional business consulting services including strategy, financial advisory, digital transformation, and risk management.')

@section('content')

<!-- Page Header -->
<section class="py-5 text-center" style="background:#F8F9FA;">
    <div class="container">
        <h1 class="fw-bold">Our Consulting Services</h1>
        <p class="text-muted">
            Comprehensive solutions designed to drive business growth and transformation.
        </p>
    </div>
</section>

<!-- Services Section -->
<section class="container py-5">
    <div class="row">

        <!-- Strategy Consulting -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Strategy Consulting</h4>
                    <p>
                        We help organizations define long-term vision, competitive positioning,
                        and growth strategies that deliver sustainable success.
                    </p>
                    <ul class="text-muted">
                        <li>Market Analysis</li>
                        <li>Business Planning</li>
                        <li>Growth Roadmaps</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Financial Advisory -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Financial Advisory</h4>
                    <p>
                        Expert financial planning and risk management solutions to
                        optimize profitability and financial stability.
                    </p>
                    <ul class="text-muted">
                        <li>Financial Planning</li>
                        <li>Budget Forecasting</li>
                        <li>Risk Assessment</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Digital Transformation -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Digital Transformation</h4>
                    <p>
                        Empowering businesses with modern technologies to improve
                        efficiency, scalability, and customer engagement.
                    </p>
                    <ul class="text-muted">
                        <li>Process Automation</li>
                        <li>Technology Integration</li>
                        <li>Digital Strategy</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Operations Optimization -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Operations Optimization</h4>
                    <p>
                        Streamlining processes and improving productivity through
                        operational excellence frameworks.
                    </p>
                    <ul class="text-muted">
                        <li>Process Improvement</li>
                        <li>Supply Chain Strategy</li>
                        <li>Performance Metrics</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Risk Management -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Risk Management</h4>
                    <p>
                        Identifying potential risks and implementing proactive
                        strategies to safeguard business continuity.
                    </p>
                    <ul class="text-muted">
                        <li>Compliance Advisory</li>
                        <li>Internal Controls</li>
                        <li>Risk Mitigation Plans</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Business Growth Consulting -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Business Growth Consulting</h4>
                    <p>
                        Helping companies scale operations, enter new markets,
                        and maximize revenue potential.
                    </p>
                    <ul class="text-muted">
                        <li>Expansion Strategy</li>
                        <li>Revenue Optimization</li>
                        <li>Performance Tracking</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Our Process Section -->
<section class="py-5" style="background:#F8F9FA;">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">Our Consulting Process</h2>

        <div class="row">

            <div class="col-md-3 mb-4">
                <h5 class="fw-bold">1. Discovery</h5>
                <p class="text-muted">Understanding your business goals and challenges.</p>
            </div>

            <div class="col-md-3 mb-4">
                <h5 class="fw-bold">2. Strategy Design</h5>
                <p class="text-muted">Developing customized action plans.</p>
            </div>

            <div class="col-md-3 mb-4">
                <h5 class="fw-bold">3. Implementation</h5>
                <p class="text-muted">Executing strategies with measurable KPIs.</p>
            </div>

            <div class="col-md-3 mb-4">
                <h5 class="fw-bold">4. Optimization</h5>
                <p class="text-muted">Continuous monitoring and performance improvement.</p>
            </div>

        </div>
    </div>
</section>

<!-- Call To Action -->
<section class="py-5 text-center" style="background:#0B1F3A; color:white;">
    <div class="container">
        <h2 class="fw-bold mb-3">Ready to Elevate Your Business?</h2>
        <p class="mb-4">
            Let’s create a strategy that drives measurable results.
        </p>
        <a href="{{ route('book') }}" class="btn btn-light px-4">
            Book a Consultation
        </a>
    </div>
</section>

@endsection
