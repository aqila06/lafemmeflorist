@extends('layouts.admin.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <span class="badge-pink text-uppercase">PELANGGAN</span>
            <h2 class="fw-bold mt-2 mb-1">Tambah Pelanggan Baru</h2>
            <p class="text-muted small">Tambahkan data pelanggan baru ke dalam database Lafemme Florist.</p>
        </div>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-secondary rounded-3">
            <i class="bi bi-arrow-left"></i> Kembali ke Daftar
        </a>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-custom">
                <h5 class="fw-bold mb-3"><i class="bi bi-person-plus text-danger me-2"></i> Form Informasi Pelanggan</h5>

                {{-- Display Alert Validasi --}}
                @if ($errors->any())
                    <div class="alert alert-danger rounded-3 mb-4">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('pelanggan.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control @error('nama_pelanggan') is-invalid @enderror" value="{{ old('nama_pelanggan') }}" placeholder="Contoh: Aqila" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="aqila@gmail.com" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="no_hp" class="form-label">No. HP / WhatsApp</label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}" placeholder="08123456789" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror" placeholder="Jl. Bata No. 12" required>{{ old('alamat') }}</textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-light px-4">Batal</a>
                        <button type="submit" class="btn btn-pink">Simpan Pelanggan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection