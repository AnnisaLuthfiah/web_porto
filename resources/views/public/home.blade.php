@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="text-center mb-4">
    <h1 class="display-5 fw-bold">Selamat Datang di Portofolioku </h1>
    <p class="lead">Ini adalah halaman utama portofolio yang menampilkan informasi umum dan terbaru.</p>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Tentang Website Ini</h5>
          <p class="card-text">
            Website ini dirancang untuk menampilkan portofolio secara profesional dan estetis. Gunakan sidebar untuk menavigasi halaman lain seperti profil, kontak, games, dan blog.
          </p>
          <a href="{{ route('about') }}" class="btn btn-outline-primary">Pelajari Lebih Lanjut</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
