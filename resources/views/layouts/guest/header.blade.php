<header>
  <nav class="site-nav" aria-label="Primary">
    <div class="container">
      <a class="nav-brand" href="{{ route('home') }}">Lafemme Florist<span class="mark">.</span></a>

      <ul class="nav-links" id="primary-menu">
        <li><a href="{{ route('home') }}">Beranda</a></li>
        <li><a href="#occasions">Katalog Buket</a></li>
        <li><a href="#subscription">Kategori</a></li>
        <li><a href="#story">Tentang Kami</a></li>
        <li><a href="#services">Layanan</a></li>
        <li><a href="#delivery">Pengiriman</a></li>
      </ul>

      <div class="nav-actions">
        <a href="{{ route('login') }}" class="btn btn-outline btn-sm">Login</a>
        <a href="{{ route('register') }}" class="btn btn-rose btn-sm">Register</a>
        <button type="button" class="nav-toggle" aria-expanded="false" aria-controls="primary-menu" aria-label="Toggle menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </nav>
  <div class="nav-backdrop" aria-hidden="true"></div>
</header>