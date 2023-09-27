
<!doctype html>
<html lang="en" class="no-focus">
    <head>
    @include('partial.css')
    </head>
    <body>
        <div id="page-container" class="sidebar-inverse enable-page-overlay-o side-scroll page-header-fixed page-header-inverse">
        @include('partial.sidebarkiri')
        @include('partial.headernav')
            <!-- Main Container -->
            <main id="main-container"> 
                @yield('content')
            </main>
            <!-- END Main Container -->
         @include('partial.footer')
        </div>
        @include('partial.js')
        @include('partial.jssub')
        <!-- END Page Container -->
    </body>
</html>
