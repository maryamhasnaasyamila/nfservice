@extends('home.layout.service-elektronik')
@section('content')
    <main>
        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-12">
                        <h1 class="page-title-heading">Layanan Service Elektronik</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="custom-breadcrumb breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home-page') }}">Home</a></li>
                                <li class="breadcrumb-item active current" aria-current="page">
                                    Service Elektronik
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->
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
        <hr> <br>

        <section id="filter" class="filter section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="filter-container">
                            <h3>Kategori Elektronik</h3>
                            <div class="filter-item d-flex">
                                <button class="btn-category-elektronik">Handphone</button>
                                <button class="btn-category-elektronik">Laptop</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="filter-container">
                            <h3>Batas Harga</h3>
                            <div class="filter-item d-flex">
                                <input type="number" name="min-price" id="min-price" class="input-price">
                                <span> - </span>
                                <input type="number" name="max-price" id="max-price" class="input-price">
                                <button class="btn-price">submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <hr>
        <!-- Faq Section -->
        <section id="faq" class="faq section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="faq-container">
                            <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                                <img src="" alt="gambar-service">
                                {{-- <i class="faq-icon bi bi-question-circle"></i> --}}
                                <h3>Nama Service</h3>
                                <div class="faq-content">
                                    <p>Alamat lengkap lokasi service</p>
                                    <p>Rp. (Harga service)</p>
                                    <div class="btn-view-service">
                                        <button class="btn-lihat-toko">View Profil</button>
                                        <button class="btn-lihat-detail">Video Detail</button>
                                    </div>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                                <img src="" alt="gambar-service">

                                {{-- <i class="faq-icon bi bi-question-circle"></i> --}}
                                <h3>Nama Service</h3>
                                <div class="faq-content">
                                    <p>Alamat lengkap lokasi service</p>
                                    <p>Rp. (Harga service)</p>
                                    <div class="btn-view-service">
                                        <button class="btn-lihat-toko">View Profil</button>
                                        <button class="btn-lihat-detail">Video Detail</button>
                                    </div>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Nama Service</h3>
                                <div class="faq-content">
                                    <p>Alamat lengkap lokasi service</p>
                                    <p>Rp. (Harga service)</p>
                                    <div class="btn-view-service">
                                        <button class="btn-lihat-toko">View Profil</button>
                                        <button class="btn-lihat-detail">Video Detail</button>
                                    </div>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                                <img src="" alt="gambar-service">
                                {{-- <i class="faq-icon bi bi-question-circle"></i> --}}
                                <h3>Nama Service</h3>
                                <div class="faq-content">
                                    <p>Alamat lengkap lokasi service</p>
                                    <p>Rp. (Harga service)</p>
                                    <div class="btn-view-service">
                                        <button class="btn-lihat-toko">View Profil</button>
                                        <button class="btn-lihat-detail">Video Detail</button>
                                    </div>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Faq Section -->
    </main>
@endsection
