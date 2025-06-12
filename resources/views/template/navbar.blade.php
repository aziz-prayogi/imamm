<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cypher Tech</title>
    @stack('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/landing_page.css') }}">
    <style>
        body{
            background-color: #1B262C;
        }
    </style>


</head>


<body>
    <header>
        <nav class="position-fixed start-0 top-0 end-0 d-flex justify-content-around" >
            <div><h5 class="text-white p-1">cypher tech</h5></div>
            <div>
                <ul id="simple-list-example" class="simple-list-example-scrollspy text-center list-inline d-flex justify-content-around w-2">
                    <li><a class="list-group-item list-inline-item text-white p-1 mx-5" href="{{ route('landing_page') }}">home</a></li>
                    <li><a class="list-group-item list-inline-item text-white p-1 mx-5" href="{{ route('selling') }}">selling</a></li>
                    <li><a class="list-group-item list-inline-item text-white p-1 mx-5" href="{{ route('contact') }}">contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
<main>
    @yield('content')
</main>
     <footer class="bg-dark text-white py-4 mt-5 position-sticky">
        <div class="container text-center">
            <p>&copy; 2025 cypher tech. Hak Cipta Dilindungi Undang-Undang.</p>
            <p>
                <a href="#" class="text-white text-decoration-none me-3">Kebijakan Privasi</a> |
                <a href="#" class="text-white text-decoration-none ms-3">Syarat dan Ketentuan</a>
            </p>
        </div>
    </footer>

</body>
@stack('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
</script>

</html>
