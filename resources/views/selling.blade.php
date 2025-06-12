@extends('template.navbar')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/selling.css') }}">
@endpush

@section('content')
  <header class="hero-section text-center bg-color">
        <div class="container">
            <h1 class="display-3 fw-bold mb-3">Penawaran Spesial Minggu Ini!</h1>
            <p class="lead mb-4">Dapatkan diskon hingga 50% untuk produk pilihan kami. Jangan lewatkan kesempatan ini!</p>
            <a href="#produk" class="btn btn-warning btn-lg me-3">Lihat Produk</a>
            <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Hubungi Kami</a>
        </div>
    </header>

    <section id="produk" class="py-5 bg-color">
        <div class="container">
            <h2 class="text-center mb-5 display-4 fw-bold text-white shadow-sm">Produk Unggulan Kami</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card h-100 shadow-sm product-card">
                        <img src="{{ asset('images/images2.jpg') }}" class="card-img-top" alt="Produk A">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">fire alarm</h5>
                            <p class="card-text text-muted">terhindar dari sijago merah dengan fitur tambahan pemberitahuan jika battery melemah atau harus diganti agar selalu ready untuk melaksanakan tugas nya</p>
                            <div class="mt-auto">
                                <span class="price">$100.00</span>
                                <span class="old-price">$159.99</span>
                                <a href="#" class="btn btn-primary d-block mt-3">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm product-card">
                        <img src="{{ asset('images/images1.png') }}" class="card-img-top" alt="Produk B">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Smart A.I. camera</h5>
                            <p class="card-text text-muted">selalu berjaga untuk anda agar terhindar dari hal yang tidak diinginkan, dengan teknologi A.I. yang siap menjadi assistent anda</p>
                            <div class="mt-auto">
                                <span class="price">$150.00</span>
                                <a href="#" class="btn btn-primary d-block mt-3">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm product-card">
                        <img src="{{ asset('images/images3.png') }}" class="card-img-top" alt="Produk C">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">car cam</h5>
                            <p class="card-text text-muted">mendeteksi pergerakan yang mencurigakan sehingga dengan sentiasa menjaga mobil kesayangan anda</p>
                            <div class="mt-auto">
                                <span class="price">$55.00</span>
                                <span class="old-price">$75.00</span>
                                <a href="#" class="btn btn-primary d-block mt-3">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </section>



@endsection
