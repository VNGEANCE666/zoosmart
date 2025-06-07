<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ZooSmart</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      /* background: url('https://images.unsplash.com/photo-1605810230434-7631ac7b95de?auto=format&fit=crop&w=1500&q=80') no-repeat center center fixed; */
      background: url('https://www.suarasurabaya.net/wp-content/uploads/2018/02/kk199518_clip10.jpg') no-repeat center center fixed;
      background-size: cover;
      color: white;
      height: 100vh;
      font-family: 'Segoe UI', sans-serif;
      position: relative;
    }

    .navbar-dark .navbar-nav .nav-link {
      color: white;
      margin-right: 15px;
    }

    .navbar-dark .navbar-nav .nav-link.active {
      color: #00ff84;
      font-weight: bold;
    }

    .btn-login {
      border: 1px solid white;
      color: white;
      background-color: transparent;
      border-radius: 6px;
      padding: 5px 15px;
    }

    .btn-ticket {
      background-color: #065f2d;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      font-weight: 500;
    }

    .logo {
      font-size: 1.5rem;
      color: #00ff84;
      font-weight: bold;
    }

    .hero-button {
      position: absolute;
      top: 50%;
      left: 8%;
      transform: translateY(-50%);
    }

    .footer-text {
      position: absolute;
      bottom: 20px;
      width: 100%;
      text-align: center;
      font-size: 0.85rem;
      color: #ccc;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent px-4">
  <a class="navbar-brand logo" href="#">Zoo<span style="color:white;">smart</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#zooNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="zooNavbar">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Activities</a></li>
      <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Animal & Zones</a></li>
      <li class="nav-item">
        <a class="btn btn-login ml-3" href="{{route('auth.login-page')}}">Login</a>
      </li>
    </ul>
  </div>
</nav>

<div class="hero-button">
  <a href="#" class="btn btn-ticket">Get Ticket</a>
</div>

<footer class="footer-text">
  © 2025 – Zoosmart. All rights reserved. Address Address
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
