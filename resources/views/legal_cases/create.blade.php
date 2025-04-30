@extends('layouts.app')

@section('content')
    <h1>Create Rehabilitation Program</h1>
    <form action="{{ route('rehabilitations.store') }}" method="POST">
        @csrf

        <!-- Prisoner Selection -->
        <div class="form-group">
            <label for="prisoner_id">Prisoner</label>
            <select name="prisoner_id" id="prisoner_id" class="form-control" required>
                @foreach ($prisoners as $prisoner)
                    <option value="{{ $prisoner->id }}">{{ $prisoner->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Program Name -->
        <div class="form-group">
            <label for="program_name">Program Name</label>
            <input type="text" name="program_name" class="form-control" required>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <!-- Is Completed -->
        <div class="form-group">
            <label for="is_completed">Completed?</label>
            <select name="is_completed" class="form-control" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
