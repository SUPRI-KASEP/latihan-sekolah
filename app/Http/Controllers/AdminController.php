<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Hitung jumlah data untuk dashboard
        $jumlahSiswa = Siswa::count();
        $jumlahGuru = 0; // sementara
        $ekstrakulikuler = 0; // sementara
        $Galeri = 0; // sementara

        return view('admin.dashboard', compact(
            'jumlahSiswa',
            'jumlahGuru',
            'ekstrakulikuler',
            'Galeri'
        ));
    }
}
