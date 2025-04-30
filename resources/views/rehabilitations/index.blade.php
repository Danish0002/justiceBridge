@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Rehabilitation Programs</h1>
    <a href="{{ route('rehabilitations.create') }}" class="btn btn-primary mb-3">Add New Program</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Prisoner</th>
                    <th>Program Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rehabilitations as $rehabilitation)
                    <tr>
                        <td>{{ $rehabilitation->prisoner->name }}</td>
                        <td>{{ $rehabilitation->program_name }}</td>
                        <td>{{ $rehabilitation->description }}</td>
                        <td>{{ $rehabilitation->is_completed ? 'Completed' : 'In Progress' }}</td>
                        <td>
                            <a href="{{ route('rehabilitations.edit', $rehabilitation->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('rehabilitations.destroy', $rehabilitation->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Visual Impact Section -->
    <section class="rehab-impact mt-5 p-5 rounded" style="background-color: #f1f3f5;">
        <div class="row align-items-center">
            <!-- Text -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="fw-bold text-dark">Restoring Purpose</h3>
                <p class="lead">
                    Rehabilitation programs offer a second chance to prisoners, helping them acquire skills, regain confidence,
                    and reintegrate into society. JusticeBridge supports each individual's journey toward positive transformation.
                </p>
            </div>

            <!-- Image -->
            <div class="col-md-6">
                <img src="/rehab.webp" alt="Rehabilitation in Prison" class="img-fluid rounded shadow-lg" style="max-height: 400px; object-fit: cover;">
            </div>
        </div>
    </section>
</div>
@endsection
