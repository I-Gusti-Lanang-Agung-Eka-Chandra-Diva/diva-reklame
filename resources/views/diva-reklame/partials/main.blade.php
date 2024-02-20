<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Diva Reklame - Beranda</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="#" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
</head>

<body>

    @include('diva-reklame.partials.header')

    @yield('content')

    @include('diva-reklame.partials.footer')

    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-js/bootstrap.main.js') }}"></script>
</body>

</html>
