@extends('layouts.petugas_layout')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-success fw-bold mb-0">Detail Perawatan</h2>
        <a href="{{ route('petugas.perawatan.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body px-4 py-4">
            <div class="row g-4">
                <!-- Nama Petugas -->
                <div class="col-md-6">
                    <label class="form-label text-muted fw-semibold">Nama Petugas</label>
                    <div class="form-control-plaintext fs-5">
                        {{ $petugas->where('id', $perawatan->id_petugas)->first()->nama_petugas ?? '-' }}
                    </div>
                </div>

                <!-- Nama Hewan -->
                <div class="col-md-6">
                    <label class="form-label text-muted fw-semibold">Nama Hewan</label>
                    <div class="form-control-plaintext fs-5">
                        {{ $hewans->where('id', $perawatan->id_hewan)->first()->nama_hewan ?? '-' }}
                    </div>
                </div>

                <!-- Jenis Perawatan -->
                <div class="col-md-6">
                    <label class="form-label text-muted fw-semibold">Jenis Perawatan</label>
                    <div class="form-control-plaintext fs-5">
                        {{ $perawatan->jenis_perawatan }}
                    </div>
                </div>

                <!-- Jadwal Perawatan -->
                <div class="col-md-6">
                    <label class="form-label text-muted fw-semibold">Jadwal Perawatan</label>
                    <div class="form-control-plaintext fs-5">
                        {{ \Carbon\Carbon::parse($perawatan->jadwal_perawatan)->translatedFormat('l, d F Y - H:i') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
