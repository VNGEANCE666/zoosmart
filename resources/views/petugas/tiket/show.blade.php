@extends('layouts.petugas_layout')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary fw-bold mb-0">Detail Tiket</h2>
        <a href="{{ route('petugas.tiket.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body px-4 py-4">
            <div class="row g-4">
                <!-- Jumlah Orang -->
                <div class="col-md-6">
                    <label class="form-label text-muted fw-semibold">Jumlah Orang</label>
                    <div class="form-control-plaintext fs-5">
                        {{ $tiket->jumlah_orang }}
                    </div>
                </div>

                <!-- Harga Tiket -->
                <div class="col-md-6">
                    <label class="form-label text-muted fw-semibold">Harga Tiket</label>
                    <div class="form-control-plaintext fs-5">
                        Rp {{ number_format($tiket->harga, 0, ',', '.') }}
                    </div>
                </div>

                <!-- Tanggal Kunjungan -->
                <div class="col-md-12">
                    <label class="form-label text-muted fw-semibold">Tanggal Kunjungan</label>
                    <div class="form-control-plaintext fs-5">
                        {{ \Carbon\Carbon::parse($tiket->tanggal_kunjungan)->translatedFormat('l, d F Y') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
