@extends('dashboard.layout.form')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Formulir Tambah Layanan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">
                        <a href="daftar-layanan-mitra.html">Layanan Service</a>
                    </li>
                    <li class="breadcrumb-item active">Tambah Layanan Service</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p></p>
                            <!-- Multi Columns Form -->
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <label for="service_name" class="form-label">Nama Layanan</label>
                                    <input type="text" class="form-control" id="service_name" />
                                </div>
                                <div class="col-md-6">
                                    <label for="price" class="form-label">Harga</label>
                                    <input type="textarea" class="form-control" id="price"
                                        placeholder="Harga minimun Rp10.0000" />
                                </div>
                                <div class="col-md-6">
                                    <label for="category" class="form-label">Kategori</label>
                                    <select class="form-control" name="category" id="categroy">
                                        <option value="Pilih kategori service" disabled>
                                            Pilih kategori service
                                        </option>
                                        <option value="Call Service">Call Service</option>
                                        <option value="Self Service">Self Service</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="desc" class="form-label">Deskripsi Singkat</label>
                                    <input type="text" class="form-control" id="desc" placeholder="" />
                                </div>
                                <div class="col-12">
                                    <label for="thumbnail" class="form-label">Gambar Pendukung</label>
                                    <input type="file" class="form-control" id="thumbnail"
                                        placeholder="Upload foto untuk layananmu!" />
                                </div>
                                <div class="text-center">
                                    <button type="back" class="btn btn-sm btn-warning">
                                        Back
                                    </button>
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-sm btn-secondary">
                                        Reset
                                    </button>
                                </div>
                            </form>
                            <!-- End Multi Columns Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
