@extends('dashboard.layout.recaps')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Rekap Order</h1>
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
                                        <th>Waktu Order</th>
                                        <th>Nama</th>
                                        <th>No WA</th>
                                        <th>Alamat Pick Up</th>
                                        <th>Pemesanan</th>
                                        <th>Jenis</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->firsname . " " . $item->lastname }}</td>
                                            <td>{{ $item->telepon }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->service->title }}</td>
                                            <td>{{ $item->jenis == "0" ? "Call Service" : "Self Service" }}</td>
                                            <td>
                                                @php
                                                    if ($item->status == 0) {
                                                        echo "menunggu konfirmasi";
                                                    } elseif ($item->status == 1) {
                                                        echo "dikonfirmasi";
                                                    } elseif ($item->status == 2) {
                                                        echo "sedang dikerjakan";
                                                    } elseif ($item->status == 3) {
                                                        echo "selesai";
                                                    } elseif ($item->status == 4) {
                                                        echo "dibatalkan";
                                                    }
                                                @endphp
                                            </td>
                                            <td>
                                                <form action="{{ route('orders.destroy', $item->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Yakin ingin menghapus data ini?')"><i
                                                            class="bi bi-trash-fill"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
