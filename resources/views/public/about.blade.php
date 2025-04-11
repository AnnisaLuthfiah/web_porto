@extends('layouts.app')

@section('content')
<div class="container py-5" data-aos="fade-up">
    <!-- Toggle Mode -->
    <div class="text-end mb-4">
        <form action="{{ route('about.toggle') }}" method="POST">
            @csrf
            <button class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-arrow-left-right"></i> Ubah ke {{ $mode === 'real' ? 'OC' : 'Real' }} Mode
            </button>
        </form>
    </div>

    @if($mode === 'real')
    {{-- REAL LIFE PROFILE --}}
    <div class="text-center mb-5">
        <img src="{{ asset('images/IMG_20240708_201649.jpg') }}" alt="Foto Profil" class="rounded-circle shadow" width="150" height="150" loading="lazy">
        <h2 class="mt-3">Annisa</h2>
        <p class="text-dark">New Web Developer | Graphic Designer</p>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Tentang Saya</h5>
                    <p>Halo! Saya adalah seorang pengembang web yang baru dan bersemangat dengan untuk membuat web dengan desain yang bersih dan pengalaman pengguna yang baik. Saya suka mempelajari hal baru dan membangun sesuatu yang berdampak.</p>
                    <p>Saya memulai perjalanan saya di dunia teknologi sejak awal masuk kuliah, dan saya terus mengembangkan diri dalam bidang pengembangan web, desain UI/UX, dan visual digital.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-6" data-aos="fade-right">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Data Diri</h5>
                    <ul class="list-unstyled">
                        <li><strong>Nama:</strong> Annisa Luthfiah Rahmah</li>
                        <li><strong>Umur:</strong> 19 Tahun</li>
                        <li><strong>TTL:</strong> Makassar, 9 November 2005</li>
                        <li><strong>Alamat:</strong> Jalan Terusan Danau Maninjau Barat IV B3 I17, Sawojajar, Malang</li>
                        <li><strong>Email:</strong> annisaluthfiahrahmah345@gmail.com</li>
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
                        <li>UI/UX Design (Figma, Canva)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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
                        <li>Mengedit Video</li>
                        <li>Membaca Komik</li>
                        <li>Menonton Film</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6" data-aos="fade-up">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Perjalanan Saya</h5>
                    <p>Saya masih belajar dalam membangun website sederhana, mengelola tampilan antarmuka menggunakan Figma, serta membuat desain UI dan UX untuk presentasi yang interaktif. Motto saya: <em>Jangan takut mencoba hal baru, karena semua hal besar dimulai dari keberanian mencoba.</em></p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 text-center">
        <a href="https://www.instagram.com/annisaluthfiahrahmah" target="_blank" class="btn btn-outline-danger mx-1" title="Instagram">
            <i class="bi bi-instagram"></i>
        </a>
        <a href="https://facebook.com/annisaluthfiahrahmah" target="_blank" class="btn btn-outline-primary mx-1" title="Facebook">
            <i class="bi bi-facebook"></i>
        </a>
    </div>

    @else
    {{-- OC PROFILE --}}
    <div class="text-center mb-5">
        <img src="{{ asset('images/MEMEYY.png') }}" alt="Foto OC" class="rounded-circle shadow" width="150" height="150">
        <h2 class="mt-3">Mey</h2>
        <p class="text-dark">Professional Builder Minecraft | Penjelajah Imajinasi Tanpa Batas</p>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Tentang OC</h5>
                    <p>Mey adalah avatar dunia maya-ku, seorang pelajar SMA yang periang dan ceria. Mey sangat menyukai musik, seni, dan memiliki semangat tinggi menjalani hidupnya. Dia selalu berusaha membawa warna dan inspirasi ke dalam setiap hal yang dia lakukan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-6" data-aos="fade-right">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Data Diri (OC)</h5>
                    <ul class="list-unstyled">
                        <li><strong>Nama OC:</strong> xMeyLight</li>
                        <li><strong>Usia:</strong> 16 Tahun</li>
                        <li><strong>Status:</strong> Pelajar SMA (dunia maya)</li>
                        <li><strong>Asal Dunia:</strong> Digital Realm</li>
                        <li><strong>Motto:</strong> Jangan takut mencoba hal baru, karena semua hal besar dimulai dari keberanian mencoba.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6" data-aos="fade-left">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Keahlian Dunia Maya</h5>
                    <ul>
                        <li>World Edit & GoPaint (Minecraft)</li>
                        <li>Bangunan organik dan fiksi</li>
                        <li>Roleplay & storytelling</li>
                        <li>Voice acting</li>
                        <li>Video & animasi Minecraft</li>
                        <li>Mengedit skin Minecraft</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6" data-aos="fade-up">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Hobi Mey</h5>
                    <ul>
                        <li>Membangun dunia fiksi di Minecraft</li>
                        <li>Mendengarkan lagu</li>
                        <li>Membuat skrip roleplay</li>
                        <li>Menggambar pemandangan</li>
                        <li>Menggunakan shader dan cinematic mods</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6" data-aos="fade-up">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Perjalanan Mey</h5>
                    <p>Mey memulai petualangannya sebagai builder pemula di Minecraft. Seiring waktu, dia menjelajah server kreatif dan membangun dunia cerita, kastil, hingga makhluk fantasi. Mey percaya bahwa imajinasi adalah kekuatan terbesar dalam menciptakan sesuatu yang luar biasa di dunia maya.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 text-center">
        <a href="https://discord.com/Mey/xMeyLight" target="_blank" class="btn btn-outline-secondary mx-1" title="Discord">
            <i class="bi bi-discord"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCg1SV3ZlVn5wzHDQdvGKozw" target="_blank" class="btn btn-outline-danger mx-1" title="YouTube">
            <i class="bi bi-youtube"></i>
        </a>
        <a href="https://www.instagram.com/meybuild" target="_blank" class="btn btn-outline-warning mx-1" title="Instagram OC">
            <i class="bi bi-instagram"></i>
        </a>
        <a href="https://facebook.com/xMeyLight" target="_blank" class="btn btn-outline-primary mx-1" title="Facebook">
            <i class="bi bi-facebook"></i>
        </a>
    </div>
    @endif
</div>
@endsection
