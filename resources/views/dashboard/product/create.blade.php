@extends('dashboard.partials.main')
@section('css')
    <!-- Libs CSS -->
    <link href="{{ asset('asset/assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">



    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('asset/assets/css/theme.min.css') }}">
    <link href="{{ asset('asset/assets/libs/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/assets/libs/%40yaireo/tagify/dist/tagify.css') }}" rel="stylesheet">

    {{-- tinymce --}}
    <script src="https://cdn.tiny.cloud/1/a1q7hpd7wuvhfq6zx7grxoh8cxezkh67wy23sdbhglz17m8t/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#tinymce'
        })
    </script>
@endsection

@section('content')
    <!-- Page Content -->
    <div id="app-content">

        <!-- Container fluid -->
        <div class="app-content-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div class="mb-5">
                            <h3 class="mb-0 ">Tambah Produk</h3>

                        </div>
                    </div>
                </div>
                <form action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div>
                        <!-- Dismissing alert -->

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error! </strong> {{ $error }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endforeach
                        @endif
                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <!-- card -->
                                <div class="card mb-4">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div>
                                            <!-- input -->
                                            <div class="mb-3">
                                                <label class="form-label">Judul produk <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    placeholder="Masukkan judul produk" name="judul_produk" required>
                                            </div>
                                            <!-- input -->
                                            <div>
                                                <label class="form-label" form="deskripsi">Deskripsi Produk <span
                                                        class="text-danger">*</span></label>
                                                <textarea name="deskripsi_produk" id="tinymce"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card mb-4">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div>
                                            <div class="mb-4">
                                                <!-- heading -->
                                                <h4 class="mb-4">Galeri Produk</h4>
                                                <h5 class="mb-1">Gambar Produk <span class="text-danger">*</span></h5>
                                                <p>Tambah gambar utama produk.</p>
                                                <!-- input -->
                                                <input name="foto_produk" type="file" class="form-control">
                                            </div>
                                            {{-- <div>
                                                <!-- heading -->
                                                <h5 class="mb-1">Galeri Produk</h5>
                                                <p>Tambah gambar galeri produk.</p>
                                                <!-- input -->
                                                <form action="#" class="d-block dropzone border-dashed rounded-2">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>
                                                </form>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <!-- card -->
                                <div class="card mb-4">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <!-- input -->
                                        <div class="form-check form-switch mb-4">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchStock" checked>
                                            <label class="form-check-label" for="flexSwitchStock">Tersedia</label>
                                        </div>
                                        <!-- input -->
                                        <div>
                                            <div class="mb-3">
                                                <label class="form-label">Kode produk</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Masukkan kode produk">
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <label class="form-label">Kategori <span
                                                            class="text-danger">*</span></label>
                                                    <a href="{{ route('product-category.index') }}"
                                                        class="btn-link fw-semi-bold">Tambah Kategori</a>
                                                </div>
                                                <!-- select menu -->
                                                <select name="kategori_produk" class="form-select"
                                                    aria-label="Default select example">
                                                    @foreach ($kategori as $data)
                                                        <option value="{{ $data->kategori }}">{{ $data->kategori }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <label class="form-label">Bahan <span
                                                            class="text-danger">*</span></label>
                                                    <a href="{{ route('product-ingredients.index') }}"
                                                        class="btn-link fw-semi-bold">Tambah Bahan</a>
                                                </div>
                                                <!-- select menu -->
                                                <select name="kategori_produk" class="form-select"
                                                    aria-label="Default select example">
                                                    @foreach ($kategori as $data)
                                                        <option value="{{ $data->kategori }}">{{ $data->kategori }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            {{-- <!-- tag -->
                                            <div class="mb-3">
                                                <label class="form-label">Tags
                                                </label>
                                                <input name='tags' value='' class="form-control w-100">
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card mb-4">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <!-- select -->
                                        <div class="mb-3">
                                            <label class="form-label">Status <span class="text-danger">*</span></label>
                                            <select name="status_produk" class="form-select"
                                                aria-label="Default select example">
                                                <option selected value="aktif">Aktif</option>
                                                <option value="disimpan">Disimpan</option>
                                            </select>
                                        </div>
                                        <!-- date -->
                                        <div class="mb-3">
                                            <label class="form-label">Jadwal</label>
                                            <div class="input-group me-3 rounded">
                                                <input class="form-control" type="date" placeholder="Pilih Tanggal"
                                                    aria-describedby="basic-addon2" name="jadwal">

                                                <span class="input-group-text text-muted" id="basic-addon2"><i
                                                        data-feather="calendar" class="icon-xs"></i></span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card mb-4">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Harga Jual <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" name="harga_produk" class="form-control"
                                                placeholder="Masukkan harga jual">
                                        </div>
                                        {{-- <!-- input -->
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="priceIncluded" checked>
                                            <label class="form-check-label" for="priceIncluded">
                                                Price includes taxes</label>
                                        </div> --}}
                                    </div>
                                </div>
                                <!-- button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        Tambahkan Produk
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- dropzone -->
    <script src="{{ asset('asset/assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
    <!-- flatpickr -->
    <script src="{{ asset('asset/assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>

    <!-- quill js -->
    <script src="{{ asset('asset/assets/libs/quill/dist/quill.min.js') }}"></script>
    <script src="{{ asset('asset/assets/libs/%40yaireo/tagify/dist/tagify.min.js') }}"></script>
    <!-- Libs JS -->
    <script src="{{ asset('asset/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/assets/libs/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('asset/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>




    <!-- Theme JS -->
    <script src="{{ asset('asset/assets/js/theme.min.js') }}"></script>
@endsection
