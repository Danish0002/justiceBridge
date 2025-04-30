@extends('layouts.app')

@section('title', 'Awareness')

@section('content')

    <section style="margin-bottom: 40px;">
        <h1 style="font-size: 2.5rem; color: #003366;">Know Your Rights</h1>
        <p style="margin-top: 10px;">
            JusticeBridge provides educational resources about the rights of undertrial prisoners (UTPs) under Indian law.
            Knowledge is the first step towards empowerment and justice.
        </p>
    </section>

    <section style="margin-bottom: 40px;">
        <h2 style="font-size: 2rem; color: #0055a5;">Rights of Undertrial Prisoners</h2>
        <ul style="margin-top: 10px; list-style-type: disc; padding-left: 20px;">
            <li>Right to Legal Aid and Representation (Article 39A)</li>
            <li>Right to Speedy Trial (Article 21)</li>
            <li>Right Against Arbitrary Detention</li>
            <li>Right to Reasonable Bail</li>
            <li>Right to Human Dignity and Fair Treatment</li>
        </ul>
    </section>

    <section>
        <a href="/rehabilitation" style="background-color: #0055a5; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
            Explore Rehabilitation
        </a>
    </section>

@endsection
