@extends('layouts.petugas_layout')

@section('content')
<style>
    .dashboard-section-title {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
        color: #2196f3;
        letter-spacing: 1px;
    }
    .dashboard-card {
        border-radius: 18px;
        transition: box-shadow 0.2s;
        box-shadow: 0 2px 8px rgba(33,150,243,0.07);
    }
    .dashboard-card:hover {
        box-shadow: 0 6px 24px rgba(33,150,243,0.18);
        transform: translateY(-2px) scale(1.01);
    }
    .dashboard-metric {
        font-size: 2.1rem;
        font-weight: 700;
        margin-bottom: 0.2rem;
    }
    .dashboard-label {
        font-size: 1rem;
        font-weight: 500;
        opacity: 0.8;
    }
    .chart-container {
        min-height: 320px;
        padding: 1.5rem 1rem 1rem 1rem;
    }
    @media (max-width: 767px) {
        .dashboard-metric { font-size: 1.3rem; }
        .dashboard-section-title { font-size: 1.1rem; }
        .chart-container { min-height: 220px; }
    }
</style>
<div class="container py-5">
    <h2 class="mb-4 text-center fw-bold text-success">Dashboard Petugas</h2>

    <div class="dashboard-section-title text-center mb-4">Statistik Utama</div>
    <div class="row g-4 justify-content-center mb-5">
        <!-- Total Penjualan -->
        <div class="col-md-6 col-lg-4">
            <div class="card dashboard-card h-100 shadow-sm border-0" style="background: linear-gradient(135deg, #2196f3, #21cbf3); color: white;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <div class="dashboard-label text-uppercase">Total Penjualan</div>
                            <div class="dashboard-metric">Rp {{ number_format($total_pembelian, 2, ",", ".") }}</div>
                        </div>
                        <i class="bi bi-cash-coin display-5"></i>
                    </div>
                    <p class="mb-0">Total penjualan tiket bulan ini.</p>
                </div>
            </div>
        </div>
        <!-- Total Hewan -->
        <div class="col-md-6 col-lg-4">
            <div class="card dashboard-card h-100 shadow-sm border-0" style="background: linear-gradient(135deg, #43a047, #66bb6a); color: white;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <div class="dashboard-label text-uppercase">Total Hewan</div>
                            <div class="dashboard-metric">{{ $total_hewan }} Ekor</div>
                        </div>
                        <i class="bi bi-emoji-smile display-5"></i>
                    </div>
                    <p class="mb-0">Jumlah hewan yang tersedia di kebun binatang.</p>
                </div>
            </div>
        </div>
        <!-- Total Perawatan -->
        <div class="col-md-6 col-lg-4">
            <div class="card dashboard-card h-100 shadow-sm border-0" style="background: linear-gradient(135deg, #ffb300, #ffca28); color: #333;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <div class="dashboard-label text-uppercase">Total Perawatan</div>
                            <div class="dashboard-metric">{{ $total_perawatan }}</div>
                        </div>
                        <i class="bi bi-heart-pulse display-5"></i>
                    </div>
                    <p class="mb-0">Total sesi perawatan hewan yang telah dilakukan.</p>
                </div>
            </div>
        </div>

    </div>

    <div class="dashboard-section-title text-center mb-4">Visualisasi Data</div>
    <div class="row g-4">
        <div class="col-md-12 mb-4">
            <div class="card dashboard-card shadow-sm">
                <div class="card-header fw-bold bg-white border-0 pb-0">Statistik Mingguan (Bar Chart)</div>
                <div class="card-body chart-container">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Chart.js CDN --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Bar Chart: Pengunjung, Penjualan, Perawatan per hari (dummy data)
    const barCtx = document.getElementById('barChart').getContext('2d');
    new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: [
                'Sen, 24 Jun', 'Sel, 25 Jun', 'Rab, 26 Jun', 'Kam, 27 Jun', 'Jum, 28 Jun', 'Sab, 29 Jun', 'Min, 30 Jun'
            ],
            datasets: [
                {
                    label: 'Pengunjung',
                    data: [10, 14, 12, 18, 20, 16, 19],
                    backgroundColor: 'rgba(142, 36, 170, 0.7)',
                    borderColor: 'rgba(142, 36, 170, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Penjualan',
                    data: [100000, 120000, 90000, 150000, 170000, 110000, 160000],
                    backgroundColor: 'rgba(33, 150, 243, 0.7)',
                    borderColor: 'rgba(33, 150, 243, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Perawatan',
                    data: [2, 3, 1, 4, 2, 3, 2],
                    backgroundColor: 'rgba(255, 179, 0, 0.7)',
                    borderColor: 'rgba(255, 179, 0, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
@endsection