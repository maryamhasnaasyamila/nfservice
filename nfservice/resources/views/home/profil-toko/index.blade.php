@extends('home.layout.profil-toko')
@section('content')
    <main>
        <!-- Blog Posts Section -->
        <section id="blog-posts services" class="blog-posts section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                {{-- <h1 style="color: #93bfcf">Rekomendasi Service</h1> --}}
                <div class="toko-section">
                    <div class="logo">
                        <img src="{{ asset('/home/assets/img/logo3.png') }}" alt="Logo" />
                    </div>
                    <div class="toko-info">
                        <h1>Nama Toko</h1>
                        <div class="btn-categories-profil">
                            <button class="category-tags-profil">Tag 1</button>
                            <button class="category-tags-profil">Tag 2</button>
                            <button class="category-tags-profil">Tag 3</button>
                            <button class="category-tags-profil">Tag 4</button>
                            <button class="category-tags-profil">Tag 5</button>
                        </div>
                        <p class="alamat-toko">(Alamat lengkap lokasi service). Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Quia a
                            pariatur reiciendis molestias corrupti officia possimus nostrum eum ut in quam tempore vitae,
                            ipsum aspernatur! Qui odit velit quo sequi?</p>
                    </div>
                </div>
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
    </main>
@endsection
