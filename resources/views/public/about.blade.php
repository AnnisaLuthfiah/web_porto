@extends('layouts.app')

@section('content')
<div class="container py-5" data-aos="fade-up">
    <!-- TOGGLE MODE BUTTON -->
    <div class="text-end mb-3">
        <form action="{{ route('about.toggle') }}" method="POST">
            @csrf
            <button class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-arrow-left-right"></i> Ubah ke {{ $mode === 'real' ? 'OC' : 'Real' }} Mode
            </button>
        </form>
    </div>

    @if($mode === 'real')
    <!-- MODE: REAL LIFE PROFILE -->
    <div class="text-center mb-5">
        <img src="https://via.placeholder.com/150" alt="Foto Profil" class="rounded-circle shadow" width="150" height="150">
        <h2 class="mt-3">Annisa</h2>
        <p class="text-muted">New Web Developer | Graphic Designer</p>
    </div>

    <!-- Tentang Saya -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card shadow-sm" data-aos="fade-up">
                <div class="card-body">
                    <h5 class="card-title">Tentang Saya</h5>
                    <p class="card-text">
                        Halo! Saya adalah seorang pengembang web yang baru dan bersemangat dengan untuk membuat web dengan desain yang bersih dan pengalaman pengguna yang baik.
                        Saya suka mempelajari hal baru dan membangun sesuatu yang berdampak.
                    </p>
                    <p class="card-text">
                        Saya memulai perjalanan saya di dunia teknologi sejak sekolah menengah, dan saya terus mengembangkan diri dalam bidang pengembangan web, desain UI/UX, dan visual digital.
                        Saya percaya bahwa setiap orang memiliki cerita unik, dan saya senang bisa berbagi sedikit cerita saya dengan kalian.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Diri + Keahlian -->
    <div class="row g-4 mb-4">
        <div class="col-md-6" data-aos="fade-right">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Data Diri</h5>
                    <ul class="list-unstyled">
                        <li><strong>Nama:</strong> Annisa Luthfiah Rahmah</li>
                        <li><strong>Umur:</strong> 19 Tahun</li>
                        <li><strong>Tempat & Tanggal Lahir:</strong> Makassar, 9 November 2005</li>
                        <li><strong>Alamat:</strong> Jalan Terusan Danau Maninjau Barat IV, B3 I17, Sawojajar, Malang.</li>
                        <li><strong>Email:</strong> emailkamu@example.com</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6" data-aos="fade-left">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Keahlian</h5>
                    <ul>
                        <li>HTML, CSS, JavaScript</li>
                        <li>Laravel & PHP</li>
                        <li>UI/UX Design</li>
                        <li>Canva, Figma</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Hobi + Perjalanan -->
    <div class="row g-4">
        <div class="col-md-6" data-aos="fade-up">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Hobi</h5>
                    <ul>
                        <li>Menggambar</li>
                        <li>Mendengarkan Musik</li>
                        <li>Bermain Game</li>
                        <li>Menulis Cerita</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6" data-aos="fade-up">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Perjalanan Saya</h5>
                    <p class="card-text">
                        Saya memiliki pengalaman dalam membangun website sederhana, mengelola tampilan antarmuka menggunakan Figma, serta membuat desain sosial media dan presentasi interaktif.
                        Saya terus mencari cara untuk mengembangkan kemampuan saya dan menciptakan sesuatu yang bermakna.
                    </p>
                </div>
            </div>
        </div>
    </div>

    @else
    <!-- MODE: OC PROFILE -->
    <div class="text-center mb-5">
        <img src="https://via.placeholder.com/150/ff69b4/000000?text=OC" alt="Foto OC" class="rounded-circle shadow" width="150" height="150">
        <h2 class="mt-3">Nixie</h2>
        <p class="text-muted">Cyber Sorceress | Guardian of the Digital Realm</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm" data-aos="fade-up">
                <div class="card-body">
                    <h5 class="card-title">Tentang OC Saya</h5>
                    <p class="card-text">
                        Nixie adalah avatar dunia maya-ku yang hidup dalam ruang digital. Dia menjaga keseimbangan antara data dan emosi, mengendalikan aliran informasi seperti aliran sihir.
                    </p>
                    <p class="card-text">
                        Dengan kekuatan cyber-spell dan semangat untuk melindungi internet yang aman dan ramah, dia adalah representasi dari cita-citaku di dunia maya.
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- CTA -->
    <div class="text-center mt-5">
        <a href="{{ route('portfolio.public') }}" class="btn btn-outline-primary">Kembali ke Halaman Utama</a>
    </div>
</div>
@endsection
