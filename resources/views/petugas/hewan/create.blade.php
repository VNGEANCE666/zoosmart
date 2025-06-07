@extends('layouts.petugas_layout')
@section('content')
    <div class="p-4">
        <div class="d-flex flex-row justify-content-between mb-4 px-2">
            <h1>Tambah Hewan</h1>
            <a href="{{ route('petugas.hewan.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="d-flex flex-column">
            <form method="POST" action="{{route('petugas.hewan.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-12">
                        <label for="title">Nama</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Nama Fasilitas" required>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="image">Foto</label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="Foto Guru" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#editor').summernote()
    </script>
@endsection