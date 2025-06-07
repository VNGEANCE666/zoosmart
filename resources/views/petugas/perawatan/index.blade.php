@extends('layouts.petugas_layout')
@section('content')
    <div class="p-4">
        <div class="d-flex flex-row justify-content-between mb-4 px-2">
            <h1>Perawatan</h1>
            <a href="{{ route('petugas.perawatan.create') }}" class="btn btn-primary btn-md">Tambah Data</a>
        </div>
        <div class="d-flex flex-column">
            <table class="table table-striped" id="datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Petugas</th>
                        <th scope="col">Nama Hewan</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Jadwal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 0;
                    @endphp
                    @foreach ($perawatans as $perawatan)
                        <tr>
                            <th scope="row">{{ ++$no }}</th>
                            <td>{{ $perawatan->petugas->nama_petugas }}</td>
                            <td>{{ $perawatan->hewan->nama_hewan }}</td>
                            <td>{{ $perawatan->jenis_perawatan }}</td>
                            <td>{{ $perawatan->jadwal_perawatan }}</td>
                            <td>
                                <a href="{{ route('petugas.perawatan.show', $perawatan->id) }}"
                                    class="btn btn-success">Lihat</a>
                                <a href="{{ route('petugas.perawatan.edit', $perawatan->id) }}"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('petugas.perawatan.destroy', $perawatan->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
