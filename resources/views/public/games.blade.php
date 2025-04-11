@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="text-center mb-4">
    <h1 class="display-5 fw-bold">Portofolio Saya</h1>
    <p class="lead">Berikut adalah kumpulan Sertifikat dan karya saya.</p>
  </div>

  <!-- Tab Navigasi -->
  <ul class="nav nav-tabs mb-4 justify-content-center" id="portfolioTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="cert-tab" data-bs-toggle="tab" data-bs-target="#cert" type="button" role="tab">
        Sertifikat
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="project-tab" data-bs-toggle="tab" data-bs-target="#project" type="button" role="tab">
        Karyaku
      </button>
    </li>
  </ul>

  <!-- Konten Tab -->
  <div class="tab-content" id="portfolioTabContent">
    
    <!-- Tab Sertifikat -->
    <div class="tab-pane fade show active" id="cert" role="tabpanel">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($real as $item)
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/' . $item['filename']) }}" class="card-img-top img-clickable" alt="{{ $item['title'] }}" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('images/' . $item['filename']) }}">
            <div class="card-body">
              <h5 class="card-title">{{ $item['title'] }}</h5>
              <p class="card-text">{{ $item['description'] }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <!-- Tab Karya -->
    <div class="tab-pane fade" id="project" role="tabpanel">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($oc as $item)
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/' . $item['filename']) }}" class="card-img-top img-clickable" alt="{{ $item['title'] }}" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('images/' . $item['filename']) }}">
            <div class="card-body">
              <h5 class="card-title">{{ $item['title'] }}</h5>
              <p class="card-text">{{ $item['description'] }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<!-- Modal untuk gambar -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0">
      <img id="modalImage" class="w-100 rounded-3 shadow" src="" alt="Zoomed Image">
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
    cursor: zoom-in;
    transition: transform 0.2s ease;
  }

  .card-img-top:hover {
    transform: scale(1.02);
  }
</style>

<script>
  // Event listener untuk gambar yang diklik
  document.addEventListener('DOMContentLoaded', function () {
    const modalImage = document.getElementById('modalImage');
    const imageModal = document.getElementById('imageModal');

    document.querySelectorAll('.img-clickable').forEach(img => {
      img.addEventListener('click', function () {
        modalImage.src = this.getAttribute('data-image');
      });
    });

    // Clear image saat modal ditutup
    imageModal.addEventListener('hidden.bs.modal', function () {
      modalImage.src = '';
    });
  });
</script>
@endsection
