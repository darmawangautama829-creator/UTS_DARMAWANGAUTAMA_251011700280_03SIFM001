@extends('layouts.app')

@section('title', 'About Nada.Lokal')

@section('content')

<section class="hero p-4 p-md-5 mb-4">
    <span class="badge text-bg-warning rounded-pill mb-3">
        ABOUT US
    </span>

    <h1 class="display-5 fw-bold">
        Musik lokal, cerita yang dekat.
    </h1>

    <p class="lead text-white-50 mb-0">
        Setiap lagu memiliki cerita.
        Nada.Lokal hadir untuk membantu kamu menemukannya.
    </p>
</section>

<div class="row g-4">

    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-body p-4">
                <h2 class="h5 fw-bold">Visi</h2>

                <p class="muted mb-0">
                    Menjadi ruang digital untuk menjelajahi
                    dan mengenal beragam karya musik lokal.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-body p-4">
                <h2 class="h5 fw-bold">Misi</h2>

                <p class="muted mb-0">
                    Menyediakan informasi lagu, artis, album,
                    genre, durasi, dan tahun rilis dalam
                    tampilan yang sederhana.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-body p-4">
                <h2 class="h5 fw-bold">Teknologi</h2>

                <p class="muted mb-0">
                    Laravel sebagai framework,
                    Blade untuk template, Bootstrap untuk
                    tampilan, dan MySQL untuk penyimpanan data.
                </p>
            </div>
        </div>
    </div>

</div>

<div class="card border-0 shadow-sm rounded-4 mt-4">
    <div class="card-body p-4">
        <h2 class="h4 fw-bold">Jelajahi Nada.Lokal</h2>

        <p class="muted">
            Temukan lagu favoritmu dan kenali lebih jauh
            informasi di balik setiap karya.
        </p>

        <a href="{{ route('songs.index') }}" class="btn btn-dark">
            Jelajahi Lagu →
        </a>
    </div>
</div>

@endsection