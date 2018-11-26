<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Havilla International Ministries">
    <meta name="author" content="T N CEDRIC @tncedric">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Havilla International Minitries</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon.png">

    @include('includes.styles')
    @yield('styles')

</head>

<body class="homepage">

    <!-- Preloader -->
    <div class="loader-wrapper">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>

    <!-- Page Wrapper -->
    <div class="wrapper">

        <!-- Header Section -->
        <header>
            <div class="header-area">

                <!-- Top Contact Info -->
                @include('includes.topheader')

                <!-- Main Navigation Section -->
                @include('includes.navigation')
            </div>
        </header>
        <!-- Header Section -->

        <!-- Main Content Section -->
        <main class="main">

            @yield('content')

        </main>
        <!-- Main Content Section -->

        <!-- Footer Section -->
        @include('includes.footer')
        <!-- Footer Section -->

        <!-- back-to-top link -->
        <a href="#0" class="cd-top"> Top </a>

    </div>

    <!-- Page Wrapper
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Javascripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    @include('includes.scripts')
    @yield('scripts')

    <!-- Main JS -->
    <script src="/site/js/main.js"></script>
    <!-- comes after all default and custom scritps have been loaded  -->

</body>

</html>
