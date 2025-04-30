@extends('layouts.app')

@section('content')
    <h1>Prisoners</h1>
    <a href="{{ route('prisoners.create') }}" class="btn btn-primary">Add New Prisoner</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Case Details</th>
                <th>Prison Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prisoners as $prisoner)
                <tr>
                    <td>{{ $prisoner->name }}</td>
                    <td>{{ $prisoner->gender }}</td>
                    <td>{{ $prisoner->age }}</td>
                    <td>{{ $prisoner->case_details }}</td>
                    <td>{{ $prisoner->prison_name }}</td>
                    <td>
                        <a href="{{ route('prisoners.edit', $prisoner->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('prisoners.destroy', $prisoner->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



<!-- Visual Section with prisoner.jpg -->
<section class="prisoner-visual my-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Text -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h3 class="text-dark fw-bold">Humanizing Justice</h3>
        <p class="lead">
          Behind every statistic is a human story. JusticeBridge strives to ensure that every undertrial prisoner is treated with dignity, provided legal aid, and offered a path to rehabilitation.
        </p>
      </div>

      <!-- Image -->
      <div class="col-md-6">
        <img src="/prisoner.png" alt="Undertrial Prisoner" class="img-fluid rounded shadow-lg" style="max-height: 400px; object-fit: cover;">
      </div>
    </div>
  </div>
</section>

@endsection
