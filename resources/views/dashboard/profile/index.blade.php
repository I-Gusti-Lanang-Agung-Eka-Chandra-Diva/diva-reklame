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
                <div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card">
                                <!-- card body -->
                                <div class="card-header">
                                    <h4 class="mb-0">Tentang Saya</h4>
                                </div>
                                <div class="card-body">
                                    {{-- <!-- card title -->

                                    <h5 class="text-uppercase">Bio</h5>
                                    <!-- text -->
                                    <p class="mt-2 mb-6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Suspen disse var ius enim in eros elementum tristique.
                                        Duis cursus, mi quis viverra ornare, eros dolor interdum
                                        nulla, ut commodo diam libero vitae erat.
                                    </p> --}}
                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-6 mb-5">
                                            <!-- text -->
                                            <h5 class="text-uppercase">Nama lengkap</h5>
                                            <p class="mb-0">{{ auth()->user()->nama }}</p>
                                        </div>
                                        <div class="col-6 mb-5">
                                            <!-- text -->
                                            <h5 class="text-uppercase">Alamat</h5>
                                            <p class="mb-0">{{ auth()->user()->alamat }}</p>
                                        </div>
                                        <div class="col-6 mb-5">
                                            <h5 class="text-uppercase">Telepon</h5>
                                            <p class="mb-0">{{ auth()->user()->telepon }}</p>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="text-uppercase">Email</h5>
                                            <p class="mb-0">{{ auth()->user()->email }}</p>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="text-uppercase">Bergabung pada</h5>
                                            <p class="mb-0">{{ auth()->user()->created_at->diffForHumans() }}</p>
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
