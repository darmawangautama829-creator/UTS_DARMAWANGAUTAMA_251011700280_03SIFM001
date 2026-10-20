@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero p-4 p-md-5">
    <span class="badge text-bg-warning rounded-pill mb-3">
        SELAMAT DATANG DI NADA.LOKAL
    </span>

    <h1 class="display-4 fw-bold">
        Temukan Musik, Temukan Cerita.
    </h1>

    <p class="lead text-white-50">
        Jelajahi karya musisi lokal dan temukan lagu
        yang sesuai dengan suasana hatimu.
    </p>

    <a href="{{ route('songs.index') }}"
       class="btn btn-warning btn-lg fw-semibold mt-3">
        Jelajahi Lagu →
    </a>
</section>

<section class="py-5">
    <h2 class="fw-bold">Selamat datang di Nada.Lokal</h2>

    <p class="muted">
        Nada.Lokal merupakan portal musik lokal yang
        menyajikan informasi lagu, artis, album, genre,
        dan tahun rilis dalam satu tempat.
    </p>

    <a href="{{ route('profile') }}"
       class="btn btn-outline-dark">
        Kenali Platform Kami
    </a>
</section>

@endsection