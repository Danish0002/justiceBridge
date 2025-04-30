@extends('layouts.app')

@section('title', 'Rehabilitation')

@section('content')

    <section style="margin-bottom: 40px;">
        <h1 style="font-size: 2.5rem; color: #003366;">Rehabilitation Programs</h1>
        <p style="margin-top: 10px;">
            JusticeBridge empowers undertrial prisoners through education, vocational training, and mental health initiatives.
            Our goal is to support social reintegration and reduce recidivism.
        </p>
    </section>

    <section style="margin-bottom: 40px;">
        <h2 style="font-size: 2rem; color: #0055a5;">Programs Offered</h2>
        <ul style="margin-top: 10px; list-style-type: disc; padding-left: 20px;">
            <li>Literacy and Basic Education Courses</li>
            <li>Skill Development and Vocational Training</li>
            <li>Mental Health Counseling and Support</li>
            <li>Employment Readiness Workshops</li>
        </ul>
    </section>

    <section>
        <a href="/awareness" style="background-color: #0055a5; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
            Know Your Rights
        </a>
    </section>

@endsection
