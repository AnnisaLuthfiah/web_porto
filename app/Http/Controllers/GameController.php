<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $real = [
            [
                'filename' => 'sertifikat_real.jpg',
                'title' => 'Sertifikat Minecraft Builder Resmi',
                'description' => 'Sertifikat penghargaan untuk [Nama Asli] atas partisipasi dalam event resmi Minecraft Building.',
            ]
        ];

        $oc = [
            [
                'filename' => 'oc1.jpg',
                'title' => 'Karya OC - Istana Awan',
                'description' => 'Bangunan fantasi buatan karakter OC-ku.',
            ],
            [
                'filename' => 'oc2.jpg',
                'title' => 'Render Animasi OC',
                'description' => 'Render animasi cinematic world yang dibuat untuk trailer OC.',
            ],
            [
                'filename' => 'sertifikat_oc.jpg',
                'title' => 'Sertifikat Event OC',
                'description' => 'Sertifikat penghargaan OC dalam event komunitas Minecraft RP.',
            ],
        ];

        return view('game', compact('real', 'oc'));
    }
}
