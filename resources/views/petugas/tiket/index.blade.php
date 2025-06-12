@extends('layouts.petugas_layout')
@section('content')
    <div class="p-4">
        <div class="d-flex flex-row justify-content-between mb-4 px-2">
            <h1>Tiket</h1>
            <a href="{{ route('petugas.tiket.create') }}" class="btn btn-primary btn-md">Tambah Data</a>
        </div>
        <div class="d-flex flex-column">
            <table class="table table-striped" id="datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jumlah Orang</th>
                        <th scope="col">Tanggal Kunjungan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 0;
                    @endphp
                    @foreach ($tikets as $tiket)
                        <tr>
                            <th scope="row">{{ ++$no }}</th>
                            <td>{{ $tiket->jumlah_orang }}</td>
                            <td>{{ $tiket->tanggal_kunjungan }}</td>
                            <td>Rp{{ number_format($tiket->harga, 2, ",", ".") }}</td>
                            <td>
                                <a href="{{ route('petugas.tiket.show', $tiket->id) }}" class="btn btn-success">Lihat</a>
                                <a href="{{ route('petugas.tiket.edit', $tiket->id) }}" class="btn btn-warning" {{sizeof($tiket->pembelian) > 0 ? "disabled" : null}}>Edit</a>
                                <form action="{{ route('petugas.tiket.destroy', $tiket->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" {{sizeof($tiket->pembelian) > 0 ? "disabled" : null}}>Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection