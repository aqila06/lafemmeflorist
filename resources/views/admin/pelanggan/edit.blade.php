<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan - Lafemme Florist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f3f6;
            color: #333;
        }

        .sidebar {
            min-height: 100vh;
            background-color: #1e2538;
            color: #fff;
        }

        .sidebar .brand {
            font-weight: bold;
            font-size: 1.2rem;
            padding: 20px;
            color: #fff;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar .brand small {
            font-size: 0.75rem;
            color: #aaa;
            display: block;
        }

        .sidebar .nav-link {
            color: #a0aec0;
            padding: 12px 20px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 12px;
            border-radius: 8px;
            margin: 4px 15px;
            text-decoration: none;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background-color: #2d3748;
            color: #ffffff;
        }

        .top-navbar {
            background: #ffffff;
            border-bottom: 1px solid #edf2f7;
            padding: 12px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-custom {
            border: none;
            border-radius: 16px;
            background: #ffffff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
            padding: 28px;
        }

        .btn-pink {
            background-color: #e65c8a;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 22px;
            font-weight: 600;
        }

        .btn-pink:hover {
            background-color: #d44b79;
            color: white;
        }

        .badge-pink {
            background-color: #fde8ef;
            color: #e65c8a;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 6px;
        }

        .form-label {
            font-weight: 600;
            font-size: 0.88rem;
            color: #4a5568;
        }

        .form-control {
            border-radius: 8px;
            padding: 10px 14px;
            border: 1px solid #e2e8f0;
        }

        .form-control:focus {
            border-color: #e65c8a;
            box-shadow: 0 0 0 0.2rem rgba(230, 92, 138, 0.25);
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Sidebar Lafemme Florist -->
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
                        <a class="nav-link" href="{{ route('dashboard') }}"><i class="bi bi-speedometer2"></i>
                            Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('pelanggan.index') }}"><i class="bi bi-people"></i>
                            Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bunga.index') }}"><i class="bi bi-flower1"></i> Bunga</a>
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
                        <input type="text" class="form-control" style="width: 360px;"
                            placeholder="Cari pelanggan, pesanan, laporan">
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
                            <span class="badge-pink text-uppercase">PELANGGAN</span>
                            <h2 class="fw-bold mt-2 mb-1">Edit Pelanggan</h2>
                            <p class="text-muted small">Ubah informasi data pelanggan di bawah ini.</p>
                        </div>
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-secondary rounded-3">
                            <i class="bi bi-arrow-left"></i> Kembali ke Daftar
                        </a>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card card-custom">
                                <h5 class="fw-bold mb-3"><i class="bi bi-pencil-square text-danger me-2"></i> Form
                                    Informasi Pelanggan</h5>

                                {{-- Display Alert Validasi Error --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger rounded-3 mb-4">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('pelanggan.update', $dataPelanggan->pelanggan_id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                                        <input type="text" name="nama_pelanggan" id="nama_pelanggan"
                                            class="form-control @error('nama_pelanggan') is-invalid @enderror"
                                            value="{{ old('nama_pelanggan', $dataPelanggan->nama_pelanggan) }}"
                                            required>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" id="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email', $dataPelanggan->email) }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="no_hp" class="form-label">No. HP / WhatsApp</label>
                                            <input type="text" name="no_hp" id="no_hp"
                                                class="form-control @error('no_hp') is-invalid @enderror"
                                                value="{{ old('no_hp', $dataPelanggan->no_hp) }}" required>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea name="alamat" id="alamat" rows="3"
                                            class="form-control @error('alamat') is-invalid @enderror"
                                            required>{{ old('alamat', $dataPelanggan->alamat) }}</textarea>
                                    </div>

                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="{{ route('pelanggan.index') }}" class="btn btn-light px-4">Batal</a>
                                        <button type="submit" class="btn btn-info text-white px-4">Simpan
                                            Perubahan</button>
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