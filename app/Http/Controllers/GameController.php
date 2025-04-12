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
                'filename' => 'sertifikat_rrq_minetourn_mey.png',
                'title' => 'Sertifikat Event RRQ Minecraft Season 3',
                'description' => 'Sertifikat Penghargaan dalam event yang diadakan oleh RRQ di dalam game Minecraft, Event Bedwars competitive pada tanggal 7 Oktober 2023.',
            ],
            [
                'filename' => 'Sertifikat_RRQ_Minetourn_S4_-_Annisa_Luthfiah_page-0001.jpg',
                'title' => 'Sertifikat Event RRQ Minecraft Season 4',
                'description' => 'Sertifikat Penghargaan dalam event yang diadakan oleh RRQ di dalam game Minecraft, Event Bedwars competitive pada tanggal 24 Desember 2023.',
            ],
            [
                'filename' => 'Piagam_Penghargaan_-_annisa_page-0001.jpg',
                'title' => 'Sertifikat Museum Khatulistitwa',
                'description' => 'Sertifikat Penghargaan dari Biennale Jogja, karena telah berkontribusi dalam projek Minecraft kesenian Museum Khatulisitwa pada tanggal 15 November 2021.',
            ],
        ];

        $oc = [
            [
                'filename' => 'MeyBackground.png',
                'title' => 'Swargaloka',
                'description' => 'Bangunan fantasi Kastil, tempat tinggalnya para dewa dan dewi dalam cerita Roleplay Minecraft Cakrawala Majapahit',
            ],
            [
                'filename' => 'Organic__Mey_.png',
                'title' => 'Halloween Building',
                'description' => 'Bangunan fantasi dengan tema halloween.',
            ],
            [
                'filename' => '16939826_enlarged-1.jpg',
                'title' => 'Spawn Lobby Minecraft RRQ Season 4.',
                'description' => 'Bangunan Spawn lobby kastil dalam event tournament bedwars RRQ season 4.',
            ],
            [
                'filename' => 'Hari_ibu.png',
                'title' => 'Ibu dan Anak',
                'description' => 'Bangunan  Anak yang sedang pamitan dengan ibunya di dapur.',
            ],
            [
                'filename' => 'unknown-38.png',
                'title' => 'Cyberpunk Building',
                'description' => 'Bangunan dengan tema Masa depan (Cyberpunk).',
            ],
            [
                'filename' => '17605206_enlarged-1.jpg',
                'title' => 'Spawn Lobby Server WaduhSMP',
                'description' => 'bangunan Spawn lobby yang dipakai dalam server WaduhSMP dengan tema pokemon.',
            ],
            [
                'filename' => '15348010_enlarged-1.jpg',
                'title' => 'Painter Organic',
                'description' => 'bangunan anak kecil yang suka melukis.',
            ],
            [
                'filename' => '17213306_thumb-1.jpg',
                'title' => 'CRAFTABLE HOUSE 2',
                'description' => 'Komisi building Marketplace di Minecraft Bedrock yang dibuat oleh Firegames.',
            ],
            [
                'filename' => '16918662_thumb-1.jpg',
                'title' => 'Milionailre World',
                'description' => 'Komisi building Marketplace di Minecraft Bedrock yang dibuat oleh Firegames.',
            ],
        ];

        return view('public.games', compact('real', 'oc'));
    }
}
