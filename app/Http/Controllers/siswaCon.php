<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class siswaCon extends Controller
{
    public function index()
    {
        // cukup tampilkan daftar siswa
        $siswa = Siswa::all();
        return view('admin.datasiswa', compact('siswa'));
    }

    public function create()
    {
        return view('admin.siswa_create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama'          => 'required|string|max:100',
            'kelas'         => 'required|string|max:50',
            'nisn'          => 'required|string|max:20|unique:siswas,nisn',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat'        => 'required|string',
            'tanggal_lahir' => 'required|date',
        ]);

        Siswa::create($validate);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan');
    }

    public function edit($id) {
        $siswa = Siswa::findOrFail($id);
        return view('admin.siswa_edit', compact('siswa'));
    }

    public function update(Request $request, $id) {
        $validate = $request->validate([
            'nama'          => 'required|string|max:100',
            'kelas'         => 'required|string|max:50',
            'nisn'          => 'required|string|max:20|unique:siswas,nisn,' . $id,
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat'        => 'required|string',
            'tanggal_lahir' => 'required|date',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($validate);

        return redirect()->route('siswa.index')->with('Succes', 'Data siswa berhasil diperbarui');
    }

    public function destroy($id){

        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('Succes', 'Data siswa berhasil dihapus');
    }
}
