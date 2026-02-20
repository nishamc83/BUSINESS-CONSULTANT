@extends('admin.layout')

@section('title', 'View Consultation')

@section('content')
<div class="page-header">
    <h1>Consultation Details</h1>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">{{ $consultation->name }}'s Consultation</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h6 class="text-muted">Name</h6>
                        <p><strong>{{ $consultation->name }}</strong></p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-muted">Email</h6>
                        <p><a href="mailto:{{ $consultation->email }}">{{ $consultation->email }}</a></p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <h6 class="text-muted">Date</h6>
                        <p>{{ $consultation->date }}</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-muted">Service</h6>
                        <p>{{ $consultation->service }}</p>
                    </div>
                </div>

                <div class="mb-3">
                    <h6 class="text-muted">Message</h6>
                    <p>{{ $consultation->message }}</p>
                </div>

                <div class="text-muted small">
                    <p>Submitted on: {{ $consultation->created_at->format('M d, Y H:i A') }}</p>
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
                <a href="mailto:{{ $consultation->email }}" class="btn btn-primary w-100 mb-2">
                    <i class="fas fa-envelope"></i> Send Email
                </a>
                <form action="{{ route('admin.consultations.destroy', $consultation) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this consultation?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger w-100">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>

        <a href="{{ route('admin.consultations.index') }}" class="btn btn-secondary w-100 mt-3">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>
</div>
@endsection
