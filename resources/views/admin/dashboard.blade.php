<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Lafemme Florist">
  <title>Dashboard | Lafemme Florist</title>

<link rel="stylesheet" href="{{ asset('assets-admin/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets-admin/vendors/bootstrap-icons/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets-admin/css/style.css') }}">
</head>

<body>
  <div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

    <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
      
  
<div class="sidebar-header">
  <a class="brand-mark" href="index.html" aria-label="Lafemme Florist Admin">
    <img
      class="brand-logo"
      src="../assets-admin/images/logo.png"
      alt="Lafemme Florist Logo"
    >

    <span class="brand-copy">
      <strong class="brand-title">Lafemme Florist</strong>
      <small class="brand-subtitle">Admin</small>
    </span>
  </a>
</div>

      <nav class="sidebar-nav">
        <a class="nav-link active" href="index.html" aria-current="page">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">Dashboard</span>
        </a>
        <a class="nav-link" href="{{ route('pelanggan.index') }}">
          <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
          <span class="nav-text">Pelanggan</span>
        </a>
        <a class="nav-link" href="{{ route('pelanggan.create') }}">
          <span class="nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
          <span class="nav-text">Tambah Pelanggan</span>
        </a>
        <a class="nav-link" href="profile.html">
          <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
          <span class="nav-text">Profil</span>
        </a>
        <a class="nav-link" href="charts.html">
          <span class="nav-icon"><i class="bi bi-bar-chart-line" aria-hidden="true"></i></span>
          <span class="nav-text">Grafik</span>
        </a>
        <a class="nav-link" href="tables.html">
          <span class="nav-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
          <span class="nav-text">Tabel</span>
        </a>
        <a class="nav-link" href="forms.html">
          <span class="nav-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
          <span class="nav-text">Formulir</span>
        </a>
        <a class="nav-link" href="components.html">
          <span class="nav-icon"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i></span>
          <span class="nav-text">Komponen</span>
        </a>
        <a class="nav-link" href="alerts.html">
          <span class="nav-icon"><i class="bi bi-exclamation-triangle" aria-hidden="true"></i></span>
          <span class="nav-text">Peringatan</span>
        </a>
        <a class="nav-link" href="modals.html">
          <span class="nav-icon"><i class="bi bi-window-stack" aria-hidden="true"></i></span>
          <span class="nav-text">Jendela Dialog</span>
        </a>
        <a class="nav-link" href="settings.html">
          <span class="nav-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
          <span class="nav-text">Pengaturan</span>
        </a>
        <a class="nav-link" href="blank.html">
          <span class="nav-icon"><i class="bi bi-file-earmark" aria-hidden="true"></i></span>
          <span class="nav-text">Halaman Kosong</span>
        </a>
      </nav>

      <div class="sidebar-user">
        
<img class="avatar-img avatar-sm" src="{{ asset('assets-admin/images/avatar/avatar.jpg') }}" alt="Admin Aqila">

        <strong>Admin Aqila</strong>
        <small>Active Workspace</small>
      </div>

      <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">System running smoothly</span>
      </div>
    </aside>

    <div class="admin-main">
      <nav class="navbar admin-navbar navbar-expand bg-white">
        <div class="container-fluid px-3 px-lg-4">
          <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar" aria-expanded="true" aria-label="Toggle sidebar">
            <span></span>
            <span></span>
            <span></span>
          </button>

          <form class="d-none d-md-flex ms-3 flex-grow-1" role="search">
            <input class="form-control search-input" type="search" placeholder="Cari pelanggan, pesanan, laporan" aria-label="Search">
          </form>

          <div class="navbar-actions ms-auto">
            <button class="icon-button theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
              <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
            </button>
            <div class="dropdown">
              <button class="icon-button" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Notifications">
                <span class="notification-dot"></span>
                <i class="bi bi-bell" aria-hidden="true"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end notification-menu">
                <div class="dropdown-header fw-bold text-body">Notifications</div>
                <a class="dropdown-item" href="{{ route('pelanggan.create') }}">
                  <span class="notification-title">New user registered</span>
                  <span class="notification-time">4 minutes ago</span>
                </a>
                <a class="dropdown-item" href="charts.html">
                  <span class="notification-title">Revenue target reached</span>
                  <span class="notification-time">32 minutes ago</span>
                </a>
                <a class="dropdown-item" href="settings.html">
                  <span class="notification-title">Security review completed</span>
                  <span class="notification-time">1 hour ago</span>
                </a>
              </div>
            </div>

            <div class="dropdown">
              <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                
