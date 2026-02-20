@extends('admin.layout')

@section('title', 'Add Testimonial')

@section('content')
<div class="page-header">
    <h1>Add Testimonial</h1>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">New Testimonial</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.testimonials.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name *</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                       id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="company" class="form-label">Company *</label>
                <input type="text" class="form-control @error('company') is-invalid @enderror" 
                       id="company" name="company" value="{{ old('company') }}" required>
                @error('company')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="review" class="form-label">Review *</label>
                <textarea class="form-control @error('review') is-invalid @enderror" 
                          id="review" name="review" rows="6" required>{{ old('review') }}</textarea>
                @error('review')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Add Testimonial
                </button>
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
