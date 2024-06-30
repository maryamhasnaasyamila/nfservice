@extends('dashboard.layout.index')
@section('content')
    <?php
    function getTimeDifference($createdAt)
    {
        // Mengonversi waktu yang diberikan ke objek DateTime
        $createdTime = new DateTime($createdAt);
    
        // Mengambil waktu saat ini
        $currentTime = new DateTime();
    
        // Menghitung selisih waktu
        $interval = $currentTime->diff($createdTime);
    
        // Mendapatkan komponen selisih waktu dalam hari, jam, dan menit
        $days = $interval->d;
        $hours = $interval->h;
        $minutes = $interval->i;
    
        // Membangun hasil dalam format yang diinginkan
        $result = '';
        if ($days > 0) {
            $result .= $days . ' hari ';
        }
        if ($hours > 0 || $days > 0) {
            // Jika ada hari, tampilkan jam dan menit
            $result .= $hours . ' jam ';
        }
        $result .= $minutes . ' menit';
    
        return trim($result);
    }
    ?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">
                        <!-- Sales Card -->
                        <div class="col-xxl-6 col-md-12">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Pemesanan</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalorders }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Sales Card -->
                        <!-- Customers Card -->
                        <div class="col-xxl-6 col-xl-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Pengunjung Toko</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>355</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Customers Card -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Grafik Pemesanan</h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            let data = [];
                                            let labels = [];
                                            @foreach ($bulan as $key => $value)
                                                data.push({{ $value }});
                                                labels.push("{{ $key }}");
                                            @endforeach
                                            new ApexCharts(
                                                document.querySelector("#reportsChart"), {
                                                    series: [{
                                                        name: "Order",
                                                        data: data,
                                                    }, ],
                                                    chart: {
                                                        height: 350,
                                                        type: "area",
                                                        toolbar: {
                                                            show: false,
                                                        },
                                                    },
                                                    markers: {
                                                        size: 4,
                                                    },
                                                    colors: ["#4154f1"],
                                                    fill: {
                                                        type: "gradient",
                                                        gradient: {
                                                            shadeIntensity: 1,
                                                            opacityFrom: 0.3,
                                                            opacityTo: 0.4,
                                                            stops: [0, 90, 100],
                                                        },
                                                    },
                                                    dataLabels: {
                                                        enabled: false,
                                                    },
                                                    stroke: {
                                                        curve: "smooth",
                                                        width: 2,
                                                    },
                                                    xaxis: {
                                                        type: "category",
                                                        categories: [
                                                            "Jan",
                                                            "Feb",
                                                            "Mar",
                                                            "Apr",
                                                            "May",
                                                            "Jun",
                                                            "Jul",
                                                            "Aug",
                                                            "Sep",
                                                            "Oct",
                                                            "Nov",
                                                            "Dec",
                                                        ],
                                                    },
                                                    tooltip: {
                                                        x: {
                                                            format: "MMM",
                                                        },
                                                    },
                                                }
                                            ).render();
                                        });
                                    </script>
                                    <!-- End Line Chart -->
                                </div>
                            </div>
                        </div>
                        <!-- End Reports -->
                    </div>
                </div>
                <!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">
                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Aktivitas Terbaru</h5>

                            <div class="activity">
                                @foreach ($neworders as $item)
                                    

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">{{ getTimeDifference($item->created_at) }}</div>
                                        <?php 
                                        $warna = 'success';
                                        if ($item->status == 0) {
                                            $warna = 'warning';
                                        } elseif ($item->status == 4) {
                                            $warna = 'danger';
                                        }
                                        ?>
                                        <i class="bi bi-circle-fill activity-badge text-{{ $warna }} align-self-start"></i>
                                        <div class="activity-content">
                                            Order baru dari {{ $item->firsname . " " . $item->lastname }}
                                            <a href="{{ route('orders.index') }}" class="fw-bold text-dark">Detail</a>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- End activity item-->

                            </div>
                        </div>
                    </div>
                    <!-- End Recent Activity -->
                </div>
                <!-- End Right side columns -->
            </div>
        </section>
        <!-- End #main -->

    </main>
@endsection
