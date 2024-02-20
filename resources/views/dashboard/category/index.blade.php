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
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{ $error }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                @endif
                <div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header d-md-flex border-bottom-0">
                                    <div class="flex-grow-1">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#tambahKategori"
                                            class="btn btn-primary">+ Tambah
                                            kategori</a>

                                        <!-- Tambah Kategori -->
                                        <div class="modal fade" id="tambahKategori" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabelOne" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabelOne">Tambah Kategori
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post" action="{{ route('product-category.store') }}">
                                                        <div class="modal-body">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Kategori:</label>
                                                                <input type="text" name="kategori" class="form-control"
                                                                    id="recipient-name" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 mt-md-0">
                                        <a href="#!" class="btn btn-outline-white ms-2">Kelola Kategori</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table id="example" class="table text-nowrap table-centered mt-0"
                                            style="width: 100%">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="pe-0">
                                                        No
                                                    </th>
                                                    <th>Kategori</th>
                                                    <th>Total Produk</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kategori as $data)
                                                    <tr>
                                                        <td class="pe-0">
                                                            <span>1</span>
                                                        </td>
                                                        <td>{{ $data->kategori }}</td>
                                                        <td>1</td>
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
                                                            <a href="#!" data-bs-toggle="modal" data-bs-target="#hapusData{{ $data->id }}"
                                                                class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                                                data-template="trashOne">
                                                                <i data-feather="trash-2" class="icon-xs"></i>
                                                                <div id="trashOne" class="d-none">
                                                                    <span>Delete</span>
                                                                </div>
                                                            </a>
                                                            {{-- modal hapus --}}
                                                            <div class="modal fade" id="hapusData{{ $data->id }}" tabindex="-1"
                                                                role="dialog" aria-labelledby="Konfirmasi"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="Konfirmasi">Konfirmasi</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Apakah anda yakin ingin menghapus kategori?</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Batal</button>
                                                                            <button type="button"
                                                                                class="btn btn-primary">Hapus</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
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
    <script src="{{ asset('asset/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('asset/assets/js/vendors/datatable.js') }}"></script>
@endsection
