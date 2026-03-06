@extends('layouts.app')

@section('content')
<div class="gh-landing">

  <header class="gh-topbar">
    <a class="gh-brand" href="{{ url('/') }}">
      <span class="gh-brand-strong">GH</span>
      <span class="gh-brand-italic">Delights</span>
    </a>

    <nav class="gh-navlinks">
      <a href="#menu">Menu</a>
      <a href="#story">Our Story</a>
      <a href="#reviews">Reviews</a>

      @auth
        <a class="gh-pill" href="{{ url('/home') }}">Dashboard</a>
      @else
        <a class="gh-pill" href="{{ route('login') }}">Order Now</a>
      @endauth
    </nav>
  </header>

  <section class="gh-hero">
    <div class="gh-hero-left">
      <div class="gh-eyebrow">
        <span class="gh-line"></span>
        <span class="gh-eyebrow-text">FRESHLY BAKED DAILY</span>
        <span class="gh-line"></span>
      </div>

      <h1 class="gh-title">
        Handcrafted with<br />
        <span class="gh-title-accent">Love &amp; Flour</span>
      </h1>

      <p class="gh-subtitle">
        Every pastry at GH Delights is made from scratch using the
        finest ingredients — because you deserve something truly
        special with every bite.
      </p>

      <div class="gh-cta">
        <a class="gh-btn gh-btn-solid" href="#menu">Explore Our Menu</a>
        <a class="gh-btn gh-btn-outline" href="#story">Our Story</a>
      </div>
    </div>

    <div class="gh-hero-right" aria-hidden="true">
      <div class="gh-glow-circle"></div>

      <div class="gh-croissant">
        <!-- Inline SVG croissant -->
        <svg width="210" height="210" viewBox="0 0 256 256" fill="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <radialGradient id="g1" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(140 90) rotate(120) scale(150 150)">
              <stop stop-color="#FFD37A"/>
              <stop offset="0.55" stop-color="#F6B257"/>
              <stop offset="1" stop-color="#D97A4A"/>
            </radialGradient>
            <linearGradient id="g2" x1="70" y1="130" x2="180" y2="140" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F2A865" stop-opacity="0.35"/>
              <stop offset="1" stop-color="#7A2E2E" stop-opacity="0.25"/>
            </linearGradient>
          </defs>

          <path d="M76 162c-14-12-22-28-22-46 0-22 12-43 33-56 18-11 40-14 61-10 15 3 26 10 34 19 7 8 11 18 11 29 0 11-4 21-11 30-8 10-19 18-34 23-10 3-21 5-32 4-15-1-29-6-40-13z"
                fill="url(#g1)"/>
          <path d="M73 96c10 10 24 17 40 18 18 2 35-3 48-13" stroke="url(#g2)" stroke-width="10" stroke-linecap="round"/>
          <path d="M66 128c10 10 24 17 40 18 18 2 35-3 48-13" stroke="url(#g2)" stroke-width="10" stroke-linecap="round"/>
          <path d="M88 68c-8-9-18-15-30-18-10 8-18 18-23 29 6 11 16 20 28 24" fill="#F4B06A" opacity="0.75"/>
          <path d="M190 110c13-6 23-16 29-28-5-11-13-21-23-29-12 3-22 9-30 18" fill="#F2A864" opacity="0.75"/>
        </svg>
      </div>

      <div class="gh-sparkle"></div>

      <div class="gh-badge">
        <div class="gh-badge-big">100%</div>
        <div class="gh-badge-small">Homemade<br />&amp; Fresh</div>
      </div>
    </div>
  </section>

  <section id="menu" class="gh-section">
    <h2 class="gh-section-title">Menu</h2>
    <p class="gh-section-sub">
      This is your landing preview. Once your product module is ready, we’ll connect this section to your Items/Products list.
    </p>

    @auth
      <a class="gh-btn gh-btn-solid" href="{{ url('/home') }}">Go to Dashboard</a>
    @else
      <a class="gh-btn gh-btn-solid" href="{{ route('register') }}">Create an Account</a>
    @endauth
  </section>

  <section id="story" class="gh-section">
    <h2 class="gh-section-title">Our Story</h2>
    <p class="gh-section-sub">
      GH Delights is a cozy pastry shop bringing you freshly baked treats every day.
    </p>
  </section>

  <section id="reviews" class="gh-section">
    <h2 class="gh-section-title">Reviews</h2>
    <p class="gh-section-sub">
      Coming soon — customer ratings and reviews.
    </p>
  </section>

</div>
@endsection