<img class="avatar-img avatar-sm" src="{{ asset('assets-admin/images/avatar/avatar.jpg') }}" alt="Admin Aqila">

                <span class="profile-name d-none d-sm-inline">Admin Aqila</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                <li><a class="dropdown-item" href="settings.html">Account settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="login.html">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Ringkasan</p>
                <h1 class="h3 mb-1">Dashboard Lafemme Florist</h1>
                <p class="text-muted mb-0">
                Pantau penjualan bunga, pesanan, pelanggan, dan aktivitas toko dalam satu halaman.
              </p>
              </div>
            </div>
            <div class="heading-actions"><button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-download" aria-hidden="true"></i> Ekspor</button><button class="btn btn-primary btn-sm" type="button"><i class="bi bi-file-earmark-plus" aria-hidden="true"></i>Buat Laporan</button></div>
          </div>

          
<section class="row g-3 mt-1" aria-label="Statistik dashboard">

  <!-- Kartu Pendapatan -->
  <div class="col-12 col-sm-6 col-xl-3">
    <article class="metric-card metric-primary">
      <div class="metric-top">
        <span class="metric-label">Pendapatan</span>
        <span class="metric-icon">
          <i class="bi bi-currency-dollar" aria-hidden="true"></i>
        </span>
      </div>

      <div class="metric-value">Rp48.240.000</div>

      <div class="metric-meta">
        <span class="text-success">+12,5%</span>
        <span>dari bulan sebelumnya</span>
      </div>
    </article>
  </div>

  <!-- Kartu Pesanan -->
  <div class="col-12 col-sm-6 col-xl-3">
    <article class="metric-card metric-success">
      <div class="metric-top">
        <span class="metric-label">Total Pesanan</span>
        <span class="metric-icon">
          <i class="bi bi-bag-check" aria-hidden="true"></i>
        </span>
      </div>

      <div class="metric-value">1.284</div>

      <div class="metric-meta">
        <span class="text-success">+8,2%</span>
        <span>pesanan baru</span>
      </div>
    </article>
  </div>

  <!-- Kartu Pelanggan -->
  <div class="col-12 col-sm-6 col-xl-3">
    <article class="metric-card metric-warning">
      <div class="metric-top">
        <span class="metric-label">Total Pelanggan</span>
        <span class="metric-icon">
          <i class="bi bi-people" aria-hidden="true"></i>
        </span>
      </div>

      <div class="metric-value">8.742</div>

      <div class="metric-meta">
        <span class="text-success">+5,1%</span>
        <span>Pelanggan aktif</span>
      </div>
    </article>
  </div>

  <!-- Kartu Pesanan Perlu Ditinjau -->
  <div class="col-12 col-sm-6 col-xl-3">
    <article class="metric-card metric-danger">
      <div class="metric-top">
        <span class="metric-label">Perlu Ditinjau</span>
        <span class="metric-icon">
          <i class="bi bi-clipboard-check" aria-hidden="true"></i>
        </span>
      </div>

      <div class="metric-value">36</div>

      <div class="metric-meta">
        <span class="text-danger">3 mendesak</span>
        <span>perlu diperiksa</span>
      </div>
    </article>
  </div>

</section>

          
<section class="row g-3 mt-1">
  <!-- Performa Penjualan -->
  <div class="col-12 col-xl-8">
    <div class="panel h-100">
      <div class="panel-header">
        <div>
          <h2 class="h5 mb-1 section-title">
            <i class="bi bi-graph-up-arrow" aria-hidden="true"></i>
            <span>Performa Penjualan</span>
          </h2>
          <p class="text-muted mb-0">
            Ringkasan pendapatan penjualan bunga setiap bulan.
          </p>
        </div>

        <a class="btn btn-light btn-sm" href="charts.html">
          Lihat Detail
        </a>
      </div>

      <div class="chart-bars" aria-label="Grafik performa penjualan">
        <div class="chart-column bar-42"><span></span><small>Jan</small></div>
        <div class="chart-column bar-58"><span></span><small>Feb</small></div>
        <div class="chart-column bar-51"><span></span><small>Mar</small></div>
        <div class="chart-column bar-72"><span></span><small>Apr</small></div>
        <div class="chart-column bar-66"><span></span><small>Mei</small></div>
        <div class="chart-column bar-83"><span></span><small>Jun</small></div>
      </div>
    </div>
  </div>

  <!-- Aktivitas Toko -->
  <div class="col-12 col-xl-4">
    <div class="panel h-100">
      <div class="panel-header">
        <div>
          <h2 class="h5 mb-1 section-title">
            <i class="bi bi-activity" aria-hidden="true"></i>
            <span>Aktivitas Toko</span>
          </h2>
          <p class="text-muted mb-0">
            Informasi terbaru mengenai aktivitas toko.
          </p>
        </div>
      </div>

      <div class="activity-list">
        <div class="activity-item">
          <span class="activity-dot bg-primary"></span>
          <div>
            <p class="mb-1 fw-semibold">Kampanye baru diluncurkan</p>
            <p class="text-muted small mb-0">
              Tim pemasaran menerbitkan penawaran bulan Mei.
            </p>
          </div>
        </div>

        <div class="activity-item">
          <span class="activity-dot bg-success"></span>
          <div>
            <p class="mb-1 fw-semibold">Pembayaran berhasil diproses</p>
            <p class="text-muted small mb-0">
              Sebanyak 246 faktur berhasil diproses.
            </p>
          </div>
        </div>

        <div class="activity-item">
          <span class="activity-dot bg-warning"></span>
          <div>
            <p class="mb-1 fw-semibold">Antrean dukungan meningkat</p>
            <p class="text-muted small mb-0">
              Rata-rata waktu respons pertama adalah 18 menit.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

          <section class="panel mt-3">
            <div class="panel-header">
              <div>
                
