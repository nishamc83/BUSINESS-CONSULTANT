@extends('admin.layout')

@section('title', 'Blog Posts')

@section('content')
<div class="page-header">
    <h1>Blog Posts</h1>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> New Post
    </a>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($blogs as $blog)
                    <tr>
                        <td>
                            <strong>{{ Str::limit($blog->title, 50) }}</strong>
                        </td>
                        <td>
                            <code>{{ $blog->slug }}</code>
                        </td>
                        <td>
                            <small class="text-muted">{{ $blog->created_at->format('M d, Y') }}</small>
                        </td>
                        <td>
                            <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm btn-info text-white">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
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
                        <td colspan="4" class="text-center text-muted py-4">
                            No blog posts yet. <a href="{{ route('admin.blogs.create') }}">Create one →</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@if($blogs->hasPages())
    <div class="d-flex justify-content-center mt-4">
        {{ $blogs->links() }}
    </div>
@endif
@endsection
