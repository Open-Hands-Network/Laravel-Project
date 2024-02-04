<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'layout')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand " href="/">
                <img src="{{ asset('assets/images/icon.png') }}" class="icon" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/organization">charities</a>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link" href="#">profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">About us </a>
                    </li>
                </ul>
                <form class="d-flex">
                    <!-- <input class="form-control me-2" type="search" placeholder=" Search " aria-label="Search"> -->
                    <nav class="navbar navbar-light bg-light">
                        <form class="container-fluid">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                                <input type="text" class="form-control" placeholder="search......"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </form>
                    </nav>
                    <div type="button" class=" position-relative m-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class="bi bi-bell" viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                        </svg>
                        <span class="position-absolute top-0  start-60 translate-middle badge rounded-pill bg-primary">
                            3
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </div>
                    <img src="{{ asset('assets/images/avatar.png') }}" class="rounded-circle m-3"
                        style=" width: 35px; height: 35px;" alt="Cinque Terre">
                    <img src="down_2486595.png" alt="">
                </form>
            </div>
        </div>
    </nav>
    <div>
        @yield("content","layout-content")
    </div>

    <footer class="container-fluid bg-light">
        <div class="container text-center mt-5 ">
            <div class="row  ">
                <p class="text-center"><img src="{{ asset('assets/images/logo-no-background.png') }}" class="w-25"
                        alt=""></p>
                <h3 class="text-center"> subscribe to our newsletter </h3><br>
            </div>

            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="input-group   mb-3">

                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>

                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1">
                        <span class="input-group-text btn btn-primary  " id="basic-addon1">subscribe</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col m-5">
                    <h3 class="text-center ">Customer segment</h3><br><br>
                    <p class="text-center">Any one in need</p>
                </div>

                <div class="col m-5">
                    <h3 class="text-center">Our SDGs</h3><br><br>
                    <p class="text-center">We implement all SDGs <br> in our innovation </p>
                </div>

                <div class="col m-5">
                    <h3 class="text-center">Company</h3><br><br>
                    <p class="text-center">About us <br>Contact Us </p>

                </div>

            </div>

            <div class="row mt-5 ">
                <p>&copy; 2024 NileByte . privacy . Terms . Sitemap</p>
            </div>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/8c78e594e2.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
