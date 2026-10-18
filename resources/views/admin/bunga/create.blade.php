<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Bunga - Lafemme Florist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f7f3f6; color: #333; }
        .sidebar { min-height: 100vh; background-color: #1e2538; color: #fff; }
        .sidebar .brand { font-weight: bold; font-size: 1.2rem; padding: 20px; color: #fff; display: flex; align-items: center; gap: 10px; }
        .sidebar .brand small { font-size: 0.75rem; color: #aaa; display: block; }
        .sidebar .nav-link { color: #a0aec0; padding: 12px 20px; font-weight: 500; display: flex; align-items: center; gap: 12px; border-radius: 8px; margin: 4px 15px; text-decoration: none; }
        .sidebar .nav-link.active, .sidebar .nav-link:hover { background-color: #2d3748; color: #ffffff; }
        .top-navbar { background: #ffffff; border-bottom: 1px solid #edf2f7; padding: 12px 30px; display: flex; justify-content: space-between; align-items: center; }
        .card-custom { border: none; border-radius: 16px; background: #ffffff; box-shadow: 0 4px 20px rgba(0,0,0,0.03); padding: 28px; }
        .btn-pink { background-color: #e65c8a; color: white; border: none; border-radius: 8px; padding: 10px 22px; font-weight: 600; }
        .btn-pink:hover { background-color: #d44b79; color: white; }
        .badge-pink { background-color: #fde8ef; color: #e65c8a; font-weight: 600; padding: 6px 12px; border-radius: 6px; }
        .form-label { font-weight: 600; font-size: 0.88rem; color: #4a5568; }
        .form-control { border-radius: 8px; padding: 10px 14px; border: 1px solid #e2e8f0; }
        .form-control:focus { border-color: #e65c8a; box-shadow: 0 0 0 0.2rem rgba(230, 92, 138, 0.25); }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar d-none d-md-block">
                <div class="brand">
                    <img src="{{ asset('assets-admin/images/logo.png') }}" alt="Logo Lafemme Florist" class="img-fluid rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover;">
                    <div>
                        Lafemme Florist
                        <small>Admin Dashboard</small>
                    </div>
                </div>
                <ul class="nav flex-column mt-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}"><i class="bi bi-speedometer2"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pelanggan.index') }}"><i class="bi bi-people"></i> Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('bunga.index') }}"><i class="bi bi-flower1"></i> Bunga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kategori.index') }}"><i class="bi bi-tags"></i> Kategori</a>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-10">
                <!-- Top Navbar -->
                <div class="top-navbar">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-list fs-4 cursor-pointer text-muted"></i>
                        <input type="text" class="form-control" style="width: 360px;" placeholder="Cari pelanggan, bunga, kategori">
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-moon fs-5 text-muted"></i>
                        <i class="bi bi-bell fs-5 text-muted"></i>
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary-subtle text-dark p-2 rounded-circle fw-bold">AQ</span>
                            <span class="fw-semibold">Admin Aqila</span>
                        </div>
                    </div>
                </div>

                <!-- Main Section -->
                <div class="p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <span class="badge-pink text-uppercase">Bunga</span>
                            <h2 class="fw-bold mt-2 mb-1">Tambah Bunga Baru</h2>
                            <p class="text-muted small">Tambahkan produk bunga baru ke dalam katalog Lafemme Florist.</p>
                        </div>
                        <a href="{{ route('bunga.index') }}" class="btn btn-outline-secondary rounded-3">
                            <i class="bi bi-arrow-left"></i> Kembali ke Daftar
                        </a>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card card-custom">
                                <h5 class="fw-bold mb-3"><i class="bi bi-flower1 text-danger me-2"></i> Form Informasi Bunga</h5>

                                @if ($errors->any())
                                    <div class="alert alert-danger rounded-3 mb-4">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('bunga.store') }}" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="nama_bunga" class="form-label">Nama Bunga</label>
                                        <input type="text" name="nama_bunga" id="nama_bunga" class="form-control @error('nama_bunga') is-invalid @enderror" value="{{ old('nama_bunga') }}" placeholder="Contoh: Mawar Merah" required>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="harga" class="form-label">Harga (Rp)</label>
                                            <input type="number" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}" placeholder="50000" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="stok" class="form-label">Stok</label>
                                            <input type="number" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror" value="{{ old('stok') }}" placeholder="10" required>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="deskripsi" class="form-label">Deskripsi Bunga</label>
                                        <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" placeholder="Deskripsi singkat bunga...">{{ old('deskripsi') }}</textarea>
                                    </div>

                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="{{ route('bunga.index') }}" class="btn btn-light px-4">Batal</a>
                                        <button type="submit" class="btn btn-pink">Simpan Bunga</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>