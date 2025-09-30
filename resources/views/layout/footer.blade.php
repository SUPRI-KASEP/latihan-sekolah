<footer class="bg-dark text-white mt-5">
  <div class="container py-5">
    <div class="row">

      <!-- Kolom Profil -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">SMPN 1 Padakembang</h5>
        <p class="mb-1"><i class="bi bi-geo-alt-fill me-2"></i>Jl. Pendidikan No. 123, Padakembang</p>
      </div>

      <!-- Kolom Menu -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Menu</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" class="text-white text-decoration-none hover-link">Beranda</a></li>
          <li class="mb-2"><a href="#" class="text-white text-decoration-none hover-link">Login</a></li>
          <li class="mb-2"><a href="#" class="text-white text-decoration-none hover-link">Profil Sekolah</a></li>
        </ul>
      </div>

      <!-- Kolom Kontak -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Kontak</h5>
        <p class="mb-1"><i class="bi bi-envelope-fill me-2"></i>info@smpn1padakembang.sch.id</p>
        <p><i class="bi bi-telephone-fill me-2"></i>(021) 123456</p>
      </div>

    </div>

    <hr class=" border-light border-1">

    <div class="text-center mt-3">
        <small>&copy; {{ date('Y') }} SMPN 1 Padakembang. All rights reserved.</small>
    </div>
  </div>
</footer>

<!-- Tambahkan CSS kecil -->
<style>
  .hover-link:hover {
    color: #0d6efd; /* warna biru Bootstrap saat hover */
    padding-left: 5px;
    transition: 0.3s;
  }
</style>
