<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beli Tiket - Zoo Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #121212 url('https://images.unsplash.com/photo-1602933161573-cb5e66203fac?auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed;
      background-size: cover;
    }
    .ticket-box {
      background: rgba(0, 0, 0, 0.85);
      border-radius: 16px;
      padding: 2.5rem;
      box-shadow: 0 0 25px rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(4px);
    }
    .zoo-title {
      font-weight: bold;
      color: #26c015;
      text-shadow: 0 0 6px #27e412;
    }
    label {
      color: #cfcfcf;
    }
    .form-control, .form-select {
      background-color: #1e1e1e;
      color: #f0f0f0;
      border: 1px solid #444;
    }
    .form-control:focus, .form-select:focus {
      background-color: #1e1e1e;
      border-color: #26c015;
      box-shadow: none;
    }
    .btn-success {
      background-color: #26c015;
      border: none;
      transition: background-color 0.3s ease;
    }
    .btn-success:hover {
      background-color: #2ee81a;
    }
    .btn-secondary {
      background-color: #444;
      border: none;
      transition: background-color 0.3s ease;
    }
    .btn-secondary:hover {
      background-color: #5c5c5c;
    }
    .text-muted {
      color: #bbbbbb !important;
    }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center min-vh-100 py-5">
    <div class="col-lg-6 col-md-8 ticket-box text-white">
      <h2 class="text-center zoo-title mb-4">Pesan Tiket Kebun Binatang</h2>
      <form method="POST" action="{{ route('payment.checkout') }}">
        @csrf
        <div class="mb-3">
          <label for="nama_pengunjung" class="form-label">Nama Pengunjung</label>
          <input type="text" class="form-control" id="nama_pengunjung" name="nama_pengunjung" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Pengunjung</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-4">
          <label for="tiket" class="form-label">Pilih Tiket</label>
          <select class="form-select" id="tiket" name="tiket_id" required>
            <option value="">-- Pilih Tiket --</option>
            @foreach ($tikets as $tiket)
              <option value="{{ $tiket->id }}">
                ({{ $tiket->jumlah_orang }} orang) - Rp{{ number_format($tiket->harga, 2, ',', '.') }}
              </option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-success w-100 mb-2">Beli Tiket</button>
        <a href="{{ url('/') }}" class="btn btn-secondary w-100">Kembali</a>
      </form>
      <p class="mt-4 text-center text-muted" style="font-size: 0.9rem;">© 2025 Zoo System</p>
    </div>
  </div>
</body>
</html>
