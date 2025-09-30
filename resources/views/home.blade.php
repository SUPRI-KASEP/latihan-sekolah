@extends('layout.app')

@section('title', 'Home')

@section('content')
  <div id="home" class="bg-light py-5">
    <div class="container text-center">
      <!-- Judul dan Deskripsi -->
      <div class="mb-4">
        <h1 class="display-4 fw-bold mb-3">Selamat Datang di Website Kami</h1>
        <p class="lead text-secondary">
          Bergabunglah dengan kami untuk perjalanan pendidikan yang luar biasa!
          Jangan lewatkan kesempatan untuk berkembang bersama sekolah terbaik.
        </p>
      </div>

      <!-- Gambar -->
      <div class="d-flex justify-content-center">
        <img
          src="/assets/image/BackGround.jpg"
          alt="SMPN1 Padakembang"
          class="img-fluid rounded shadow-lg"
          style="max-width: 600px;"
        >
      </div>
    </div>
  </div>
@endsection
