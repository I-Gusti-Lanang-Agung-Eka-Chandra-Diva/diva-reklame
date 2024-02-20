@extends('dashboard.partials.main')
@section('css')
    <!-- Libs CSS -->
    <link href="{{ asset('asset/assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('asset/assets/css/theme.min.css') }}">
@endsection
@section('content')
    <div id="app-content">

        <div class="app-content-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div class="d-flex justify-content-between mb-5 align-items-center">
                            <h3 class="mb-0 ">Dashboard</h3>
                            <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah Produk</a>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1  row-cols-xl-4 row-cols-md-2 ">
                    <div class="col mb-5">
                        <div class="card h-100 card-lift">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted fw-semi-bold ">Pesanan</span>
                                    <span><i data-feather="shopping-cart" class="text-info"></i></span>

                                </div>
                                <div class="mt-4 mb-3 d-flex align-items-center lh-1">
                                    <h3 class="fw-bold  mb-0">5,312</h3>
                                    {{-- <span class="mt-1 ms-2 text-danger "><i data-feather="arrow-down"
                                            class="icon-xs"></i>2.29%</span> --}}
                                </div>
                                <a href="#!" class="btn-link fw-semi-bold">Tampilkan Pesanan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 card-lift">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted fw-semi-bold ">Pendapatan</span>
                                    <span><i data-feather="dollar-sign" class="text-info"></i></span>

                                </div>
                                <div class="mt-4 mb-3 d-flex align-items-center lh-1">
                                    <h3 class="fw-bold  mb-0">RP 8,312</h3>
                                    {{-- <span class="mt-1 ms-2 text-success "><i data-feather="arrow-up"
                                            class="icon-xs"></i>2.29%</span> --}}
                                </div>
                                <a href="#!" class="btn-link fw-semi-bold">Kelola Pendapatan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 card-lift">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted fw-semi-bold ">Pelanggan</span>
                                    <span><i data-feather="user" class="text-info"></i></span>

                                </div>
                                <div class="mt-4 mb-3 d-flex align-items-center lh-1">
                                    <h3 class="fw-bold  mb-0">1</h3>
                                    {{-- <span class="mt-1 ms-2 text-success "><i data-feather="arrow-up"
                                            class="icon-xs"></i>5.16%</span> --}}
                                </div>
                                <a href="#!" class="btn-link fw-semi-bold">Semua Pelanggan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 card-lift">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted fw-semi-bold ">Produk</span>
                                    <span><i data-feather="credit-card" class="text-info"></i></span>

                                </div>
                                <div class="mt-4 mb-3 d-flex align-items-center lh-1">
                                    <h3 class="fw-bold  mb-0">1</h3>

                                </div>
                                <a href="{{ route('product.index') }}" class="btn-link fw-semi-bold">Tampilkan semua
                                    produk</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row ">
                    <div class="col-xl-12 col-12 mb-5">
                        <div class="card h-100">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">Pendapatan</h4>
                                <div role="group" aria-label="Basic radio toggle button group">
                                    <span class="btn btn-outline-white btn-sm">{{ date('Y') }}</span>
                                </div>
                                {{-- <div role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                    <label class="btn btn-outline-white btn-sm" for="btnradio1">All</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                    <label class="btn btn-outline-white btn-sm" for="btnradio2">1M</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                    <label class="btn btn-outline-white btn-sm" for="btnradio3">6M</label>
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4">
                                    <label class="btn btn-outline-white btn-sm" for="btnradio4">1Y</label>
                                </div> --}}
                            </div>
                            <div class="card-body">
                                <div id="revenueChart"></div>
                                {{-- <div class="mt-4 px-lg-6 ">
                                    <div class="row bg-light rounded-3 ">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="p-4">
                                                <span><i class="mdi mdi-circle small me-1 text-primary"></i>Current
                                                    Week</span>
                                                <h3 class="mb-0  mt-2">$235,965</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="p-4">
                                                <span><i class="mdi mdi-circle small me-1 text-info"></i>Past
                                                    Week</span>
                                                <h3 class="mb-0  mt-2">$198,214</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="p-4">
                                                <span>Today's Earning: </span>
                                                <h3 class="mb-0  mt-2">$2,562.30</h3>
                                            </div>
                                        </div>
                                    </div>

                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-6 mb-5">
                        <div class="card h-100">
                            <div class="card-header d-flex justify-content-between align-items-center ">

                                <h4 class="mb-0">Penjualan tertinggi</h4>
                                <div class="d-flex align-items-center">
                                    <div class="col">
                                        <span>Urutkan berdasarkan:</span>
                                    </div>
                                    <div class="col-auto ms-2">
                                        <select class="form-select form-select-sm">
                                            <option selected>Hari ini</option>
                                            <option value="Yesterday">Kemarin</option>
                                            <option value="Last 7 Days">7 Hari Lalu</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table text-nowrap mb-0 table-centered">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Gambar</th>
                                                <th>Nama</th>
                                                <th>Kategori</th>
                                                <th>Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#!"><img src="{{ asset('assets/images/tekukan-akrilik.jpeg') }}"
                                                            alt="Image" class="img-4by3-xs rounded"></a></td>
                                                <td><a href="#!" class="text-inherit">Tekukan Akrilik</a></td>
                                                <td>Tekukan Akrilik</td>
                                                <td class="  text-dark">RP 25.000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-xl-4 col-lg-6 mb-5">
                        <div class="card h-100">
                            <div class="card-header ">
                                <h4 class="mb-0">Revenue by Location</h4>
                            </div>
                            <div class="card-body ">

                                <div id="locationmap" style="width:100%; height:250px"></div>
                                <div class="mt-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>United States</span>
                                        <span class="text-dark">$22,120</span>
                                    </div>
                                    <div class="progress mt-1" style="height: 6px;">
                                        <div class="progress-bar" role="progressbar" aria-label="Example 1px high"
                                            style="width: 45%;" aria-valuenow="45" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>India</span>
                                        <span class="text-dark">$12,756</span>
                                    </div>
                                    <div class="progress mt-1" style="height: 6px;">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            aria-label="Example 1px high" style="width: 25%;" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>United Kingdom</span>
                                        <span class="text-dark">$8,864</span>
                                    </div>
                                    <div class="progress mt-1" style="height: 6px;">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            aria-label="Example 1px high" style="width: 38%;" aria-valuenow="38"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Sweden</span>
                                        <span class="text-dark">$6,124</span>
                                    </div>
                                    <div class="progress mt-1" style="height: 6px;">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                            aria-label="Example 1px high" style="width: 18%;" aria-valuenow="18"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> --}}
                </div>
                {{-- <div class="row">
                    <div class="col-lg-6 mb-5">
                        <div class="card h-100">
                            <div class="card-header">
                                <h4 class="mb-0">Recent Orders</h4>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table text-nowrap mb-0 table-centered">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer</th>
                                                <th>Product</th>
                                                <th>Amount</th>
                                                <th>Vendor</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#!">#DU0007</a></td>
                                                <td><a href="#!" class="text-inherit">
                                                        <img src="../assets/images/avatar/avatar-8.jpg" alt="Image"
                                                            class="avatar-xs avatar rounded-circle me-1">
                                                        <span>Michell Forge</span>
                                                    </a></td>
                                                <td>Headphone</td>
                                                <td class="text-success ">$99.00</td>
                                                <td>DollarSmart</td>
                                                <td><span class="badge badge-success-soft text-success">Paid</span>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>




                        </div>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <div class="card h-100">
                            <div class="card-header d-flex justify-content-between align-items-center">

                                <h4 class="mb-0">Top Seller</h4>
                                <div>

                                    <select class="form-select form-select-sm">
                                        <option selected>Report</option>
                                        <option value="1">Report Download</option>
                                        <option value="2">Export</option>
                                        <option value="3">Import</option>
                                    </select>

                                </div>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table text-nowrap mb-0 table-centered">

                                        <tbody>
                                            <tr>

                                                <td>
                                                    <div class=" d-flex">
                                                        <a href="#!"> <img
                                                                src="../assets/images/svg/brand-logo-1.svg"
                                                                alt="Image"></a>
                                                        <div class="ms-3 lh-1">
                                                            <h5 class="mb-0"><a href="#!"
                                                                    class="text-inherit">Brilliant Boutique</a>
                                                            </h5>
                                                            <small>Bryan M. Flores</small>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Beauty Lips</td>
                                                <td>
                                                    <div class="lh-1">
                                                        <h5 class="mb-0">3214

                                                        </h5>
                                                        <small>Stock</small>
                                                    </div>
                                                </td>
                                                <td class="  text-dark">$529511</td>
                                                <td>42% <span class="ms-2"><i class="text-success icon-xs"
                                                            data-feather="trending-up"></i></span></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-between align-items-center  ">
                                <span>Showing <span class="text-dark">5</span> of <span class="text-dark">25</span>
                                    Results</span>
                                <nav>
                                    <ul class="pagination  mb-0 pagination-sm">
                                        <li class="page-item disabled">
                                            <a class="page-link " href="#!"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link " href="#!">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link " href="#!">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link " href="#!">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link " href="#!"><i
                                                    class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- Libs JS -->
    <script src="{{ asset('asset/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/assets/libs/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('asset/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>




    <!-- Theme JS -->
    <script src="{{ asset('asset/assets/js/theme.min.js') }}"></script>
    <!-- jsvectormap -->
    <script src="{{ asset('asset/assets/libs/jsvectormap/dist/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('asset/assets/libs/jsvectormap/dist/maps/world.js') }}"></script>
    <script src="{{ asset('asset/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('asset/assets/js/vendors/chart.js') }}"></script>
@endsection
