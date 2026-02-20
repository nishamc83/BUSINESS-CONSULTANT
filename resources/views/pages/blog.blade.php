@extends('layouts.app')

@section('title','Blog & Insights')
@section('meta_description','Latest business insights, consulting strategies, and industry updates.')

@section('content')

<!-- Page Header -->
<section class="py-5 text-center" style="background:#F8F9FA;">
    <div class="container">
        <h1 class="fw-bold">Business Insights & Articles</h1>
        <p class="text-muted">Expert perspectives on strategy, growth, and transformation.</p>
    </div>
</section>

<!-- Blog Section -->
<section class="container py-5">
    <div class="row">

        @forelse($blogs as $blog)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 border-0">

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">
                        {{ $blog->title }}
                    </h5>

                    <p class="text-muted small">
                        {{ $blog->created_at->format('F d, Y') }}
                    </p>

                    <p class="card-text">
                        {{ Str::limit(strip_tags($blog->content), 120) }}
                    </p>

                    <div class="mt-auto">
                        <a href="{{ route('blog.show', $blog->id) }}" 
                           class="btn btn-primary btn-sm">
                            Read More →
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty

        <div class="col-12 text-center">
            <p class="text-muted">No blog articles available yet.</p>
        </div>

        @endforelse

    </div>
</section>

@endsection
