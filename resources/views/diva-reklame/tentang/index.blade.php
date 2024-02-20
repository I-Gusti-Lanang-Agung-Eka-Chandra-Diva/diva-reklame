@extends('diva-reklame.partials.main')
@section('content')

<div class="wrapper-box p-0">
    <!-- about-me start -->
    <div class="page-title-area pt-210 pb-210" data-background="{{ asset('asset/assets/images/bg-home.jpeg') }}">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title text-center">
                        <h1>Tentang Kami</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="{{route('home.index')}}">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Tentang Kami
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-me-area end -->
    <!-- who-we-area start -->
    <div class="who-we-area cover-bottom pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 wh-pad pr-60">
                    <div class="who-we-box white-bg">
                        <h2>Apa itu Diva Reklame ?</h2>
                        <p>
                            Diva reklame adalah sebuah nama dari sebuah perusahaan
                            percetakan yang bergerak di bidang advertising. Diva reklame
                            menyediakan berbagai kerajinan mulai dari name tag, neon box,
                            tekukan akrilik, akrilik sen, dll. Kami selalu berusaha
                            memberikan kualitas terbaik kepada pelanggan karena di
                            perusahaan kami kualitas adalah suatu kewajiban yang harus
                            kami maksimalkan dalam pembuatan pesanan. Nah disini waktu
                            yang biasa kita janjikan adalah 1-2 minggu tergantung tingkat
                            kesulitas desain dan banyak pesanan yang ada.
                        </p>
                        <a data-animation="fadeInLeft" data-delay="1.2s" href="{{route('products.index')}}" class="btn brand-btn"
                            style="animation-delay: 1.2s" tabindex="0">Produk
                            <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- who-we-area end -->
</div>

@endsection
