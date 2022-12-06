<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/d07e17cfce.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">


</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-0" style="background: var(--main)">
                <div
                    class="d-flex flex-column align-items-center justify-content-center p-0 align-items-sm-start text-white min-vh-100">
                    <div class="bg-white w-100 text-center">
                        <br>
                        <a class="navbar-brand" href="https://imgbb.com/"><img
                                src="https://i.ibb.co/10VsgHS/Logopaw.png" alt="Logopaw"></a>
                        <br>
                        <br>
                    </div>
                    <br>
                    <br>
                    <ul class="nav nav-pills w-100 px-4 flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item w-100 mb-1">
                            <a href="/admin" class="text-decoration-none w-100 border-0 text-dark sidebarBtn"
                                style="background: var(--main)">
                                <i class="fas fa-dashboard"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item w-100">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item" style="background: transparent; border: none">
                                    <button class="sidebarBtn border-0  py-3 d-flex justify-content-between w-100"
                                        style="background: var(--main)" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true">
                                        <span>
                                            <i class="fas fa-gear"></i>
                                            Product
                                        </span>
                                        <i class="fas fa-stream align-self-center"></i>
                                    </button>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body bg-white rounded-3">
                                            <a class="text-dark text-decoration-none" href="/admin/menu">Menu</a> <br>
                                            <a class="text-dark text-decoration-none" href="/admin/cafe">Cafe</a> <br>
                                            <a class="text-dark text-decoration-none"
                                                href="/admin/facilities">Facilities</a><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <hr>
                    <a href="{{ route('logout') }}" class="text-decoration-none text-white ms-4 sidebarBtn mb-5"><i
                            class="fas fa-arrow-left text-white"></i> Logout</a>

                </div>
            </div>
            <div class="col py-3">
                @yield('content')
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>

</html>
