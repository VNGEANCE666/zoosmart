<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Zoosmart')</title>
  <link rel="stylesheet" href="{{ asset('main.css') }}" />
</head>
<body>
  <header>
    <div class="logo">Zoo<span>SMART</span></div>
    <nav>
      <ul>
        <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('activities') }}" class="{{ Request::is('activities') ? 'active' : '' }}">Activities</a></li>
        <li><a href="{{ route('about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About us</a></li>
        <li><a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact Us</a></li>
        <li><a href="{{ route('animal') }}" class="{{ Request::is('animal') ? 'active' : '' }}">Animal & Zones</a></li>
      </ul>
    </nav>
    <a href="{{ route('auth.login-page') }}" class="login-btn">Login</a>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    © 2025 - Zoosmart. All rights reserved. Address Address
  </footer>
</body>
</html>
