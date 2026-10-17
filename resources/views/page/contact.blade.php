@extends('layouts.app')

@section('title', 'Contact | StepUp')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Hubungi Kami</h1>

        <p class="text-muted">
            Punya pertanyaan mengenai koleksi sepatu StepUp?
            Silakan gunakan formulir berikut untuk menyampaikan pesan.
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-md-5">

                    <form action="#" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                placeholder="Masukkan nama lengkap"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="nama@email.com"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">
                                Subjek
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="subject"
                                name="subject"
                                placeholder="Topik pesan"
                                required
                            >
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">
                                Pesan
                            </label>

                            <textarea
                                class="form-control"
                                id="message"
                                name="message"
                                rows="5"
                                placeholder="Tuliskan pesan kamu di sini"
                                required
                            ></textarea>
                        </div>

                        <button type="button"
                                class="btn btn-dark w-100"
                                onclick="alert('Formulir ini belum terhubung ke sistem pengiriman pesan.')">
                            Kirim Pesan
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection