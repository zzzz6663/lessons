<!DOCTYPE html>

<html dir="rtl" lang="fa">


<head>
    <meta charset="utf-8" />
    <title>
        Lessons
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="" name="description" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/libs/sw.css') }}">
    <link rel="stylesheet" href="{{ asset('/libs/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('/libs/modal-loading.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/more.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/responsive.css') }}">
    <script src="{{ asset('/libs/sw.js') }}"></script>
    @vite('resources/css/site.css')
</head>

<body>

    @yield('login')
    {{-- @if (Request::url() != route('admin.login'))
    @includeWhen(empty($sidebar), 'admin.section.navbar')
    @endif  --}}
    @includeWhen(empty($sidebar), 'site_section.sidemenu')
    <div id="site-content">
        @includeWhen(empty($sidebar), 'site_section.header')
        <div id="maincontent" class="rows sfix">
           <div>
            @yield('content')
           </div>
        </div>
        @include('site_section.footer')
    </div>
    <script src="{{ asset('/site/js/jquery-2.2.0.min.js') }}"></script>
    <script src="{{ asset('/site/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('/site/js/plyr.min.js') }}"></script>
    <script src="{{ asset('/site/js/jquery.videoplayer.js') }}"></script>
    <script src="{{ asset('/site/js/jquery-ui-slider-pips.min.js') }}"></script>
    <script src="{{ asset('/site/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('/site/js/jquery.event.drop-2.2.js') }}"></script>
    <script src="{{ asset('/site/js/jquery.event.drop.live-2.2.js') }}"></script>
    <script src="{{ asset('/site/js/jquery.event.drag-2.2.js') }}"></script>
    <script src="{{ asset('/site/js/jquery.event.drag.live-2.2.js') }}"></script>
    <script src="{{ asset('/site/js/apexcharts.min.js') }}"></script>

    <script src="{{ asset('/site/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/site/js/template.js') }}"></script>
    <script src="{{ asset('/libs/sw.js') }}"></script>
    <script src="{{ asset('/libs/select2.js') }}"></script>
    <script src="{{ asset('/libs/modal-loading.js') }}"></script>
    @vite('resources/js/site.js')
    @yield('script')
</body>
@include('sweetalert::alert')

</html>
