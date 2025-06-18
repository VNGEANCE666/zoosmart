@extends('layouts.main_layout')

@section('title', 'Activities')

@section('content')
{{-- HERO WITH VIDEO BACKGROUND --}}
<div class="hero activities-hero" style="position: relative; height: 100vh; overflow: hidden;">
    <video autoplay muted loop playsinline style="position: absolute; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
        <source src="{{ asset('videos/zoo-activity.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="hero-content" style="position: relative; z-index: 1; text-align: center; padding: 80px 20px; color: white;">
        <h1>Explore Our Activities</h1>
        <p>Enjoy feeding sessions, educational tours, wildlife photography, and more exciting activities at Zoosmart!</p>
        <a href="{{ route('pengunjung.checkout-page') }}" class="get-ticket">Get Ticket</a>
        <br><br>
    </div>
</div>

{{-- ACTIVITIES SECTION --}}
<section style="padding: 60px 100px; background-color: #f9f9f9;">
    <h2 style="text-align: center; font-size: 36px; color: #004400; margin-bottom: 40px;">What You Can Do</h2>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
        @php
            $activities = [
                ['img' => 'feed-icon.png', 'title' => 'Animal Feeding', 'desc' => 'Join scheduled feeding times with zookeepers and learn about animal diets.'],
                ['img' => 'tour-icon.png', 'title' => 'Guided Tours', 'desc' => 'Explore the zoo with expert guides and uncover fascinating animal facts.'],
                ['img' => 'photo-icon.png', 'title' => 'Wildlife Photography', 'desc' => 'Capture your favorite animals in action with your camera or smartphone.'],
                ['img' => 'kidszone-icon.png', 'title' => 'Kids Zone', 'desc' => 'Enjoy fun games, safe play areas, and learning activities for young explorers.']
            ];
        @endphp

        @foreach($activities as $activity)
        <div style="flex: 1 1 260px; background: white; padding: 20px; border-radius: 12px; text-align: center; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            <img src="{{ asset('images/' . $activity['img']) }}" alt="{{ $activity['title'] }}" style="width: 60px; margin-bottom: 10px;">
            <h4 style="color: #006600;">{{ $activity['title'] }}</h4>
            <p style="color: #555;">{{ $activity['desc'] }}</p>
        </div>
        @endforeach
    </div>
</section>

{{-- CTA SECTION --}}
<section style="padding: 50px 100px; background-color: #e6ffe6; text-align: center;">
    <h2 style="font-size: 32px; color: #004400; margin-bottom: 20px;">Ready to Join the Fun?</h2>
    <p style="font-size: 18px; color: #555; margin-bottom: 30px;">
        All activities are included in your entry ticket. Book now and create unforgettable memories!
    </p>
    <a href="{{ route('pengunjung.checkout-page') }}" class="get-ticket" style="font-size: 18px;">Get Your Ticket</a>
</section>
@endsection
