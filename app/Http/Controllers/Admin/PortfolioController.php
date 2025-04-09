<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        $portfolios = Portfolio::all();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create() {
        return view('admin.portfolios.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Portfolio::create($request->all());
        return redirect()->route('admin.portfolios.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Portfolio $portfolio) {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $portfolio->update($request->all());
        return redirect()->route('admin.portfolios.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Portfolio $portfolio) {
        $portfolio->delete();
        return redirect()->route('admin.portfolios.index')->with('success', 'Data berhasil dihapus');
    }
}
