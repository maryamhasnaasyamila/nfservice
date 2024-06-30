@extends('dashboard.layout.mitra')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Daftar Layanan {{ $contributor->nama }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Daftar Mitra Service</a></li>
                    <li class="breadcrumb-item active">Layanan</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('mitra.index') }}" class="btn btn-primary my-4 btn-sm">kembali</a>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th>Terjual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>Rp <?= number_format($item->harga, 0, ',', '.') ?></td>
                                            <td>{{ $item->status == 1 ? 'aktif' : 'non aktif' }}</td>
                                            <td>{{ App\Models\Order::where('service_id', $item->id)->count() }}</td>
                                        </tr>
                                    @endforeach
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
