@extends('layouts.app')

@section('content')
    <!-- Copy the Hero Section, Portfolio Grid, About, Contact, etc. here from the original index.html -->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Avatar Image-->
            <img class="masthead-avatar mb-5" src="{{ asset('assets/img/avatar.png') }}" alt="..." />
            <!-- Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Your Name</h1>
            <!-- Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Web Developer - Designer - Freelancer</p>
        </div>
    </header>

    <!-- Add more sections like Portfolio, About, Contact as needed -->
@endsection

