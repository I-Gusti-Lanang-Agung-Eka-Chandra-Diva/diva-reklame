@extends('diva-reklame.partials.main')
@section('content')
    <div class="wrapper-box p-0">
        <!-- page-title-area start -->
        <div class="page-title-area pt-210 pb-210" data-background="{{ asset('asset/assets/images/bg-home.jpeg') }}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title text-center">
                            <h1>Produk Kami</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('home.index') }}">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Produk
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-title-area end -->
        <!-- services-area start -->
        <div class="services-area pt-115 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title text-center mb-50">
                            <h2>Produk</h2>
                            <p>
                                Berikut adalah sebagian kecil produk dari perusahaan kami.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-box service-3 mb-50">
                            <img src="assets/images/tekukan-akrilik.jpeg" alt="" height="270" />
                            <h3>
                                <a href="">Tekukan Akrilik</a>
                            </h3>
                            <p>
                                Tekukan akrilik adalah kerajinan dimana aklirik itu sendiri dipanaskan
                                dan dibentuk sesuai keinginan dan ketebalan pelanggan.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-box service-3 mb-50">
                            <img src="assets/images/neon-box.jpeg" alt="" height="270" />
                            <h3>
                                <a href="">Neon Box</a>
                            </h3>
                            <p>
                                Neon Box akrilik adalah kerajinan yang terbuat dari bahan akrilik yang
                                dilapisi dengan Lampu LED. biasa digunakan sebagai iklan atau hiasan perusahaan
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-box service-3 mb-50">
                            <img src="assets/images/name-tag.jpeg" height="270" alt="" />
                            <h3>
                                <a href="">Name Tag</a>
                            </h3>
                            <p>
                                Name tag adalah sebuah nama dada yang digunakan sebagai tanda pengenal dan
                                biasanya digunakan di tempat seperti hotel,villa,dan resto.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services-area start -->
    </div>
@endsection
