@extends('dashboard.layout.profil')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard-page') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profil Saya</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <img src="{{ asset('dashboard/assets/img/profile-img.jpg') }}" alt="Profile"
                                class="rounded-circle" />
                            <h2>Nama Service</h2>
                            <h3>Jenis Service (Otomotif/Elektronik)</h3>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">
                                        Details
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">
                                        Ubah Profil
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">
                                        Ganti Kata Sandi
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">Tentang</h5>
                                    <p class="small fst-italic">
                                        Sunt est soluta temporibus accusantium neque nam maiores
                                        cumque temporibus. Tempora libero non est unde veniam est
                                        qui dolor. Ut sunt iure rerum quae quisquam autem eveniet
                                        perspiciatis odit. Fuga sequi sed ea saepe at unde.
                                    </p>

                                    <h5 class="card-title">Profil</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Username</div>
                                        <div class="col-lg-9 col-md-8">(Username Login)</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Nama Perusahaan</div>
                                        <div class="col-lg-9 col-md-8">(Nama Service)</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">
                                            Penanggung Jawab
                                        </div>
                                        <div class="col-lg-9 col-md-8">(Nama Lengkap)</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Jenis Service</div>
                                        <div class="col-lg-9 col-md-8">
                                            (Service Otomotif/Service Elektronik)
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Kota</div>
                                        <div class="col-lg-9 col-md-8">(Nama Kota)</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">
                                            Alamat Tempat Service
                                        </div>
                                        <div class="col-lg-9 col-md-8">
                                            (Alamat lengkap: jalan, nomor, rt/rw, kelurahan,
                                            kecamatan, kode pos)
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">No WhatsApp</div>
                                        <div class="col-lg-9 col-md-8">(Nomor WA)</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">
                                            (Email login)
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                    <!-- Profile Edit Form -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Logo
                                                Perusahaan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="assets/img/profile-img.jpg" alt="Profile" />
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm"
                                                        title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"
                                                        title="Remove Profil Saya image"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="fullName" type="text" class="form-control" id="fullName"
                                                    value="username login" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="about" class="col-md-4 col-lg-3 col-form-label">Alamat
                                                Perusahaan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="about" class="form-control" id="about" style="height: 100px">
                                                Nama Jalan, Nomor, RT/RW, Kelurahan, Kecamatan, Kota, Provinsi, Kode Pos
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Nama
                                                Perusahaan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="company" type="text" class="form-control" id="company"
                                                    value="Nama Perusahaan/Toko/Jasa Service" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Job" class="col-md-4 col-lg-3 col-form-label">Penanggung
                                                Jawab</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="job" type="text" class="form-control" id="Job"
                                                    value="Nama Lengkap Penanggung Jawab" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Country" class="col-md-4 col-lg-3 col-form-label">Kota</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="country" type="text" class="form-control" id="Country"
                                                    value="Nama Kota" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="jenis" class="col-md-4 col-lg-3 col-form-label">Jenis
                                                Service</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="jenis" type="text" class="form-control" id="jenis"
                                                    value="Service Elektronik / Service Otomotif (salah satu)" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">No
                                                WhatsApp</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="Phone"
                                                    value="+62 8xx xxxx xxxx" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="Email"
                                                    value="namaemail@gmial.com" />
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">
                                                Simpan Perubahan
                                            </button>
                                        </div>
                                    </form>
                                    <!-- End Profile Edit Form -->
                                </div>

                                <div class="tab-pane fade pt-3" id="profile-settings">
                                    <!-- Settings Form -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email
                                                Notifications</label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="changesMade"
                                                        checked />
                                                    <label class="form-check-label" for="changesMade">
                                                        Changes made to your account
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="newProducts"
                                                        checked />
                                                    <label class="form-check-label" for="newProducts">
                                                        Information on new products and services
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="proOffers" />
                                                    <label class="form-check-label" for="proOffers">
                                                        Marketing and promo offers
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="securityNotify"
                                                        checked disabled />
                                                    <label class="form-check-label" for="securityNotify">
                                                        Security alerts
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">
                                                Save Changes
                                            </button>
                                        </div>
                                    </form>
                                    <!-- End settings Form -->
                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Password
                                                saat ini</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="currentPassword" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Kata Sandi
                                                Baru</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newpassword" type="password" class="form-control"
                                                    id="newPassword" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Konfirmasi
                                                Kata Sandi Baru</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control"
                                                    id="renewPassword" />
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">
                                                Simpan Perubahan
                                            </button>
                                        </div>
                                    </form>
                                    <!-- End Change Password Form -->
                                </div>
                            </div>
                            <!-- End Bordered Tabs -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
