<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori - Lafemme Florist</title>
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
                        <a class="nav-link" href="{{ route('bunga.index') }}"><i class="bi bi-flower1"></i> Bunga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('kategori.index') }}"><i class="bi bi-tags"></i> Kategori</a>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-10">
                <!-- Top Navbar -->
                <div class="top-navbar">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-list fs-4 cursor-pointer text-muted"></i>
                        <input type="text" class="form-control" style="width: 360px;" placeholder="Cari pelanggan, pesanan, laporan">
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
                            <span class="badge-pink text-uppercase">Kategori</span>
                            <h2 class="fw-bold mt-2 mb-1">Daftar Kategori</h2>
                            <p class="text-muted small">Kelola kategori pengelompokan bunga.</p>
                        </div>
                        <a href="{{ route('kategori.create') }}" class="btn btn-pink rounded-3">
                            <i class="bi bi-plus-lg me-1"></i> Tambah Kategori
                        </a>
                    </div>

                    {{-- Alert Success --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card card-custom">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 10%;">No</th>
                                        <th>Nama Kategori</th>
                                        <th>Deskripsi</th>
                                        <th class="text-center" style="width: 20%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($kategori as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td class="fw-semibold">{{ $item->nama_kategori }}</td>
                                            <td>{{ $item->deskripsi ?? '-' }}</td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center gap-2">
                                                    <a href="{{ route('kategori.edit', $item->kategori_id) }}" class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-pencil"></i> Edit
                                                    </a>
                                                    <form action="{{ route('kategori.destroy', $item->kategori_id) }}" method="POST" onsubmit="return confirm('Hapus data kategori ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                                            <i class="bi bi-trash"></i> Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center text-muted py-4">Belum ada data kategori.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>