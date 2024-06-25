@extends('dashboard.layout.mitra')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Daftar Mitra</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Daftar Mitra Service</li>
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
                                        <th>Nama Toko</th>
                                        <th>Pengelola</th>
                                        <th>Alamat</th>
                                        <th>No WA</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Konter Koko</td>
                                        <td>Muhammad Kevin</td>
                                        <td>
                                            Jl. RTM No.4, Tugu, Cimanggis, Depok, Jawa Barat 16451
                                        </td>
                                        <td>08123456789</td>
                                        <td>kokokevin@gmail.com</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i>
                                            </button>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Honda Service</td>
                                        <td>Haikal Mahendra</td>
                                        <td>
                                            Jl. RTM No.35, Tugu, Cimanggis, Depok, Jawa Barat 16451
                                        </td>
                                        <td>08198765432</td>
                                        <td>hondaservice@gmail.com</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i>
                                            </button>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
