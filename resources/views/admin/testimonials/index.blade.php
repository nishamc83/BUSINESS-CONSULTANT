@extends('admin.layout')

@section('title', 'Testimonials')

@section('content')
<div class="page-header">
    <h1>Testimonials</h1>
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> New Testimonial
    </a>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Review</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($testimonials as $testimonial)
                    <tr>
                        <td><strong>{{ $testimonial->name }}</strong></td>
                        <td>{{ $testimonial->company }}</td>
                        <td><small class="text-muted">{{ Str::limit($testimonial->review, 40) }}</small></td>
                        <td>{{ $testimonial->created_at->format('M d, Y') }}</td>
                        <td>
                            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-sm btn-info text-white">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            No testimonials yet. <a href="{{ route('admin.testimonials.create') }}">Create one →</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@if($testimonials->hasPages())
    <div class="d-flex justify-content-center mt-4">
        {{ $testimonials->links() }}
    </div>
@endif
@endsection
