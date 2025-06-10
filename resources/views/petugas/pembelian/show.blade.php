@extends('layouts.petugas_layout')
@section('content')
    <div class="p-4">
        <div class="d-flex flex-row justify-content-between mb-4 px-2">
            <h1>Lihat Pembelian</h1>
        </div>
        <div class="d-flex flex-column">
            <form method="POST" action="{{route('petugas.pembelian.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-6">
                        <label for="ordder_id">Order Id</label>
                        <input type="text" class="form-control" name="ordder_id" id="ordder_id" value="{{$pembelian->order_id}}" placeholder="Order Id" required disabled>
                    </div>
                    <div class="form-group col-6">
                        <label for="status_transaksi">Status Transaksi</label>
                        <input type="text" class="form-control" name="status_transaksi" id="status_transaksi" value="{{$pembelian->status_transaksi}}" placeholder="Status Transaksi" required disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="email">Email Pengunjung</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{$pembelian->pengunjung->email}}" placeholder="Email Pengunjung" required disabled>
                    </div>
                    <div class="form-group col-6">
                        <label for="spesies">Nama Pengunjung</label>
                        <input type="text" class="form-control" name="spesies" id="spesies" value="{{$pembelian->pengunjung->nama_pengunjung}}" placeholder="Nama Pengunjung" required disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <div class="form-group col-12">
                        <label for="tanggal_pembelian">Tanggal Pembelian</label>
                        <input type="datetime-local" class="form-control" name="tanggal_pembelian" id="tanggal_pembelian" value="{{$pembelian->tanggal_pembelian}}" placeholder="Nama Pengunjung" required disabled>
                    </div>
                    </div>
                </div>
                <a class="btn btn-secondary" href="{{route('petugas.pembelian.index')}}">Kembali</a>
            </form>
        </div>
    </div>
@endsection