<!DOCTYPE html>
<html class="min-vh-100 w-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ env('APP_NAME') }}</title>

        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ env('APP_NAME') }}">
        <meta name="author" content="Adiwit Co., Ltd.">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">

        @if (App::environment(['staging', 'production']))
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-80534628-1"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());
              gtag('config', 'UA-80534628-1');
            </script>
        @endif
    </head>

    <body class="d-flex min-vh-100 w-100 mx-auto flex-column" style="display:none;">
        <!-- ============================================================== -->
        <!-- Start body -->
        <!-- ============================================================== -->
        @yield('app')
        <!-- ============================================================== -->
        <!-- End body -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start page plugins -->
        <!-- ============================================================== -->
        <script src="{{ asset('vendor/jquery/jquery.slim.min.js') }}"></script>
        <script src="{{ asset('vendor/popper.js/umd/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/holderjs/holder.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery-lazyload/jquery.lazyload.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/fontawesome/js/all.min.js') }}"></script>
        <script src="{{ asset('vendor/fontawesome/js/v4-shims.min.js') }}"></script>
        <script src="{{ asset('js/layouts/html5.js') }}"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="{{ asset('css/html5.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
        @yield('plugins')
        <!-- ============================================================== -->
        <!-- End page plugins -->
        <!-- ============================================================== -->
    </body>
</html>
