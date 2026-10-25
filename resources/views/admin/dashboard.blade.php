@extends('layouts.admin.app')

@section('content')
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
        <div class="heading-actions">
            <button class="btn btn-outline-secondary btn-sm" type="button">
                <i class="bi bi-download" aria-hidden="true"></i> Ekspor
            </button>
            <button class="btn btn-pink btn-sm text-white" type="button">
                <i class="bi bi-file-earmark-plus" aria-hidden="true"></i> Buat Laporan
            </button>
        </div>
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
                    <a class="btn btn-light btn-sm" href="#">Lihat Detail</a>
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
@endsection