<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin')</title>
    @yield('css')
</head>
<body>
@include('admin.section.header.header')
@yield('content')
@include('admin.section.footer.footer')
<script src="{{ asset('admin/js/app.js') }}" type="text/javascript"></script>
@yield('js')
</body>
</html>
