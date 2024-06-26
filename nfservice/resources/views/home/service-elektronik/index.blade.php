@extends('home.layout.service-elektronik')
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
    </main>
@endsection
