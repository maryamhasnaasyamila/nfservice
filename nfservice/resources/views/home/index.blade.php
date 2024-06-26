@extends('home.layout.index')
@section('content')
    <main class="main">
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
                            <div class="swiper-slide"style="display: flex;
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

        <!-- Stats Section -->
        <section id="stats" class="stats section info-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 order-lg-2 text-center">
                        <h1 class="content-title">
                            Temukan Service Terbaik di Sekitar Anda
                        </h1>
                        <p class="lead">
                            Cari service kendaraan dan elektronik tanpa ribet!
                        </p>
                        <button class="btn-cari-service">Cari Service</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Stats Section -->

        <!-- Blog Posts Section -->
        <section id="blog-posts services" class="blog-posts section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h1 style="color: #93bfcf">Rekomendasi Service</h1>
            </div>
            <!-- End Section Title -->
            <div class="container rekomen-box">
                <div class="row">
                    <div class="col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a href="blog-details.html" class="thumb d-block"><img
                                    src="{{ asset('/home/assets/img/img_h_4.jpg') }}" alt="Image"
                                    class="img-fluid rounded" /></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a href="blog-details.html" class="cat">Service A</a> •
                                    <span class="date">(Jenis Service)</span>
                                </div>
                                <h3>
                                    <a href="blog-details.html">Deskripsi service</a>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
                            <a href="blog-details.html" class="thumb d-block"><img
                                    src="{{ asset('/home/assets/img/img_h_2.jpg') }}" alt="Image"
                                    class="img-fluid rounded" /></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a href="blog-details.html" class="cat">Service A</a> •
                                    <span class="date">(Jenis Service)</span>
                                </div>
                                <h3>
                                    <a href="blog-details.html">Deskripsi service</a>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4 rekomendasi-box">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
                            <a href="blog-details.html" class="thumb d-block"><img
                                    src="{{ asset('/home/assets/img/img_h_3.jpg') }}" alt="Image"
                                    class="img-fluid rounded" /></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a href="blog-details.html" class="cat">Service A</a> •
                                    <span class="date">(Jenis Service)</span>
                                </div>
                                <h3>
                                    <a href="blog-details.html">Deskripsi service</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Blog Posts Section -->

        <hr />
        <!-- Tabs Section -->
        <section id="tabs" class="tabs section">
            <div class="container" style="padding: 1rem">
                <div class="kategori" style="margin: 0; padding: 0rem">
                    <section class="section-kategori">
                        <div style="flex-basis: 50%; text-align: center" class="title-kategori">
                            <h1
                                style="
                    color: #93bfcf;
                    font-size: 2.5rem;
                    align-items: center;
                    margin: auto;
                  ">
                                Kategori Service
                            </h1>
                        </div>
                        <div class="right">
                            <div
                                style="
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    margin-right: 2rem;
                  ">
                                <a href="{{ url('/home-page/service-elektronik') }}"><i
                                        class="fa-solid fa-mobile-screen-button"
                                        style="color: #6096b4; font-size: 4rem"></i></a>
                                <p style="margin: 0.5rem 0 0 0; color: #93bfcf">Elektronik</p>
                            </div>
                            <div>
                                <a href="{{ url('/home-page/service-otomotif') }}"><i class="fa-solid fa-motorcycle"
                                        style="color: #6096b4; font-size: 4rem"></i></a>
                                <p style="margin: 0.5rem 0 0 0; color: #93bfcf">Otomotif</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <!-- /Tabs Section -->
        <hr />

        <!-- Find Service Section -->
        <section id="" class="section find-section">
            <div class="container" style="margin: auto">
                <div class="find-service">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.241610439622!2d106.84187777453303!3d-6.362768562243345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed6178a2b32f%3A0x20d7938791acfd4a!2sSTT%20Terpadu%20Nurul%20Fikri%20(Kampus%20A%20-%20Sekretariat)!5e0!3m2!1sid!2sid!4v1718528018180!5m2!1sid!2sid"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            frameborder="0"></iframe>
                    </div>

                    <div class="form-section">
                        <h1 style="color: #6096b4">Temukan Service</h1>
                        <p style="margin: 1rem 0 1rem 0.5rem; color: #93bfcf">
                            Isi dengan detail yang anda butuhkan
                        </p>
                        <h3
                            style="
                  margin: 2rem 0 1rem 0.5rem;
                  font-size: 1.5rem;
                  color: #6096b4;
                ">
                            Nama Service
                        </h3>
                        <input type="text" placeholder="Contoh: Service Laptop" id="jenisService"
                            style="
                  margin-left: 0.5rem;
                  padding: 0.5rem;
                  width: 15rem;
                  border-radius: 5px;
                  border-color: #d9d9d9;
                " />
                        <h3
                            style="
                  margin: 2rem 0 1rem 0.5rem;
                  font-size: 1.5rem;
                  color: #6096b4;
                ">
                            Lokasi
                        </h3>
                        <input
                            style="
                  margin-left: 0.5rem;
                  padding: 0.5rem;
                  width: 15rem;
                  border-radius: 5px;
                  border-color: #d9d9d9;
                "
                            type="text" placeholder="Masukkan nama kota" id="lokasi" />
                        <br />
                        <button type="button" class="btn-find">Cari</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Blog Posts Section -->
    </main>
@endsection
