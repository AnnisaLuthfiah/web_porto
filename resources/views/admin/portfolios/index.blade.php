@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Portofolio (Admin)</h2>
        <a href="{{ route('admin.portfolios.create') }}" class="btn btn-success">+ Tambah Portofolio</a>
    </div>

    @if($portfolios->isEmpty())
        <div class="alert alert-info">Belum ada data portofolio.</div>
    @else
    <table class="table table-bordered table-striped shadow-sm">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($portfolios as $portfolio)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $portfolio->title }}</td>
                <td>{{ $portfolio->description }}</td>
                <td>
                    @if ($portfolio->image)
                        <img src="{{ asset('images/portfolios/' . $portfolio->image) }}" alt="image" width="100">
                    @else
                        <span class="text-muted">Tidak ada gambar</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
