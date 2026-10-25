<div class="sidebar-header">
  <a class="brand-mark" href="{{ route('dashboard') }}">
    <img class="brand-logo" src="{{ asset('assets-admin/images/logo.png') }}" alt="Logo">
    <span class="brand-copy">
      <strong class="brand-title">Lafemme Florist</strong>
      <small class="brand-subtitle">Admin</small>
    </span>
  </a>
</div>

<nav class="sidebar-nav">
  <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
    <span class="nav-icon"><i class="bi bi-speedometer2"></i></span>
    <span class="nav-text">Dashboard</span>
  </a>

  <a class="nav-link {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}" href="{{ route('pelanggan.index') }}">
    <span class="nav-icon"><i class="bi bi-people"></i></span>
    <span class="nav-text">Pelanggan</span>
  </a>

  <a class="nav-link {{ request()->routeIs('bunga.*') ? 'active' : '' }}" href="{{ route('bunga.index') }}">
    <span class="nav-icon"><i class="bi bi-flower1"></i></span>
    <span class="nav-text">Bunga</span>
  </a>

  <a class="nav-link {{ request()->routeIs('kategori.*') ? 'active' : '' }}" href="{{ route('kategori.index') }}">
    <span class="nav-icon"><i class="bi bi-tags"></i></span>
    <span class="nav-text">Kategori</span>
  </a>

  <a class="nav-link {{ request()->routeIs('user.*') ? 'active' : '' }}" href="{{ route('user.index') }}">
    <span class="nav-icon"><i class="bi bi-person-badge"></i></span>
    <span class="nav-text">User</span>
  </a>
</nav>

<div class="sidebar-user">
  <img class="avatar-img avatar-sm" src="{{ asset('assets-admin/images/avatar/avatar.jpg') }}" alt="Admin Aqila">
  <strong>Admin Aqila</strong>
  <small>Active Workspace</small>
</div>