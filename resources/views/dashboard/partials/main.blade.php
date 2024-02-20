<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Diva Reklame">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-M8S4MT3EYG');
    </script>

    @yield('css')


    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('asset/assets/images/favicon/favicon.ico') }}">
    <title>Diva Reklame | Dashboard</title>
</head>

<body>
    <main id="main-wrapper" class="main-wrapper">
        <div class="header">
            <!-- navbar -->
            @include('dashboard.partials.navbar')
        </div>
        <!-- navbar vertical -->
        <!-- Sidebar -->

        @include('dashboard.partials.sidebar')




        <!-- page content -->
        @yield('content')

    </main>

    <!-- Scripts -->

    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session()->has('success'))
            Swal.fire({
                icon: "success",
                title: "Sukses",
                text: "{{ session('success') }}",
            });
        @endif
        @if (session()->has('error'))
            Swal.fire({
                icon: "error",
                title: "Gagal",
                text: "{{ session('error') }}",
            });
        @endif
    </script>
</body>

</html>
