<!DOCTYPE html>
<html lang="id">
<head>
    <script>document.documentElement.classList.add('js')</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaFemme Florist</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets-guest/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/css/style.css') }}">
</head>
<body>

  <!-- ============================================================ NAV -->
  <header>
    <nav class="site-nav" aria-label="Primary">
      <div class="container">
        <a class="nav-brand" href="index.html">Lafemme Florist<span class="mark">.</span></a>

        <ul class="nav-links" id="primary-menu">
          <li><a href="#shop">Beranda</a></li>
          <li><a href="#occasions">Katalog Buket</a></li>
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
          <a href="shop.html" class="btn btn-rose btn-sm d-none d-lg-inline-flex">Lihat Buket</a>
          <button type="button" class="nav-toggle" aria-expanded="false" aria-controls="primary-menu" aria-label="Toggle menu">
            <span></span><span></span><span></span>
          </button>
        </div>
      </div>
    </nav>
    <div class="nav-backdrop" aria-hidden="true"></div>
  </header>

  <main>
    <!-- ========================================================= HERO -->
    <section class="hero" id="home">
      <div class="container">
        <div class="hero-grid">
          <div class="hero-copy">
            <span class="eyebrow">LAFEMME FLORIST — FRESH FLOWERS</span>
            <h1>Beautiful flowers, made with <em>love</em> for every moment</h1>
            <p class="hero-lead">Temukan rangkaian bunga dan buket cantik untuk setiap momen spesial. Dibuat dengan penuh perhatian untuk menyampaikan perasaan, menghadirkan kebahagiaan, dan membuat hari terasa lebih istimewa.</p>
            <div class="hero-cta">
              <a href="shop.html" class="btn btn-rose">LIHAT BUKET</a>
              <a href="#subscription" class="btn btn-outline">PILIH BUNGA</a>
            </div>
            <div class="hero-meta">
              <div>
                <div class="num"><span data-count="60" data-suffix="+">60+</span></div>
                <div class="lbl">Pilihan Buket</div>
              </div>
              <div>
                <div class="num">Fresh</span></div>
                <div class="lbl">Bunga Pilihan</div>
              </div>
              <div>
                <div class="num">24/7</div>
                <div class="lbl">Pemesanan Online</div>
              </div>
            </div>
          </div>

          <div class="hero-figure">
            <img src="{{ asset('assets-guest/img/hero-bouquet.jpg') }}" alt="A hand-tied bouquet of blush peonies and garden roses wrapped in cream paper" width="720" height="900" fetchpriority="high">
            <div class="hero-badge">
              <span class="dot" aria-hidden="true">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 2s4 4 4 9a4 4 0 0 1-8 0c0-5 4-9 4-9z"/><path d="M12 22v-7"/></svg>
              </span>
              <div>
                <strong>Flowers for every moment</strong>
                <span>Beautiful blooms, made with love</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==================================================== OCCASIONS -->
    <section class="section bg-cream2" id="occasions">
      <div class="container">
        <div class="text-center reveal">
          <span class="eyebrow center">Shop by Occasion</span>
          <h2 class="section-title">A bouquet for every moment</h2>
          <p class="section-lead">Tell us the occasion and we will match the blooms, the palette, and the note to the feeling.</p>
        </div>

        <div class="occasion-grid" style="margin-top:3rem">
          <a class="occasion-card reveal" href="shop.html">
            <img src="img/occasion-birthday.jpg" alt="Bright birthday bouquet of gerberas and ranunculus" width="360" height="480" loading="lazy">
            <div class="oc-body">
              <span>From $46</span>
              <h3>Birthday</h3>
            </div>
          </a>
          <a class="occasion-card reveal d1" href="shop.html">
            <img src="img/occasion-wedding.jpg" alt="Ivory and white bridal bouquet with trailing greenery" width="360" height="480" loading="lazy">
            <div class="oc-body">
              <span>Bespoke</span>
              <h3>Wedding</h3>
            </div>
          </a>
          <a class="occasion-card reveal d2" href="shop.html">
            <img src="img/occasion-sympathy.jpg" alt="White lily and chrysanthemum sympathy arrangement" width="360" height="480" loading="lazy">
            <div class="oc-body">
              <span>From $80</span>
              <h3>Sympathy</h3>
            </div>
          </a>
          <a class="occasion-card reveal" href="shop.html">
            <img src="img/occasion-anniversary.jpg" alt="Romantic red rose anniversary bouquet" width="360" height="480" loading="lazy">
            <div class="oc-body">
              <span>From $74</span>
              <h3>Anniversary</h3>
            </div>
          </a>
          <a class="occasion-card reveal d1" href="shop.html">
            <img src="img/occasion-getwell.jpg" alt="Cheerful get-well basket of yellow freesia and sunflowers" width="360" height="480" loading="lazy">
            <div class="oc-body">
              <span>From $58</span>
              <h3>Get Well</h3>
            </div>
          </a>
          <a class="occasion-card reveal d2" href="shop.html">
            <img src="img/occasion-justbecause.jpg" alt="Casual wildflower posy tied with twine" width="360" height="480" loading="lazy">
            <div class="oc-body">
              <span>From $38</span>
              <h3>Just Because</h3>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- ============================================ FEATURED BOUQUETS -->
    <section class="section" id="shop">
      <div class="container">
        <div class="text-center reveal">
          <span class="eyebrow center">This Week's Blooms</span>
          <h2 class="section-title">Featured bouquets</h2>
          <p class="section-lead">Hand-tied in the studio and ready to send today. Filter by occasion to find the right one.</p>
        </div>

        <div class="filter-bar reveal" data-filter-bar="#featured-grid" role="group" aria-label="Filter bouquets by occasion" style="margin-top:2.4rem">
          <button type="button" class="filter-btn active" data-filter="all" aria-pressed="true">All</button>
          <button type="button" class="filter-btn" data-filter="birthday" aria-pressed="false">Birthday</button>
          <button type="button" class="filter-btn" data-filter="anniversary" aria-pressed="false">Anniversary</button>
          <button type="button" class="filter-btn" data-filter="wedding" aria-pressed="false">Wedding</button>
          <button type="button" class="filter-btn" data-filter="sympathy" aria-pressed="false">Sympathy</button>
          <button type="button" class="filter-btn" data-filter="get-well" aria-pressed="false">Get Well</button>
          <button type="button" class="filter-btn" data-filter="just-because" aria-pressed="false">Just Because</button>
        </div>

        <div class="product-grid" id="featured-grid">
          <!-- 1 -->
          <article class="product-card reveal" data-occasion="birthday">
            <div class="product-media">
              <span class="product-tag">Bestseller</span>
              <img src="img/bouquet-peony.jpg" alt="Blush Peony Bloom bouquet of soft pink peonies" width="400" height="400" loading="lazy">
            </div>
            <div class="product-body">
              <h3>Blush Peony Bloom</h3>
              <p class="note">Fat, ruffled peonies in every shade of pink, softened with dusty miller.</p>
              <div class="product-foot">
                <span class="product-price">$68</span>
                <button type="button" class="add-btn" data-id="peony" data-name="Blush Peony Bloom" data-price="68" data-img="img/bouquet-peony.jpg">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                  <span class="add-label">Add</span>
                </button>
              </div>
            </div>
          </article>
          <!-- 2 -->
          <article class="product-card reveal d1" data-occasion="anniversary">
            <div class="product-media">
              <img src="img/bouquet-garden-rose.jpg" alt="Garden Rose and Eucalyptus bouquet in blush tones" width="400" height="400" loading="lazy">
            </div>
            <div class="product-body">
              <h3>Garden Rose &amp; Eucalyptus</h3>
              <p class="note">Fragrant garden roses layered with silver eucalyptus and waxflower.</p>
              <div class="product-foot">
                <span class="product-price">$74</span>
                <button type="button" class="add-btn" data-id="garden-rose" data-name="Garden Rose &amp; Eucalyptus" data-price="74" data-img="img/bouquet-garden-rose.jpg">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                  <span class="add-label">Add</span>
                </button>
              </div>
            </div>
          </article>
          <!-- 3 -->
          <article class="product-card reveal d2" data-occasion="just-because">
            <div class="product-media">
              <img src="img/bouquet-meadow.jpg" alt="Wild Meadow Bunch of mixed seasonal wildflowers" width="400" height="400" loading="lazy">
            </div>
            <div class="product-body">
              <h3>Wild Meadow Bunch</h3>
              <p class="note">A loose, just-picked gathering of cornflowers, scabiosa and grasses.</p>
              <div class="product-foot">
                <span class="product-price">$52</span>
                <button type="button" class="add-btn" data-id="meadow" data-name="Wild Meadow Bunch" data-price="52" data-img="img/bouquet-meadow.jpg">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                  <span class="add-label">Add</span>
                </button>
              </div>
            </div>
          </article>
          <!-- 4 -->
          <article class="product-card reveal d3" data-occasion="sympathy">
            <div class="product-media">
              <img src="img/bouquet-lily.jpg" alt="White Lily Serenity sympathy arrangement of white lilies" width="400" height="400" loading="lazy">
            </div>
            <div class="product-body">
              <h3>White Lily Serenity</h3>
              <p class="note">Serene white oriental lilies and stock, a gentle way to say you care.</p>
              <div class="product-foot">
                <span class="product-price">$80</span>
                <button type="button" class="add-btn" data-id="lily" data-name="White Lily Serenity" data-price="80" data-img="img/bouquet-lily.jpg">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                  <span class="add-label">Add</span>
                </button>
              </div>
            </div>
          </article>
          <!-- 5 -->
          <article class="product-card reveal" data-occasion="get-well">
            <div class="product-media">
              <img src="img/bouquet-ranunculus.jpg" alt="Sunlit Ranunculus bouquet in warm coral and gold" width="400" height="400" loading="lazy">
            </div>
            <div class="product-body">
              <h3>Sunlit Ranunculus</h3>
              <p class="note">Layered ranunculus in coral and butter yellow to lift any spirit.</p>
              <div class="product-foot">
                <span class="product-price">$58</span>
                <button type="button" class="add-btn" data-id="ranunculus" data-name="Sunlit Ranunculus" data-price="58" data-img="img/bouquet-ranunculus.jpg">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                  <span class="add-label">Add</span>
                </button>
              </div>
            </div>
          </article>
          <!-- 6 -->
          <article class="product-card reveal d1" data-occasion="wedding">
            <div class="product-media">
              <span class="product-tag">Bespoke</span>
              <img src="img/bouquet-bridal.jpg" alt="Bridal Ivory Cascade trailing wedding bouquet" width="400" height="400" loading="lazy">
            </div>
            <div class="product-body">
              <h3>Bridal Ivory Cascade</h3>
              <p class="note">A trailing cascade of ivory roses, ranunculus and trailing amaranthus.</p>
              <div class="product-foot">
                <span class="product-price">$145</span>
                <button type="button" class="add-btn" data-id="bridal" data-name="Bridal Ivory Cascade" data-price="145" data-img="img/bouquet-bridal.jpg">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                  <span class="add-label">Add</span>
                </button>
              </div>
            </div>
          </article>
          <!-- 7 -->
          <article class="product-card reveal d2" data-occasion="birthday">
            <div class="product-media">
              <img src="img/bouquet-dahlia.jpg" alt="Velvet Dahlia bouquet in deep burgundy and plum" width="400" height="400" loading="lazy">
            </div>
            <div class="product-body">
              <h3>Velvet Dahlia</h3>
              <p class="note">Show-stopping dahlias in burgundy and plum with copper foliage.</p>
              <div class="product-foot">
                <span class="product-price">$72</span>
                <button type="button" class="add-btn" data-id="dahlia" data-name="Velvet Dahlia" data-price="72" data-img="img/bouquet-dahlia.jpg">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                  <span class="add-label">Add</span>
                </button>
              </div>
            </div>
          </article>
          <!-- 8 -->
          <article class="product-card reveal d3" data-occasion="anniversary">
            <div class="product-media">
              <img src="img/bouquet-red-rose.jpg" alt="Classic Red Rose Dozen bouquet of deep red roses" width="400" height="400" loading="lazy">
            </div>
            <div class="product-body">
              <h3>Classic Red Rose Dozen</h3>
              <p class="note">Twelve long-stem red roses, the enduring way to say I love you.</p>
              <div class="product-foot">
                <span class="product-price">$85</span>
                <button type="button" class="add-btn" data-id="red-rose" data-name="Classic Red Rose Dozen" data-price="85" data-img="img/bouquet-red-rose.jpg">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                  <span class="add-label">Add</span>
                </button>
              </div>
            </div>
          </article>
        </div>

        <div class="text-center reveal" style="margin-top:3rem">
          <a href="shop.html" class="btn btn-outline">View the full shop</a>
        </div>
      </div>
    </section>

    <!-- ================================================= SUBSCRIPTION -->
    <section class="section subscribe-band" id="subscription">
      <div class="container">
        <div class="text-center reveal">
          <span class="eyebrow center">Weekly Flower Subscription</span>
          <h2 class="section-title">Fresh flowers, delivered on repeat</h2>
          <p class="section-lead">Choose a size, pick a day, and we handle the rest — a new seasonal design at your door every week. Pause or cancel anytime.</p>
        </div>

        <div class="tier-grid">
          <div class="tier-card reveal">
            <h3>The Posy</h3>
            <p class="tier-sub">A petite hand-tied bunch</p>
            <div class="tier-price">$35<small>/week</small></div>
            <ul class="tier-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> 10–12 seasonal stems</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Wrapped in kraft &amp; twine</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Perfect for a desk or nook</li>
            </ul>
            <a href="shop.html" class="btn btn-ghost btn-block" style="color:#fff;border-color:rgba(255,255,255,.35)">Start The Posy</a>
          </div>

          <div class="tier-card featured reveal d1">
            <span class="tier-flag">Most Loved</span>
            <h3>The Bouquet</h3>
            <p class="tier-sub">Our signature weekly size</p>
            <div class="tier-price">$55<small>/week</small></div>
            <ul class="tier-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> 18–22 stems, full &amp; lush</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Feature blooms each week</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Care card &amp; flower food</li>
            </ul>
            <a href="shop.html" class="btn btn-rose btn-block">Start The Bouquet</a>
          </div>

          <div class="tier-card reveal d2">
            <h3>The Statement</h3>
            <p class="tier-sub">A generous designer arrangement</p>
            <div class="tier-price">$90<small>/week</small></div>
            <ul class="tier-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> 30+ premium stems</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Vase-ready, styled to fill a room</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Priority florist's choice</li>
            </ul>
            <a href="shop.html" class="btn btn-ghost btn-block" style="color:#fff;border-color:rgba(255,255,255,.35)">Start The Statement</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ======================================================= STORY -->
    <section class="section" id="story">
      <div class="container">
        <div class="story-grid">
          <div class="story-figure reveal">
            <img src="img/story-studio.jpg" alt="Florist arranging flowers on a wooden workbench inside the Lafemme studio" width="560" height="672" loading="lazy">
            <div class="stamp">
              <div><b>Est.</b><span>2012</span></div>
            </div>
          </div>
          <div class="reveal d1">
            <span class="eyebrow">Our Story</span>
            <h2 class="section-title">A small studio with a big love of flowers</h2>
            <p>Lafemme began as a market stall on Rowan Hill with a single galvanised bucket and a stubborn belief that flowers should be grown well and priced kindly. Fourteen years on, we still cut most of our stems from local growers within a day's drive, and we still tie every bouquet by hand.</p>
            <p>We are a two-person studio at heart — no warehouse, no cold-storage roses flown in from the other side of the world. Just what is beautiful and in season, arranged the way we would want to receive it ourselves.</p>
            <div class="signature">
              Marguerite &amp; Elias
              <small>Founders &amp; head florists</small>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==================================================== SERVICES -->
    <section class="section bg-blush" id="services">
      <div class="container">
        <div class="text-center reveal">
          <span class="eyebrow center">What We Do</span>
          <h2 class="section-title">More than a bunch of flowers</h2>
          <p class="section-lead">From a single stem to a whole ballroom, we bring the same care to every arrangement.</p>
        </div>

        <div class="service-grid" style="margin-top:3rem">
          <div class="service-card reveal">
            <div class="service-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 2s3.5 3.5 3.5 7a3.5 3.5 0 0 1-7 0C8.5 5.5 12 2 12 2z"/><path d="M5 13c2 0 4 1 4 4M19 13c-2 0-4 1-4 4M12 22v-5"/></svg>
            </div>
            <h3>Weddings &amp; Events</h3>
            <p>Bouquets, buttonholes, arches and table designs, planned with you from mood board to the moment you walk down the aisle.</p>
            <a href="shop.html" class="link-arrow">Enquire <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
          </div>

          <div class="service-card reveal d1">
            <div class="service-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="1" y="6" width="15" height="11" rx="1.5"/><path d="M16 9h4l3 3v5h-7z"/><circle cx="6" cy="18" r="2"/><circle cx="18" cy="18" r="2"/></svg>
            </div>
            <h3>Same-Day Delivery</h3>
            <p>Order before 2pm and we hand-deliver across the city the same afternoon, carried upright and kept cool the whole way.</p>
            <a href="shop.html" class="link-arrow">Send flowers <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
          </div>

          <div class="service-card reveal d2">
            <div class="service-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 21V7l9-4 9 4v14"/><path d="M9 21v-6h6v6M3 11h18"/></svg>
            </div>
            <h3>Corporate &amp; Subscriptions</h3>
            <p>Weekly blooms for reception desks, restaurants and studios, invoiced monthly with a florist who knows your space.</p>
            <a href="#subscription" class="link-arrow">See plans <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ===================================================== GALLERY -->
    <section class="section" id="gallery">
      <div class="container">
        <div class="text-center reveal">
          <span class="eyebrow center">From the Studio</span>
          <h2 class="section-title">Arrangement gallery</h2>
          <p class="section-lead">A look at recent bouquets, installations and weddings. Tap any image to view it larger.</p>
        </div>

        <div class="gallery-grid" style="margin-top:3rem">
          <button type="button" class="gallery-item tall reveal" data-lightbox data-full="img/gallery-01.jpg" data-caption="Blush and burgundy bridal bouquet">
            <img src="img/gallery-01.jpg" alt="Blush and burgundy bridal bouquet held by a bride" width="300" height="400" loading="lazy">
            <span class="zoom" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4-4M11 8v6M8 11h6"/></svg></span>
          </button>
          <button type="button" class="gallery-item reveal d1" data-lightbox data-full="img/gallery-02.jpg" data-caption="Table runner of garden roses and candles">
            <img src="img/gallery-02.jpg" alt="Wedding table runner of garden roses and taper candles" width="300" height="200" loading="lazy">
            <span class="zoom" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4-4M11 8v6M8 11h6"/></svg></span>
          </button>
          <button type="button" class="gallery-item wide reveal d2" data-lightbox data-full="img/gallery-03.jpg" data-caption="Spring installation above the studio counter">
            <img src="img/gallery-03.jpg" alt="Hanging spring flower installation above the studio counter" width="600" height="200" loading="lazy">
            <span class="zoom" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4-4M11 8v6M8 11h6"/></svg></span>
          </button>
          <button type="button" class="gallery-item reveal" data-lightbox data-full="img/gallery-04.jpg" data-caption="Buckets of tulips ready for market">
            <img src="img/gallery-04.jpg" alt="Galvanised buckets full of fresh tulips ready for market" width="300" height="200" loading="lazy">
            <span class="zoom" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4-4M11 8v6M8 11h6"/></svg></span>
          </button>
          <button type="button" class="gallery-item reveal d1" data-lightbox data-full="img/gallery-05.jpg" data-caption="Dried flower wreath on a studio door">
            <img src="img/gallery-05.jpg" alt="Dried flower wreath hanging on the studio door" width="300" height="200" loading="lazy">
            <span class="zoom" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4-4M11 8v6M8 11h6"/></svg></span>
          </button>
          <button type="button" class="gallery-item tall reveal d2" data-lightbox data-full="img/gallery-06.jpg" data-caption="Florist wrapping a bouquet in paper">
            <img src="img/gallery-06.jpg" alt="Florist wrapping a finished bouquet in cream paper" width="300" height="400" loading="lazy">
            <span class="zoom" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4-4M11 8v6M8 11h6"/></svg></span>
          </button>
        </div>
      </div>
    </section>

    <!-- ================================================ TESTIMONIALS -->
    <section class="section bg-cream2" id="reviews">
      <div class="container">
        <div class="text-center reveal">
          <span class="eyebrow center">Kind Words</span>
          <h2 class="section-title">Loved by our neighbours</h2>
        </div>

        <div class="quote-grid" style="margin-top:3rem">
          <figure class="quote-card reveal">
            <div class="stars" aria-label="Rated 5 out of 5">★★★★★</div>
            <blockquote>The peonies arrived looking like they were still in the garden. My mum cried. Best florist in the city, no contest.</blockquote>
            <figcaption class="quote-author">
              <img src="img/customer-anna.jpg" alt="Anna Whitfield" width="50" height="50" loading="lazy">
              <div><b>Anna Whitfield</b><span>Birthday delivery</span></div>
            </figcaption>
          </figure>

          <figure class="quote-card reveal d1">
            <div class="stars" aria-label="Rated 5 out of 5">★★★★★</div>
            <blockquote>Marguerite designed our whole wedding — arch, bouquets, tables. It was more beautiful than the picture in my head.</blockquote>
            <figcaption class="quote-author">
              <img src="img/customer-priya.jpg" alt="Priya Nair" width="50" height="50" loading="lazy">
              <div><b>Priya Nair</b><span>Wedding client</span></div>
            </figcaption>
          </figure>

          <figure class="quote-card reveal d2">
            <div class="stars" aria-label="Rated 5 out of 5">★★★★★</div>
            <blockquote>We have the weekly subscription at our café and customers ask about the flowers constantly. Always fresh, never the same twice.</blockquote>
            <figcaption class="quote-author">
              <img src="img/customer-marcus.jpg" alt="Marcus Bell" width="50" height="50" loading="lazy">
              <div><b>Marcus Bell</b><span>Corporate subscriber</span></div>
            </figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- ==================================================== DELIVERY -->
    <section class="section" id="delivery">
      <div class="container">
        <div class="delivery-grid">
          <div class="reveal">
            <span class="eyebrow">Delivery &amp; Areas</span>
            <h2 class="section-title">We deliver across the city</h2>
            <p class="section-lead">Order before 2pm on weekdays for same-day delivery. We hand-carry every bouquet upright and offer a photo on delivery for gifts.</p>
            <ul class="area-list">
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg> Rowan Hill</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg> Old Town</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg> Harbourside</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg> Elm Park</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg> Ashgrove</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg> Meadowbank</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg> Riverside</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg> The Quarter</li>
            </ul>
          </div>

          <div class="delivery-info reveal d1">
            <div class="row-item">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
              <div>
                <h4>Same-day cutoff — 2:00pm</h4>
                <p>Order before 2pm, Monday to Saturday, for delivery that afternoon between 3pm and 7pm.</p>
              </div>
            </div>
            <div class="row-item">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
              <div>
                <h4>Free within 5 miles</h4>
                <p>Delivery is free within five miles of the studio. A flat $8 applies to outer neighbourhoods.</p>
              </div>
            </div>
            <div class="row-item">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
              <div>
                <h4>Photo on delivery</h4>
                <p>Sending a gift? We can text you a photo the moment it is handed over, so you never miss the smile.</p>
              </div>
            </div>
            <div class="row-item">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 3h18v6H3zM3 9v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9M10 13h4"/></svg>
              <div>
                <h4>Studio collection</h4>
                <p>Prefer to pick up? Collect from the shop on Rowan Hill, open Tuesday to Sunday, 9am to 6pm.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================================================== NEWSLETTER -->
    <section class="section-sm" id="newsletter">
      <div class="container">
        <div class="newsletter reveal">
          <span class="eyebrow center" style="color:rgba(255,255,255,.85)">Join the List</span>
          <h2>Bloom notes in your inbox</h2>
          <p>What's in season, care tips, and the occasional subscriber-only bunch. One gentle email a week — no more.</p>
          <form class="news-form" data-validate novalidate>
            <label for="news-email" class="visually-hidden">Email address</label>
            <input type="email" id="news-email" name="email" placeholder="you@example.com" required autocomplete="email">
            <button type="submit" class="btn">Subscribe</button>
          </form>
          <p class="form-msg" role="status" aria-live="polite"></p>
        </div>
      </div>
    </section>
  </main>

  <!-- ======================================================= FOOTER -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.html" class="footer-brand">Lafemme<span class="mark">.</span></a>
          <p>A small flower studio on Rowan Hill, tying seasonal bouquets by hand and delivering them across the city the same day.</p>
          <div class="social-row">
            <a href="#" aria-label="Lafemme on Instagram"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1.2" fill="currentColor" stroke="none"/></svg></a>
            <a href="#" aria-label="Lafemme on Pinterest"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/><path d="M8.5 20c1-3 2.5-8 2.5-8m0 0c-.4-1 0-2.5 1.5-2.5s2 1.3 1.6 3c-.4 2-2 3-3.1 2.5"/></svg></a>
            <a href="#" aria-label="Lafemme on Facebook"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M15 3h-3a4 4 0 0 0-4 4v3H5v4h3v7h4v-7h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
          </div>
        </div>

        <div class="footer-col">
          <h5>Shop</h5>
          <ul>
            <li><a href="shop.html">All bouquets</a></li>
            <li><a href="shop.html">Birthday</a></li>
            <li><a href="shop.html">Weddings</a></li>
            <li><a href="#subscription">Subscriptions</a></li>
            <li><a href="shop.html">Sympathy</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h5>Studio</h5>
          <ul>
            <li><a href="#story">Our story</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#delivery">Delivery areas</a></li>
            <li><a href="#reviews">Reviews</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h5>Visit Us</h5>
          <ul class="footer-contact">
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg> 14 Rowan Hill Lane, Old Town</li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3-8.6A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.6a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.5-1.2a2 2 0 0 1 2.1-.4c.8.3 1.7.6 2.6.7a2 2 0 0 1 1.7 2z"/></svg> (555) 0142 — 3390</li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg> hello@fleur-studio.example</li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg> Tue–Sun, 9am–6pm</li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <span>&copy; 2026 Lafemme Flower Studio. Built on Bootstrap 5.</span>
        <span><a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot; <a href="#">Care Guide</a></span>
      </div>
    </div>
  </footer>

  <!-- ================================================= CART DRAWER -->
  <div class="cart-overlay" aria-hidden="true"></div>
  <aside class="cart-drawer" aria-hidden="true" aria-label="Shopping bag" role="dialog" aria-modal="true">
    <div class="cart-head">
      <h3>Your Bag</h3>
      <button type="button" class="cart-close" aria-label="Close bag">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M18 6 6 18M6 6l12 12"/></svg>
      </button>
    </div>
    <div class="cart-items"></div>
    <div class="cart-foot">
      <div class="cart-total">
        <span class="lbl">Subtotal</span>
        <span class="amt" data-cart-total>$0.00</span>
      </div>
      <p class="cart-note">Delivery calculated at checkout. Free within 5 miles.</p>
      <a href="#" class="btn btn-rose btn-block">Checkout</a>
    </div>
  </aside>

  <!-- ================================================== LIGHTBOX -->
  <div class="lightbox" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Image viewer">
    <button type="button" class="lb-btn lb-close" aria-label="Close image">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M18 6 6 18M6 6l12 12"/></svg>
    </button>
    <button type="button" class="lb-btn lb-prev" aria-label="Previous image">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M15 18 9 12l6-6"/></svg>
    </button>
    <button type="button" class="lb-btn lb-next" aria-label="Next image">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="m9 18 6-6-6-6"/></svg>
    </button>
    <figure style="margin:0">
      <img src="" alt="">
      <figcaption></figcaption>
    </figure>
  </div>

  <script src="{{ asset('assets-guest/js/vendor/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets-guest/js/main.js') }}"></script>

</body>
</html>
