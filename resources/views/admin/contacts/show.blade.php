@extends('admin.layout')

@section('title', 'View Contact')

@section('content')
<div class="page-header">
    <h1>Contact Message Details</h1>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">From: {{ $contact->name }}</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h6 class="text-muted">Name</h6>
                        <p><strong>{{ $contact->name }}</strong></p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-muted">Email</h6>
                        <p><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                    </div>
                </div>

                <div class="mb-3">
                    <h6 class="text-muted">Message</h6>
                    <p>{{ $contact->message }}</p>
                </div>

                <div class="text-muted small">
                    <p>Received on: {{ $contact->created_at->format('M d, Y H:i A') }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Actions</h5>
            </div>
            <div class="card-body">
                <a href="mailto:{{ $contact->email }}" class="btn btn-primary w-100 mb-2">
                    <i class="fas fa-envelope"></i> Reply
                </a>
                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger w-100">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>

        <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary w-100 mt-3">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>
</div>
@endsection
