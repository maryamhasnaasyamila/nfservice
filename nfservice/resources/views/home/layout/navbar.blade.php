<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>NF Service</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('/home/assets/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('/home/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/home/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/52b41e6465.js" crossorigin="anonymous"></script>

    <!-- Main CSS File -->
    <link href="{{ asset('/home/assets/css/main.css') }}" rel="stylesheet" />
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="{{ url('/home-page') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('/home/assets/img/logo2.png') }}" alt="" />
                <!-- <h1 class="sitename">NF Service</h1> -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li class="navlink-style">
                        <a href="{{ url('/home-page') }}">Home</a>
                    </li>
                    <li class="navlink-style"><a href="{{ url('/home-page#services') }}">Services</a></li>
                    <li class="navlink-style"><a href="{{ url('/home-page/about-us') }}">About</a></li>
                    <li>
                        <form class="search-box light-background" action="">
                            <input style="border-radius: 5px; padding: 3px; margin: 5px" type="text" name=""
                                id="" placeholder="Search here" />
                        </form>
                    </li>
                    <li class="navlink-style">
                        <a href="{{ url('/home-page/login')}}"><i style="font-size: 2rem" class="bi bi-person-circle"></i>
                        </a>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>
