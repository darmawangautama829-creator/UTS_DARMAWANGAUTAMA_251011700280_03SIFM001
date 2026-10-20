@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<section class="hero p-4 p-md-5 mb-4">
    <span class="badge text-bg-warning rounded-pill mb-3">
        PROFIL PLATFORM
    </span>

    <h1 class="display-5 fw-bold">
        Tentang Nada.Lokal
    </h1>

    <p class="lead text-white-50 mb-0">
        Mengenal identitas dan tujuan portal musik lokal Indonesia.
    </p>
</section>

<div class="row g-4">

    <div class="col-md-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-body p-4">
                <h2 class="h4 fw-bold">Siapa Kami?</h2>

                <p class="muted">
                    Nada.Lokal adalah konsep portal musik yang
                    dirancang untuk membantu pengunjung menemukan
                    lagu, mengenal artis, melihat informasi album,
                    dan menjelajahi berbagai genre musik.
                </p>

                <p class="muted mb-0">
                    Platform ini dikembangkan sebagai proyek
                    frontend menggunakan Laravel, Blade Template,
                    dan Bootstrap.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-body p-4">
                <h2 class="h4 fw-bold">Identitas Proyek</h2>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <strong>Nama:</strong> Nada.Lokal
                    </li>

                    <li class="list-group-item px-0">
                        <strong>Tema:</strong> Portal Musik Lokal
                    </li>

                    <li class="list-group-item px-0">
                        <strong>Mahasiswa:</strong> Darmawan Gautama
                    </li>

                    <li class="list-group-item px-0">
                        <strong>NIM:</strong> 251011700280
                    </li>

                    <li class="list-group-item px-0">
                        <strong>Teknologi:</strong> Laravel, PHP,
                        MySQL, Blade, Bootstrap
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

<div class="mt-4">
    <a href="{{ route('songs.index') }}" class="btn btn-dark">
        Mulai Jelajahi Lagu →
    </a>
</div>

@endsection