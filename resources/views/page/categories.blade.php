@extends('layouts.app')

@section('title', 'Categories | StepUp')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Kategori Sepatu</h1>
        <p class="text-muted">
            Temukan sepatu yang sesuai dengan kebutuhan olahraga dan aktivitas harianmu.
            StepUp menyediakan berbagai kategori sepatu untuk menunjang kenyamanan dan gaya.
        </p>
    </div>

    <div class="row g-4 justify-content-center">
        @forelse ($categories as $category)
            <div class="col-md-4 col-sm-6">
                <div class="card h-100 shadow-sm border-0 text-center">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">
                            {{ $category }}
                        </h5>

                        <p class="card-text text-muted">
                            Jelajahi koleksi sepatu kategori {{ $category }}
                            dan temukan pilihan yang sesuai dengan kebutuhanmu.
                        </p>

                        <a href="{{ route('shoes.index') }}"
                           class="btn btn-dark">
                            Lihat Koleksi
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">
                    Belum ada kategori sepatu yang tersedia.
                </p>
            </div>
        @endforelse
    </div>

</div>
@endsection