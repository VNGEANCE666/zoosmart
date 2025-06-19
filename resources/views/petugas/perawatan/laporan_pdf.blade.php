laporan_pdf.blade.php
<!DOCTYPE html>
<html>
<head>
    <title>Laporan Perawatan</title>
</head>
<body>
    <h2>Laporan Perawatan</h2>
    <table border="1" cellspacing="0" cellpadding="8" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Petugas</th>
                <th>Hewan</th>
                <th>Jenis</th>
                <th>Jadwal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($perawatans as $no => $p)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $p->petugas->nama_petugas }}</td>
                <td>{{ $p->hewan->nama_hewan }}</td>
                <td>{{ $p->jenis_perawatan }}</td>
                <td>{{ \Carbon\Carbon::parse($p->jadwal_perawatan)->translatedFormat('d M Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
edit.blade.php
@extends('layouts.petugas_layout')
@section('content')
    <div class="p-4">
        <div class="d-flex flex-row justify-content-between mb-4 px-2">
            <h1>Ubah Perawatan</h1>
            <a href="{{ route('petugas.perawatan.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="d-flex flex-column">
            <form method="POST" action="{{ route('petugas.perawatan.update', $perawatan->id) }}">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="form-group col-6">
                        <label for="id_petugas">Nama Petugas</label>
                        <select name="id_petugas" class="form-control" required>
                            @foreach ($petugas as $p)
                                <option value="{{ $p->id }}" <?php $p->id == $perawatan->id_petugas ? "{{selected}}" : null ?> >{{ $p->nama_petugas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="id_hewan">Nama Hewan</label>
                        <select name="id_hewan" class="form-control" required>
                            @foreach ($hewans as $hewan)
                                <option value="{{ $hewan->id }}" <?php $hewan->id == $perawatan->id_petugas ? "{{selected}}" : null ?>>{{ $hewan->nama_hewan }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="jenis_perawatan">Jenis Perawatan</label>
                        <select name="jenis_perawatan" class="form-control" required>
                            <option disabled selected>-- Pilih Jenis Perawatan --</option>
                            <option value="membersihkan kandang">Membersihkan Kandang</option>
                            <option value="memberi makan">Memberi Makan</option>
                            <option value="memandikan">Memandikan</option>
                            <option value="cek kesehatan">Cek Kesehatan</option>
                            <option value="perbaiki kandang">Perbaiki Kandang</option>
                        </select>
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="jadwal_perawatan">Jadwal Perawatan</label>
                        <input type="datetime-local" class="form-control" name="jadwal_perawatan" id="jadwal_perawatan" value="{{$perawatan->jadwal_perawatan}}"
                            placeholder="Jadwal Perawatan" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-warning">Edit</button>
            </form>
        </div>
    </div>
@endsection
