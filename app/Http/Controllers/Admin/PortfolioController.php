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
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/portfolios'), $imageName);
            $data['image'] = $imageName;
        }
        
        Portfolio::create($data);

        return redirect()->route('admin.portfolios.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Portfolio $portfolio) {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        $data = $request->all();
    
        if ($request->hasFile('image')) {
            
            if ($portfolio->image && file_exists(public_path('images/portfolios/' . $portfolio->image))) {
                unlink(public_path('images/portfolios/' . $portfolio->image));
            }
    
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/portfolios'), $imageName);
            $data['image'] = $imageName;
        }
    
        $portfolio->update($data);
    
        return redirect()->route('admin.portfolios.index')->with('success', 'Data berhasil diupdate');
    }
    
    public function destroy(Portfolio $portfolio) {
        
        if ($portfolio->image && file_exists(public_path('images/portfolios/' . $portfolio->image))) {
            unlink(public_path('images/portfolios/' . $portfolio->image));
        }
    
        $portfolio->delete();
    
        return redirect()->route('admin.portfolios.index')->with('success', 'Data berhasil dihapus');

    }

    public function show($id)
        {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolios.show', compact('portfolio'));
    }   
}
