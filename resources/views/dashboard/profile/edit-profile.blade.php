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

        <!-- Container fluid -->
        <div class="app-content-area">
            <div class="container-fluid">
                @include('dashboard.profile.partials.head')
                <!-- content -->
                <div class="mt-0">
                    <!-- row -->
                    <div class="app-content-area">
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <!-- Page header -->

                                    <div class="mb-5">
                                        <h3 class="mb-0 fw-bold">Ubah Profil</h3>

                                    </div>

                                </div>
                            </div>
                            <div class="row mb-8">
                                <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                                    <div class="mb-4 mb-lg-0">
                                        <p class="mb-0 fs-5 text-muted">Pengaturan Profil </p>
                                    </div>

                                </div>

                                <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                                    <!-- card -->
                                    <div class="card">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class=" mb-6">
                                                <h4 class="mb-1">Pengaturan</h4>

                                            </div>
                                            <div class="row align-items-center mb-8">
                                                <div class="col-md-3 mb-3 mb-md-0">
                                                    <h5 class="mb-0">Avatar</h5>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="d-flex align-items-center mb-4">
                                                        <div>
                                                            <img class="image  avatar avatar-lg rounded-circle"
                                                                src="{{ asset('asset/assets/images/avatar/avatar-11.jpg') }}"
                                                                alt="{{ auth()->user()->nama }}">
                                                        </div>

                                                        <div class="file-upload btn btn-outline-white ms-4">
                                                            <input type="file" class="file-input opacity-0"
                                                                name="avatar">Unggah Foto
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- col -->
                                            <div class="row mb-8">
                                                <div class="col-md-3 mb-3 mb-md-0">
                                                    <!-- heading -->
                                                    <h5 class="mb-0">Foto Sampul</h5>
                                                </div>
                                                <div class="col-md-9">
                                                    <!-- dropzone input -->
                                                    <div>
                                                        <form action="#" class="dropzone mb-3 border-dashed">
                                                            <div class="fallback">
                                                                <input name="file" type="file" multiple>
                                                            </div>
                                                        </form>
                                                        <button type="submit" class="btn btn-outline-white">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <!-- border -->
                                                <div class="mb-6">
                                                    <h4 class="mb-1">Informasi Dasar</h4>

                                                </div>
                                                <form>
                                                    <!-- row -->

                                                    <div class="mb-3 row">
                                                        <label for="fullName"
                                                            class="col-sm-4 col-form-label
                                        form-label">Nama
                                                            Lengkap</label>
                                                        <div class="col-sm-8 mb-3 mb-lg-0">
                                                            <input type="text" class="form-control"
                                                                placeholder="Nama Lengkap" id="fullName"
                                                                name="nama_lengkap" value="{{ auth()->user()->nama }}" required>
                                                        </div>
                                                    </div>

                                                    <!-- row -->
                                                    <div class="mb-3 row">
                                                        <label for="email"
                                                            class="col-sm-4 col-form-label
                                        form-label">Email</label>
                                                        <div class="col-md-8 col-12">
                                                            <input type="email" class="form-control" placeholder="Email"
                                                                id="email" name="email" value="{{ auth()->user()->email }}" required>
                                                        </div>
                                                    </div>
                                                    <!-- row -->
                                                    <div class="mb-3 row">
                                                        <label for="phone"
                                                            class="col-sm-4 col-form-label
                                        form-label">Telepon</label>
                                                        <div class="col-md-8 col-12">
                                                            <input type="text" class="form-control" placeholder="Phone"
                                                                id="phone" name="telepon" value="{{ auth()->user()->telepon }}" required>
                                                        </div>
                                                    </div>
                                                    <!-- row -->
                                                    <div class="mb-3 row">
                                                        <label for="location"
                                                            class="col-sm-4 col-form-label
                                        form-label">Alamat</label>
                                                        <div class="col-md-8 col-12">
                                                            <textarea class="form-control" name="alamat" id="" cols="30" rows="10" placeholder="Alamat lengkap">{{ auth()->user()->alamat }}</textarea>
                                                        </div>
                                                        {{-- <div class="col-md-8 col-12">
                                                            <select class="form-select" id="location">
                                                                <option selected>Select Country</option>
                                                                <option value="1">India</option>
                                                                <option value="2">UK</option>
                                                                <option value="3">USA</option>
                                                            </select>
                                                        </div> --}}
                                                    </div>
                                                    {{-- <!-- row -->
                                                    <div class="mb-3 row">
                                                        <label for="addressLine"
                                                            class="col-sm-4 col-form-label
                                        form-label">Kode Post 1</label>


                                                        <div class="col-md-8 col-12">
                                                            <input type="text" class="form-control"
                                                                placeholder="Placeholder" id="addressLine" name="kodepos1" required>
                                                        </div>
                                                    </div>
                                                    <!-- row -->
                                                    <div class="mb-3 row">
                                                        <label for="addressLineTwo"
                                                            class="col-sm-4
                                        col-form-label form-label">Kode Pos 2</label>
                                                        <div class="col-md-8 col-12">
                                                            <input type="text" class="form-control"
                                                                placeholder="Placeholder" id="addressLineTwo" name="kodepos2" required>
                                                        </div>
                                                    </div> --}}
                                                    <!-- row -->
                                                    <div class="row align-items-center">
                                                        <label for="zipcode"
                                                            class="col-sm-4 col-form-label
                                        form-label">Kode Pos <i data-feather="info" class="me-2 icon-xs"></i></label>

                                                        <div class="col-md-8 col-12">
                                                            <input type="text" class="form-control"
                                                                placeholder="Kode Pos" id="zipcode" name="kode_pos" required>
                                                        </div>
                                                        <div class="offset-md-4 col-md-8 mt-4">
                                                            <button type="submit" class="btn btn-primary"> Simpan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row mb-8">
                                <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                                    <div class="mb-4 mb-lg-0">
                                        <h4 class="mb-1">Pengaturan Email</h4>
                                        <p class="mb-0 fs-5 text-muted">Atur email anda  </p>
                                    </div>

                                </div>

                                <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                                    <!-- card -->
                                    <div class="card" id="edit">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="mb-6">
                                                <h4 class="mb-1">Email</h4>

                                            </div>
                                            <form>
                                                <!-- row -->
                                                <div class="mb-3 row">
                                                    <!-- label -->
                                                    <label for="emailsaatini"
                                                        class="col-sm-4
                                      col-form-label form-label">Email saat ini</label>
                                                    <div class="col-md-8 col-12">
                                                        <!-- input -->
                                                        <input type="email" class="form-control"
                                                            placeholder="Masukkan email anda" value="{{ auth()->user()->email }}" name="email" id="emailsaatini"
                                                            required>
                                                    </div>
                                                    <!-- button -->
                                                    <div class="offset-md-4 col-md-8 col-12 mt-3">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="mb-6 mt-6">
                                                <h4 class="mb-1">Ubah kata sandi</h4>

                                            </div>
                                            <form>
                                                <!-- row -->
                                                <div class="mb-3 row">
                                                    <label for="currentPassword"
                                                        class="col-sm-4
                                      col-form-label form-label">Kata sandi saat ini</label>

                                                    <div class="col-md-8 col-12">
                                                        <input type="password" class="form-control"
                                                            placeholder="Masukkan kata sandi anda" name="katasandi" id="currentPassword"
                                                            required>
                                                    </div>
                                                </div>
                                                <!-- row -->
                                                <div class="mb-3 row">
                                                    <label for="katasandibaru"
                                                        class="col-sm-4
                                      col-form-label form-label">Kata sandi baru</label>

                                                    <div class="col-md-8 col-12">
                                                        <input type="password" class="form-control"
                                                            placeholder="Masukkan kata sandi baru" id="katasandibaru"
                                                            required>
                                                    </div>
                                                </div>
                                                <!-- row -->
                                                <div class="row align-items-center">
                                                    <label for="konfirmasikatasandi"
                                                        class="col-sm-4
                                      col-form-label form-label">Konfirmasi kata sandi</label>
                                                    <div class="col-md-8 col-12 mb-2 mb-lg-0">
                                                        <input type="password" class="form-control"
                                                            placeholder="Konfirmasi kata sandi baru" id="konfirmasikatasandi"
                                                            required>
                                                    </div>
                                                    <!-- list -->
                                                    <div class="offset-md-4 col-md-8 col-12 mt-4">
                                                        <h6 class="mb-1">Aturan kata sandi:</h6>
                                                        <p>Pastikan anda memenuhi aturan berikut:</p>
                                                        <ul>
                                                            <li> Kata sandi minimal <b>8 Karakter</b></li>
                                                            <li>Kata sandi harus mengandung angka</li>
                                                            <li>Kata sandi harus mengandung huruf kapital</li>
                                                        </ul>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                                    <div class="mb-4 mb-lg-0">
                                        <h4 class="mb-1">Hapus akun</h4>
                                        <p class="mb-0 fs-5 text-muted">Menu penghapusan akun</p>
                                    </div>

                                </div>

                                <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                                    <!-- card -->

                                    <div class="card mb-6">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="mb-6">
                                                <h4 class="mb-1">Zona Merah </h4>

                                            </div>
                                            <div>
                                                <!-- text -->
                                                <p>Menghapus akun akan menghapus riwayat belanja anda
                                                </p>
                                                <a href="#" class="btn btn-danger">Hapus akun</a>
                                                <p class="small mb-0 mt-3">Ingin bertanya seputar akun silahkan hubungi <a
                                                        href="mailto:bantuan@divareklame.com">bantuan@divareklame.com</a>
                                                </p>
                                            </div>
                                        </div>
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
@endsection
