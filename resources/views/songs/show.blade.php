@extends('layouts.app')

@section('title', $song->title)

@section('content')
<nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('songs.index') }}">Jelajahi Lagu</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $song->title }}</li>
    </ol>
</nav>

<div class="row g-4 g-lg-5 align-items-center">
    <div class="col-md-6 col-lg-5">
        <img src="{{ asset('assets/images/' . $song->image) }}" alt="Cover {{ $song->title }}" class="img-fluid rounded-4 shadow">
    </div>
    <div class="col-md-6 col-lg-7">
        <span class="badge text-bg-warning rounded-pill mb-3">{{ $song->genre }}</span>
        <h1 class="display-4 fw-bold mb-2">{{ $song->title }}</h1>
        <p class="fs-4 muted mb-4">{{ $song->artist }}</p>
        <div class="card border-0 rounded-4 shadow-sm mb-4">
            <div class="card-body p-4">
                <div class="row g-3">
                    <div class="col-6"><small class="muted d-block">Album</small><strong>{{ $song->album }}</strong></div>
                    <div class="col-6"><small class="muted d-block">Tahun rilis</small><strong>{{ $song->release_year }}</strong></div>
                    <div class="col-6"><small class="muted d-block">Genre</small><strong>{{ $song->genre }}</strong></div>
                    <div class="col-6"><small class="muted d-block">Durasi</small><strong>{{ $song->duration }}</strong></div>
                </div>
            </div>
        </div>
        <p class="muted">Informasi lagu ini ditampilkan dari database yang diisi melalui seeder. Cover merupakan ilustrasi lokal untuk kebutuhan demonstrasi proyek.</p>
        <a href="{{ route('songs.index') }}" class="btn btn-dark btn-lg">← Kembali ke daftar lagu</a>
    </div>
</div>
@endsection
