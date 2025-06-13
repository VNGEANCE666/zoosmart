@extends('layouts.main_layout')

@section('title', 'About Us')

@section('content')
<div class="hero about-hero">
    <div class="hero-content">
        <h1>About Zoosmart</h1>
        <p>
            Zoosmart is dedicated to wildlife conservation, education, and unforgettable experiences for families and nature lovers.
        </p>
        <a href="{{ route('pengunjung.checkout-page') }}" class="get-ticket">Get Ticket</a>
    </div>
</div>
@endsection
