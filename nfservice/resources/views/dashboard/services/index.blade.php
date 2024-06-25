@extends('dashboard.layout.services')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Daftar Semua Layanan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Daftar Semua Layanan</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>

                                    <tr>
                                        <th>No</th>
                                        <th>Timestamp</th>
                                        <th>Layanan</th>
                                        <th>Deskripsi</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Mitra</th>
                                        <th>No WA</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2023-06-20T10:20:30.456Z</td>
                                        <td>Service Laptop Baterai Bocor</td>
                                        <td>Menanangi permasalahan baterai bocor pada semua jenis laptop. Pengerjaan bisa
                                            ditunggu!</td>
                                        <td>Self Service</td>
                                        <td>Rp. 600.000</td>
                                        <td>Konter Koko</td>
                                        <td>088765434</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i>
                                            </button>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>2023-07-20T10:19:30.456Z</td>
                                        <td>Service Ban Motor Bocor</td>
                                        <td>Layanan siaga 24 jam, atasi kebocoran dimanapun Anda berada.</td>
                                        <td>Call Service & Self Service</td>
                                        <td>Rp. 200.000</td>
                                        <td>Honda Service</td>
                                        <td>081234568</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i>
                                            </button>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>2024-07-20T10:19:30.456Z</td>
                                        <td>Service LCD HP</td>
                                        <td>Sedia jasa servis LCD HP untuk semua tipe handphone.</td>
                                        <td>Self Service</td>
                                        <td>Rp. 800.000</td>
                                        <td>Konter Koko</td>
                                        <td>088987654</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i>
                                            </button>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
