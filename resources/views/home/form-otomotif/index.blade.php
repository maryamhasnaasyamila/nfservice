@extends('home.layout.form-otomotif')
@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <h1 class="page-title-heading">Booking Service Kendaraan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="custom-breadcrumb breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active current" aria-current="page">
                                Form {{ $service->category->category->nama }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <main class="form-elektronik">
        <div class="container-elektronik">
            <div class="form-box-elektronik">
                <form class="form" method="post">
                    {{-- cek error --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        
                    @endif
                    @csrf
                    <div class="head-form">
                        <div class="deskripsi">
                            <p>
                                Isi formulir dibawah ini dengan sungguh-sungguh, data dari
                                formulir ini akan langsung tersampaikan kepada penyedia
                                layanan service yang dipesan. Untuk metode pembayaran, saat
                                ini hanya bisa melalui
                                <span style="font-weight: bold; font-style: italic">Cash On Delivery (COD) atau bayar
                                    ditempat</span>, harap lakukan pembayaran secara langsung ke penyedia
                                layanan servis.
                            </p>
                        </div>
                    </div>
                    <hr class="hr-elektronik" />
                    <div class="form-section">
                        <div class="form-group-elektronik">
                            <h2
                                style="
                    color: #6096b4;
                    margin: 2rem 0 1.5rem 0;
                    font-size: 2rem;
                  ">
                                Data Diri
                            </h2>
                            <label for="nama">Nama Anda</label> <br />
                            <div class="users-name">
                                <input type="text" id="firstname" name="firstname" placeholder="Nama Depan" required>
                                <input type="text" id="lastName" name="lastname" placeholder="Nama Belakang" required>
                            </div>
                        </div>
                        <div class="form-group-elektronik">
                            <label for="alamat">Alamat</label> <br />
                            <input type="textarea" id="alamat" name="alamat"
                                placeholder="Tuliskan alamat lengkap Anda saat ini." required>
                        </div>
                        <div class="form-group-elektronik">
                            <label for="notelp">Nomor HP/WA</label> <br />
                            <input type="text" id="notelp" name="telepon" placeholder="08xx-xxxx-xxxx" required>
                            <p>
                                Masukkan No HP/WA Anda agar jasa layanan service dapat dengan
                                mudah menghubungi Anda!
                            </p>
                        </div>
                    </div>
                    <hr />
                    <div class="form-section">
                        <h2 style="color: #6096b4; margin: 2rem 0 1.5rem 0; font-size: 2rem">
                            Data Pemesanan
                        </h2>
                        <div class="form-flex">
                            <div class="form-sub-section">
                                <div class="form-group-elektronik">
                                    <label for="merk">Merk Barang</label> <br />
                                    <input type="text" id="merk" name="merk" placeholder="merk barang anda" required>
                                </div>
                                <div class="form-group-elektronik">
                                    <label for="tanggal">Tanggal Service</label> <br />
                                    <input type="date" id="tanggal" name="tanggal" required>
                                </div>
                                <div class="form-group-elektronik">
                                    <label for="waktu">Waktu Service</label> <br />
                                    <input type="time" id="waktu" name="jam" required>
                                </div>

                            </div>
                            <div class="form-sub-section2">
                                <div class="form-group-elektronik">
                                    <label for="service-store">Nama Tempat Service</label>
                                    <br />
                                    <input type="text" id="service-store" name="service-store"
                                        placeholder="Data ditarik dari halaman sebelumnya"
                                        value="{{ $service->contributor->nama }}" disabled />
                                </div>
                                <div class="form-group-elektronik">
                                    <label for="layananService">Layanan Service</label> <br />
                                    <input type="text" id="layananService" name="layananService"
                                        placeholder="Data ditarik dari halaman sebelumnya" value="{{ $service->title }}"
                                        disabled />
                                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                                </div>
                                <div class="form-group-elektronik">
                                    <label for="opsiLayanan">Opsi Layanan Service</label> <br />
                                    <div class="opsi-layanan">
                                        <select name="jenis" id="opsi" class="select-opsi">
                                            <option value="Silakan Pilih Opsi Layanan" disabled selected>
                                                Silakan Pilih Opsi Layanan
                                            </option>
                                            <option value="0">Call Service</option>
                                            <option value="1">Self Service</option>
                                        </select>
                                        <div class="note-opsi">
                                            <p>Note:</p>
                                            <p>
                                                * Call Service: Layanan service dengan mendatangkan
                                                teknisi ke tempat Anda berada.
                                            </p>
                                            <p>
                                                ** Self Service: Layanan service langsung ke tempat
                                                service yang Anda pilih.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="booking now" class="btn btn-primary">
                </form>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".btn-book").click(function(event) {
                    event.preventDefault();
                    $("#myModal").modal("show");
                });

                $(".btn-cancel").click(function() {
                    alert("Booking canceled.");
                });
            });
        </script>
    </main>
@endsection
