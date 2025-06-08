<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Zoo Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #121212 url('https://images.unsplash.com/photo-1579154204601-01578f1c5d7b?auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed;
            background-size: cover;
        }

        .login-box {
            background: rgba(0, 0, 0, 0.85);
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
        }

        .form-control,
        .btn {
            border-radius: 8px;
        }

        .zoo-title {
            font-weight: bold;
            color: #26c015;
            text-shadow: 0 0 5px #27e412;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-5 login-box text-white">
            <h2 class="text-center zoo-title mb-4">ZooSmart Register</h2>
            <form method="POST" action="{{ route('auth.register') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="nama_pengunjung" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_pengunjung" name="nama_pengunjung" required>
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Register</button>
            </form>

            <p class="mt-3 text-center text-muted" style="font-size: 0.9rem;">© 2025 Zoo System</p>
        </div>
    </div>
</body>

</html>
