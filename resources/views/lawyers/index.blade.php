@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lawyers Directory</h1>

    <a href="{{ route('lawyers.create') }}" class="btn btn-primary mb-3">Add New Lawyer</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Specialization</th>
                    <th>Availability</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($lawyers as $lawyer)
                    <tr>
                        <td>{{ $lawyer->name }}</td>
                        <td>{{ $lawyer->email }}</td>
                        <td>{{ $lawyer->phone }}</td>
                        <td>{{ $lawyer->specialization }}</td>
                        <td>
                            <span class="badge {{ $lawyer->is_available ? 'bg-success' : 'bg-secondary' }}">
                                {{ $lawyer->is_available ? 'Available' : 'Not Available' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('lawyers.edit', $lawyer->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('lawyers.destroy', $lawyer->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure to delete this lawyer?')" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No lawyers found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Visual Info Section -->
    <section class="mt-5 p-5 rounded bg-light">
        <div class="row align-items-center">
            <!-- Text -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="fw-bold text-dark">Supporting Justice Through Advocacy</h3>
                <p class="lead">
                    Lawyers play a crucial role in ensuring justice for undertrial prisoners. This directory makes it easier to connect legal professionals with those who need them most, promoting equity and access to justice.
                </p>
            </div>

            <!-- Image -->
            <div class="col-md-6">
                <img src="lawyer.png" alt="Lawyers working for justice" class="img-fluid rounded shadow" style="max-height: 400px; object-fit: cover;">
            </div>
        </div>
    </section>
</div>
@endsection
