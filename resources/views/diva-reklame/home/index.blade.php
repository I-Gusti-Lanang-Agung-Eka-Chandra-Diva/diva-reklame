@extends('diva-reklame.partials.main')
@section('content')
    <!-- content start -->
    <div class="wrapper-box p-0">
        <div class="slider-area slider-text-white">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center"
                    data-background="{{ asset('asset/assets/images/bg-home.jpeg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-10 d-flex align-items-center">
                                <div class="slider-content">
                                    <h1 data-animation="fadeInUp" data-delay=".6s">
                                        Selamat Datang
                                    </h1>
                                    <p data-animation="fadeInUp" data-delay=".9s">
                                        Diva reklame merupakan sebuah perusaahan yang bergerak di
                                        bidang percetakan khususnya pembuatan <b>Name Tag</b>,
                                        <b>Tekukan Akrilik</b>,<b>Neon Box</b>,<b>Akrilik sen</b>,<b>Neon sen</b>.
                                    </p>
                                    <div class="slide-btn">
                                        <a data-animation="fadeInLeft" data-delay="1.2s" href="{{ route('about.index') }}"
                                            class="btn brand-btn rounded">Tentang Kami
                                            <span>&rarr;</span>
                                        </a>
                                        <a data-animation="fadeInRight" data-delay="1.5s"
                                            href="{{ route('contact.index') }}" class="btn white-btn rounded">Kontak Kami
                                            <span>&rarr;</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product start -->
        <div class="services-area pt-120 pb-70">
            <div class="container">
                <div class="row">
                    @foreach ($barang as $produk)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="service-box service-3 mb-50">
                                <img src="{{ asset($produk->foto) }}" alt="" height="290" />
                                <h3 class="heading-no-border">
                                    <span>{{ $produk->nama }}</span>
                                </h3>
                                <p>
                                    {!! $produk->deskripsi !!}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="intro-area pt-120 pb-120 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="intro-text text-center">
                            <h1>Berbisinis Dengan Kami</h1>
                            <p>
                                Mari berbisnis dengan kami dan membangun sebuah kerja sama antar perusahaan melalui
                                tombol dibawah ini.
                            </p>
                            <a href="{{ route('contact.index') }}" class="btn brand-btn" style="animation-delay: 1.2s"
                                tabindex="0">Kontak
                                Kami
                                <span>→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product end -->
        <!-- talk-start -->
        <div class="cta-area theme-bg pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 col-md-8">
                        <div class="cta-text">
                            <h2>Ingin bertanya lebih lanjut?</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-4">
                        <div class="cta-button text-md-right">
                            <a class="btn white-btn" href="#">Hubungi Kami
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- talk-end -->

    </div>
    </div>
@endsection
