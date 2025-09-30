<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin Dashboard')</title>
  <style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        display: flex;
        background: #f0f4f8;
        transition: background 0.3s;
    }

    /* Sidebar */
    .sidebar {
        width: 240px;
        min-height: 100vh;
        background: linear-gradient(180deg, #1e293b, #1e3a5f);
        color: white;
        padding: 25px 20px;
        text-align: center;
        box-shadow: 3px 0 15px rgba(0,0,0,0.1);
        transition: all 0.3s;
    }
    .sidebar:hover {
        width: 260px;
    }

    /* Logo */
    .logo img {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        margin-bottom: 10px;
        object-fit: cover;
        border: 3px solid white;
        transition: transform 0.3s;
    }
    .logo img:hover {
        transform: rotate(10deg) scale(1.05);
    }

    .logo h3 {
        margin: 0;
        font-size: 1.2rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        color: #f1f5f9;
    }

    /* Section Title */
    .section-title {
        margin: 25px 0 10px;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        color: #94a3b8;
        text-align: left;
        letter-spacing: 1px;
    }

    /* Sidebar Menu */
    .sidebar a {
        display: block;
        color: #cbd5e1;
        text-decoration: none;
        padding: 12px 15px;
        margin-bottom: 8px;
        border-radius: 8px;
        text-align: left;
        font-weight: 500;
        transition: all 0.3s;
    }
    .sidebar a:hover,
    .sidebar a.active {
        background: linear-gradient(90deg, #2563eb, #3b82f6);
        color: white;
        transform: translateX(5px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    /* Konten */
    .content {
        flex: 1;
        padding: 35px;
        background: radial-gradient(circle at center, #f0f4f8 0%, #136aff 100%);
        min-height: 100vh;
        transition: background 0.5s;
    }

    /* Cards */
    .cards {
        display: flex;
        flex-wrap: wrap;
        gap: 25px;
        justify-content: center;
    }

    .card {
        padding: 25px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        flex: 1 1 220px;
        max-width: 240px;
        color: white;
        transition: all 0.4s;
        background-size: 200% 200%;
    }

    .card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 12px 25px rgba(0,0,0,0.25);
        background-position: right center;
    }

    /* Gradien Cards */
        .card.siswa  { background: radial-gradient(circle at center, #3b82f6 0%, #60a5fa 100%); }
        .card.guru   { background: radial-gradient(circle at center, #22c55e 0%, #4ade80 100%); }
        .card.eskul  { background: radial-gradient(circle at center, #ef4444 0%, #f87171 100%); }
        .card.galeri { background: radial-gradient(circle at center, #06b6d4 0%, #38bdf8 100%); }


    .card h5 {
        margin-bottom: 12px;
        font-weight: 600;
        font-size: 1rem;
    }

    .card p {
        font-size: 2.2rem;
        font-weight: bold;
        margin: 0;
    }

    /* Button */
    .button {
        background-color: #22c55e;
        color: white;
        padding: 8px 16px;
        border-radius: 8px;
        text-decoration: none;
        display: inline-block;
        font-weight: 500;
        transition: all 0.3s;
    }
    .button:hover {
        background-color: #16a34a;
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
</style>

</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Logo + Admin -->
    <div class="logo">
      <img src="{{ asset('storage/Bg.jpg') }}" alt="Logo Sekolah">
      <h3>Admin</h3>
    </div>

    <hr style="border: 0; border-top: 1px solid #c1c5ca">

    <!-- Section Title -->
    <div class="section-title">Features</div>


    <!-- Menu -->
    <a href="{{ route('siswa.index') }}">Daftar Siswa</a>
    <a href="{{ url('/guru') }}" class="{{ request()->is('guru*') ? 'active' : '' }}">Data Guru</a>
    <a href="{{ url('/ekskul') }}" class="{{ request()->is('ekskul*') ? 'active' : '' }}">Ekstrakurikuler</a>
    <a href="{{ url('/galeri') }}" class="{{ request()->is('galeri*') ? 'active' : '' }}">Galeri</a>
    <a href="{{ url('/pengaturan') }}" class="{{ request()->is('pengaturan*') ? 'active' : '' }}">Pengaturan</a>
  </div>

  <!-- Konten -->
  <div class="content">
    @yield('content')
  </div>
</body>
</html>
