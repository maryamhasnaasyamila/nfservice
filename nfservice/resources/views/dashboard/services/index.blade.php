@extends('dashboard.layout.services')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Semua Layanan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Semua Layanan</li>
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
                                    @foreach ($services as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>{{ $item->category->nama }}</td>
                                            <td>Rp<?= number_format($item->harga, 0, ',', '.'); ?></td>
                                            <td>{{ $item->contributor->nama  ?? '-'}}</td>
                                            <td>{{ $item->contributor->telepon?? '-' }}</td>
                                            <td>
                                                <a href="{{ route('services.show', $item->id) }}"
                                                    class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i></a>
                                                <form action="{{ route('services.destroy', $item->id) }}" method="post"
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
