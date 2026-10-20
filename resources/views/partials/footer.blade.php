<footer class="container py-4 mt-4 border-top" id="footer">

    <div class="row g-4">

        <div class="col-md-6">
            <a class="navbar-brand fs-4" href="{{ url('/') }}">
                nada<span style="color: #d97706;">.</span>lokal
            </a>

            <p class="muted mt-2 mb-0">
                Menemukan lagu, mengenal musisi,
                dan merayakan musik lokal Indonesia.
            </p>
        </div>
        <!--
        <div class="col-md-3">
            <h6 class="fw-bold">Navigasi</h6>

            <ul class="list-unstyled">
                <li class="mb-2">
                    <a class="navbar-brand fs-4" href="{{ url('/') }}">
                        Home
                    </a>
                </li>

                <li class="mb-2">
                    <a href="{{ route('profile') }}"
                       class="text-decoration-none text-secondary">
                        Profile
                    </a>
                </li>

                <li class="mb-2">
                    <a href="{{ route('songs.index') }}"
                       class="text-decoration-none text-secondary">
                        Jelajahi Lagu
                    </a>
                </li>

                <li class="mb-2">
                    <a href="{{ route('about') }}"
                       class="text-decoration-none text-secondary">
                        About
                    </a>
                </li>
            </ul>
        </div>
        -->
        <div class="col-md-3 offset-md-3">
            <h6 class="fw-bold">Tentang Nada.Lokal</h6>

            <p class="muted small">
                Portal musik lokal untuk mengenal karya,
                genre, album, dan perjalanan musisi Indonesia.
            </p>
        </div>

    </div>

    <hr>

    <div class="d-flex flex-column flex-md-row
                justify-content-between gap-2">

        <small class="text-center">
            &copy; {{ date('Y') }} Nada.Lokal adalah Tugas Project UTS yang Dibuat Oleh Darmawan Gautama.
        </small>
        <!--
        <small>NIM: 251011700280</small>
        -->
    </div>

</footer>