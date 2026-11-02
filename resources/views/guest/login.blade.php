<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - LaFemme Florist</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets-guest/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/css/style.css') }}">
</head>
<body class="bg-cream2">

  {{-- Partial Header --}}
  @include('layouts.guest.header')

  <main style="min-height: 80vh; display: flex; align-items: center;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 16px; background: #ffffff;">
                    <div class="text-center mb-4">
                        <span class="eyebrow center" style="font-size: 0.8rem; letter-spacing: 2px;">LAFEMME FLORIST</span>
                        <h2 class="section-title mb-1" style="font-family: 'Cormorant Garamond', serif; font-size: 2.2rem;">Login</h2>
                        <p class="text-muted small">Silakan masuk ke akun Anda</p>
                    </div>

                    {{-- Alert Notifikasi Sukses --}}
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show small py-2 mb-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close py-2" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                    {{-- Alert Notifikasi Error --}}
                    @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show small py-2 mb-3" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close py-2" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                    <form action="{{ route('login.process') }}" method="POST" autocomplete="off">
                        @csrf

                        <div class="mb-3 text-start">
                            <label class="form-label small fw-semibold text-secondary">Username</label>
                            <input type="text" name="username" class="form-control px-3 py-2" value="{{ old('username') }}" placeholder="Masukkan username" style="border-radius: 8px; border: 1px solid #e2e8f0;" required autocomplete="off">
                        </div>

                        <div class="mb-4 text-start">
                            <label class="form-label small fw-semibold text-secondary">Password</label>
                            <input type="password" name="password" class="form-control px-3 py-2" placeholder="Masukkan password" style="border-radius: 8px; border: 1px solid #e2e8f0;" required autocomplete="new-password">
                        </div>

                        <button type="submit" class="btn btn-rose w-100 py-2 fw-semibold" style="border-radius: 8px;">
                            MASUK
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </main>

  {{-- Partial Footer --}}
  @include('layouts.guest.footer')

  <script src="{{ asset('assets-guest/js/vendor/bootstrap.bundle.min.js') }}"></script>
</body>
</html>