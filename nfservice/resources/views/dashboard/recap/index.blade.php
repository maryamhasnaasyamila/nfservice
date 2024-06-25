@extends('dashboard.layout.recap')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Rekap Order @namatoko</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Rekap Order</li>
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
                                        <th>Tanggal Order</th>
                                        <th>Nama</th>
                                        <th>No WA</th>
                                        <th>Alamat Pick Up</th>
                                        <th>Pemesanan</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <th>25/06/2024</th>
                                        <td>Muhammad Affan</td>
                                        <td>0811287654</td>
                                        <td>
                                            Jl. Belimbing No. 11, Pondok Cina, Beji, Depok, Jawa
                                            Barat 16424
                                        </td>
                                        <td>Service Laptop Baterai Bocor</td>
                                        <td>Self Service</td>
                                        <td>Diproses</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <th>30/06/2024</th>
                                        <td>Ibrahim Razaq</td>
                                        <td>0897634562</td>
                                        <td>
                                            Jl. Krakatau Blok A12, Pondok Cina, Beji, Depok, Jawa
                                            Barat 16424
                                        </td>
                                        <td>Service LCD HP</td>
                                        <td>Self Service</td>
                                        <td>Menunggu</td>
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
