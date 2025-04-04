<!-- resources/views/projects/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Proyek</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Tambah Proyek Baru</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Proyek</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>
                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
