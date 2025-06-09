@extends('layouts.petugas_layout')
@section('content')
    <div class="p-4">
        <div class="d-flex flex-row justify-content-between mb-4 px-2">
            <h1>Pembelian</h1>
            <a href="{{ route('petugas.pembelian.create') }}" class="btn btn-primary btn-md">Tambah Data</a>
        </div>
        <div class="d-flex flex-column">
            <table class="table table-striped" id="datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Order</th>
                        <th scope="col">Id Tiket</th>
                        <th scope="col">Email Pengunjung</th>
                        <th scope="col">Perwakilan Pengunjung</th>
                        <th scope="col">Status Transaksi</th>
                        <th scope="col">Tanggal Pembelian</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 0;
                    @endphp
                    @foreach ($pembelians as $pembelian)
                        <tr>
                            <th scope="row">{{ ++$no }}</th>
                            <td>{{ $pembelian->order_id }}</td>
                            <td>{{ $pembelian->id_tiket }}</td>
                            <td>{{ $pembelian->pengunjung->email }}</td>
                            <td>{{ $pembelian->pengunjung->nama_pengunjung }}</td>
                            <td>{{ $pembelian->status_transaksi }}</td>
                            <td>{{ $pembelian->tanggal_pembelian }}</td>
                            <td>
                                <a href="{{ route('petugas.pembelian.show', $pembelian->order_id) }}" class="btn btn-success">Lihat</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection