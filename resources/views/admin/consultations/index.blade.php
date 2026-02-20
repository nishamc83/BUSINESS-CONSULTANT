@extends('admin.layout')

@section('title', 'Consultations')

@section('content')
<div class="page-header">
    <h1>Consultations</h1>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Service</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($consultations as $consultation)
                    <tr>
                        <td><strong>{{ $consultation->name }}</strong></td>
                        <td>{{ $consultation->email }}</td>
                        <td>{{ $consultation->date }}</td>
                        <td><small class="text-muted">{{ Str::limit($consultation->service, 30) }}</small></td>
                        <td>
                            <a href="{{ route('admin.consultations.show', $consultation) }}" class="btn btn-sm btn-info text-white">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <form action="{{ route('admin.consultations.destroy', $consultation) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
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
                        <td colspan="5" class="text-center text-muted py-4">No consultations yet</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@if($consultations->hasPages())
    <div class="d-flex justify-content-center mt-4">
        {{ $consultations->links() }}
    </div>
@endif
@endsection
