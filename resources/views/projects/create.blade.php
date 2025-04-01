<!-- resources/views/projects/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Proyek Baru</h1>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama Proyek</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
