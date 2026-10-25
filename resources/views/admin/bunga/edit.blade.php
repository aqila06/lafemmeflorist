@extends('layouts.admin.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <span class="badge-pink text-uppercase">Bunga</span>
            <h2 class="fw-bold mt-2 mb-1">Edit Data Bunga</h2>
            <p class="text-muted small">Perbarui informasi produk bunga di katalog Lafemme Florist.</p>
        </div>
        <a href="{{ route('bunga.index') }}" class="btn btn-outline-secondary rounded-3">
            <i class="bi bi-arrow-left"></i> Kembali ke Daftar
        </a>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-custom">
                <h5 class="fw-bold mb-3"><i class="bi bi-pencil-square text-danger me-2"></i> Form Edit Informasi Bunga</h5>

                @if ($errors->any())
                    <div class="alert alert-danger rounded-3 mb-4">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('bunga.update', $dataBunga->bunga_id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama_bunga" class="form-label">Nama Bunga</label>
                        <input type="text" name="nama_bunga" id="nama_bunga" class="form-control @error('nama_bunga') is-invalid @enderror" value="{{ old('nama_bunga', $dataBunga->nama_bunga) }}" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="harga" class="form-label">Harga (Rp)</label>
                            <input type="number" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga', $dataBunga->harga) }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror" value="{{ old('stok', $dataBunga->stok) }}" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="deskripsi" class="form-label">Deskripsi Bunga</label>
                        <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control">{{ old('deskripsi', $dataBunga->deskripsi) }}</textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('bunga.index') }}" class="btn btn-light px-4">Batal</a>
                        <button type="submit" class="btn btn-pink">Perbarui Bunga</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection