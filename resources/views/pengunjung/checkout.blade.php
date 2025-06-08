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
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 0 20px rgba(255,255,255,0.1);
    }
    .form-control, .btn {
      border-radius: 8px;
    }
    .zoo-title {
      font-weight: bold;
      color: #26c015;
      text-shadow: 0 0 5px #27e412;
    }
    label {
      color: #d4d4d4;
    }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6 ticket-box text-white">
      <h2 class="text-center zoo-title mb-4">Pesan Tiket Kebun Binatang</h2>
      <form method="POST" action="{{route('payment.checkout')}}">
        @csrf
        <div class="mb-3">
          <label for="nama_pengunjung" class="form-label">Nama Pengunjung</label>
          <input type="text" class="form-control" id="nama_pengunjung" name="nama_pengunjung" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Pengunjung</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="tiket" class="form-label">Pilih Tiket</label>
          <select class="form-select" id="tiket" name="tiket_id" required>
            <option value="">-- Pilih Tiket --</option>
            @foreach ($tikets as $tiket)
              <option value="{{$tiket->id}}">({{$tiket->jumlah_orang}}) Rp{{number_format($tiket->harga, 2, ",", ".")}}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-success w-100">Beli Tiket</button>
      </form>
      <p class="mt-3 text-center text-muted" style="font-size: 0.9rem;">© 2025 Zoo System</p>
    </div>
  </div>
</body>
</html>
