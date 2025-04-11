@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>Detail Portofolio</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="card-title">{{ $portfolio->title }}</h4>
            <p class="card-text">{{ $portfolio->description }}</p>

            @if ($portfolio->image)
                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Gambar Portofolio" class="img-fluid mt-3" style="max-height: 300px;">
            @else
                <p class="text-muted mt-3">Tidak ada gambar</p>
            @endif

            <div class="mt-4">
                <a href="{{ route('admin.portfolios.index') }}" class="btn btn-secondary">Kembali</a>
                <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection
