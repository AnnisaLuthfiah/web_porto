<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $mode = session('about_mode', 'real');
        return view('public.about', compact('mode'));
    }

    public function toggle(Request $request)
    {
        $current = session('about_mode', 'real');
        $new = $current === 'real' ? 'oc' : 'real';
        session(['about_mode' => $new]);

        return redirect()->route('about');
    }
}
