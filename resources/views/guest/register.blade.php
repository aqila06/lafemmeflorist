@extends('layouts.guest.app')

@section('content')
<section class="section bg-cream2 py-5" style="min-height: 75vh; display: flex; align-items: center;">
  <div class="container py-4">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 16px; background: #ffffff;">
          <div class="text-center mb-4">
            <span class="eyebrow center" style="font-size: 0.8rem; letter-spacing: 2px;">LAFEMME FLORIST</span>
            <h2 class="section-title mb-1" style="font-family: 'Cormorant Garamond', serif; font-size: 2.2rem;">Daftar Akun</h2>
            <p class="text-muted small">Lengkapi data diri untuk membuat akun</p>
          </div>

          <form action="{{ route('register.process') }}" method="POST">
            @csrf
            <div class="mb-3 text-start">
              <label class="form-label small fw-semibold text-secondary">Nama Lengkap</label>
              <input type="text" name="name" class="form-control px-3 py-2" placeholder="Nama lengkap" style="border-radius: 8px; border: 1px solid #e2e8f0;" required>
            </div>

            <div class="mb-3 text-start">
              <label class="form-label small fw-semibold text-secondary">Username</label>
              <input type="text" name="username" class="form-control px-3 py-2" placeholder="Masukkan username" style="border-radius: 8px; border: 1px solid #e2e8f0;" required>
            </div>
            
            <div class="mb-3 text-start">
              <label class="form-label small fw-semibold text-secondary">Email</label>
              <input type="email" name="email" class="form-control px-3 py-2" placeholder="alamat@email.com" style="border-radius: 8px; border: 1px solid #e2e8f0;" required>
            </div>

            <div class="mb-3 text-start">
              <label class="form-label small fw-semibold text-secondary">Password</label>
              <input type="password" name="password" class="form-control px-3 py-2" placeholder="Password" style="border-radius: 8px; border: 1px solid #e2e8f0;" required>
            </div>

            <div class="mb-4 text-start">
              <label class="form-label small fw-semibold text-secondary">Konfirmasi Password</label>
              <input type="password" name="password_confirmation" class="form-control px-3 py-2" placeholder="Ulangi password" style="border-radius: 8px; border: 1px solid #e2e8f0;" required>
            </div>

            <button type="submit" class="btn btn-rose w-100 py-2 fw-semibold" style="border-radius: 8px;">
              DAFTAR SEKARANG
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection