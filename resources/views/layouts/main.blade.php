<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEM INFORMASI | HANGTUAH</title>
    <meta name="description" content="">
    <meta name="author" content="">
    @include('partial.css')


<body class="hold-transition skin-blue sidebar-collapse layout-top-nav">
    <div class="wrapper">
        @include('partial.headernav')
        @include('partial.sidebarkiri')
        <div class="content-wrapper">
            @yield('content')

        </div>
    </div>
    <?php //include 'includes/aside.php';
    ?>
    <div class="control-sidebar-bg"></div>
    @include('partial.footer')
    @include('partial.js')
    @include('partial.jssub')
</body>

</html>
