@extends('layouts.main_layout')

@section('title', 'Animal & Zones')

@section('content')
    <div class="hero" style="background-image: url('{{ asset('images/about.jpg') }}');">
        <div>
            <h1 style="font-size: 48px; color: white; margin-bottom: 20px;">Animal & Zones</h1>
            <p style="font-size: 20px; color: white; max-width: 600px; margin-bottom: 30px;">
                Discover various animals from around the world in our carefully designed habitat zones: African Savanna,
                Tropical Rainforest, Reptile House, and more!
            </p>
            <a href="{{ route('pengunjung.checkout-page') }}" class="get-ticket">Get Ticket</a>
        </div>
    </div>

    <div class="hewan-list" style="padding: 60px 100px; background-color: #f9f9f9;">
        <h2 style="font-size: 36px; margin-bottom: 30px; text-align: center; color: #004400;">Meet Our Animals</h2>

        @if(count($hewans) > 0)
            <div class="grid"
                style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 30px;">
                @foreach ($hewans as $hewan)
                    <div class="card"
                        style="background: white; border-radius: 12px; box-shadow: 0 4px 16px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s ease;">
                        <img src="{{ env('FILE_URL'). $hewan->gambar_hewan }}"
                            alt="{{ $hewan->nama_hewan }}"
                            style="width: 100%; height: 200px; object-fit: cover;">
                        <div style="padding: 15px;">
                            <h3 style="font-size: 20px; color: #222; margin-bottom: 8px;">{{ $hewan->nama_hewan }}</h3>
                            <p style="font-size: 14px; color: #666; margin-bottom: 4px;">
                                <strong>Spesies:</strong> {{ $hewan->spesies }}
                            </p>
                            <p style="font-size: 14px; color: #666;">
                                <strong>Habitat:</strong> {{ $hewan->habitat }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p style="text-align: center; font-size: 18px; color: #666; margin-top: 40px;">
                No animals found.
            </p>
        @endif
    </div>
@endsection