<h2 class="h5 mb-1 section-title">
  <i class="bi bi-people" aria-hidden="true"></i>
  <span>Pelanggan Terbaru</span>
</h2>
<p class="text-muted mb-0">
  Aktivitas akun terbaru dalam sistem.
</p>
<a class="btn btn-outline-secondary btn-sm" href="{{ route('pelanggan.create') }}">
  Kelola Pelanggan
</a>
</div>
              <a class="btn btn-outline-secondary btn-sm" href="{{ route('pelanggan.create') }}">Manage Users</a>
            </div>
            <div class="table-responsive">
              <table class="table align-middle mb-0">
                <thead><tr><th scope="col">Pelanggan</th><th scope="col">Peran</th><th scope="col">Tim</th><th scope="col">Status</th><th scope="col">Tanggal Bergabung</th><th scope="col" class="text-end">Aksi</th></tr></thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img class="avatar-img avatar-sm" src="../assets-admin/images/avatar/avatar-1.jpg" alt="Sarah Ahmed">
                        <div>
                          <p class="fw-semibold mb-0">Sarah Ahmed</p>
                          <p class="text-muted small mb-0">sarah@example.com</p>
                        </div>
                      </div>
                    </td>
                    <td>Admin</td>
                    <td>Operations</td>
                    <td><span class="badge text-bg-success">Active</span></td>
                    <td>Jan 12, 2026</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">View</a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img class="avatar-img avatar-sm" src="../assets-admin/images/avatar/avatar-2.jpg" alt="Rafi Khan">
                        <div>
                          <p class="fw-semibold mb-0">Rafi Khan</p>
                          <p class="text-muted small mb-0">rafi@example.com</p>
                        </div>
                      </div>
                    </td>
                    <td>Manager</td>
                    <td>Sales</td>
                    <td><span class="badge text-bg-success">Active</span></td>
                    <td>Feb 03, 2026</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">View</a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img class="avatar-img avatar-sm" src="../assets-admin/images/avatar/avatar-3.jpg" alt="Nadia Islam">
                        <div>
                          <p class="fw-semibold mb-0">Nadia Islam</p>
                          <p class="text-muted small mb-0">nadia@example.com</p>
                        </div>
                      </div>
                    </td>
                    <td>Editor</td>
                    <td>Content</td>
                    <td><span class="badge text-bg-warning">Pending</span></td>
                    <td>Mar 18, 2026</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">View</a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img class="avatar-img avatar-sm" src="../assets-admin/images/avatar/avatar-4.jpg" alt="Mina Torres">
                        <div>
                          <p class="fw-semibold mb-0">Mina Torres</p>
                          <p class="text-muted small mb-0">mina@example.com</p>
                        </div>
                      </div>
                    </td>
                    <td>Viewer</td>
                    <td>Finance</td>
                    <td><span class="badge text-bg-secondary">Suspended</span></td>
                    <td>Apr 07, 2026</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">View</a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img class="avatar-img avatar-sm" src="../assets-admin/images/avatar/avatar-5.jpg" alt="Jon Oliver">
                        <div>
                          <p class="fw-semibold mb-0">Jon Oliver</p>
                          <p class="text-muted small mb-0">jon@example.com</p>
                        </div>
                      </div>
                    </td>
                    <td>Analyst</td>
                    <td>Data</td>
                    <td><span class="badge text-bg-success">Active</span></td>
                    <td>Apr 22, 2026</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">View</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </main>

      <footer class="admin-footer">
        <div class="container-fluid px-3 px-lg-4">
          <span>Copyright 2026 adminHMD. <br> Developed by <a target="_blank" class="fw-bold text-success" href="https://github.com/HasanMahmudDev">Md. Hasan Mahmud</a> • Distributed by <a target="_blank" class="fw-bold text-success" href="https://themewagon.com">ThemeWagon</a> </span>
          <span>Professional dashboard template.</span>
        </div>
      </footer>
    </div>
  </div>

  <script src="../assets-admin/js/bootstrap.bundle.min.js"></script>
  <script src="../assets-admin/js/main.js"></script>
</body>
</html>