@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="page-header">
    <div>
        <h1>Dashboard</h1>
        <p class="text-muted">Welcome to your admin panel</p>
    </div>
</div>

<div class="row">
    <div class="col-md-3 mb-4">
        <div class="stat-card">
            <i class="fas fa-blog" style="font-size: 2rem; color: #3498db;"></i>
            <h3>{{ $blogsCount }}</h3>
            <p>Blog Posts</p>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="stat-card">
            <i class="fas fa-calendar-alt" style="font-size: 2rem; color: #27ae60;"></i>
            <h3>{{ $consultationsCount }}</h3>
            <p>Consultations</p>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="stat-card">
            <i class="fas fa-envelope" style="font-size: 2rem; color: #e74c3c;"></i>
            <h3>{{ $contactsCount }}</h3>
            <p>Contact Messages</p>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="stat-card">
            <i class="fas fa-star" style="font-size: 2rem; color: #f39c12;"></i>
            <h3>{{ $testimonials->count() }}</h3>
            <p>Testimonials</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Recent Consultations</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Service</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentConsultations as $consultation)
                            <tr>
                                <td>{{ $consultation->name }}</td>
                                <td>{{ $consultation->date }}</td>
                                <td><small class="text-muted">{{ Str::limit($consultation->service, 20) }}</small></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center text-muted py-3">No consultations yet</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-white">
                <a href="{{ route('admin.consultations.index') }}" class="text-decoration-none">View all →</a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Recent Contact Messages</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentContacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="text-center text-muted py-3">No messages yet</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-white">
                <a href="{{ route('admin.contacts.index') }}" class="text-decoration-none">View all →</a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Recent Testimonials</h5>
    </div>
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Review</th>
                </tr>
            </thead>
            <tbody>
                @forelse($testimonials as $testimonial)
                    <tr>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->company }}</td>
                        <td><small class="text-muted">{{ Str::limit($testimonial->review, 50) }}</small></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-muted py-3">No testimonials yet</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer bg-white">
        <a href="{{ route('admin.testimonials.index') }}" class="text-decoration-none">View all →</a>
    </div>
</div>
@endsection
