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

{{-- Contact Info Section --}}
<section style="display: flex; flex-wrap: wrap; justify-content: center; padding: 60px 100px; background-color: #f0f8f5;">
    <div style="flex: 1 1 400px; padding: 20px;">
        <h2 style="font-size: 28px; color: #2E7D32; margin-bottom: 20px;">📞 Get In Touch</h2>
        <p style="font-size: 16px; color: #333; line-height: 1.8;">
            <strong style="color: #00695C;">Email:</strong><br> 
            <a href="mailto:info@zoosmart.com" style="color: #0288D1; text-decoration: none;">info@zoosmart.com</a><br><br>

            <strong style="color: #00695C;">Phone:</strong><br> 
            <a href="tel:+624567890" style="color: #0288D1; text-decoration: none;">+62-456-7890</a><br><br>

            <strong style="color: #00695C;">Address:</strong><br> 
            <span style="color: #5D4037;">Prospekt Sizova, 34/18, St Petersburg, Rusia, 198329</span>
        </p>
    </div>

    <div style="flex: 1 1 400px; padding: 20px;">
        <h2 style="font-size: 28px; color: #004400; margin-bottom: 20px;">📍 Our Location</h2>
        <div style="width: 100%; height: 300px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1993.925307710625!2d30.274720176792886!3d60.016312974954275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696342f97ad5055%3A0xecbcaef87d961a36!2sZooSmart!5e0!3m2!1sid!2sid!4v1750040558704!5m2!1sid!2sid"
                width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section style="background-color: #e6ffe6; padding: 40px 100px; text-align: center;">
    <h2 style="color: #004400; font-size: 28px; margin-bottom: 10px;">Still Curious?</h2>
    <p style="font-size: 16px; color: #555; margin-bottom: 20px;">
        Don’t hesitate to send us your questions, feedback, or suggestions. Zoosmart is here for you!
    </p>
    <a href="{{ route('pengunjung.checkout-page') }}" class="get-ticket">Get Your Ticket</a>
</section>
@endsection
