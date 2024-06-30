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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-square-buttons/1.0.0/bootstrap-square-buttons.min.css"
        integrity="sha512-Dzi0zz9zCe2olZNhq+wnzGjO5ILOv8f/yD6j8srW+XGnnv9dUN04eEoIdVHxQqiy8uBn21niIWQpiCzYJEH3yg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    <link href="{{ asset('/home/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/home/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/52b41e6465.js" crossorigin="anonymous"></script>

    <!-- Main CSS File -->
    <link href="{{ asset('/home/assets/css/main.css') }}" rel="stylesheet" />
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="{{ url('') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('/home/assets/img/logo2.png') }}" alt="" />
                <!-- <h1 class="sitename">NF Service</h1> -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li class="navlink-style">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="navlink-style"><a href="{{ url('/services') }}">Services</a></li>
                    <li class="navlink-style"><a href="{{ url('/about-us') }}">About</a></li>
                    <li class="navlink-style">
                        <a href="{{ url('/login') }}"><i style="font-size: 2rem"
                                class="bi bi-person-circle"></i>
                        </a>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>
