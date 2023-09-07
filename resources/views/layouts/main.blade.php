<!doctype html>
<html lang="en">

<head>
    @include('partial.css')
    <title>SISTEM INFORMASI | HANGTUAH</title>
</head>

<body class="fixed-header sticky-footer menuleft-open">
    @include('partial.loader')

    <div class="wrapper">

        @include('partial.headernav')
        @include('partial.sidebarkiri')

            <div class="main-container">
            @yield('content')
            </div>

    </div>

    @include('partial.footer')
    @include('partial.js')
    @include('partial.jssub')

</body>
</html>
