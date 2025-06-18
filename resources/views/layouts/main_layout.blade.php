<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Zoosmart')</title>
  <link rel="stylesheet" href="{{ asset('main.css') }}" />
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
  
    {{-- Login hanya tampil jika belum login --}}
    @unless(Auth::guard('petugas')->check())
      <a href="{{ route('auth.login-page') }}" class="login-btn" title="Login for Staff Only">Staff Login</a>
    @endunless
  </header>
  

  <main>
    @yield('content')
  </main>

  <footer>
    © 2025 - Zoosmart. All rights reserved. Address Address
  </footer>
</body>
</html>
