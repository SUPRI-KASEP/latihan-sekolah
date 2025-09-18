@extends('layout.app')

@section('title','Dashboard')

@section('content')
<div class="container-fluid py-4">
    <!-- Header -->
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">Dashboard</h1>
        <p class="text-muted">Selamat datang 👋</p>
    </div>

    <!-- Statistik Cards -->
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-4 hover-card">
                <div class="card-body text-center">
                    <h5 class="card-title text-muted">Siswa</h5>
                    <h2 class="fw-bold text-primary">320</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-4 hover-card">
                <div class="card-body text-center">
                    <h5 class="card-title text-muted">Guru</h5>
                    <h2 class="fw-bold text-success">45</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-4 hover-card">
                <div class="card-body text-center">
                    <h5 class="card-title text-muted">Kegiatan</h5>
                    <h2 class="fw-bold text-warning">12</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-4 hover-card">
                <div class="card-body text-center">
                    <h5 class="card-title text-muted">Pengumuman</h5>
                    <h2 class="fw-bold text-danger">5</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart & Kegiatan -->
    <div class="row mt-5 g-4">
        <!-- Chart -->
        <div class="col-md-8">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <h5 class="card-title mb-4">Statistik Kehadiran</h5>
                    <canvas id="chartSiswa" height="100"></canvas>
                </div>
            </div>
        </div>

        <!-- Kegiatan -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <h5 class="card-title mb-4">Kegiatan Terbaru</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">🏆 Lomba Futsal antar kelas</li>
                        <li class="list-group-item">📚 Kegiatan Literasi</li>
                        <li class="list-group-item">🎤 Pentas Seni</li>
                        <li class="list-group-item">🌱 Program Go Green</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('chartSiswa');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','Mei','Jun'],
            datasets: [{
                label: 'Kehadiran',
                data: [95, 90, 92, 97, 93, 96],
                borderColor: '#3b82f6',
                backgroundColor: 'rgba(59,130,246,0.2)',
                tension: 0.4,
                fill: true,
                borderWidth: 2,
                pointBackgroundColor: '#2563eb',
                pointRadius: 5
            }]
        }
    });
</script>

<!-- Extra Styling -->
<style>
    .hover-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
</style>
@endsection
