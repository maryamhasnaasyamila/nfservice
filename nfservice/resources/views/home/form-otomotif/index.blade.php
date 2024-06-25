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
                                Form Service Kendaraan
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
                <form class="form" action="" method="post">
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
                                <input type="text" id="firstName" name="firstName" placeholder="Nama Depan" />
                                <input type="text" id="lastName" name="lastName" placeholder="Nama Belakang" />
                            </div>
                        </div>
                        <div class="form-group-elektronik">
                            <label for="alamat">Alamat</label> <br />
                            <input type="textarea" id="alamat" name="alamat"
                                placeholder="Tuliskan alamat lengkap Anda saat ini." />
                        </div>
                        <div class="form-group-elektronik">
                            <label for="notelp">Nomor HP/WA</label> <br />
                            <input type="text" id="notelp" name="notelp" placeholder="08xx-xxxx-xxxx" />
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
                                    <label for="merk">Merk Elektronik Anda</label> <br />
                                    <input type="text" id="merk" name="merk" placeholder="Ex: Honda Vario 125" />
                                </div>
                                <div class="form-group-elektronik">
                                    <label for="tanggal">Tanggal Service</label> <br />
                                    <input type="date" id="tanggal" name="tanggal" />
                                </div>
                                <div class="form-group-elektronik">
                                    <label for="waktu">Waktu Service</label> <br />
                                    <input type="time" id="waktu" name="waktu" />
                                </div>
                                <div class="form-group-elektronik">
                                    <label for="opsiLayanan">Opsi Layanan Service</label> <br />
                                    <div class="opsi-layanan">
                                        <select name="opsi" id="opsi" class="select-opsi">
                                            <option value="Silakan Pilih Opsi Layanan" disabled selected>
                                                Silakan Pilih Opsi Layanan
                                            </option>
                                            <option value="Call Service">Call Service</option>
                                            <option value="Self Service">Self Service</option>
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
                            <div class="form-sub-section2">
                                <div class="form-group-elektronik">
                                    <label for="service-store">Nama Tempat Service</label>
                                    <br />
                                    <input type="text" id="service-store" name="service-store"
                                        placeholder="Data ditarik dari halaman sebelumnya" />
                                </div>
                                <div class="form-group-elektronik">
                                    <label for="layananService">Layanan Service</label> <br />
                                    <input type="text" id="layananService" name="layananService"
                                        placeholder="Data ditarik dari halaman sebelumnya" />
                                </div>
                                <div class="form-group-elektronik">
                                    <label for="kategori">Kategori Service</label> <br />
                                    <select name="kategori" id="kategori">
                                        <option value="Elektronik">
                                            Data ditarik dari database
                                        </option>
                                        <option value="Elektronik" disabled sleected>
                                            Data ditarik dari database
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-elektronik">
                        <button type="button" class="btn-book" data-toggle="modal" data-target="#myModal">
                            Book Now
                        </button>
                        <button type="button" class="btn-cancel">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal HTML -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <div class="icon-box">
                            <i class="material-icons">&#xE876;</i>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h4>Pemesanan Anda Selsai</h4>
                        <p>
                            Silahkan tunggu hingga jasa layanan servis menghubungi anda.
                        </p>
                        <button class="btn btn-success" data-dismiss="modal">
                            <span>OKE!!!</span> <i class="material-icons">&#xE5C8;</i>
                        </button>
                    </div>
                </div>
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
