@extends('layouts.petugas_layout')

@section('content')
<div class="container mt-4">
    <div class="row">   
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Penjualan</div>
                <div class="card-body">
                    <h5 class="card-title">Rp {{number_format($total_pembelian, 2, ",", ".")}}</h5>
                    <p class="card-text">Total penjualan bulan ini.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Total Hewan</div>
                <div class="card-body">
                    <h5 class="card-title">{{$total_hewan}} Ekor</h5>
                    <p class="card-text">Jumlah hewan yang tersedia.</p>
                </div>
            </div>
        </div>

        <!-- Card Total Perawatan -->
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Total Perawatan</div>
                <div class="card-body">
                    <h5 class="card-title">{{$total_perawatan}} Perawatan</h5>
                    <p class="card-text">Total perawatan yang telah dilakukan.</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
