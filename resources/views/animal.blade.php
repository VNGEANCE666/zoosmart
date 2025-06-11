@extends('layouts.main_layout')

@section('title', 'Animal & Zones')

@section('content')
    <div class="hero" style="background-image: url('{{ asset('images/animal.jpg') }}');">
        <div>
            <h1 style="font-size: 48px; color: white; margin-bottom: 20px;">Animal & Zones</h1>
            <p style="font-size: 20px; color: white; max-width: 600px; margin-bottom: 30px;">
                Discover various animals from around the world in our carefully designed habitat zones: African Savanna,
                Tropical Rainforest, Reptile House, and more!
            </p>
            <a href="pengunjung.checkout-page" class="get-ticket">Get Ticker</a>
        </div>
    </div>
@endsection
