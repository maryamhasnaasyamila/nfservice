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
        <section id="" class="filter section light-background">
            <div class="filter-container">
                <select class="filter-elektronik" name="" id="">
                    <option class="option-filter" value="Jenis Elektronik" disabled>Jenis Elektronik</option>
                    <option class="option-filter" value="Laptop">Handphone</option>
                    <option class="option-filter" value="Laptop">Laptop</option>
                </select>

                <select class="filter-otomotif" name="" id="">
                    <option class="option-filter" value="Jenis Otomotif" disabled>Jenis Otomotif</option>
                    <option class="option-filter" value="Motor">Motor</option>
                    <option class="option-filter" value="Mobil">Mobil</option>
                </select>
                <form action="#" class="form-search" data-aos="fade-up" data-aos-delay="200">
                    <input type="text" class="form-control" placeholder="Cari layanan atau lokasi..">
                    <button type="submit" class="btn btn-info">Search</button>
                </form>
            </div>
        </section>
        <!-- Faq Section -->
        <section id="faq" class="faq section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">

                        <div class="faq-container">
                            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="flex-service-list">
                                    <img src="{{ asset('/home/assets/img/service-baterai.jpg') }}" class="img-pp-service"
                                        alt="gambar-service">
                                    <div class="detail-service-list">
                                        <h3>Nama Service</h3>
                                        <div class="btn-tags-service">
                                            <a href="" class="btn btn-sm tag1">#Tags 1</a>
                                            <a href="" class="btn btn-sm tag2">#Tags 2</a>
                                            <a href="" class="btn btn-sm tag3">#Tags 3</a>
                                            <a href="" class="btn btn-sm tag4">#Tags 4</a>
                                            <a href="" class="btn btn-sm tag5">#Tags 5</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <p>Alamat lengkap lokasi service</p>
                                    <p>Rp. (Harga service)</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="flex-service-list">
                                    <img src="{{ asset('/home/assets/img/service-baterai.jpg') }}" class="img-pp-service"
                                        alt="gambar-service">
                                    <div class="detail-service-list">
                                        <h3>Nama Service</h3>
                                        <div class="btn-tags-service">
                                            <a href="" class="btn btn-sm tag1">#Tags 1</a>
                                            <a href="" class="btn btn-sm tag2">#Tags 2</a>
                                            <a href="" class="btn btn-sm tag3">#Tags 3</a>
                                            <a href="" class="btn btn-sm tag4">#Tags 4</a>
                                            <a href="" class="btn btn-sm tag5">#Tags 5</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <p>Alamat lengkap lokasi service</p>
                                    <p>Rp. (Harga service)</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="flex-service-list">
                                    <img src="{{ asset('/home/assets/img/service-baterai.jpg') }}" class="img-pp-service"
                                        alt="gambar-service">
                                    <div class="detail-service-list">
                                        <h3>Nama Service</h3>
                                        <div class="btn-tags-service">
                                            <a href="" class="btn btn-sm">#Tags 1</a>
                                            <a href="" class="btn btn-sm">#Tags 2</a>
                                            <a href="" class="btn btn-sm">#Tags 3</a>
                                            <a href="" class="btn btn-sm">#Tags 4</a>
                                            <a href="" class="btn btn-sm">#Tags 5</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <p>Alamat lengkap lokasi service</p>
                                    <p>Rp. (Harga service)</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                                <div class="flex-service-list">
                                    <img src="{{ asset('/home/assets/img/service-baterai.jpg') }}" class="img-pp-service"
                                        alt="gambar-service">
                                    <div class="detail-service-list">
                                        <h3>Nama Service</h3>
                                        <div class="btn-tags-service">
                                            <a href="" class="btn btn-sm">#Tags 1</a>
                                            <a href="" class="btn btn-sm">#Tags 2</a>
                                            <a href="" class="btn btn-sm">#Tags 3</a>
                                            <a href="" class="btn btn-sm">#Tags 4</a>
                                            <a href="" class="btn btn-sm">#Tags 5</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <p>Alamat lengkap lokasi service</p>
                                    <p>Rp. (Harga service)</p>
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
