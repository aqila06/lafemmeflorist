/* =====================================================================
   Fleur — vanilla JavaScript (no jQuery, no plugins)
   One function per feature. Guard clauses. Reduced-motion aware.
   ===================================================================== */
(function () {
  "use strict";

  var prefersReduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  var money = function (n) { return "$" + n.toFixed(2); };

  /* ---------------------------------------------------------- Sticky nav */
  function initStickyNav() {
    var nav = document.querySelector(".site-nav");
    if (!nav) return;
    var onScroll = function () {
      nav.classList.toggle("scrolled", window.scrollY > 30);
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
  }

  /* ---------------------------------------------------------- Mobile nav */
  function initMobileNav() {
    var toggle = document.querySelector(".nav-toggle");
    var links = document.querySelector(".nav-links");
    var backdrop = document.querySelector(".nav-backdrop");
    if (!toggle || !links) return;

    var setOpen = function (open) {
      links.classList.toggle("open", open);
      if (backdrop) backdrop.classList.toggle("open", open);
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
      document.body.style.overflow = open ? "hidden" : "";
    };
    toggle.addEventListener("click", function () {
      setOpen(!links.classList.contains("open"));
    });
    if (backdrop) backdrop.addEventListener("click", function () { setOpen(false); });
    links.querySelectorAll("a").forEach(function (a) {
      a.addEventListener("click", function () { setOpen(false); });
    });
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") setOpen(false);
    });
  }

  /* ------------------------------------------------------ Scroll reveal */
  function initReveal() {
    var items = document.querySelectorAll(".reveal");
    if (!items.length) return;
    if (prefersReduced || !("IntersectionObserver" in window)) {
      items.forEach(function (el) { el.classList.add("in"); });
      return;
    }
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("in");
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: "0px 0px -8% 0px" });
    items.forEach(function (el) { io.observe(el); });
  }

  /* ------------------------------------------------------------ Count-up */
  function initCountUp() {
    var nums = document.querySelectorAll("[data-count]");
    if (!nums.length) return;
    if (prefersReduced || !("IntersectionObserver" in window)) {
      nums.forEach(function (el) { el.textContent = el.getAttribute("data-count") + (el.getAttribute("data-suffix") || ""); });
      return;
    }
    var run = function (el) {
      var target = parseFloat(el.getAttribute("data-count"));
      var suffix = el.getAttribute("data-suffix") || "";
      var dur = 1400, start = null;
      var step = function (ts) {
        if (!start) start = ts;
        var p = Math.min((ts - start) / dur, 1);
        var eased = 1 - Math.pow(1 - p, 3);
        el.textContent = Math.round(target * eased) + suffix;
        if (p < 1) requestAnimationFrame(step);
      };
      requestAnimationFrame(step);
    };
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) { run(entry.target); io.unobserve(entry.target); }
      });
    }, { threshold: 0.6 });
    nums.forEach(function (el) { io.observe(el); });
  }

  /* ------------------------------------------------ Occasion / tag filter */
  function initFilter() {
    var bars = document.querySelectorAll("[data-filter-bar]");
    bars.forEach(function (bar) {
      var targetSel = bar.getAttribute("data-filter-bar");
      var grid = document.querySelector(targetSel);
      if (!grid) return;
      var btns = bar.querySelectorAll(".filter-btn");
      btns.forEach(function (btn) {
        btn.addEventListener("click", function () {
          btns.forEach(function (b) { b.classList.remove("active"); b.setAttribute("aria-pressed", "false"); });
          btn.classList.add("active");
          btn.setAttribute("aria-pressed", "true");
          var val = btn.getAttribute("data-filter");
          grid.querySelectorAll("[data-occasion]").forEach(function (card) {
            var show = val === "all" || card.getAttribute("data-occasion") === val;
            card.style.display = show ? "" : "none";
          });
        });
      });
    });
  }

  /* --------------------------------------------------------- Cart drawer */
  function initCart() {
    var STORAGE = "fleur-cart";
    var drawer = document.querySelector(".cart-drawer");
    var overlay = document.querySelector(".cart-overlay");
    var itemsWrap = document.querySelector(".cart-items");
    var totalEl = document.querySelector("[data-cart-total]");
    var countEls = document.querySelectorAll(".cart-count");
    if (!drawer || !itemsWrap) return;

    var cart = [];
    try { cart = JSON.parse(localStorage.getItem(STORAGE)) || []; } catch (e) { cart = []; }

    var save = function () {
      try { localStorage.setItem(STORAGE, JSON.stringify(cart)); } catch (e) {}
    };

    var open = function () {
      drawer.classList.add("open");
      if (overlay) overlay.classList.add("open");
      drawer.setAttribute("aria-hidden", "false");
      document.body.style.overflow = "hidden";
      var c = drawer.querySelector(".cart-close");
      if (c) c.focus();
    };
    var close = function () {
      drawer.classList.remove("open");
      if (overlay) overlay.classList.remove("open");
      drawer.setAttribute("aria-hidden", "true");
      document.body.style.overflow = "";
    };

    var render = function () {
      var count = cart.reduce(function (s, i) { return s + i.qty; }, 0);
      var total = cart.reduce(function (s, i) { return s + i.price * i.qty; }, 0);
      countEls.forEach(function (el) {
        el.textContent = count;
        el.style.display = count ? "" : "none";
      });
      if (totalEl) totalEl.textContent = money(total);

      if (!cart.length) {
        itemsWrap.innerHTML =
          '<div class="cart-empty">' +
          '<svg width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.7 13.4a2 2 0 0 0 2 1.6h9.7a2 2 0 0 0 2-1.6L23 6H6"/></svg>' +
          '<p>Your bag is empty</p>' +
          '<span style="font-size:.9rem;color:var(--stone)">Add a bouquet to brighten someone’s day.</span>' +
          '</div>';
        return;
      }

      var html = "";
      cart.forEach(function (item, idx) {
        html +=
          '<div class="cart-item">' +
            '<img src="' + item.img + '" alt="' + item.name + '" width="64" height="64">' +
            '<div>' +
              '<h4>' + item.name + '</h4>' +
              '<div class="ci-price">' + money(item.price) + '</div>' +
              '<div class="qty" role="group" aria-label="Quantity for ' + item.name + '">' +
                '<button type="button" aria-label="Decrease quantity" data-dec="' + idx + '">−</button>' +
                '<span aria-live="polite">' + item.qty + '</span>' +
                '<button type="button" aria-label="Increase quantity" data-inc="' + idx + '">+</button>' +
              '</div>' +
            '</div>' +
            '<button type="button" class="ci-remove" data-remove="' + idx + '">Remove</button>' +
          '</div>';
      });
      itemsWrap.innerHTML = html;
    };

    var add = function (product) {
      var found = cart.filter(function (i) { return i.id === product.id; })[0];
      if (found) { found.qty += 1; }
      else { cart.push({ id: product.id, name: product.name, price: product.price, img: product.img, qty: 1 }); }
      save(); render(); open();
    };

    itemsWrap.addEventListener("click", function (e) {
      var t = e.target.closest("button");
      if (!t) return;
      if (t.hasAttribute("data-inc")) { cart[+t.getAttribute("data-inc")].qty += 1; }
      else if (t.hasAttribute("data-dec")) {
        var di = +t.getAttribute("data-dec");
        cart[di].qty -= 1;
        if (cart[di].qty < 1) cart.splice(di, 1);
      } else if (t.hasAttribute("data-remove")) {
        cart.splice(+t.getAttribute("data-remove"), 1);
      } else { return; }
      save(); render();
    });

    document.querySelectorAll(".add-btn").forEach(function (btn) {
      btn.addEventListener("click", function () {
        add({
          id: btn.getAttribute("data-id"),
          name: btn.getAttribute("data-name"),
          price: parseFloat(btn.getAttribute("data-price")),
          img: btn.getAttribute("data-img")
        });
        var label = btn.querySelector(".add-label");
        var original = label ? label.textContent : "";
        btn.classList.add("added");
        if (label) label.textContent = "Added";
        setTimeout(function () {
          btn.classList.remove("added");
          if (label) label.textContent = original;
        }, 1200);
      });
    });

    document.querySelectorAll("[data-cart-open]").forEach(function (b) {
      b.addEventListener("click", function (e) { e.preventDefault(); open(); });
    });
    var closeBtn = drawer.querySelector(".cart-close");
    if (closeBtn) closeBtn.addEventListener("click", close);
    if (overlay) overlay.addEventListener("click", close);
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && drawer.classList.contains("open")) close();
    });

    render();
  }

  /* ----------------------------------------------------- Gallery lightbox */
  function initLightbox() {
    var triggers = Array.prototype.slice.call(document.querySelectorAll("[data-lightbox]"));
    var box = document.querySelector(".lightbox");
    if (!triggers.length || !box) return;

    var imgEl = box.querySelector("img");
    var capEl = box.querySelector("figcaption");
    var current = 0;
    var lastFocus = null;

    var show = function (i) {
      current = (i + triggers.length) % triggers.length;
      var t = triggers[current];
      var full = t.getAttribute("data-full") || (t.querySelector("img") && t.querySelector("img").src);
      var cap = t.getAttribute("data-caption") || "";
      imgEl.src = full;
      imgEl.alt = cap;
      capEl.textContent = cap;
    };
    var open = function (i) {
      lastFocus = document.activeElement;
      show(i);
      box.classList.add("open");
      box.setAttribute("aria-hidden", "false");
      document.body.style.overflow = "hidden";
      box.querySelector(".lb-close").focus();
    };
    var close = function () {
      box.classList.remove("open");
      box.setAttribute("aria-hidden", "true");
      document.body.style.overflow = "";
      if (lastFocus) lastFocus.focus();
    };

    triggers.forEach(function (t, i) {
      t.addEventListener("click", function (e) { e.preventDefault(); open(i); });
    });
    box.querySelector(".lb-close").addEventListener("click", close);
    box.querySelector(".lb-prev").addEventListener("click", function () { show(current - 1); });
    box.querySelector(".lb-next").addEventListener("click", function () { show(current + 1); });
    box.addEventListener("click", function (e) { if (e.target === box) close(); });
    document.addEventListener("keydown", function (e) {
      if (!box.classList.contains("open")) return;
      if (e.key === "Escape") close();
      else if (e.key === "ArrowLeft") show(current - 1);
      else if (e.key === "ArrowRight") show(current + 1);
    });
  }

  /* ------------------------------------------------ Shop advanced filters */
  function initShopFilters() {
    var grid = document.querySelector("[data-shop-grid]");
    if (!grid) return;
    var cards = Array.prototype.slice.call(grid.querySelectorAll(".product-card"));
    var occInputs = document.querySelectorAll("[data-shop-occasion]");
    var colInputs = document.querySelectorAll("[data-shop-color]");
    var priceInputs = document.querySelectorAll("[data-shop-price]");
    var sortSel = document.querySelector("[data-shop-sort]");
    var countEl = document.querySelector("[data-shop-count]");
    var emptyEl = grid.querySelector(".empty-note");

    var checked = function (list) {
      return Array.prototype.slice.call(list)
        .filter(function (i) { return i.checked; })
        .map(function (i) { return i.value; });
    };

    var inPrice = function (price, ranges) {
      if (!ranges.length) return true;
      return ranges.some(function (r) {
        var parts = r.split("-");
        var min = parseFloat(parts[0]);
        var max = parts[1] === "plus" ? Infinity : parseFloat(parts[1]);
        return price >= min && price <= max;
      });
    };

    var apply = function () {
      var occ = checked(occInputs);
      var col = checked(colInputs);
      var pr = checked(priceInputs);
      var visible = 0;
      cards.forEach(function (card) {
        var cardOcc = (card.getAttribute("data-occasion") || "").split(" ");
        var cardCol = card.getAttribute("data-color") || "";
        var cardPrice = parseFloat(card.getAttribute("data-price"));
        var ok = (!occ.length || occ.some(function (o) { return cardOcc.indexOf(o) > -1; })) &&
                 (!col.length || col.indexOf(cardCol) > -1) &&
                 inPrice(cardPrice, pr);
        card.style.display = ok ? "" : "none";
        if (ok) visible++;
      });
      if (countEl) countEl.textContent = visible;
      if (emptyEl) emptyEl.hidden = visible !== 0;
      sortCards();
    };

    var sortCards = function () {
      if (!sortSel) return;
      var mode = sortSel.value;
      var shown = cards.filter(function (c) { return c.style.display !== "none"; });
      shown.sort(function (a, b) {
        var pa = parseFloat(a.getAttribute("data-price"));
        var pb = parseFloat(b.getAttribute("data-price"));
        if (mode === "price-low") return pa - pb;
        if (mode === "price-high") return pb - pa;
        if (mode === "name") return a.getAttribute("data-name").localeCompare(b.getAttribute("data-name"));
        return (+a.getAttribute("data-order")) - (+b.getAttribute("data-order"));
      });
      shown.forEach(function (c) { grid.appendChild(c); });
    };

    [occInputs, colInputs, priceInputs].forEach(function (list) {
      Array.prototype.slice.call(list).forEach(function (i) { i.addEventListener("change", apply); });
    });
    if (sortSel) sortSel.addEventListener("change", sortCards);

    var clearBtn = document.querySelector("[data-shop-clear]");
    if (clearBtn) clearBtn.addEventListener("click", function () {
      [occInputs, colInputs, priceInputs].forEach(function (list) {
        Array.prototype.slice.call(list).forEach(function (i) { i.checked = false; });
      });
      apply();
    });

    // Mobile filter drawer
    var panel = document.querySelector(".shop-filters");
    var openBtn = document.querySelector("[data-filters-open]");
    if (panel && openBtn) {
      openBtn.addEventListener("click", function () { panel.classList.toggle("open"); });
      var cl = panel.querySelector("[data-filters-close]");
      if (cl) cl.addEventListener("click", function () { panel.classList.remove("open"); });
    }

    apply();
  }

  /* --------------------------------------------------------- Form validate */
  function initForms() {
    document.querySelectorAll("[data-validate]").forEach(function (form) {
      var msg = form.querySelector(".form-msg");
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        var email = form.querySelector('input[type="email"]');
        var ok = email && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim());
        if (!ok) {
          if (msg) { msg.textContent = "Please enter a valid email address."; msg.style.color = "#ffe0e0"; }
          if (email) email.focus();
          return;
        }
        if (msg) { msg.textContent = "Thank you — fresh blooms are on their way to your inbox."; msg.style.color = "#fff"; }
        form.reset();
      });
    });
  }

  /* ---------------------------------------------------------------- Init */
  function init() {
    initStickyNav();
    initMobileNav();
    initReveal();
    initCountUp();
    initFilter();
    initCart();
    initLightbox();
    initShopFilters();
    initForms();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();
