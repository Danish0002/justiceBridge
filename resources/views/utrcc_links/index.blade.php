@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">UTRCC Links</h1>

    <a href="{{ route('utrcc-links.create') }}" class="btn btn-success mb-3">Add New Link</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Prisoner Name</th>
                    <th>Lawyer Name</th>
                    <th>Assigned Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($utrccLinks as $link)
                    <tr>
                        <td>{{ $link->id }}</td>
                        <td>{{ $link->prisoner->name ?? 'N/A' }}</td>
                        <td>{{ $link->lawyer->name ?? 'N/A' }}</td>
                        <td>{{ $link->assigned_date }}</td>
                        <td>
                            <a href="{{ route('utrcc-links.edit', $link->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('utrcc-links.destroy', $link->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No links found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Visual Enhancement Section -->
    <section class="mt-5 p-5 rounded" style="background-color: #f8f9fa;">
        <div class="row align-items-center">
            <!-- Text -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="fw-bold text-dark">Building Bridges to Justice</h3>
                <p class="lead">
                    The UTRCC system fosters critical connections between prisoners and legal advocates,
                    helping ensure no one faces the justice system alone.
                    With timely assignments and transparent tracking, we empower legal support at scale.
                </p>
            </div>

            <!-- Image -->
            <div class="col-md-6">
                <img src="utrcc.jpg" alt="Lawyer-Prisoner Connection" class="img-fluid rounded shadow" style="max-height: 400px; object-fit: cover;">
            </div>
        </div>
    </section>
</div>
@endsection
