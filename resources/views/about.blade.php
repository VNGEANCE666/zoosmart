@extends('layouts.main_layout')

@section('title', 'About Us')

@section('content')
<div class="hero" style="background-image: url('{{ asset('images/about.jpg') }}');">
    <div>
        <h1 style="font-size: 48px; color: white; margin-bottom: 20px;">About Zoosmart</h1>
        <p style="font-size: 20px; color: white; max-width: 600px; margin-bottom: 30px;">
            Zoosmart is dedicated to wildlife conservation, education, and unforgettable experiences for families and nature lovers.
        </p>
        <a href="pengunjung.checkout-page" class="get-ticket">Get Ticker</a>
    </div>
</div>
@endsection
