@extends('layouts.petugas_layout')
@section('content')
    <div class="p-4">
        <div class="d-flex flex-row justify-content-between mb-4 px-2">
            <h1>Hewan</h1>
            <a href="{{ route('petugas.hewan.create') }}" class="btn btn-success btn-md">Tambah Data</a>
        </div>
        <div class="d-flex flex-column">
            <table class="table table-striped" id="datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Spesies</th>
                        <th scope="col">Habitat</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 0;
                    @endphp
                    @foreach ($hewans as $hewan)
                        <tr>
                            <th scope="row">{{ ++$no }}</th>
                            <td>{{ $hewan->nama_hewan }}</td>
                            <td>{{ $hewan->spesies }}</td>
                            <td>{{ $hewan->habitat }}</td>
                            <td>{{ $hewan->tanggal_lahir }}</td>
                            <td>
                                <a href="{{ route('petugas.hewan.show', $hewan->id) }}" class="btn btn-success">Lihat</a>
                                <a href="{{ route('petugas.hewan.edit', $hewan->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('petugas.hewan.destroy', $hewan->id) }}" method="POST"
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