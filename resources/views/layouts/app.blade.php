<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'StepUp | Sports Shoe Store')</title>

    {{-- Bootstrap lokal --}}
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f5f5f5;
            color: #171717;
            min-height: 100vh;
        }

        /* NAVBAR */
        .navbar {
            background-color: #111;
            padding: 15px 0;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.12);
        }

        .navbar-brand {
            font-weight: 900;
            letter-spacing: 3px;
            color: #fff !important;
            font-size: 26px;
        }

        .navbar-brand span {
            color: #888 !important;
        }

        .navbar-nav .nav-link {
            color: #ccc !important;
            margin-left: 12px;
            padding: 9px 12px !important;
            border-radius: 5px;
            transition: 0.3s;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            background-color: #292929;
            color: #fff !important;
        }

        /* AREA KONTEN DAN LOGO LATAR */
        .page-background {
            position: relative;
            min-height: 75vh;
            isolation: isolate;
        }

        .page-background::before {
            content: "";
            position: fixed;
            inset: 0;
            z-index: -1;
            background-image: url("{{ asset('assets/images/stepup-logo.png') }}");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: min(70vw, 650px);
            opacity: 0.045;
            pointer-events: none;
        }

        .content-wrapper {
            position: relative;
            min-height: 75vh;
        }

        /* JUDUL BAGIAN */
        .section-title {
            font-weight: 900;
            letter-spacing: 1.5px;
        }

        /* KARTU PRODUK */
        .shoe-card {
            border: 1px solid #e9e9e9;
            border-radius: 12px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .shoe-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.13);
        }

        .shoe-card img {
            width: 100%;
            height: 230px;
            object-fit: contain;
            padding: 15px;
            background-color: #fff;
        }

        .shoe-card .card-body {
            padding: 18px;
        }

        .shoe-card h5 {
            font-size: 17px;
            line-height: 1.5;
        }

        /* TOMBOL */
        .btn-stepup {
            display: inline-block;
            background-color: #111;
            color: #fff;
            border: 1px solid #111;
            padding: 10px 22px;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-stepup:hover {
            background-color: #333;
            border-color: #333;
            color: #fff;
        }

        /* AREA UMUM */
        .section-padding {
            padding-top: 55px;
            padding-bottom: 55px;
        }

        .content-box {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
        }

        /* FOOTER */
        .site-footer {
            background-color: #111;
            color: #ddd;
            padding: 35px 0 25px;
            text-align: center;
            margin-top: 30px;
        }

        .site-footer h5 {
            color: #fff;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .site-footer p {
            margin: 7px 0;
        }

        .footer-line {
            width: 55px;
            height: 3px;
            background-color: #777;
            margin: 15px auto;
        }

        /* GAMBAR DETAIL PRODUK */
        .shoe-detail-image {
            width: 100%;
            max-height: 450px;
            object-fit: contain;
            background-color: #fff;
            border-radius: 12px;
            padding: 20px;
        }

        /* RESPONSIVE */
        @media (max-width: 991px) {
            .navbar-nav .nav-link {
                margin-left: 0;
                margin-top: 5px;
            }

            .navbar-collapse {
                padding-top: 15px;
            }
        }

        @media (max-width: 768px) {
            .page-background::before {
                background-size: 90vw;
            }

            .shoe-card img {
                height: 190px;
            }

            .navbar-brand {
                font-size: 22px;
            }

            .section-padding {
                padding-top: 35px;
                padding-bottom: 35px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">

            <a class="navbar-brand" href="{{ route('home') }}">
                STEPUP<span>.</span>
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarStepUp"
                aria-controls="navbarStepUp"
                aria-expanded="false"
                aria-label="Buka navigasi">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarStepUp">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('shoes.*') ? 'active' : '' }}"
                            href="{{ route('shoes.index') }}">
                            Shoes
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}"
                            href="{{ route('categories.index') }}">
                            Categories
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">
                            About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">
                            Contact
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    {{-- KONTEN HALAMAN --}}
    <main class="page-background">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </main>

    {{-- FOOTER --}}
    <footer class="site-footer">
        <div class="container">

            <h5>STEPUP SPORTS SHOE STORE</h5>

            <div class="footer-line"></div>

            <p>Temukan sepatu yang mendukung setiap langkahmu.</p>

            <p class="small text-secondary">
                Koleksi sepatu untuk olahraga dan gaya sehari-hari.
            </p>

            <p class="small mt-4">
                &copy; {{ date('Y') }} StepUp. All Rights Reserved.
            </p>

        </div>
    </footer>

    {{-- Bootstrap JavaScript lokal --}}
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    @stack('scripts')

</body>
</html>