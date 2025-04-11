@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 class="mt-5">Manage Projects</h1>
    <p>This is a brand new standalone page at <code>/manage</code>.</p>

    <!-- Optional: link to your actual CRUD if you want -->
    <a href="{{ route('projects.index') }}" class="btn btn-primary mt-3">Go to Project CRUD</a>
</div>
@endsection
