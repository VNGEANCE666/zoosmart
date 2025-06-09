@extends('layouts.petugas_layout')
@section('content')
    <div class="p-4">
        <div class="d-flex flex-row justify-content-between mb-4 px-2">
            <h1>Lihat Hewan</h1>
            <a href="{{ route('petugas.hewan.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="d-flex flex-column">
            <form method="POST" action="{{route('petugas.hewan.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-6">
                        <label for="nama_hewan">Nama</label>
                        <input type="text" class="form-control" name="nama_hewan" id="nama_hewan" value="{{$hewan->nama_hewan}}" placeholder="Nama Hewan" required disabled>
                    </div>
                    <div class="form-group col-6">
                        <label for="spesies">Spesies</label>
                        <input type="text" class="form-control" name="spesies" id="spesies" value="{{$hewan->spesies}}" placeholder="Spesies Hewan" required disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="habitat">Habitat</label>
                        <input type="text" class="form-control" name="habitat" id="habitat" value="{{$hewan->habitat}}" placeholder="Habitat Hewan" required disabled>
                    </div>
                    <div class="form-group col-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{$hewan->tanggal_lahir}}" placeholder="Tanggal Lahir" required disabled>
                    </div>
                </div>

                <a class="btn btn-secondary" href="{{route('petugas.hewan.index')}}">Kembali</a>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#editor').summernote()
    </script>
@endsection