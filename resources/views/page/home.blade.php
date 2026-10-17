@extends('layouts.app')

@section('title', 'Home | StepUp Sports Shoe Store')

@section('content')

{{-- HERO SECTION --}}
<section class="container section-padding">
    <div class="row align-items-center">

        <div class="col-lg-7">
            <span class="badge bg-dark px-3 py-2 mb-3">
                STEPUP SPORTS SHOE STORE
            </span>

            <h1 class="display-3 fw-bold mb-4">
                STEP UP YOUR
                <span class="text-secondary">GAME.</span>
            </h1>

            <p class="lead text-secondary mb-4">
                Temukan koleksi sepatu pilihan yang menggabungkan
                kenyamanan, gaya, dan performa untuk menemani
                setiap langkahmu.
            </p>

            <a href="{{ route('shoes.index') }}"
               class="btn-stepup me-2">
                Lihat Koleksi Sepatu
            </a>

            <a href="{{ route('about') }}"
               class="btn btn-outline-dark mt-2">
                Tentang Kami
            </a>
        </div>

        <div class="col-lg-5 mt-5 mt-lg-0">
            <div class="content-box text-center">

                <img
                    src="{{ asset('assets/images/stepup-logo.png') }}"
                    alt="Logo StepUp Sports Shoe Store"
                    class="img-fluid"
                    style="max-height: 300px; object-fit: contain;"
                    onerror="this.style.display='none';"
                >

                <h4 class="fw-bold mt-3">STEPUP</h4>

                <p class="text-secondary mb-0">
                    Made by: Emmanuel Adam Karunia<br>
                    NIM: 251011700474<br>
                    Kelas: 03SIFM002
                </p>

            </div>
        </div>

    </div>
</section>


{{-- KEUNGGULAN TOKO --}}
<section class="container pb-5">
    <div class="row g-4">

        <div class="col-md-4">
            <div class="content-box text-center h-100">
                <h5 class="fw-bold">Koleksi Pilihan</h5>
                <p class="text-secondary mb-0">
                    Berbagai pilihan sepatu untuk olahraga
                    dan kegiatan sehari-hari.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="content-box text-center h-100">
                <h5 class="fw-bold">Gaya Modern</h5>
                <p class="text-secondary mb-0">
                    Desain sepatu yang mendukung gaya
                    dan kenyamananmu.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="content-box text-center h-100">
                <h5 class="fw-bold">Pilihan Aktivitas</h5>
                <p class="text-secondary mb-0">
                    Temukan sepatu sesuai kebutuhan
                    olahraga dan aktivitasmu.
                </p>
            </div>
        </div>

    </div>
</section>


{{-- PRODUK TERBARU --}}
<section class="container section-padding">

    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">

        <div>
            <h2 class="section-title">KOLEKSI SEPATU</h2>
            <p class="text-secondary">
                Pilihan sepatu dari StepUp Sports Shoe Store.
            </p>
        </div>

        <a href="{{ route('shoes.index') }}"
           class="btn btn-outline-dark mb-3">
            Lihat Semua Sepatu
        </a>

    </div>

    <div class="row g-4">

        @forelse ($shoes as $shoe)

            <div class="col-sm-6 col-lg-3">
                <div class="shoe-card h-100">

                    <img
                        src="{{ asset('assets/images/' . $shoe->image) }}"
                        alt="{{ $shoe->name }}"
                        onerror="this.onerror=null; this.src='https://placehold.co/600x400?text=StepUp+Shoes';"
                    >

                    <div class="card-body">

                        <span class="badge bg-secondary mb-2">
                            {{ $shoe->sport_type }}
                        </span>

                        <h5 class="fw-bold">
                            {{ $shoe->name }}
                        </h5>

                        <p class="text-secondary small mb-2">
                            Brand: {{ $shoe->brand }}
                        </p>

                        <p class="fw-bold fs-5">
                            Rp {{ number_format($shoe->price, 0, ',', '.') }}
                        </p>

                        <a
                            href="{{ route('shoes.show', $shoe->id) }}"
                            class="btn-stepup d-block text-center"
                        >
                            Lihat Detail
                        </a>

                    </div>
                </div>
            </div>

        @empty

            <div class="col-12">
                <div class="alert alert-warning">
                    Belum ada produk sepatu.

                    Periksa data pada database dan jalankan seeder
                    jika diperlukan.
                </div>
            </div>

        @endforelse

    </div>

</section>

@endsection