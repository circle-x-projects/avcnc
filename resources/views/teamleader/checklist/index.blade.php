@extends('layouts.app_nice')

@section('content')
 <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-9">
        <div class="row">

        <!-- Not Start Card -->
        <div class="col-xxl-3 col-md-4">
            <div class="card info-card sales-card">

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>

            <div class="card-body">
                <h5 class="card-title">Not Start <span>| This Month</span></h5>

                <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-clock-history"></i>
                </div>
                <div class="ps-3">
                    <h6>5</h6>
                    <span class="text-success small pt-1 fw-bold">35%</span><span class="text-muted small pt-2 ps-1">not start</span>

                </div>
                </div>
            </div>

            </div>
        </div><!-- End Sales Card -->

        <!-- In Progress Card -->
        <div class="col-xxl-3 col-md-4">
            <div class="card info-card customers-card">

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>

            <div class="card-body">
                <h5 class="card-title">In Progress <span>| This Month</span></h5>

                <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-hourglass-split"></i>
                </div>
                <div class="ps-3">
                    <h6>$3,264</h6>
                    <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
                </div>
            </div>

            </div>
        </div><!-- End Revenue Card -->

        <!-- Done Card -->
        <div class="col-xxl-3 col-md-4">

            <div class="card info-card revenue-card">

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>

            <div class="card-body">
                <h5 class="card-title">Done <span>| This Year</span></h5>

                <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-check-circle"></i>
                </div>
                <div class="ps-3">
                    <h6>1244</h6>
                    <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                </div>
                </div>

            </div>
            </div>

        </div><!-- End Customers Card -->

        <!-- Not Done Card -->
        <div class="col-xxl-3 col-md-4">

            <div class="card info-card customers-card">

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>

            <div class="card-body">
                <h5 class="card-title">Not Done <span>| This Year</span></h5>

                <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-x-circle"></i>
                </div>
                <div class="ps-3">
                    <h6>1244</h6>
                    <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                </div>
                </div>

            </div>
            </div>

        </div><!-- End Customers Card -->

                <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>

            <div class="card-body">
                    <h5 class="card-title">Weekly Checklist <span>| Today</span></h5>
              <!-- Small tables -->
              <table class="table table-sm">
                <thead class="table-light">
                  <tr>
                    <th style="text-align: center; width: 5%" scope="col">#</th>
                    <th style="text-align: center;">Progress</th>
                    <th scope="col" style="width: 40%">Checklist Target</th>
                    <th style="width: 15%;" scope="col">Project</th>
                    <th style="text-align: center;" scope="col">Engineer</th>
                    <th style="text-align: center;" scope="col">Week</th>
                    <th style="text-align: center;" scope="col">Level</th>
                    <th style="text-align: center;" scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th style="vertical-align: middle; text-align: center;" scope="row">1</th>
                    <th style="vertical-align: middle; text-align: center;">
                        <div class="progress position-relative" style="margin-left: 5px; margin-right: 10px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            <small class="justify-content-center d-flex position-absolute w-100" style="color: #fff">100%</small>
                        </div>
                    </th>
                    <td>Dapat menghubungkan ponsel iOS dengan SDK KMP, Dapat menghubungkan ponsel iOS dengan SDK KMP, Dapat menghubungkan ponsel iOS dengan SDK KMP</td>
                    <td style="vertical-align: middle; text-align: left;">OPA 1.9.2 - Mi Band 9</td>
                    <td style="vertical-align: middle; text-align: center;">
                        <img src="{{ asset('nice-admin') }}/assets/img/messages-3.jpg" alt="" class="rounded-circle" style="width: 45px">
                    </td>
                    <td style="vertical-align: middle; text-align: center;">
                        Week 1<br /><div style="font-size: 8pt;">( 1-5/12/2024 )</div>
                    </td>
                    <td style="vertical-align: middle; text-align: center;"><span class="badge text-bg-danger">High</span></td>
                    <td style="vertical-align: middle; text-align: center;"><div style="background-color: #d4edbc; color: #11734b; border-radius: 25px;">Done</div></td>
                  </tr>
                  <tr>
                    <th style="vertical-align: middle; text-align: center;" scope="row">2</th>
                    <th style="vertical-align: middle; text-align: center;">
                        <div class="progress position-relative" style="margin-left: 5px; margin-right: 10px">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 46%;" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                            <small class="justify-content-center d-flex position-absolute w-100" style="color: #fff">46%</small>
                        </div>
                    </th>
                    <td style="vertical-align: middle; text-align: left;">Bridie Kessler</td>
                    <td style="vertical-align: middle; text-align: left;">OPA 1.9.2 - Mi Band 9</td>
                    <td style="vertical-align: middle; text-align: center;">
                        <img src="{{ asset('nice-admin') }}/assets/img/asep.png" alt="" class="rounded-circle" style="width: 45px">
                    </td>
                    <td style="vertical-align: middle; text-align: center;">
                        Week 1<br /><div style="font-size: 8pt;">( 1-5/12/2024 )</div>
                    </td>
                    <td style="vertical-align: middle; text-align: center;"><span class="badge text-bg-warning">Medium</span></td>
                    <td style="vertical-align: middle; text-align: center;"><div style="background-color: #ffe5a0; color: #473821; border-radius: 25px;">In Progress</div></td>
                  </tr>
                  <tr>
                    <th style="vertical-align: middle; text-align: center;" scope="row">3</th>
                    <th style="vertical-align: middle; text-align: center;">
                        <div class="progress position-relative" style="margin-left: 5px; margin-right: 10px">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            <small class="justify-content-center d-flex position-absolute w-100" style="color: #fff">65%</small>
                        </div>
                    </th>
                    <td style="vertical-align: middle; text-align: left;">Ashleigh Langosh, Ashleigh LangoshAshleigh LangoshAshleigh LangoshAshleigh Langosh, Ashleigh Langosh</td>
                    <td style="vertical-align: middle; text-align: left;">OPA 1.9.2 - Mi Band 9</td>
                    <td style="vertical-align: middle; text-align: center;">
                        <img src="{{ asset('nice-admin') }}/assets/img/user-1.png" alt="" class="rounded-circle" style="width: 45px">
                    </td>
                    <td style="vertical-align: middle; text-align: center;">
                        Week 1<br /><div style="font-size: 8pt;">( 1-5/12/2024 )</div>
                    </td>
                    <td style="vertical-align: middle; text-align: center;"><span class="badge text-bg-danger">High</span></td>
                    <td style="vertical-align: middle; text-align: center;"><div style="background-color: #ffe5a0; color: #473821; border-radius: 25px;">In Progress</div></td>
                  </tr>
                  <tr>
                    <th style="vertical-align: middle; text-align: center;" scope="row">4</th>
                    <th style="vertical-align: middle; text-align: center;">
                        <div class="progress position-relative" style="margin-left: 5px; margin-right: 10px">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            <small class="justify-content-center d-flex position-absolute w-100" style="color: #fff">25%</small>
                        </div>
                    </th>
                    <td style="vertical-align: middle; text-align: left;">Angus Grady</td>
                    <td style="vertical-align: middle; text-align: left;">OPA 1.9.2 - Mi Band 9</td>
                    <td style="vertical-align: middle; text-align: center;">
                        <img src="{{ asset('nice-admin') }}/assets/img/user-2.png" alt="" class="rounded-circle" style="width: 45px">
                    </td>
                    <td style="vertical-align: middle; text-align: center;">
                        Week 1<br /><div style="font-size: 8pt;">( 1-5/12/2024 )</div>
                    </td>
                    <td style="vertical-align: middle; text-align: center;"><span class="badge text-bg-danger">High</span></td>
                    <td style="vertical-align: middle; text-align: center;"><div style="background-color: #ffcfc9; color: #b10202; border-radius: 25px;">Not Done</div></td>
                  </tr>
                  <tr>
                    <th style="vertical-align: middle; text-align: center;" scope="row">5</th>
                    <th style="vertical-align: middle; text-align: center;">
                        <div class="progress position-relative" style="margin-left: 5px; margin-right: 10px">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            <small class="justify-content-center d-flex position-absolute w-100" style="color: #fff">0%</small>
                        </div>
                    </th>
                    <td style="vertical-align: middle; text-align: left;">Raheem Lehner</td>
                    <td style="vertical-align: middle; text-align: left;">OPA 1.9.2 - Mi Band 9</td>
                    <td style="vertical-align: middle; text-align: center;">
                        <img src="{{ asset('nice-admin') }}/assets/img/user-3.png" alt="" class="rounded-circle" style="width: 45px">
                    </td>
                    <td style="vertical-align: middle; text-align: center;">
                        Week 1<br /><div style="font-size: 8pt;">( 1-5/12/2024 )</div>
                    </td>
                    <td style="vertical-align: middle; text-align: center;"><span class="badge text-bg-primary">Low</span></td>
                    <td style="vertical-align: middle; text-align: center;"><div style="background-color: #e6e6e6; color: #3d3d3d; border-radius: 25px;">Not Start</div></td>
                  </tr>
                  <tr>
                    <th style="vertical-align: middle; text-align: center;" scope="row">5</th>
                    <th style="vertical-align: middle; text-align: center;">
                        <div class="progress position-relative" style="margin-left: 5px; margin-right: 10px">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            <small class="justify-content-center d-flex position-absolute w-100" style="color: #fff">0%</small>
                        </div>
                    </th>
                    <td style="vertical-align: middle; text-align: left;">Memberantas Korupsi 271 Triliun</td>
                    <td style="vertical-align: middle; text-align: left;">Pemberantasan Korupsi Phase #1</td>
                    <td style="vertical-align: middle; text-align: center;">
                        <img src="{{ asset('nice-admin') }}/assets/img/user-3.png" alt="" class="rounded-circle" style="width: 45px">
                    </td>
                    <td style="vertical-align: middle; text-align: center;">
                        Week 1 - Feb 24<br /><div style="font-size: 8pt;">( 1-5/12/2024 )</div>
                    </td>
                    <td style="vertical-align: middle; text-align: center;"><span class="badge text-bg-primary">Low</span></td>
                    <td style="vertical-align: middle; text-align: center;"><div style="background-color: #ffcfc9; color: #b10202; border-radius: 25px;">Delay</div></td>
                  </tr>
                </tbody>
              </table>
              <!-- End small tables -->

            </div>

            </div>
        </div><!-- End Recent Sales -->
        <!-- Reports -->
        <div class="col-12">
            <div class="card">

                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Reports <span>| Today</span></h5>

                    <!-- Line Chart -->
                    <div id="reportsChart"></div>

                    <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                            name: 'Sales',
                            data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                            name: 'Revenue',
                            data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                            name: 'Customers',
                            data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                            height: 350,
                            type: 'area',
                            toolbar: {
                            show: false
                            },
                        },
                        markers: {
                            size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                            type: "gradient",
                            gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'smooth',
                            width: 2
                        },
                        xaxis: {
                            type: 'datetime',
                            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                            x: {
                            format: 'dd/MM/yy HH:mm'
                            },
                        }
                        }).render();
                    });
                    </script>
                    <!-- End Line Chart -->

                </div>

            </div>
        </div><!-- End Reports -->

        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>

            <div class="card-body">
                <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                <table class="table table-borderless datatable">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"><a href="#">#2457</a></th>
                    <td>Brandon Jacob</td>
                    <td><a href="#" class="text-primary">At praesentium minu</a></td>
                    <td>$64</td>
                    <td><span class="badge bg-success">Approved</span></td>
                    </tr>
                    <tr>
                    <th scope="row"><a href="#">#2147</a></th>
                    <td>Bridie Kessler</td>
                    <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                    <td>$47</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                    </tr>
                    <tr>
                    <th scope="row"><a href="#">#2049</a></th>
                    <td>Ashleigh Langosh</td>
                    <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                    <td>$147</td>
                    <td><span class="badge bg-success">Approved</span></td>
                    </tr>
                    <tr>
                    <th scope="row"><a href="#">#2644</a></th>
                    <td>Angus Grady</td>
                    <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                    <td>$67</td>
                    <td><span class="badge bg-danger">Rejected</span></td>
                    </tr>
                    <tr>
                    <th scope="row"><a href="#">#2644</a></th>
                    <td>Raheem Lehner</td>
                    <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                    <td>$165</td>
                    <td><span class="badge bg-success">Approved</span></td>
                    </tr>
                </tbody>
                </table>

            </div>

            </div>
        </div><!-- End Recent Sales -->

        </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-3">

        <!-- Recent Activity -->
        <div class="card">
        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title">Recent Activity <span>| Today</span></h5>

            <div class="activity">

            <div class="activity-item d-flex">
                <div class="activite-label">32 min</div>
                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                <div class="activity-content">
                Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
                <div class="activite-label">56 min</div>
                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                <div class="activity-content">
                Voluptatem blanditiis blanditiis eveniet
                </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
                <div class="activite-label">2 hrs</div>
                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                <div class="activity-content">
                Voluptates corrupti molestias voluptatem
                </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
                <div class="activite-label">1 day</div>
                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                <div class="activity-content">
                Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
                <div class="activite-label">2 days</div>
                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                <div class="activity-content">
                Est sit eum reiciendis exercitationem
                </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
                <div class="activite-label">4 weeks</div>
                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                <div class="activity-content">
                Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                </div>
            </div><!-- End activity item-->

            </div>

        </div>
        </div><!-- End Recent Activity -->

        <!-- Budget Report -->
        <div class="card">
        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
        </div>

        <div class="card-body pb-0">
            <h5 class="card-title">Budget Report <span>| This Month</span></h5>

            <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

            <script>
            document.addEventListener("DOMContentLoaded", () => {
                var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                legend: {
                    data: ['Allocated Budget', 'Actual Spending']
                },
                radar: {
                    // shape: 'circle',
                    indicator: [{
                        name: 'Sales',
                        max: 6500
                    },
                    {
                        name: 'Administration',
                        max: 16000
                    },
                    {
                        name: 'Information Technology',
                        max: 30000
                    },
                    {
                        name: 'Customer Support',
                        max: 38000
                    },
                    {
                        name: 'Development',
                        max: 52000
                    },
                    {
                        name: 'Marketing',
                        max: 25000
                    }
                    ]
                },
                series: [{
                    name: 'Budget vs spending',
                    type: 'radar',
                    data: [{
                        value: [4200, 3000, 20000, 35000, 50000, 18000],
                        name: 'Allocated Budget'
                    },
                    {
                        value: [5000, 14000, 28000, 26000, 42000, 21000],
                        name: 'Actual Spending'
                    }
                    ]
                }]
                });
            });
            </script>

        </div>
        </div><!-- End Budget Report -->

        <!-- Website Traffic -->
        <div class="card">
        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
        </div>

        <div class="card-body pb-0">
            <h5 class="card-title">Website Traffic <span>| Today</span></h5>

            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

            <script>
            document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                tooltip: {
                    trigger: 'item'
                },
                legend: {
                    top: '5%',
                    left: 'center'
                },
                series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                    show: false,
                    position: 'center'
                    },
                    emphasis: {
                    label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                    }
                    },
                    labelLine: {
                    show: false
                    },
                    data: [{
                        value: 1048,
                        name: 'Search Engine'
                    },
                    {
                        value: 735,
                        name: 'Direct'
                    },
                    {
                        value: 580,
                        name: 'Email'
                    },
                    {
                        value: 484,
                        name: 'Union Ads'
                    },
                    {
                        value: 300,
                        name: 'Video Ads'
                    }
                    ]
                }]
                });
            });
            </script>

        </div>
        </div><!-- End Website Traffic -->

    </div><!-- End Right side columns -->

</div>
@endsection
