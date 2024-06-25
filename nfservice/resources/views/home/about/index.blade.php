@extends('home.layout.about')
@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-12">
                        <h1 class="page-title-heading">About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="custom-breadcrumb breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home-page') }}">Home</a></li>
                                <li class="breadcrumb-item active current" aria-current="page">
                                    About
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- About 2 Section -->
        <section id="about-2" class="about-2 section">
            <div class="container">
                <div class="content">
                    <div class="img"
                        style="
                display: flex;
                justify-content: center;
                margin-top: -3rem;
                margin-bottom: -2rem;
              ">
                        <img src="{{ asset('/home/assets/img/logo1.png') }}'" alt="circle image" class="img-fluid"
                            width="45%" style="margin-top: -5rem; margin-bottom: -2rem" />
                    </div>

                    <div class="px-3 about-nfservice">
                        <p class="lead" style="text-align: justify">
                            NF Service berkomitmen untuk menyediakan layanan perbaikan
                            terbaik dengan harga yang kompetitif. Kami memahami betapa
                            pentingnya kendaraan, laptop, dan perangkat elektronik dalam
                            kehidupan sehari-hari Anda, oleh karena itu kami selalu berusaha
                            memberikan layanan yang cepat, efisien, dan berkualitas tinggi.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About 2 Section -->
        <hr />
        <!-- Team Section -->
        <section id="team" class="team section">
            <div class="site-section slider-team-wrap">
                <div class="container">
                    <div class="slider-nav d-flex justify-content-end mb-3">
                        <a href="#" class="js-prev js-custom-prev"><i class="bi bi-arrow-left-short"></i></a>
                        <a href="#" class="js-next js-custom-next"><i class="bi bi-arrow-right-short"></i></a>
                    </div>

                    <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
                        <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "1",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "navigation": {
                    "nextEl": ".js-custom-next",
                    "prevEl": ".js-custom-prev"
                  },
                  "breakpoints": {
                    "640": {
                      "slidesPerView": 2,
                      "spaceBetween": 30
                    },
                    "768": {
                      "slidesPerView": 3,
                      "spaceBetween": 30
                    },
                    "1200": {
                      "slidesPerView": 3,
                      "spaceBetween": 30
                    }
                  }
                }
              </script>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team">
                                    <div class="pic">
                                        <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid" />
                                    </div>
                                    <h3 clas="">
                                        <a href="#"><span class="">Muhammad Zidan</span></a>
                                    </h3>
                                    <span class="d-block position">Product Owner</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team">
                                    <div class="pic">
                                        <img src="assets/img/team/team-4.jpg" alt="Image" class="img-fluid" />
                                    </div>
                                    <h3 clas="">
                                        <a href="#"><span class="">Maryam Hasnaa' S.</span></a>
                                    </h3>
                                    <span class="d-block position">Scrum Master</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team">
                                    <div class="pic">
                                        <img src="assets/img/team/team-4.jpg" alt="Image" class="img-fluid" />
                                    </div>
                                    <h3 clas="">
                                        <a href="#"><span class="">Jamilatun Khoerunnisa</span></a>
                                    </h3>
                                    <span class="d-block position">Developer</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team">
                                    <div class="pic">
                                        <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid" />
                                    </div>
                                    <h3 clas="">
                                        <a href="#"><span class="">Anang Febryan</span></a>
                                    </h3>
                                    <span class="d-block position">UI/UX Designer</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team">
                                    <div class="pic">
                                        <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid" />
                                    </div>
                                    <h3 clas="">
                                        <a href="#"><span class="">Abdullah Al Wafi</span></a>
                                    </h3>
                                    <span class="d-block position">Developer</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team">
                                    <div class="pic">
                                        <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid" />
                                    </div>
                                    <h3 clas="">
                                        <a href="#"><span class="">Alvi Sahri</span></a>
                                    </h3>
                                    <span class="d-block position">Developer</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team">
                                    <div class="pic">
                                        <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid" />
                                    </div>
                                    <h3 clas="">
                                        <a href="#"><span class="">Muhammad Risqi</span></a>
                                    </h3>
                                    <span class="d-block position">Copywriter</span>
                                </div>
                            </div>
                            <!-- <div class="swiper-slide"></div> -->
                        </div>
                    </div>
                </div>
                <!-- /.container -->
            </div>
        </section>
        <!-- /Team Section -->
    </main>
@endsection
