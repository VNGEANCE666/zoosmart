@extends('layouts.main_layout')

@section('title', 'Animal & Zones')

@section('content')
<div class="hero animal-hero">
    <div class="hero-content">
        <h1>Animal & Zones</h1>
        <p>
            Discover various animals from around the world in our carefully designed habitat zones: African Savanna,
            Tropical Rainforest, Reptile House, and more!
        </p>
        <a href="{{ route('pengunjung.checkout-page') }}" class="get-ticket">Get Ticket</a>
    </div>
</div>

<div class="hewan-list">
    <h2>Meet Our Animals</h2>

    @if(count($hewans) > 0)
        <div class="hewan-grid">
            @foreach ($hewans as $hewan)
                <div class="hewan-card">
                    <img src="{{ env('FILE_URL') . $hewan->gambar_hewan }}" alt="{{ $hewan->nama_hewan }}">
                    <div class="hewan-info">
                        <h3>{{ $hewan->nama_hewan }}</h3>
                        <p><strong>Spesies:</strong> {{ $hewan->spesies }}</p>
                        <p><strong>Habitat:</strong> {{ $hewan->habitat }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="no-animals">No animals found.</p>
    @endif
</div>
@endsection
