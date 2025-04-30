@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="dashboard-container">

    {{-- Header Section --}}
    <section class="section card">
        <h1 class="section-title">Undertrial Prisoner Dashboard</h1>
        <p class="section-description">
            Track and monitor the legal status, rehabilitation progress, and rights awareness of undertrial prisoners in real-time.
        </p>
    </section>

    {{-- Statistics Section --}}
    <section class="section card">
        <h2 class="section-subtitle">Statistics</h2>
        <ul class="stats-list">
            <li><strong>Total Undertrial Prisoners:</strong> 1500+</li>
            <li><strong>Prisoners Connected to Lawyers:</strong> 1200+</li>
            <li><strong>Ongoing Rehabilitation Programs:</strong> 45+</li>
            <li><strong>Release Applications Filed:</strong> 300+</li>
        </ul>
    </section>

    {{-- Stats Cards --}}
    <section class="stats-cards">
        <div class="stat-card bg-darkblue">
            <h3>Total Undertrial Prisoners</h3>
            <p class="stat-number">1500+</p>
        </div>

        <div class="stat-card bg-midblue">
            <h3>Connected to Lawyers</h3>
            <p class="stat-number">1200+</p>
        </div>

        <div class="stat-card bg-lightblue">
            <h3>Ongoing Rehabilitation</h3>
            <p class="stat-number">45+</p>
        </div>

        <div class="stat-card bg-skyblue">
            <h3>Release Applications</h3>
            <p class="stat-number">300+</p>
        </div>
    </section>

    {{-- Legal Aid Link --}}
    <section class="section">
        <a href="/legal-aid" class="btn-primary">View Legal Aid</a>
    </section>

</div>

@endsection
