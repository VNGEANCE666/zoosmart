@extends('layouts.petugas_layout')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-success fw-bold">Detail & Edit Hewan</h2>
        <a href="{{ route('petugas.hewan.index') }}" class="btn btn-outline-secondary">← Kembali</a>
    </div>

    <form method="POST" action="{{ route('petugas.hewan.update', $hewan->id) }}" enctype="multipart/form-data" class="p-4 shadow-sm bg-white rounded">
        @csrf
        @method('PATCH')
        
        <div class="row g-4 align-items-center">
            <!-- Gambar Hewan -->
            <div class="col-md-4 text-center">
                <img src="{{ env('FILE_URL') . $hewan->gambar_hewan }}" alt="Gambar Hewan" class="img-fluid rounded shadow-sm" style="max-height: 250px; object-fit: cover;">
            </div>

            <!-- Form Data Hewan -->
            <div class="col-md-8">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="nama_hewan" class="form-label fw-semibold">Nama Hewan</label>
                        <input type="text" class="form-control" id="nama_hewan" name="nama_hewan" value="{{ $hewan->nama_hewan }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="spesies" class="form-label fw-semibold">Spesies</label>
                        <input type="text" class="form-control" id="spesies" name="spesies" value="{{ $hewan->spesies }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="habitat" class="form-label fw-semibold">Habitat</label>
                        <input type="text" class="form-control" id="habitat" name="habitat" value="{{ $hewan->habitat }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="tanggal_lahir" class="form-label fw-semibold">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $hewan->tanggal_lahir }}" required>
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
