@extends('layouts.app')

@section('content')
    <h1>Create New Prisoner</h1>
    <form action="{{ route('prisoners.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" name="gender" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="case_details">Case Details</label>
            <textarea name="case_details" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="prison_name">Prison Name</label>
            <input type="text" name="prison_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="arrest_date">Arrest Date</label>
            <input type="date" name="arrest_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
