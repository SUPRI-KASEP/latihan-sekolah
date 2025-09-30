@extends('admin.template.app')

@section('title', 'Dashboard')

@section('content')
  <h1 style="text-align:center; margin-bottom:30px;">Dashboard</h1>

  <div class="cards">
    <!-- Card Jumlah Siswa -->
    <div class="card siswa">
        <h5>Jumlah Siswa</h5>
        <p>{{ $jumlahSiswa }}</p>
    </div>

    <!-- Card Jumlah Guru -->
    <div class="card guru">
        <h5>Jumlah Guru</h5>
        <p>{{ $jumlahGuru ?? 0 }}</p>
    </div>

    <!-- Card Jumlah Eskul -->
    <div class="card eskul">
        <h5>Jumlah Eskul</h5>
        <p>{{ $ekstrakulikuler ?? 0 }}</p>
    </div>

    <!-- Card Jumlah Galeri -->
    <div class="card galeri">
        <h5>Jumlah Galeri</h5>
        <p>{{ $Galeri ?? 0 }}</p>
    </div>
  </div>
@endsection
