@extends('layouts.petugas_layout')

@section('content')
<div class="container py-5">
    <h2 class="mb-5 text-center fw-bold text-success">Dashboard Petugas</h2>

    <div class="row g-4 justify-content-center">
        <!-- Total Penjualan -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0" style="background: linear-gradient(135deg, #2196f3, #21cbf3); color: white;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h6 class="text-uppercase fw-semibold">Total Penjualan</h6>
                            <h3 class="fw-bold">Rp {{ number_format($total_pembelian, 2, ",", ".") }}</h3>
                        </div>
                        <i class="bi bi-cash-coin display-5"></i>
                    </div>
                    <p class="mb-0">Total penjualan tiket bulan ini.</p>
                </div>
            </div>
        </div>

        <!-- Total Hewan -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0" style="background: linear-gradient(135deg, #43a047, #66bb6a); color: white;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h6 class="text-uppercase fw-semibold">Total Hewan</h6>
                            <h3 class="fw-bold">{{ $total_hewan }} Ekor</h3>
                        </div>
                        <i class="bi bi-emoji-smile display-5"></i>
                    </div>
                    <p class="mb-0">Jumlah hewan yang tersedia di kebun binatang.</p>
                </div>
            </div>
        </div>

        <!-- Total Perawatan -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0" style="background: linear-gradient(135deg, #ffb300, #ffca28); color: #333;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h6 class="text-uppercase fw-semibold">Total Perawatan</h6>
                            <h3 class="fw-bold">{{ $total_perawatan }}</h3>
                        </div>
                        <i class="bi bi-heart-pulse display-5"></i>
                    </div>
                    <p class="mb-0">Total sesi perawatan hewan yang telah dilakukan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
