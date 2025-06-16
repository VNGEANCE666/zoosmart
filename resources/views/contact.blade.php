@extends('layouts.main_layout')

@section('title', 'Contact')

@section('content')
    <div class="hero contact-hero">
        <div class="hero-content">
            <h1>Contact Us</h1>
            <p>
                Have questions or want to know more? Get in touch with Zoosmart for ticket info, group visits, or special events!
            </p>
            <a href="{{ route('pengunjung.checkout-page') }}" class="get-ticket">Get Ticket</a>
        </div>
    </div>

    <div class="contact-section">
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1993.925307710625!2d30.274720176792886!3d60.016312974954275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696342f97ad5055%3A0xecbcaef87d961a36!2sZooSmart!5e0!3m2!1sid!2sid!4v1750040558704!5m2!1sid!2sid"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p>
                Email: <a href="mailto:info@zoosmart.com">info@zoosmart.com</a> <br>
                Phone: <a href="tel:+624567890">+62-456-7890</a> <br>
                Address: Bogor, West Java
            </p>
        </div>
    </div>
@endsection
