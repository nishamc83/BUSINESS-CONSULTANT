@extends('admin.layout')

@section('title', 'Contact Messages')

@section('content')
<div class="page-header">
    <h1>Contact Messages</h1>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $contact)
                    <tr>
                        <td><strong>{{ $contact->name }}</strong></td>
                        <td>{{ $contact->email }}</td>
                        <td><small class="text-muted">{{ Str::limit($contact->message, 50) }}</small></td>
                        <td>{{ $contact->created_at->format('M d, Y') }}</td>
                        <td>
                            <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-sm btn-info text-white">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
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
                        <td colspan="5" class="text-center text-muted py-4">No messages yet</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@if($contacts->hasPages())
    <div class="d-flex justify-content-center mt-4">
        {{ $contacts->links() }}
    </div>
@endif
@endsection
