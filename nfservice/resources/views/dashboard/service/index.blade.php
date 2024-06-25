@extends('dashboard.layout.service')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Daftar Layanan @namatoko</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Daftar Layanan Toko</li>
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
                            <table class="table datatable tabel-style">
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
                                        <td style="display:flex; justify-content:space-evenly">
                                            <button style="margin-right: 5px" class="btn btn-sm btn-warning"><i
                                                    class="bi bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2024-07-20T10:19:30.456Z</td>
                                        <td>Service LCD HP</td>
                                        <td>Sedia jasa servis LCD HP untuk semua tipe handphone.</td>
                                        <td>Self Service</td>
                                        <td>Rp. 800.000</td>
                                        <td>Konter Koko</td>
                                        <td>088987654</td>
                                        <td style="display:flex; justify-content:space-evenly">
                                            <button style="margin-right: 5px" class="btn btn-sm btn-warning"><i
                                                    class="bi bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                            <div class="button-table">
                                <a href="">
                                    <i class="bi bi-arrow-left-circle-fill"></i>
                                </a> |
                                <a href="">
                                    <i class="bi bi-plus-circle-fill"></i>

                                </a>
                            </div>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
