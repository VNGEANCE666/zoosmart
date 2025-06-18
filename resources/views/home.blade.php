@extends('layouts.main_layout')

@section('title', 'Welcome to Zoosmart')

@section('content')



{{-- Hero Section --}}
<div class="hero">
  <div class="hero-content">
    <h1>Welcome to <span style="color: #66ff99;">Zoosmart</span></h1>
    <p>Your adventure with wildlife begins here. Discover, Learn, and Care.</p>
    <a href="{{ route('pengunjung.checkout-page') }}" class="get-ticket">Get Ticket</a>
  </div>
</div>

{{-- Section: Highlights --}}
<section style="padding: 60px 100px; background-color: #f9f9f9;">
  <h2 style="text-align: center; font-size: 36px; color: #004400; margin-bottom: 40px;">Explore Our Zoo</h2>
  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">

    {{-- Card 1 --}}
    <a href="#species" style="text-decoration: none;">
      <div style="flex: 1 1 250px; background: white; padding: 25px; border-radius: 12px; text-align: center; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.1);"
           onmouseover="this.style.transform='scale(1.05)'" 
           onmouseout="this.style.transform='scale(1)'">
        <img src="{{ asset('images/icon-animals.png') }}" alt="Animals" style="width: 60px; margin-bottom: 10px;">
        <h4 style="color: #006600;">Over 200 Species</h4>
        <p style="color: #666;">Meet amazing animals from around the world in natural-style habitats.</p>
      </div>
    </a>

    {{-- Card 2 --}}
    <a href="#learning" style="text-decoration: none;">
      <div style="flex: 1 1 250px; background: white; padding: 25px; border-radius: 12px; text-align: center; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.1);"
           onmouseover="this.style.transform='scale(1.05)'" 
           onmouseout="this.style.transform='scale(1)'">
        <img src="{{ asset('images/icon-learning.png') }}" alt="Learning" style="width: 60px; margin-bottom: 10px;">
        <h4 style="color: #006600;">Interactive Learning</h4>
        <p style="color: #666;">Join guided tours and fun educational activities with experts.</p>
      </div>
    </a>

    {{-- Card 3 --}}
    <a href="#familyzones" style="text-decoration: none;">
      <div style="flex: 1 1 250px; background: white; padding: 25px; border-radius: 12px; text-align: center; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.1);"
           onmouseover="this.style.transform='scale(1.05)'" 
           onmouseout="this.style.transform='scale(1)'">
        <img src="{{ asset('images/icon-playground.png') }}" alt="Playground" style="width: 60px; margin-bottom: 10px;">
        <h4 style="color: #006600;">Family Zones</h4>
        <p style="color: #666;">Kids-friendly zones and picnic areas for the whole family to enjoy.</p>
      </div>
    </a>

  </div>
</section>


{{-- Section: Testimonials --}}
<section style="padding: 60px 100px; background-color: #fffbe6;">
  <h2 style="text-align: center; font-size: 36px; color: #333300; margin-bottom: 40px;">What Visitors Say</h2>
  <div style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center;">
    <div style="flex: 1 1 300px; background: white; padding: 20px; border-left: 5px solid #66cc66; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
      <p style="font-style: italic;">"Sangat menyenangkan! Anak-anak betah di playground dan kami belajar banyak tentang satwa."</p>
      <p style="text-align: right; color: #006600;">– Ayu, Ibu Rumah Tangga</p>
    </div>
    <div style="flex: 1 1 300px; background: white; padding: 20px; border-left: 5px solid #66cc66; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
      <p style="font-style: italic;">"Petugasnya ramah, tempatnya bersih, dan edukasinya sangat bermanfaat. Recommended!"</p>
      <p style="text-align: right; color: #006600;">– Budi, Guru Biologi</p>
    </div>
  </div>
</section>


{{-- Section: Call to Action --}}
<section style="padding: 40px 100px; background-color: #e6ffe6; text-align: center;">
  <h2 style="font-size: 32px; color: #004400; margin-bottom: 20px;">Start Your Journey Today!</h2>
  <p style="font-size: 18px; color: #555; margin-bottom: 30px;">
    Get your tickets online and skip the line. Adventure and learning await you at Zoosmart.
  </p>
  <a href="{{ route('pengunjung.checkout-page') }}" class="get-ticket" style="font-size: 18px;">Get Your Ticket Now</a>
</section>

@endsection
