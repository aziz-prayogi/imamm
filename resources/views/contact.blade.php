@extends('template.navbar')

@section('content')

@push('style')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

<section id="kontak" class="py-5">
        <div class="container mainn">
            <h2 class="text-center mb-5 display-4 fw-bold text-white">Hubungi Kami</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p class="text-center mb-4 text-white">Punya pertanyaan atau ingin tahu lebih banyak tentang produk kami? Jangan ragu untuk menghubungi kami!</p>
                    <form>
                        <div class="mb-3">
                            <label for="namaLengkap" class="form-label text-white">Nama Lengkap</label>
                            <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan nama lengkap Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-white">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="contoh@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label text-white">Pesan Anda</label>
                            <textarea class="form-control" id="pesan" rows="5" placeholder="Tulis pesan Anda di sini" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



@endsection
