<?php

namespace App\Http\Controllers;

use App\Models\Project;  // Pastikan menggunakan huruf kapital "App"
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all(); // Mengambil semua proyek dari database
        return view('projects.index', compact('projects')); // Mengirim data proyek ke view
    }

    public function create()
    {
        return view('projects.create'); // Menampilkan form untuk menambah proyek
    }

    public function store(Request $request)
    {
        Project::create($request->all()); // Menyimpan proyek baru ke database
        return redirect()->route('projects.index')->with('success', 'Project berhasil ditambahkan');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project')); // Menampilkan detail proyek
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project')); // Menampilkan form untuk mengedit proyek
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all()); // Mengupdate proyek yang ada
        return redirect()->route('projects.index')->with('success', 'Project berhasil diperbarui');
    }

    public function destroy(Project $project)
    {
        $project->delete(); // Menghapus proyek
        return redirect()->route('projects.index')->with('success', 'Project berhasil dihapus');
    }
}
