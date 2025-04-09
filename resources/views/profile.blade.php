@extends('layouts.app')

@section('content')
<div class="py-5" data-aos="fade-up">
    <div class="text-center mb-5">
        <img src="https://via.placeholder.com/150" alt="Foto Profil" class="rounded-circle shadow" width="150" height="150">
        <h2 class="mt-3">Annisa</h2>
        <p class="text-muted">New Web Developer | Graphic Designer</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6" data-aos="fade-right">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Tentang Saya</h5>
                    <p class="card-text">
                        Halo! Saya adalah seorang pengembang web yang baru dan bersemangat dengan untuk membuat web dengan desain yang bersih dan pengalaman pengguna yang baik.
                        Saya suka mempelajari hal baru dan membangun sesuatu yang berdampak.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6" data-aos="fade-left">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Data Diri</h5>
                    <ul class="list-unstyled">
                        <li><strong>Nama:</strong> Annisa Luthfiah Rahmah</li>
                        <li><strong>Umur:</strong> 19 Tahun</li>
                        <li><strong>Tempat & Tanggal lahir:</strong> Makassar, 9 November 2005</li>
                        <li><strong>Alamat:</strong> Jalan Terusan Danau Maninjau Barat IV, B3 I17, Sawojajar, Malang.</li>
                        <li><strong>Email:</strong> emailkamu@example.com</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6" data-aos="fade-up">
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
    </div>
</div>
@endsection
