<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DEV - MANAGEMENT</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    @include('partials.nav')

    <div id="wrapper" class="toggled">
        <!-- Sidebar -->
        @include('partials.sidebar')
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
            <div id="app">
                <div id="page-content-wrapper">
                    @yield('content')
                </div>

            </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @include('partials.notifications')
    @yield('scripts')
</body>
</html>
