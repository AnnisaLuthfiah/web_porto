<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class PublicPortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('portfolios.public', compact('portfolios'));
    }
}
