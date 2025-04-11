@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="display-5 fw-bold">Hubungi Kami</h1>
        <p class="lead">Jika Anda memiliki pertanyaan atau ingin berkolaborasi, silakan kirimkan pesan melalui formulir di bawah ini.</p>
    </div>

    @if(session('success'))
    <div id="alert-success" style="background-color: #fce4ec; color: #880e4f; padding: 12px 20px; border-radius: 8px; margin-bottom: 20px; position: relative;">
        {{ session('success') }}
        <button onclick="document.getElementById('alert-success').style.display='none'" 
                style="position: absolute; top: 8px; right: 12px; background: transparent; border: none; color: #880e4f; font-size: 18px; font-weight: bold; cursor: pointer;">
            &times;
        </button>
    </div>
@endif

@if(session('error'))
    <div id="alert-error" style="background-color: #ffebee; color: #c62828; padding: 12px 20px; border-radius: 8px; margin-bottom: 20px; position: relative;">
        {{ session('error') }}
        <button onclick="document.getElementById('alert-error').style.display='none'" 
                style="position: absolute; top: 8px; right: 12px; background: transparent; border: none; color: #c62828; font-size: 18px; font-weight: bold; cursor: pointer;">
            &times;
        </button>
    </div>
@endif

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm" style="border: 1px solid #f8bbd0;">
                <div class="card-body" style="background-color: #fff0f5;">
                    <h5 class="card-title">Formulir Kontak</h5>
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Anda</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Anda</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subjek</label>
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}" required>
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan Anda</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" style="background-color: #f8bbd0; color: white; border: none; padding: 10px 20px; border-radius: 6px;">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
