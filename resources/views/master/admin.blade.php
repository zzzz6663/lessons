<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- CSS files -->

    <link href="/admin/dist/css/tabler.min.css" rel="stylesheet">
    <link href="/admin/dist/css/tabler-flags.min.css" rel="stylesheet">
    <link href="/admin/dist/css/tabler-payments.min.css" rel="stylesheet">
    <link href="/admin/dist/css/tabler-vendors.min.css" rel="stylesheet">
    <link href="/admin/dist/css/demo.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/libs/fs.css') }}">
    <link rel="stylesheet" href="{{ asset('/libs/sw.css') }}">
    <script src="{{ asset('/libs/sw.js') }}"></script>
    <script src="{{ asset('/libs/jq.js') }}"></script>
    @vite('resources/css/admin.css')

</head>


<body>

    @yield('login')
    @if (Request::url() != route('admin.login'))
    <div class="page">
        @includeWhen(empty($sidebar), 'admin.section.sidebar')
        @includeWhen(empty($navbar), 'admin.section.navbar')
        <div class="page-wrapper">
            <div class="page-header d-print-none">
                <div class="container-xl">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif





    <!-- / Layout wssrappser -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/admin/dist/libs/apexcharts/dist/apexcharts.min.js" defer></script>
    <script src="/admin/dist/libs/jsvectormap/dist/js/jsvectormap.min.js" defer></script>
    <script src="/admin/dist/libs/jsvectormap/dist/maps/world.js" defer></script>
    <script src="/admin/dist/libs/jsvectormap/dist/maps/world-merc.js" defer></script>
    <!-- Tabler Core -->
    <script src="/admin/dist/js/tabler.min.js" defer></script>
    <script src="/admin/dist/js/demo.min.js" defer></script>
    @vite('resources/js/admin.js')

    @yield('script')
</body>
@include('sweetalert::alert')

</html>
