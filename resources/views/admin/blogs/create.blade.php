@extends('admin.layout')

@section('title', 'Create Blog Post')

@section('content')
<div class="page-header">
    <h1>Create Blog Post</h1>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">New Blog Post</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.blogs.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title *</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                       id="title" name="title" value="{{ old('title') }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug *</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                       id="slug" name="slug" value="{{ old('slug') }}" required>
                <small class="form-text text-muted">URL-friendly version of the title</small>
                @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content *</label>
                <textarea class="form-control @error('content') is-invalid @enderror" 
                          id="content" name="content" rows="10" required>{{ old('content') }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Create Post
                </button>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
