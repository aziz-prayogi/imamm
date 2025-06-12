@extends('template.navbar')

@push('style')
<link rel="stylesheet" href="{{ asset('css/landing_page.css') }}">
@endpush

@section('content')
<main>
            <div class="home_main">
            <div class="right position-relative">
                <div class="textContainer">
                <h1 class="fs-1 fw-bolder position-absolute top-50 start-50 translate-middle w-2 text-white">we protect your <br> <span class="typed .text-success"></span> </h1>
                </div>
            </div>
            <div class="left position-relative">
                {{-- slide dimulai --}}
                <section class="containerrr position-absolute top-50 start-50 translate-middle">
                    <div class="slider-wrapper">
                        <div class="slider" id="slider">
                            <img id="slide-1" src="{{ asset('images/images3.png') }}"
                                alt="3D rendering of an imaginary orange planet in space" />
                            <img id="slide-2" src="{{ asset('images/images.jpg') }}"
                                alt="3D rendering of an imaginary green planet in space" />
                            <img id="slide-3" src="{{ asset('images/images2.jpg') }}"
                                alt="3D rendering of an imaginary blue planet in space" />
                            <img id="slide-4" src="{{ asset('images/images2.jpg') }}"
                                alt="3D rendering of an imaginary blue planet in space" />
                        </div>
                        <div class="slider-nav">
                            <a href="#slide-1"></a>
                            <a href="#slide-2"></a>
                            <a href="#slide-3"></a>
                            <a href="#slide-4"></a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection

@push('script')
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        const slider = document.getElementById('slider');
        const slides = slider.querySelectorAll('img');
        const totalSlides = slides.length;
        let currentIndex = 0;

        function autoScroll() {
            currentIndex++;
            if (currentIndex >= totalSlides) {
                currentIndex = 0;
            }
            const slideWidth = slider.clientWidth;
            slider.scrollTo({
                left: slideWidth * currentIndex,
                behavior: 'smooth'
            });
        }

        setInterval(autoScroll, 3000); // ganti setiap 3 detik
        var typed = new Typed(".typed", {
            strings : ["car", "office", "house", "meeting"],
            typeSpeed : 150,
            backSpeed : 150,
            loop : true,

        })
    </script>

@endpush
