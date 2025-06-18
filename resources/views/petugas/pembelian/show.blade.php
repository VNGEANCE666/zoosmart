@extends('layouts.petugas_layout')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-success fw-bold mb-0">Detail Pembelian</h2>
        <a href="{{ route('petugas.pembelian.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body px-4 py-4">
            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-muted">Order ID</label>
                    <div class="form-control-plaintext fs-5">{{ $pembelian->order_id }}</div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-muted">Status Transaksi</label>
                    <div class="form-control-plaintext fs-5">{{ $pembelian->status_transaksi }}</div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-muted">Email Pengunjung</label>
                    <div class="form-control-plaintext fs-5">{{ $pembelian->pengunjung->email }}</div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-muted">Nama Pengunjung</label>
                    <div class="form-control-plaintext fs-5">{{ $pembelian->pengunjung->nama_pengunjung }}</div>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label fw-semibold text-muted">Tanggal Pembelian</label>
                    <div class="form-control-plaintext fs-5">
                        {{ \Carbon\Carbon::parse($pembelian->tanggal_pembelian)->translatedFormat('l, d F Y - H:i') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
