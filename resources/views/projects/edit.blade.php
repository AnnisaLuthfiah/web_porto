<!-- resources/views/projects/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Proyek</h1>

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Proyek</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
