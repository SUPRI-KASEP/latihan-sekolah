<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'SMPN1 Padakembang')</title>

  <!-- Fonts & Bootstrap -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #f1f5f9;
    }

    .content {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.7); /* hitam transparan */
        padding: 70px;
        border-radius: 15px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        color: white;
        width: 80%;
        margin: auto;
    }

    .img-transparan {
        width: 100%;
        max-width: 400px;
        border-radius: 12px;
        opacity: 0.7; /* atur sesuai kebutuhan */
    }



    /* Sidebar */
    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: #1E293B;
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      flex-direction: column;
      padding: 20px;
      box-sizing: border-box;
      transition: all 0.3s ease;
    }

    .sidebar h2 {
      color: white;
      text-align: center;
      margin-bottom: 30px;
      font-weight: 600;
      font-size: 1.4rem;
      line-height: 1.3;
      word-wrap: break-word;
    }

    .sidebar a {
      color: white;
      padding: 12px 15px;
      text-decoration: none;
      font-size: 16px;
      border-radius: 8px;
      margin: 5px 0;
      transition: background 0.3s;
    }

    .sidebar a:hover {
      background: #334155;
    }

    .sidebar a.active {
      background: #f59e0b;
      color: #000;
      font-weight: bold;
    }

    /* Toggle button */
    .toggle-btn {
      display: none;
      font-size: 28px;
      color: #1E293B;
      position: fixed;
      top: 15px;
      left: 15px;
      cursor: pointer;
      z-index: 1000;
    }

    /* Main wrapper (content + footer) */
    .main-wrapper {
      margin-left: 250px;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .main-content {
      flex: 1; /* Biar footer selalu di bawah */
      padding: 30px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .sidebar {
        left: -250px;
      }

      .sidebar.active {
        left: 0;
      }

      .toggle-btn {
        display: block;
      }

      .main-wrapper {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>
  <!-- Toggle button for mobile -->
  <span class="toggle-btn" onclick="toggleSidebar()">&#9776;</span>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <h2>SMPN1 Padakembang</h2>
    <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a>
    <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'active' : '' }}">Login</a>
    <hr style="border-color:#475569;">
    <a href="#">Berita</a>
    <a href="#">Galeri</a>
    <a href="#">Ekstrakulikuler</a>
    <a href="#">Profil Sekolah</a>
  </div>

  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <!-- Content -->
    <div class="main-content">
      @yield('content')
    </div>

    <!-- Footer -->
    @include('layout.footer')
  </div>

  <script>
    function toggleSidebar() {
      document.getElementById('sidebar').classList.toggle('active');
    }
  </script>
</body>
</html>
