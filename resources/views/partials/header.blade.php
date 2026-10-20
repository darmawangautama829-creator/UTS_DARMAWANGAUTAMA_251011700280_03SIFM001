<nav class="navbar navbar-expand-lg navbar-dark" style="background: #172033;">
  <div class="container py-2 d-flex justify-content-between align-items-center">
    
    {{-- Brand / Logo --}}
    <a class="navbar-brand fs-4" href="{{ route('home') }}">
      nada<span class="brand-dot">.</span>lokal
    </a>

    {{-- Menu Navigasi --}}
    <ul class="navbar-nav d-flex flex-row gap-3 ms-auto mb-0">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('songs.index') }}">Jelajahi Lagu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('about') }}">About</a>
      </li>
    </ul>

  </div>
</nav>