@extends('layouts.admin.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <span class="badge-pink text-uppercase">USER</span>
            <h2 class="fw-bold mt-2 mb-1">Daftar User</h2>
            <p class="text-muted small">Kelola data pengguna sistem Lafemme Florist.</p>
        </div>
        <a href="{{ route('user.create') }}" class="btn btn-pink rounded-3">
            <i class="bi bi-plus-lg me-1"></i> Tambah User
        </a>
    </div>

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
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td class="fw-semibold">{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <form action="{{ route('user.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus user ini?')">
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
                            <td colspan="4" class="text-center text-muted py-4">Belum ada data user.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection