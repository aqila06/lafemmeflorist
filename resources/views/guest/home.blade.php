@extends('layouts.guest.app')

@section('content')
    <!-- ========================================================= HERO -->
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
          </div>

          <div class="hero-figure">
            <img src="{{ asset('assets-guest/img/hero-bouquet.jpg') }}" alt="Bouquet" width="720" height="900">
          </div>
        </div>
      </div>
    </section>
@endsection