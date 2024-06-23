@extends('dashboard.layout.index')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">
                    <!-- Sales Card -->
                    <div class="col-xxl-6 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Pemesanan</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
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
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                                        new ApexCharts(
                                            document.querySelector("#reportsChart"), {
                                                series: [{
                                                    name: "Order",
                                                    data: [31, 40, 28, 51, 42, 82, 56],
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
                                                colors: ["#4154f1", "#2eca6a", "#ff771d"],
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
                            <div class="activity-item d-flex">
                                <div class="activite-label">32 min</div>
                                <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                                <div class="activity-content">
                                    Quia quae rerum
                                    <a href="#" class="fw-bold text-dark">explicabo officiis</a>
                                    beatae
                                </div>
                            </div>
                            <!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">56 min</div>
                                <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                                <div class="activity-content">
                                    Voluptatem blanditiis blanditiis eveniet
                                </div>
                            </div>
                            <!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 hrs</div>
                                <i class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>
                                <div class="activity-content">
                                    Voluptates corrupti molestias voluptatem
                                </div>
                            </div>
                            <!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">1 day</div>
                                <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
                                <div class="activity-content">
                                    Tempore autem saepe
                                    <a href="#" class="fw-bold text-dark">occaecati voluptatem</a>
                                    tempore
                                </div>
                            </div>
                            <!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 days</div>
                                <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                                <div class="activity-content">
                                    Est sit eum reiciendis exercitationem
                                </div>
                            </div>
                            <!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">4 weeks</div>
                                <i class="bi bi-circle-fill activity-badge text-muted align-self-start"></i>
                                <div class="activity-content">
                                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                </div>
                            </div>
                            <!-- End activity item-->
                        </div>
                    </div>
                </div>
                <!-- End Recent Activity -->
            </div>
            <!-- End Right side columns -->
        </div>
    </section>
    </main>
    <!-- End #main -->
@endsection
