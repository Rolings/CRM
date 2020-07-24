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
@if(!isset($error))
    @include('admin.section.preloader.index')
    @include('admin.section.nav-bar.index')
    @include('admin.section.sidebar.index')
@endif
@yield('content')
@if(!isset($error))
    @include('admin.section.sidebar.r-sidebar')
@endif
@yield('script_before')
<script type="text/javascript" src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/preloader.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/app.js') }}"></script>

<script type="text/javascript" src="{{ asset('admin/js/skin-select/jquery.cookie.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/skin-select/skin-select.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/clock/date.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/gage/justgage.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/custom/scriptbreaker-multiple-accordion-1.js') }}"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript" src="{{ asset('admin/js/slidebars/slidebars.min.js') }}"></script>

{{--<script type="text/javascript" src="{{ asset('admin/js/load.js') }}"></script>--}}
<script type="text/javascript" src="{{ asset('admin/js/main.js') }}"></script>

<script>
    $(".topnav").accordionze({
        accordionze: true,
        speed: 500,
        closedSign: '<img src="{{ asset("admin/img/plus.png") }}">',
        openedSign: '<img src="{{ asset("admin/img/minus.png") }}">'
    });
</script>

@yield('script_after')
</body>
</html>
