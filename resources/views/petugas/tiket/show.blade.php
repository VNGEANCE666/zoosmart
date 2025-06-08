@extends('layouts.petugas_layout')
@section('content')
    <div class="p-4">
        <div class="d-flex flex-row justify-content-between mb-4 px-2">
            <h1>Lihat Tiket</h1>
        </div>
        <div class="d-flex flex-column">
            <form method="POST" action="{{route('petugas.tiket.update', $tiket->id)}}">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="form-group col-6">
                        <label for="jumlah_orang">Jumlah Orang</label>
                        <input type="number" class="form-control" name="jumlah_orang" id="jumlah_orang" value="{{$tiket->jumlah_orang}}" placeholder="Jumlah Orang" required disabled>
                    </div>
                    <div class="form-group col-6">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" name="harga" id="harga" value="{{$tiket->harga}}" placeholder="Harga Tiket" required disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                        <input type="date" class="form-control" name="tanggal_kunjungan" id="tanggal_kunjungan" value="{{$tiket->tanggal_kunjungan}}" placeholder="Tanggal Kunjungan" required disabled>
                    </div>
                </div>

                <a href="{{route('petugas.tiket.index')}}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#editor').summernote()
    </script>
@endsection