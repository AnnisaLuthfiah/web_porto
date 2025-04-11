<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi data formulir
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Kirim email (gunakan Mail yang sudah dikonfigurasi di .env)
        try {
            Mail::to('annisaluthfiahrahmah345@gmail.com')->send(new \App\Mail\ContactMail($request->all()));
            return redirect()->route('contact')->with('success', 'Pesan Anda telah dikirim!');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Terjadi kesalahan, pesan tidak dapat dikirim.');
        }
    }
}
