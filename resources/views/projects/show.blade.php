<!-- resources/views/projects/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Proyek</h1>

    <p><strong>ID:</strong> {{ $project->id }}</p>
    <p><strong>Nama Proyek:</strong> {{ $project->name }}</p>

    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Kembali ke Daftar Proyek</a>
</div>
@endsection
