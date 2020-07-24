<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/loader-style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}">
    <style type="text/css">
        canvas#canvas4 {
            position: relative;
            top: 20px;
        }
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="{{ asset('admin/ico//minus.png') }}">
    @yield('style')
</head>
<body>
@include('admin.section.header.header')
@yield('content')
@include('admin.section.footer.footer')

@yield('script_before')
<script type="text/javascript" src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/preloader.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/app.js') }}" ></script>
<script type="text/javascript" src="{{ asset('admin/js/load.js') }}" ></script>
<script type="text/javascript" src="{{ asset('admin/js/main.js') }}" ></script>
@yield('script_after')
</body>
</html>
