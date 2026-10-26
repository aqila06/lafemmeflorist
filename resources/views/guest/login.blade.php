@extends('layouts.guest.app')

@section('content')
<section class="section bg-cream2 py-5" style="min-height: 75vh; display: flex; align-items: center;">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 16px; background: #ffffff;">
                    <div class="text-center mb-4">
                        <span class="eyebrow center" style="font-size: 0.8rem; letter-spacing: 2px;">SELAMAT DATANG</span>
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

                    <form action="{{ route('login.process') }}" method="POST">
                        @csrf

                        <div class="mb-3 text-start">
                            <label class="form-label small fw-semibold text-secondary">Username</label>
                            {{-- Pastikan ada name="username" --}}
                            <input type="text" name="username" class="form-control px-3 py-2" value="{{ old('username') }}" placeholder="Masukkan username" style="border-radius: 8px; border: 1px solid #e2e8f0;" required>
                        </div>

                        <div class="mb-4 text-start">
                            <label class="form-label small fw-semibold text-secondary">Password</label>
                            {{-- Pastikan ada name="password" --}}
                            <input type="password" name="password" class="form-control px-3 py-2" placeholder="Masukkan password" style="border-radius: 8px; border: 1px solid #e2e8f0;" required>
                        </div>

                        <button type="submit" class="btn btn-rose w-100 py-2 fw-semibold" style="border-radius: 8px;">
                            MASUK
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection