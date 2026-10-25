@extends('layouts.admin.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <span class="badge-pink text-uppercase">USER</span>
            <h2 class="fw-bold mt-2 mb-1">Edit Data User</h2>
            <p class="text-muted small">Perbarui data informasi pengguna sistem.</p>
        </div>
        <a href="{{ route('user.index') }}" class="btn btn-outline-secondary rounded-3">
            <i class="bi bi-arrow-left"></i> Kembali ke Daftar
        </a>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-custom">
                <h5 class="fw-bold mb-3"><i class="bi bi-pencil-square text-danger me-2"></i> Form Edit User</h5>

                @if ($errors->any())
                    <div class="alert alert-danger rounded-3 mb-4">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">Password (Opsional)</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Kosongkan jika tak diubah">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Kosongkan jika tak diubah">
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('user.index') }}" class="btn btn-light px-4">Batal</a>
                        <button type="submit" class="btn btn-pink">Perbarui User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection