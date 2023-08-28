<!DOCTYPE html>
<html lang="en">

<head>
    <title>Layanan Umum | Dashboard</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <!-- GLOBAL MAINLY STYLES-->
    @include('partial.css')
    <!-- PAGE LEVEL STYLES-->
</head>
<!-- <body class="fixed-navbar">-->

<body class="fixed-layout">
    <div class="page-wrapper">
        @include('partial.headernav')
        @include('partial.sidebarkiri')
        <div class="content-wrapper">
            @yield('content')
            @include('partial.footer')
        </div>
    </div>
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">di Tunggu Ya .. </div>
    </div>
    @include('partial.js')
    @include('partial.jssub')
</body>

</html>
