<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $real = [
            [
                'filename' => 'IMG_20240313_172200 (1).png',
                'title' => 'Sertifikat Pelatihan HTML & CSS',
                'description' => 'Diselesaikan pada Maret 2024.',
            ],
            [
                'filename' => 'E-Certificate - Mey.png',
                'title' => 'Sertifikat Event RRQ Minecraft Season 2',
                'description' => 'Sertifikat Penghargaan dalam event yang diadakan oleh RRQ di dalam game Minecraft, Event Bedwars competitive pada tanggal 18 Juni 2023.',
            ],
            [
                'filename' => 'sertifikat3.png',
                'title' => 'Sertifikat Bootcamp B',
                'description' => 'Diterbitkan oleh Dicoding Academy.',
            ],
            [
                'filename' => 'sertifikat4.png',
                'title' => 'Sertifikat Seminar C',
                'description' => 'Tema: Teknologi AI dan Masa Depan.',
            ],
            [
                'filename' => 'sertifikat5.png',
                'title' => 'Sertifikat Freelance Project',
                'description' => 'Pembuatan Website UMKM 2023.',
            ],
        ];

        $oc = [
            [
                'filename' => 'MeyBackground.png',
                'title' => 'Swargaloka',
                'description' => 'Bangunan fantasi Kastil tempat tinggalnya para dewa dan dewi dalam cerita Roleplay Minecraft Cakrawala Majapahit',
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

        return view('public.games', compact('real', 'oc'));
    }
}
