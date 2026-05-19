<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori_list = [
            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],
            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku tentang pengelolaan database',
                'jumlah_buku' => 15
            ],
            [
                'id' => 3,
                'nama' => 'Web Design',
                'deskripsi' => 'Buku desain tampilan website',
                'jumlah_buku' => 18
            ],
            [
                'id' => 4,
                'nama' => 'Networking',
                'deskripsi' => 'Buku jaringan komputer',
                'jumlah_buku' => 10
            ],
            [
                'id' => 5,
                'nama' => 'Data Science',
                'deskripsi' => 'Buku analisis data dan machine learning',
                'jumlah_buku' => 12
            ],
        ];

        return view('kategori.index', compact('kategori_list'));
    }

    public function show($id)
    {
        $kategori_list = [
            1 => [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],
            2 => [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku tentang pengelolaan database',
                'jumlah_buku' => 15
            ],
            3 => [
                'id' => 3,
                'nama' => 'Web Design',
                'deskripsi' => 'Buku desain tampilan website',
                'jumlah_buku' => 18
            ],
            4 => [
                'id' => 4,
                'nama' => 'Networking',
                'deskripsi' => 'Buku jaringan komputer',
                'jumlah_buku' => 10
            ],
            5 => [
                'id' => 5,
                'nama' => 'Data Science',
                'deskripsi' => 'Buku analisis data dan machine learning',
                'jumlah_buku' => 12
            ],
        ];

        $buku_per_kategori = [
            1 => [
                ['judul' => 'Laravel untuk Pemula', 'pengarang' => 'Budi Raharjo', 'tahun' => 2024],
                ['judul' => 'PHP Modern', 'pengarang' => 'Andi Nugroho', 'tahun' => 2023],
                ['judul' => 'JavaScript Dasar', 'pengarang' => 'Rina Wijaya', 'tahun' => 2024],
            ],
            2 => [
                ['judul' => 'MySQL Database', 'pengarang' => 'Siti Aminah', 'tahun' => 2023],
                ['judul' => 'PostgreSQL Dasar', 'pengarang' => 'Dedi Santoso', 'tahun' => 2024],
            ],
            3 => [
                ['judul' => 'Modern Web Design', 'pengarang' => 'Ahmad Yani', 'tahun' => 2024],
                ['judul' => 'UI/UX Dasar', 'pengarang' => 'Dewi Lestari', 'tahun' => 2023],
            ],
            4 => [
                ['judul' => 'Network Security', 'pengarang' => 'Robert Johnson', 'tahun' => 2023],
                ['judul' => 'Dasar Jaringan Komputer', 'pengarang' => 'Andi Wijaya', 'tahun' => 2022],
            ],
            5 => [
                ['judul' => 'Data Science dengan Python', 'pengarang' => 'Siti Nurhaliza', 'tahun' => 2024],
                ['judul' => 'Machine Learning Dasar', 'pengarang' => 'Sarah Anderson', 'tahun' => 2023],
            ],
        ];

        if (!isset($kategori_list[$id])) {
            abort(404, 'Kategori tidak ditemukan');
        }

        $kategori = $kategori_list[$id];
        $buku_list = $buku_per_kategori[$id];

        return view('kategori.show', compact('kategori', 'buku_list'));
    }

    public function search($keyword)
    {
        $kategori_list = [
            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],
            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku tentang pengelolaan database',
                'jumlah_buku' => 15
            ],
            [
                'id' => 3,
                'nama' => 'Web Design',
                'deskripsi' => 'Buku desain tampilan website',
                'jumlah_buku' => 18
            ],
            [
                'id' => 4,
                'nama' => 'Networking',
                'deskripsi' => 'Buku jaringan komputer',
                'jumlah_buku' => 10
            ],
            [
                'id' => 5,
                'nama' => 'Data Science',
                'deskripsi' => 'Buku analisis data dan machine learning',
                'jumlah_buku' => 12
            ],
        ];

        $hasil = array_filter($kategori_list, function ($kategori) use ($keyword) {
            return stripos($kategori['nama'], $keyword) !== false ||
                   stripos($kategori['deskripsi'], $keyword) !== false;
        });

        return view('kategori.search', compact('hasil', 'keyword'));
    }
}