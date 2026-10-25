<div class="brand">
    <img src="{{ asset('assets-admin/images/logo.png') }}" alt="Logo Lafemme Florist"
        class="img-fluid rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover;">
    <div>
        Lafemme Florist
        <small>Admin Dashboard</small>
    </div>
</div>
<ul class="nav flex-column mt-3">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}"
            href="{{ route('pelanggan.index') }}">
            <i class="bi bi-people"></i> Pelanggan
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('bunga.*') ? 'active' : '' }}" href="{{ route('bunga.index') }}">
            <i class="bi bi-flower1"></i> Bunga
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('kategori.*') ? 'active' : '' }}" href="{{ route('kategori.index') }}">
            <i class="bi bi-tags"></i> Kategori
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('user.*') ? 'active' : '' }}" href="{{ route('user.index') }}">
            <i class="bi bi-person-badge"></i> User
        </a>
    </li>
</ul>