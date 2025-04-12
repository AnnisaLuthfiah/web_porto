@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <h2 class="mb-4 fw-bold">Admin Dashboard</h2>

  <div class="row g-4">
    <div class="col-md-4">
      <div class="card shadow-sm border-0">
        <div class="card-body text-center">
          <i class="bi bi-award fs-1 text-primary mb-3"></i>
          <h5 class="card-title">Kelola Sertifikat</h5>
          <p class="card-text">Tambah, ubah, atau hapus data sertifikat.</p>
          <a href="{{ route('portfolio.index', ['filter' => 'certificate']) }}" class="btn btn-outline-primary">Lihat Data</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm border-0">
        <div class="card-body text-center">
          <i class="bi bi-controller fs-1 text-success mb-3"></i>
          <h5 class="card-title">Kelola Karya OC</h5>
          <p class="card-text">Atur karya original character kamu di sini.</p>
          <a href="{{ route('portfolio.index', ['filter' => 'oc']) }}" class="btn btn-outline-success">Lihat Data</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm border-0">
        <div class="card-body text-center">
          <i class="bi bi-plus-circle fs-1 text-danger mb-3"></i>
          <h5 class="card-title">Tambah Portfolio</h5>
          <p class="card-text">Masukkan data baru ke daftar portofolio.</p>
          <a href="{{ route('portfolio.create') }}" class="btn btn-outline-danger">Tambah Baru</a>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center mt-4">
    <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Kembali ke Halaman Publik</a>
  </div>
</div>
@endsection
