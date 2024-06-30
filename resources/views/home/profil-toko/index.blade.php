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
                        <h1>{{ $contributor->nama }}</h1>
                        <div class="btn-categories-profil">
                            <button class="category-tags-profil">Tag 1</button>
                            <button class="category-tags-profil">Tag 2</button>
                            <button class="category-tags-profil">Tag 3</button>
                            <button class="category-tags-profil">Tag 4</button>
                            <button class="category-tags-profil">Tag 5</button>
                        </div>
                        <p class="alamat-toko">{{ $contributor->alamat }}</p>

                        <div class="map-section">
                            <h1 style="margin-bottom: 2rem; color: #6096b4">Lokasi Service</h1>
                            <iframe src="{{ $contributor->link_map }}" width="600" height="450" style="border: 0"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Section Title -->
            <div class="container rekomen-box">
                <div class="row">

                    @foreach ($contributor->services as $item)
                        <div class="col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4 rekomendasi-box">
                            <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
                                <a href="{{ route('services.detail', $item->slug) }}" class="thumb d-block"><img src="{{ $item->thumbnail }}"
                                        alt="Image" class="img-fluid rounded" />
                                </a>

                                <div class="post-content">
                                    <div class="meta">
                                        <a href="{{ route('services.detail', $item->slug) }}" class="cat">{{ $item->title }}</a> •
                                        <span class="date">{{ $item->category->nama }}</span>
                                    </div>
                                    <h3>
                                        <a href="{{ route('services.detail', $item->slug) }}">detail service</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- /Blog Posts Section -->
    </main>
@endsection
