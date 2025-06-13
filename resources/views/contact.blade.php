@extends('layouts.main_layout')

@section('title', 'Contact')

@section('content')
    <div class="hero contact-hero">
        <div class="hero-content">
            <h1>Contact</h1>
            <p>
                Have questions or want to know more? Get in touch with Zoosmart for ticket info, group visits, or special events!
            </p>
            <a href="{{ route('pengunjung.checkout-page') }}" class="get-ticket">Get Ticket</a>
        </div>
    </div>

    <div class="contact-info" style="padding: 60px 100px; background-color: #f9f9f9;">
        <h2 style="font-size: 36px; text-align: center; color: #004400; margin-bottom: 30px;">Get In Touch</h2>
        <p style="text-align: center; font-size: 18px; color: #666;">
            Email: info@zoosmart.com | Phone: +62-456-7890 | Address: Bogor, West Java
        </p>
    </div>
@endsection
