@extends('layouts.main_layout')

@section('title', 'Activities')

@section('content')
<div class="hero activities-hero">
    <div class="hero-content">
        <h1>Explore Our Activities</h1>
        <p>
            Enjoy feeding sessions, educational tours, wildlife photography, and more exciting activities at Zoosmart!
        </p>
        <a href="{{ route('pengunjung.checkout-page') }}" class="get-ticket">Get Ticket</a>
    </div>
</div>
@endsection
