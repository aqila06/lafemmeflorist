@extends('layouts.guest.app')

@section('title', 'LaFemme Florist - Fresh Flowers')

@section('content')
  <!-- HERO -->
  <section class="hero" id="home">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-copy">
          <span class="eyebrow">LAFEMME FLORIST — FRESH FLOWERS</span>
          <h1>Beautiful flowers, made with <em>love</em> for every moment</h1>
          <p class="hero-lead">Temukan rangkaian bunga dan buket cantik untuk setiap momen spesial. Dibuat dengan penuh perhatian untuk menyampaikan perasaan, menghadirkan kebahagiaan, dan membuat hari terasa lebih istimewa.</p>
          <div class="hero-cta">
            <a href="{{ route('login') }}" class="btn btn-rose">MASUK KE AKUN</a>
            <a href="{{ route('register') }}" class="btn btn-outline">DAFTAR SEKARANG</a>
          </div>
          <div class="hero-meta">
            <div>
              <div class="num"><span data-count="60" data-suffix="+">60+</span></div>
              <div class="lbl">Pilihan Buket</div>
            </div>
            <div>
              <div class="num">Fresh</div>
              <div class="lbl">Bunga Pilihan</div>
            </div>
            <div>
              <div class="num">24/7</div>
              <div class="lbl">Pemesanan Online</div>
            </div>
          </div>
        </div>

        <div class="hero-figure">
          <img src="{{ asset('assets-guest/img/hero-bouquet.jpg') }}" alt="A hand-tied bouquet" width="720" height="900" fetchpriority="high">
        </div>
      </div>
    </div>
  </section>

  <!-- KATALOG FEATURED BOUQUETS (Dinamis Data Bunga & Kategori) -->
  <section class="section" id="shop">
    <div class="container">
      <div class="text-center reveal">
        <span class="eyebrow center">Katalog Pilihan</span>
        <h2 class="section-title">Koleksi Bunga Terbaru</h2>
      </div>

      <div class="product-grid mt-4" id="featured-grid">
        @forelse($flowers as $flower)
          <article class="product-card reveal">
            <div class="product-media">
              <span class="product-tag">{{ $flower->kategori?->nama_kategori ?? 'Umum' }}</span>
              <img src="{{ asset('assets-guest/img/hero-bouquet.jpg') }}" alt="{{ $flower->name }}" width="400" height="400" loading="lazy">
            </div>
            <div class="product-body">
              <h3>{{ $flower->name }}</h3>
              <div class="product-foot">
                <span class="product-price">Rp 200.000{{ number_format($flower->price, 0, ',', '.') }}</span>
              </div>
            </div>
          </article>
        @empty
          <div class="col-12 text-center py-5">
            <p class="text-muted">Belum ada koleksi bunga yang ditampilkan.</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>
@endsection