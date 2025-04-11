<!-- resources/views/projects/form.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ isset($project) ? 'Edit' : 'Add New' }} Project</h1>

    <form method="POST" action="{{ isset($project) ? route('projects.update', $project) : route('projects.store') }}">
        @csrf
        @if(isset($project))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $project->title ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $project->description ?? '' }}</textarea>
        </div>

        <div class="mb-3">
            <label>Link</label>
            <input type="url" name="link" class="form-control" value="{{ $project->link ?? '' }}">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
