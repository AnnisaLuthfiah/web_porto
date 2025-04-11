@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="text-center mb-4">
    <h1 class="display-5 fw-bold">Portofolio Saya</h1>
    <p class="lead">Berikut adalah kumpulan karya saya, terbagi menjadi dua kategori: Real Project dan Original Character (OC).</p>
  </div>

  <!-- Tab Navigasi -->
  <ul class="nav nav-tabs mb-4 justify-content-center" id="portfolioTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="real-tab" data-bs-toggle="tab" data-bs-target="#real" type="button" role="tab">Real Project</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="oc-tab" data-bs-toggle="tab" data-bs-target="#oc" type="button" role="tab">Original Character</button>
    </li>
  </ul>

  <!-- Konten Tab -->
  <div class="tab-content" id="portfolioTabContent">
    
    <!-- Tab Real -->
    <div class="tab-pane fade show active" id="real" role="tabpanel">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <!-- Real Project 1 -->
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/real1.jpg') }}" class="card-img-top" alt="Real Project 1">
            <div class="card-body">
              <h5 class="card-title">Website UMKM</h5>
              <p class="card-text">Proyek desain dan pengembangan website untuk usaha kecil menengah berbasis Laravel dan Bootstrap.</p>
            </div>
          </div>
        </div>
        
        <!-- Real Project 2 -->
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/real2.jpg') }}" class="card-img-top" alt="Real Project 2">
            <div class="card-body">
              <h5 class="card-title">Desain Poster Digital</h5>
              <p class="card-text">Pembuatan desain visual untuk kampanye edukasi remaja mengenai literasi digital dan bullying.</p>
            </div>
          </div>
        </div>

        <!-- Tambahkan real lainnya jika ada -->
      </div>
    </div>

    <!-- Tab OC -->
    <div class="tab-pane fade" id="oc" role="tabpanel">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <!-- OC 1 -->
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/oc1.jpg') }}" class="card-img-top" alt="Sekar Maharani">
            <div class="card-body">
              <h5 class="card-title">Sekar Maharani</h5>
              <p class="card-text">Karakter utama dalam roleplay SMA Gemilang. Memiliki latar belakang penuh perjuangan dan semangat untuk melindungi orang yang ia sayang.</p>
            </div>
          </div>
        </div>

        <!-- OC 2 -->
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/oc2.jpg') }}" class="card-img-top" alt="Nana Kartasasmita">
            <div class="card-body">
              <h5 class="card-title">Nana Kartasasmita</h5>
              <p class="card-text">Karakter OC yang menjadi sahabat dekat sekaligus “adik” angkat Sekar. Selalu tampil ceria tapi menyimpan rasa terluka karena bullying di sekolah.</p>
            </div>
          </div>
        </div>

        <!-- Tambahkan OC lainnya jika ada -->
      </div>
    </div>
  </div>
</div>

<style>
  .nav-tabs .nav-link {
    color: #c74375;
    font-weight: 500;
  }

  .nav-tabs .nav-link.active {
    background-color: #c74375;
    color: white;
  }

  .card-img-top {
    object-fit: cover;
    height: 250px;
  }
</style>
@endsection
