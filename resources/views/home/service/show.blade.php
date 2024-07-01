@extends('home.layout.service-otomotif')
@section('content')
    <main>
        <!-- About Section -->
        <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h1 class="title-service">Daftar Service {{ $category->name }}</h1> <br>
            </div><!-- End Section Title -->
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
                        <div class="filter-container" style="display:flex;flex-direction:column">
                            <h3>Kategori</h3>
                            <div class="row" style="flex-direction: row"> <br>
                                @foreach ($category->subCategories as $item)
                                    <div class="col-md-6">
                                        <a href="">{{ $item->nama }}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="filter-container" style="display:flex;flex-direction:column">
                            <h3>Batas Harga</h3>
                            <form>
                                <div class="filter-item d-flex">
                                    <input type="hidden" name="type" value="harga">
                                    <input type="text" name="keyword" value="{{ request()->keyword }}"
                                        class="form-control" placeholder="keyword" required>
                                    <input type="number" class="form-control" name="min_price" id="min_price"
                                        class="input_price" placeholder="min price" value="{{ request()->min_price }}" required>
                                    <span> - </span>
                                    <input type="number" class="form-control" name="max_price" id="max_price"
                                        class="input_price" value="{{ request()->max_price }}" placeholder="max price" required>
                                    <button class="btn btn-primary">submit</button>
                                </div>
                            </form>
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
                            @foreach ($services as $item)
                                <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                                    <img src="{{ $item->thumbnail }}" class="img-fluid" style="width: 200px" alt="gambar-service">
                                    {{-- <i class="faq-icon bi bi-question-circle"></i> --}}
                                    <h3>{{ $item->title }}</h3>
                                    <div class="faq-content">
                                        <p>{{ $item->contributor->alamat }}</p>
                                        <p>Rp. <?= number_format($item->harga, 0, ',', '.') ?></p>
                                        <div class="btn-view-service">
                                            <a href="{{ url('/toko', $item->contributor->id) }}"
                                                class="btn btn-success btn-sm">View Profil</a>
                                            <a href="{{ route('services.detail', $item->slug) }}"
                                                class="btn btn-primary btn-sm">view Detail</a>
                                        </div>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Faq Section -->
    </main>
@endsection
