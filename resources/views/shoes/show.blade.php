@extends('layouts.app')

@section('title', $shoe->name . ' | StepUp')

@section('content')

<section class="container py-5">

    {{-- BREADCRUMB --}}
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}" class="text-dark">
                    Home
                </a>
            </li>

            <li class="breadcrumb-item">
                <a href="{{ route('shoes.index') }}" class="text-dark">
                    Shoes
                </a>
            </li>

            <li class="breadcrumb-item active" aria-current="page">
                Detail Produk
            </li>
        </ol>
    </nav>

    {{-- DETAIL PRODUK --}}
    <div class="row g-5 align-items-center">

        {{-- GAMBAR SEPATU --}}
        <div class="col-lg-6">

            <div class="detail-image-box">

                <span class="badge bg-dark detail-badge">
                    {{ $shoe->sport_type }}
                </span>

                <img
                    src="{{ asset('assets/images/' . $shoe->image) }}"
                    alt="{{ $shoe->name }}"
                    class="detail-image"
                    onerror="this.onerror=null;this.src='https://placehold.co/700x600/f5f5f5/222222?text=StepUp+Shoes';"
                >

            </div>

        </div>

        {{-- INFORMASI SEPATU --}}
        <div class="col-lg-6">

            <span class="text-secondary small fw-bold text-uppercase">
                {{ $shoe->brand }} Collection
            </span>

            <h1 class="display-5 fw-bold mt-2 mb-3">
                {{ $shoe->name }}
            </h1>

            <div class="detail-divider mb-4"></div>

            <p class="text-secondary">
                Pilihan sepatu untuk melengkapi gaya dan aktivitasmu.
                Temukan kenyamanan dan gaya dalam koleksi StepUp.
            </p>

            {{-- HARGA --}}
            <div class="price-box my-4">
                <span class="text-secondary small d-block mb-1">
                    Harga Produk
                </span>

                <h2 class="fw-bold mb-0">
                    Rp {{ number_format($shoe->price, 0, ',', '.') }}
                </h2>
            </div>

            {{-- INFORMASI PRODUK --}}
            <div class="product-information">

                <div class="information-row">
                    <span>Merek</span>
                    <strong>{{ $shoe->brand }}</strong>
                </div>

                <div class="information-row">
                    <span>Kategori</span>
                    <strong>{{ $shoe->sport_type }}</strong>
                </div>

                <div class="information-row">
                    <span>Rentang Ukuran</span>
                    <strong>{{ $shoe->size_range }}</strong>
                </div>

                <div class="information-row">
                    <span>Ketersediaan</span>
                    <strong class="text-success">Informasi produk tersedia</strong>
                </div>

            </div>

            {{-- TOMBOL --}}
            <div class="d-flex flex-wrap gap-3 mt-4">

                <a
                    href="{{ route('shoes.index') }}"
                    class="btn btn-dark px-4 py-3"
                >
                    &larr; Kembali ke Koleksi
                </a>

                <a
                    href="{{ route('home') }}"
                    class="btn btn-outline-dark px-4 py-3"
                >
                    Halaman Home
                </a>

            </div>

            <p class="text-secondary small mt-4">
                STEPUP SPORTS SHOE STORE — Temukan sepatu pilihanmu.
            </p>

        </div>

    </div>

</section>

@endsection

@push('styles')
<style>
    .detail-image-box {
        position: relative;
        min-height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fff;
        border: 1px solid #eaeaea;
        border-radius: 16px;
        overflow: hidden;
        padding: 25px;
    }

    .detail-image {
        width: 100%;
        height: 400px;
        object-fit: contain;
    }

    .detail-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        padding: 9px 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
        z-index: 1;
    }

    .detail-divider {
        width: 75px;
        height: 4px;
        background: #111;
    }

    .price-box {
        background: #f5f5f5;
        border-radius: 10px;
        padding: 20px;
    }

    .information-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 15px;
        padding: 15px 0;
        border-bottom: 1px solid #e8e8e8;
    }

    .information-row span {
        color: #777;
    }

    .information-row strong {
        text-align: right;
    }

    @media (max-width: 768px) {
        .detail-image-box {
            min-height: 280px;
        }

        .detail-image {
            height: 280px;
        }

        .display-5 {
            font-size: 2rem;
        }
    }
</style>
@endpush