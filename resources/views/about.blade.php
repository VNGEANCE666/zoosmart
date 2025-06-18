@extends('layouts.main_layout')

@section('title', 'About Us')

@section('content')
<div class="hero about-hero">
    <div class="hero-content">
        <h1>About <span style="color: #66ff99;">Zoosmart</span></h1>
        <p>
            Zoosmart is dedicated to wildlife conservation, education, and unforgettable experiences for families and nature lovers.
        </p>
        <a href="{{ route('pengunjung.checkout-page') }}" class="get-ticket">Get Ticket</a>
    </div>
</div>

{{-- SECTION: VISI & MISI --}}
<section style="padding: 60px 100px; background-color: #f0fdf4;">
    <h2 style="text-align: center; font-size: 36px; color: #004400; margin-bottom: 40px;">Our Vision & Mission</h2>
    <div style="display: flex; flex-wrap: wrap; gap: 40px; justify-content: center;">
        <div style="flex: 1 1 300px; background: white; padding: 20px; border-radius: 12px; box-shadow: 0 4px 16px rgba(0,0,0,0.1);">
            <h3 style="color: #006600;">Vision</h3>
            <p style="color: #555;">To become a leading zoo in Indonesia that inspires people to care for biodiversity through education and meaningful experiences.</p>
        </div>
        <div style="flex: 1 1 300px; background: white; padding: 20px; border-radius: 12px; box-shadow: 0 4px 16px rgba(0,0,0,0.1);">
            <h3 style="color: #006600;">Mission</h3>
            <ul style="padding-left: 20px; color: #555;">
                <li>Protect endangered species through sustainable breeding programs.</li>
                <li>Promote awareness of wildlife conservation to the public.</li>
                <li>Create educational experiences that are fun and impactful.</li>
            </ul>
        </div>
    </div>
</section>

{{-- SECTION: HIGHLIGHT FEATURE --}}
<section style="background-color: #e6ffe6; padding: 60px 100px;">
    <h2 style="text-align: center; font-size: 36px; color: #004400; margin-bottom: 40px;">Why Visit Zoosmart?</h2>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">

        {{-- Educational Programs --}}
        <a href="#education" style="text-decoration: none;">
            <div style="flex: 1 1 250px; background: white; padding: 25px; border-radius: 12px; text-align: center; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.1);" 
                 onmouseover="this.style.transform='scale(1.05)'"
                 onmouseout="this.style.transform='scale(1)'">
                <img src="{{ asset('images/icon-education.png') }}" alt="Education" style="width: 60px; margin-bottom: 15px;">
                <h4 style="color: #006600;">Educational Programs</h4>
                <p style="color: #555;">Fun learning for students, families, and nature enthusiasts.</p>
            </div>
        </a>

        {{-- Wildlife Conservation --}}
        <a href="#conservation" style="text-decoration: none;">
            <div style="flex: 1 1 250px; background: white; padding: 25px; border-radius: 12px; text-align: center; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.1);" 
                 onmouseover="this.style.transform='scale(1.05)'"
                 onmouseout="this.style.transform='scale(1)'">
                <img src="{{ asset('images/icon-conservation.png') }}" alt="Conservation" style="width: 60px; margin-bottom: 15px;">
                <h4 style="color: #006600;">Wildlife Conservation</h4>
                <p style="color: #555;">Actively involved in saving endangered species.</p>
            </div>
        </a>

        {{-- Family Friendly --}}
        <a href="#family" style="text-decoration: none;">
            <div style="flex: 1 1 250px; background: white; padding: 25px; border-radius: 12px; text-align: center; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.1);" 
                 onmouseover="this.style.transform='scale(1.05)'"
                 onmouseout="this.style.transform='scale(1)'">
                <img src="{{ asset('images/icon-family.png') }}" alt="Family Friendly" style="width: 60px; margin-bottom: 15px;">
                <h4 style="color: #006600;">Family Friendly</h4>
                <p style="color: #555;">A safe and joyful environment for visitors of all ages.</p>
            </div>
        </a>
    </div>
</section>

@endsection
