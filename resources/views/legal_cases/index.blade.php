@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Legal Cases</h1>
        <a href="{{ route('legal-cases.create') }}" class="btn btn-primary mb-3">Add New Case</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Prisoner</th>
                        <th>Case Number</th>
                        <th>Court Name</th>
                        <th>Next Hearing</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cases as $case)
                        <tr>
                            <td>{{ $case->prisoner->name }}</td>
                            <td>{{ $case->case_number }}</td>
                            <td>{{ $case->court_name }}</td>
                            <td>{{ $case->next_hearing_date }}</td>
                            <td>
                                <a href="{{ route('legal-cases.edit', $case->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('legal-cases.destroy', $case->id) }}" method="POST" class="d-inline">
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

        <!-- Visual Section After Table -->
        <section class="prisoner-visual mt-5 p-5 rounded" style="background-color: #f9f9f9;">
            <div class="row align-items-center">
                <!-- Text -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h3 class="fw-bold text-dark">Dignity Behind Bars</h3>
                    <p class="lead">
                        Each case listed above represents a real individual. JusticeBridge is committed to ensuring fair trials,
                        legal support, and rehabilitation for undertrial prisoners across the nation.
                    </p>
                </div>

                <!-- Image -->
                <div class="col-md-6">
                    <img src="cases.jpg" alt="Undertrial Prisoner" class="img-fluid rounded shadow-lg" style="max-height: 400px; object-fit: cover;">
                </div>
            </div>
        </section>
    </div>
@endsection
