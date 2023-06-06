<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gvyc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>

<body>
    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('images/Logo.png') }}"
                    alt="Logopaw"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#facilities">FACILITY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">CONTACT US</a>
                    </li>
                </ul>
                <div class="navbar-login text-center">
                    <a href="{{ route('login') }}" class="btn-login py-2 px-5 fs-6  ">LOGIN</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- MENU -->
    <section class="menu">
        <div class="container">
            <div class="row">
                <div class="judul-menu" id="menu">
                    <p>Menu</p>
                </div>
            </div>
            <div class="row">
                @foreach ($menus as $m)
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="gelato">
                                    <p class="w-100">Gelato</p>
                                </div>
                                <div class="gelato-image">
                                    <a href="{{ url('/') }}">
                                        @if ($m->foto_menu != null)
                                            <img width="100%" src="{{ asset('storage/' . $m->foto_menu) }}">
                                        @else
                                            <img width="100%" src="{{ url('images/gelato1.png') }}" type='image'>
                                        @endif
                                    </a>
                                </div>
                                <div class="keterangan">
                                    <div class="nama-gelato">{{ $m->nama_menu }}</div>
                                    <div class="keterangan-gelato">2 scoops</div>
                                </div>
                                <div class="harga-gelato">IDR {{ $m->harga_menu }},00-</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="view-more">
                    <a href="/" class="btn-more text-decoration-none py-2 px-5">Back</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
    @foreach ($cafes as $c)
        <div class="container" id="footer">
            <div class="footer-content">
                <div class="address">
                    <a href="https://goo.gl/maps/4DzsuF11WK599bsP6"><img src="{{ url('images/maps.png') }}" alt=""></a>
                    <p>{{ $c->alamat_cafe }}</p>
                </div>&emsp;&emsp;
                <div class="address">
                    <a href="{{ url('/') }}"><img src="{{ url('images/Call.png') }}" alt=""></a>
                    <p>{{ $c->no_telepon }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
