<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Nada.Lokal') | Portal Musik Lokal</title>

    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        :root {
            --ink: #172033;
            --accent: #d97706;
            --paper: #f7f5f0;
        }

        body {
            background: var(--paper);
            color: var(--ink);
        }

        .navbar-brand {
            letter-spacing: -.04em;
            font-weight: 800;
        }

        .brand-dot {
            color: #fbbf24;
        }

        .nav-link.active {
            color: #fbbf24 !important;
            font-weight: 700;
        }

        .hero {
            background: linear-gradient(120deg, #172033, #34415a);
            color: white;
            border-radius: 1.5rem;
        }

        .song-card {
            border: 0;
            border-radius: 1rem;
            overflow: hidden;
            transition: transform .18s ease;
        }

        .song-card:hover {
            transform: translateY(-4px);
        }

        .cover {
            aspect-ratio: 1 / 1;
            width: 100%;
            object-fit: cover;
        }

        .muted {
            color: #697386;
        }
    </style>
</head>

<body>

    {{-- Header --}}
    @include('partials.header')

    {{-- Flash message --}}
    @if(session('success'))
        <div class="container py-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    {{-- Konten halaman --}}
    <main class="container py-4 py-lg-5">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>