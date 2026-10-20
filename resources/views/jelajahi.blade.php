@extends('layouts.app')

@section('title', 'Jelajahi Lagu')

@section('content')
<section class="hero p-4 p-md-5 mb-5">
    <div class="row align-items-center g-4">
        <div class="col-lg-8">
            <span class="badge rounded-pill text-bg-warning mb-3">MUSIK INDONESIA, CERITA KITA</span>
            <h1 class="display-4 fw-bold mb-3">Temukan lagu yang terasa seperti <span style="color:#fbbf24">rumah.</span></h1>
            <p class="lead text-white-50 mb-0">Jelajahi rilisan, kenali musisi, dan temukan suara baru dari skena musik lokal.</p>
        </div>
        <div class="col-lg-4">
            <form action="{{ route('songs.index') }}" method="GET" role="search">
                <label for="q" class="form-label text-white">Cari lagu, artis, atau genre</label>
                <div class="input-group input-group-lg">
                    <input id="q" type="search" name="q" value="{{ $search }}" class="form-control" placeholder="Contoh: Indie Pop">
                    <button class="btn btn-warning fw-semibold" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
</section>

<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-2 mb-4">
    <div>
        <p class="text-uppercase small fw-bold muted mb-1">KURASI MINGGU INI</p>
        <h2 class="fw-bold mb-0" id="lagu">{{ $search ? 'Hasil pencarian' : 'Jelajahi Semua Lagu' }}</h2>
    </div>
    <span class="muted">{{ $songs->total() }} lagu ditemukan</span>
</div>

@if($songs->count())
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
        @foreach($songs as $song)
            <div class="col">
                <article class="card song-card h-100 shadow-sm">
                    <a href="{{ route('songs.show', $song) }}" aria-label="Lihat detail {{ $song->title }}">
                        <img class="cover" src="{{ asset('assets/images/' . $song->image) }}" alt="Cover {{ $song->title }}">
                    </a>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center gap-2 mb-2">
                            <span class="badge rounded-pill text-bg-light">{{ $song->genre }}</span>
                            <small class="muted">{{ $song->release_year }}</small>
                        </div>
                        <h3 class="h5 fw-bold mb-1">
                            <a class="text-decoration-none text-dark" href="{{ route('songs.show', $song) }}">{{ $song->title }}</a>
                        </h3>
                        <p class="muted mb-3">{{ $song->artist }}</p>
                        <div class="d-flex justify-content-between align-items-center border-top pt-3">
                            <small class="muted">{{ $song->album }}</small>
                            <small class="fw-semibold">{{ $song->duration }}</small>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 px-4 pb-4">
                        <a href="{{ route('songs.show', $song) }}" class="btn btn-outline-dark w-100">Lihat detail <span aria-hidden="true">→</span></a>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
    <div class="mt-5 d-flex justify-content-center">
    {{ $songs->links('pagination::bootstrap-5') }}
    </div>
@else
    <div class="text-center py-5">
        <h3 class="fw-bold">Belum ada lagu yang cocok</h3>
        <p class="muted">Coba kata kunci lain, misalnya nama artis atau genre.</p>
        <a href="{{ route('songs.index') }}" class="btn btn-dark">Tampilkan semua lagu</a>
    </div>
@endif
@endsection
