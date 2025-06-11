@extends('layouts.main_layout')

@section('title', 'Activities')

@section('content')
<div class="hero" style="background-image: url('{{ asset('images/activities.jpg') }}');">
    <div>
        <h1 style="font-size: 48px; color: white; margin-bottom: 20px;">Explore Our Activities</h1>
        <p style="font-size: 20px; color: white; max-width: 600px; margin-bottom: 30px;">
            Enjoy feeding sessions, educational tours, wildlife photography, and more exciting activities at Zoosmart!
        </p>
        <a href="{{route('pengunjung.checkout-page')}}" class="get-ticket">Get Ticket</a>
    </div>
</div>
@endsection
