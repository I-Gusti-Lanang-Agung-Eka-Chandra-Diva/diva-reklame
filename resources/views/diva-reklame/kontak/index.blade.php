@extends('diva-reklame.partials.main')
@section('content')
    <!-- content start -->
    <div class="wrapper-box p-0">
        <!-- page-title-area start -->
        <div class="page-title-area pt-210 pb-210" data-background="{{ asset('asset/assets/images/bg-home.jpeg') }}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title text-center">
                            <h1>Kontak Kami</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Kontak Kami
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-title-area end -->
        <!-- blog-area start -->
        <div class="contact-area pt-110 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-info mb-30">
                            <h2>Kontak</h2>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-meta mb-30">
                                        <div class="contact-meta-info">
                                            <h4>Telepon</h4>
                                            <p>+62 872-231-213-123</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-meta mb-30">
                                        <div class="contact-meta-info">
                                            <h4>E-mail</h4>
                                            <p>
                                                <a href="mailto: agungdiva55@gmail.com">agungdiva55@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-meta">
                                        <div class="contact-meta-info">
                                            <h4>Alamat</h4>
                                            <p>Perum dalung permail, Dalung. Bali</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7" style="border: 8px solid black">
                        <div class="contact-form mb-30 text-center">
                            <h3 style="color: black">MAPS</h3>
                            <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7889.317041992394!2d115.16394555390623!3d-8.628743600000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238c6b95a561f%3A0xaf53d35b133dff07!2sPatung%20Catur%20Muka!5e0!3m2!1sid!2sid!4v1699367127318!5m2!1sid!2sid"
                            width="100%" height="250" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p class="ajax-response"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-area end -->
    </div>
    <!-- content end -->
@endsection
