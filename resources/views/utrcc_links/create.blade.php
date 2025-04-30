@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create UTRCC Link</h1>

    <form action="{{ route('utrcc-links.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="prisoner_id" class="form-label">Prisoner</label>
            <select name="prisoner_id" id="prisoner_id" class="form-select" required>
                <option value="">Select Prisoner</option>
                @foreach($prisoners as $prisoner)
                    <option value="{{ $prisoner->id }}">{{ $prisoner->name }}</option>
                @endforeach
            </select>
            @error('prisoner_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="lawyer_id" class="form-label">Lawyer</label>
            <select name="lawyer_id" id="lawyer_id" class="form-select" required>
                <option value="">Select Lawyer</option>
                @foreach($lawyers as $lawyer)
                    <option value="{{ $lawyer->id }}">{{ $lawyer->name }}</option>
                @endforeach
            </select>
            @error('lawyer_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="assigned_date" class="form-label">Assigned Date</label>
            <input type="date" name="assigned_date" id="assigned_date" class="form-control" required>
            @error('assigned_date')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save Link</button>
    </form>
</div>
@endsection
