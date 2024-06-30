@extends('home.layout.detail-service')
@section('content')
    <main>
        <!-- About Section -->
        <section id="about" class="about section detail-service-hero">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
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
                                <div class="swiper-slide">
                                    <img src="{{ asset('/home/assets/img/img_h_6.jpg') }}" alt="Image"
                                        class="img-fluid-detail" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('/home/assets/img/img_h_7.jpg') }}" alt="Image"
                                        class="img-fluid-detail" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('/home/assets/img/img_h_8.jpg') }}" alt="Image"
                                        class="img-fluid-detail" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-1 info-detail-service">
                        <h1 class="mb-4" data-aos="fade-up" style="color: #6096b4">
                            (Nama Layanan Service)
                        </h1>
                        <p data-aos="fade-up" style="color: #6096b4">
                            (Deskripsi layanan service)
                        </p>
                        <div class="btn-hero-detail">
                            <button class="action-hero" id="kontak">Contact Provider</button>
                            <button class="action-hero" id="booking">Booking Service</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <div class="provider-section">
            <div class="logo">
                <img src="{{ asset('/home/assets/img/logo3.png') }}" alt="Logo" />
            </div>
            <div class="provider-info">
                <h1>Nama Toko</h1>
                <div class="btn-categories">
                    <button class="category-tags">Keyword 1</button>
                    <button class="category-tags">Keyword 2</button>
                    <button class="category-tags">Keyword 3</button>
                    <button class="category-tags">Keyword 4</button>
                    <button class="category-tags">Keyword 5</button>
                </div>
                <p>Alamat lengkap lokasi service</p>
            </div>
            <div class="view-profile">
                <a href="{{ url('/home-page/toko') }}">View Profile</a>
            </div>
        </div>

        <hr />

        <div class="map-section">
            <h1 style="margin-bottom: 2rem; color: #6096b4">Lokasi Service</h1>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.241610439622!2d106.84187777453303!3d-6.362768562243345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed6178a2b32f%3A0x20d7938791acfd4a!2sSTT%20Terpadu%20Nurul%20Fikri%20(Kampus%20A%20-%20Sekretariat)!5e0!3m2!1sid!2sid!4v1718528018180!5m2!1sid!2sid"
                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
        </div>
    </main>
@endsection
