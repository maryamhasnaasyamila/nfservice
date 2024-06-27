@extends('home.layout.index')
@section('content')
    <main>
        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container">
                <div class="row">
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="display: flex;
                justify-content: center;">
                                <img src="{{ asset('home/assets/img/image-1.png') }}" alt="Image" class="img-fluid"
                                    style="width: 80%; height: auto; border-radius: 10px" />
                            </div>
                            <div class="swiper-slide" style="display: flex;
                justify-content: center;">
                                <img src="{{ asset('home/assets/img/image-1.png') }}" alt="Image" class="img-fluid"
                                    style="width: 80%; height: auto; border-radius: 10px" />
                            </div>
                            <div
                                class="swiper-slide"style="display: flex;
                                                                                                                                                                                                justify-content: center;">
                                <img src="{{ asset('home/assets/img/image-1.png') }}" alt="Image" class="img-fluid"
                                    style="width: 80%; height: auto; border-radius: 10px" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- /About Section -->
        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section">

            <img src="{{ asset('/home/assets/img/bg-blue.jpg') }}" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h2>Temukan Service Terbaik di Sekitar Anda</h2>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                            <a class="cta-btn" href="#">Cari Service</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-laptop"></i>

                        </div>
                        <div>
                            <h4 class="title">Kategori Elektronik</h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                            <a href="{{ url('/home-page/service-elektronik') }}" class="readmore stretched-link"><span>Show
                                    All</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-car-front-fill"></i>

                        </div>
                        <div>
                            <h4 class="title">Kategori Otomotif</h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat tarad limino ata</p>
                            <a href="{{ url('/home-page/service-elektronik') }}" class="readmore stretched-link"><span>Show
                                    All</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->
                </div>

            </div>

        </section><!-- /Featured Services Section -->
        <hr>
        <!-- Services Section -->
        <section id="services" class="services section">

            <div class="container section-title-rekomen" data-aos="fade-up">
                <h2>Rekomendasi Service</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('/home/assets/img/service-1.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <h3>Nama Service</h3>
                            <p>Deskripsi Service</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('/home/assets/img/service-2.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <h3><a href="#" class="stretched-link">Nama Service</a></h3>
                            <p>Deskripsi Service</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('/home/assets/img/service-3.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <h3><a href="#" class="stretched-link">Nama Service</a></h3>
                            <p>Deskripsi Service</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('/home/assets/img/service-4.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <h3><a href="#" class="stretched-link">Nama Service</a></h3>
                            <p>Deskripsi Service</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('/home/assets/img/service-5.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <h3>Nama Service</h3>
                            <p>Deskripsi Service</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('/home/assets/img/service-6.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <h3><a href="#" class="stretched-link">Nama Service</a></h3>
                            <p>Deskripsi Service</p>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>

        </section><!-- /Services Section -->
    </main>
@endsection
