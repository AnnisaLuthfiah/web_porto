@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="text-center mb-4">
    <h1 class="display-5 fw-bold">Portofolio Minecraft Building Saya</h1>
    <p class="lead">Ini adalah bagian dari portofolio saya yang berfokus pada proyek-proyek building di Minecraft dan sertifikat yang saya peroleh.</p>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h5 class="card-title">Proyek Minecraft Building</h5>
          <p class="card-text">
            Di sini, saya menunjukkan beberapa proyek Minecraft yang telah saya buat. Setiap proyek merupakan contoh dari keterampilan dan kreativitas saya dalam membangun dunia dalam Minecraft. Berikut adalah beberapa proyek yang telah saya kerjakan:
          </p>

          <!-- Proyek 1 -->
          <h6 class="card-subtitle mb-2 text-muted">Proyek 1: [Nama Proyek]</h6>
          <p>[Deskripsi proyek Minecraft Anda]</p>
          <img src="{{ asset('images/proyek1.jpg') }}" alt="Proyek 1" class="img-fluid mb-3">
          
          <!-- Proyek 2 -->
          <h6 class="card-subtitle mb-2 text-muted">Proyek 2: [Nama Proyek]</h6>
          <p>[Deskripsi proyek Minecraft Anda]</p>
          <img src="{{ asset('images/proyek2.jpg') }}" alt="Proyek 2" class="img-fluid mb-3">

          <!-- Proyek 3 -->
          <h6 class="card-subtitle mb-2 text-muted">Proyek 3: [Nama Proyek]</h6>
          <p>[Deskripsi proyek Minecraft Anda]</p>
          <img src="{{ asset('images/proyek3.jpg') }}" alt="Proyek 3" class="img-fluid mb-3">
          
          <!-- Anda bisa menambahkan lebih banyak proyek sesuai dengan kebutuhan -->

          <h5 class="card-title mt-4">Sertifikat Minecraft Building</h5>
          <p class="card-text">
            Selain proyek yang telah saya kerjakan, saya juga mendapatkan beberapa sertifikat terkait dengan Minecraft building, yang menandakan pengakuan atas keterampilan saya dalam permainan ini.
          </p>

          <!-- Sertifikat -->
          <div class="mb-3">
            <h6>Sertifikat 1: [Nama Sertifikat]</h6>
            <p>[Deskripsi sertifikat atau pelatihan yang diambil]</p>
            <img src="{{ asset('images/sertifikat1.jpg') }}" alt="Sertifikat 1" class="img-fluid">
          </div>

          <div class="mb-3">
            <h6>Sertifikat 2: [Nama Sertifikat]</h6>
            <p>[Deskripsi sertifikat atau pelatihan yang diambil]</p>
            <img src="{{ asset('images/sertifikat2.jpg') }}" alt="Sertifikat 2" class="img-fluid">
          </div>

          <!-- Anda bisa menambahkan lebih banyak sertifikat sesuai dengan kebutuhan -->

          <a href="{{ route('portfolio.public') }}" class="btn btn-outline-primary mt-4">Lihat Portofolio Lainnya</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
