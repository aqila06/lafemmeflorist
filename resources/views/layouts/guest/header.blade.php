<header>
  <nav class="site-nav" aria-label="Primary">
    <div class="container">
      <a class="nav-brand" href="{{ route('home') }}">Lafemme Florist<span class="mark">.</span></a>

      <ul class="nav-links" id="primary-menu">
        <li><a href="{{ route('home') }}">Beranda</a></li>
        <li><a href="#shop">Katalog Buket</a></li>
        <li><a href="#subscription">Kategori</a></li>
        <li><a href="#story">Tentang Kami</a></li>
        <li><a href="#services">Layanan</a></li>
        <li><a href="#delivery">Pengiriman</a></li>
      </ul>

      <div class="nav-actions">
        <button type="button" class="cart-pill" data-cart-open aria-label="Open shopping bag">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          <span>Keranjang</span>
          <span class="cart-count" aria-live="polite">0</span>
        </button>
        <a href="{{ route('login') }}" class="btn btn-rose btn-sm d-none d-lg-inline-flex">Login</a>
        <button type="button" class="nav-toggle" aria-expanded="false" aria-controls="primary-menu" aria-label="Toggle menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </nav>
  <div class="nav-backdrop" aria-hidden="true"></div>
</header>