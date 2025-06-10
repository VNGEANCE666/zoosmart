<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{asset('main.css')}}">
</head>

<body>
    <nav>
        <div class="logo">Zoo<span>SMART</span></div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{route('activities')}}">Activities</a></li>
            <li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="{{route('contact')}}">Contact Us</a></li>
            <li><a href="{{route('animal')}}">Animal & Zones</a></li>
        </ul>
        <a href="login.html" class="login-btn">Login</a>
    </nav>

    @yield('content')

    <footer>
        © 2025 - {{env('APP_NAME')}}. All rights reserved. Address Address
    </footer>

</body>

</html>
