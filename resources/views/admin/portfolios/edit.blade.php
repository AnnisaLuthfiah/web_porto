@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="card shadow-lg p-4" style="width: 100%; max-width: 600px;">
        <h3 class="text-center mb-4">Edit Portofolio</h3>

        <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Judul Portofolio</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $portfolio->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $portfolio->description }}</textarea>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-success">Update Portofolio</button>
            </div>
        </form>
    </div>
</div>
@endsection
