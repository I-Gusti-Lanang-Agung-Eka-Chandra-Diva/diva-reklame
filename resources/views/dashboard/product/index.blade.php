@extends('dashboard.partials.main')
@section('css')
    <!-- Libs CSS -->
    <link href="{{ asset('asset/assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('asset/assets/css/theme.min.css') }}">
    <link href="{{ asset('asset/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="app-content">
        <!-- Container fluid -->
        <div class="app-content-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div class="mb-5">
                            <h3 class="mb-0">Produk</h3>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header d-md-flex border-bottom-0">
                                    <div class="flex-grow-1">
                                        <a href="{{ route('product.create') }}" class="btn btn-primary">+ Tambah Produk</a>
                                    </div>
                                    <div class="mt-3 mt-md-0">
                                        <a href="#!" class="btn btn-outline-white ms-2">Kelola Produk</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table id="example" class="table text-nowrap table-centered mt-0"
                                            style="width: 100%">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>
                                                      No
                                                    </th>
                                                    <th class="ps-1">Produk</th>
                                                    <th>Kategori</th>
                                                    <th>Bahan</th>
                                                    <th>Ditambahkan pada</th>
                                                    <th>Harga</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($produk as $data)
                                                    <tr>
                                                        <td>
                                                          {{ $loop->iteration }}
                                                        </td>
                                                        <td class="ps-0">
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset($data->foto) }}" alt=""
                                                                    class="img-4by3-sm rounded-3">
                                                                <div class="ms-3">
                                                                    <h5 class="mb-0">
                                                                        {{ $data->nama }}
                                                                        <span class="text-muted">{!! Str::limit($data->deskripsi, 20, '.....') !!}</span>
                                                                    </h5>
                                                                    {{-- <span class="text-warning">
                                                                    <i class="mdi mdi-star"> </i>
                                                                    <i class="mdi mdi-star ms-n1"> </i>
                                                                    <i class="mdi mdi-star ms-n1"> </i>
                                                                    <i class="mdi mdi-star ms-n1"> </i>
                                                                    <i class="mdi mdi-star ms-n1"> </i>
                                                                </span> --}}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>{{ $data->Kategori->kategori }}</td>
                                                        <td>{{ $data->Kategori->kategori }}</td>
                                                        <td>{{ $data->created_at }}</td>
                                                        <td>{{ 'RP ' . number_format($data->harga) }}</td>
                                                        <td>
                                                            <span
                                                                class="badge badge-success-soft text-uppercase">{{ $data->status }}</span>
                                                        </td>
                                                        <td>
                                                            <a href="#!"
                                                                class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                                                data-template="eyeOne">
                                                                <i data-feather="eye" class="icon-xs"></i>
                                                                <div id="eyeOne" class="d-none">
                                                                    <span>View</span>
                                                                </div>
                                                            </a>
                                                            <a href="#!"
                                                                class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                                                data-template="editOne">
                                                                <i data-feather="edit" class="icon-xs"></i>
                                                                <div id="editOne" class="d-none">
                                                                    <span>Edit</span>
                                                                </div>
                                                            </a>
                                                            <a href="#!"
                                                                class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                                                data-template="trashOne">
                                                                <i data-feather="trash-2" class="icon-xs"></i>
                                                                <div id="trashOne" class="d-none">
                                                                    <span>Delete</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- popper js -->
    <script src="{{ asset('asset/assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <!-- tippy js -->
    <script src="{{ asset('asset/assets/libs/tippy.js/dist/tippy-bundle.umd.min.js') }}"></script>
    <script src="{{ asset('asset/assets/js/vendors/tooltip.js') }}"></script>
    <script src="{{ asset('asset/assets/libs/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    {{-- <script src="{{ asset('asset/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script> --}}
    <script src="{{ asset('asset/assets/js/vendors/datatable.js') }}"></script>
@endsection
