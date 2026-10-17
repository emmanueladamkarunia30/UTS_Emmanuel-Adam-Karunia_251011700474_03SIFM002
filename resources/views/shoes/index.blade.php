@extends('layouts.app')

@section('title', 'Shoes Collection | StepUp')

@section('content')

<section class="container py-5">

    {{-- HEADER HALAMAN --}}
    <div class="text-center mb-5">
        <span class="badge bg-dark px-3 py-2 mb-3">
            STEPUP COLLECTION
        </span>

        <h1 class="display-5 fw-bold">
            SHOES <span class="text-secondary">COLLECTION.</span>
        </h1>

        <p class="text-secondary mt-3">
            Temukan sepatu yang sesuai dengan gaya dan aktivitasmu.
        </p>

        <div class="mx-auto mt-3"
             style="width:70px;height:4px;background:#111;">
        </div>
    </div>

    {{-- JUMLAH PRODUK --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h5 class="fw-bold mb-1">Semua Produk</h5>
            <p class="text-secondary small mb-0">
                Koleksi sepatu pilihan StepUp.
            </p>
        </div>

        <span class="badge bg-dark px-3 py-2">
            {{ $shoes->total() }} Produk
        </span>
    </div>

    {{-- DAFTAR SEPATU --}}
    <div class="row g-4">

        @forelse ($shoes as $shoe)

            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">

                <div class="card shoe-card h-100">

                    {{-- GAMBAR SEPATU --}}
                    <div class="shoe-image-wrapper">

                        <img
                            src="{{ asset('assets/images/' . $shoe->image) }}"
                            alt="{{ $shoe->name }}"
                            class="shoe-product-image"
                            loading="lazy"
                            onerror="this.onerror=null;this.src='https://placehold.co/600x400/f5f5f5/222222?text=StepUp+Shoes';"
                        >

                        <span class="badge bg-dark shoe-category">
                            {{ $shoe->sport_type }}
                        </span>

                    </div>

                    {{-- INFORMASI PRODUK --}}
                    <div class="card-body d-flex flex-column p-4">

                        <p class="text-secondary small mb-2">
                            {{ $shoe->brand }}
                        </p>

                        <h5 class="fw-bold shoe-product-name">
                            {{ $shoe->name }}
                        </h5>

                        <div class="small text-secondary mb-3">
                            <span>Ukuran:</span>

                            <span class="fw-semibold">
                                {{ $shoe->size_range }}
                            </span>
                        </div>

                        <div class="mt-auto">

                            <h5 class="fw-bold mb-3">
                                Rp {{ number_format($shoe->price, 0, ',', '.') }}
                            </h5>

                            <a
                                href="{{ route('shoes.show', $shoe->id) }}"
                                class="btn btn-stepup w-100"
                            >
                                Lihat Detail
                                <span class="ms-1">&rarr;</span>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12">
                <div class="bg-white rounded-3 shadow-sm text-center p-5">

                    <h4 class="fw-bold">Belum Ada Produk</h4>

                    <p class="text-secondary mb-0">
                        Produk sepatu belum tersedia.
                        Silakan periksa database dan data seeder.
                    </p>

                </div>
            </div>

        @endforelse

    </div>

    {{-- PAGINATION: PREVIOUS, NOMOR HALAMAN, NEXT --}}
    @if ($shoes->hasPages())

        <div class="pagination-wrapper mt-5">

            <div class="text-center text-secondary small mb-3">
                Menampilkan {{ $shoes->firstItem() }}–{{ $shoes->lastItem() }}
                dari {{ $shoes->total() }} produk
            </div>

            <div class="d-flex justify-content-center">
                {{ $shoes->onEachSide(1)->links('pagination::bootstrap-5') }}
            </div>

        </div>

    @endif

    {{-- TOMBOL KEMBALI --}}
    <div class="text-center mt-5">

        <a href="{{ route('home') }}"
           class="btn btn-outline-dark px-4 py-2">
            &larr; Kembali ke Home
        </a>

    </div>

</section>

@endsection

{{-- STYLE HALAMAN --}}
@push('styles')

<style>
    .shoe-card {
        border: 1px solid #ededed;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .shoe-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.10);
    }

    .shoe-image-wrapper {
        position: relative;
        height: 220px;
        background: #fff;
        overflow: hidden;
        border-bottom: 1px solid #f0f0f0;
    }

    .shoe-product-image {
        width: 100%;
        height: 100%;
        object-fit: contain;
        padding: 15px;
        transition: transform 0.3s ease;
    }

    .shoe-card:hover .shoe-product-image {
        transform: scale(1.04);
    }

    .shoe-category {
        position: absolute;
        top: 12px;
        left: 12px;
        font-size: 11px;
        padding: 7px 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .shoe-product-name {
        font-size: 16px;
        line-height: 1.5;
        min-height: 48px;
    }

    .btn-stepup {
        display: inline-block;
        background: #111;
        color: #fff;
        border: 1px solid #111;
        border-radius: 6px;
        padding: 10px 15px;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.2s ease;
    }

    .btn-stepup:hover {
        background: #333;
        border-color: #333;
        color: #fff;
    }

    /* PAGINATION STEPUP */
    .pagination-wrapper .pagination {
        gap: 6px;
        flex-wrap: wrap;
    }

    .pagination-wrapper .page-link {
        color: #111;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 9px 15px;
        background: #fff;
        box-shadow: none;
    }

    .pagination-wrapper .page-link:hover {
        color: #fff;
        background: #333;
        border-color: #333;
    }

    .pagination-wrapper .page-item.active .page-link {
        color: #fff;
        background: #111;
        border-color: #111;
    }

    .pagination-wrapper .page-item.disabled .page-link {
        color: #aaa;
        background: #f5f5f5;
        border-color: #eee;
    }

    @media (max-width: 576px) {
        .shoe-image-wrapper {
            height: 200px;
        }

        .display-5 {
            font-size: 2rem;
        }

        .pagination-wrapper .page-link {
            padding: 7px 11px;
        }
    }
</style>

@endpush