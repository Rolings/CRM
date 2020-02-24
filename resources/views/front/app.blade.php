<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Home')</title>
    <link href="{{ asset('front/css/libs.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
@include('front.section.header.header')
@yield('content')
@include('front.section.footer.footer')
@include('front.section.modal.modal')
<a id="gotop" class="scrollTop" href="#" onclick="top.goTop(); return false;"></a>
<script type="text/javascript">
    (function(){function c(f){return document.getElementById(f)}function a(h,g){h=h||0.1;g=g||12;var q=0;var p=0;var l=0;var k=0;var j=0;var i=0;if(document.documentElement){q=document.documentElement.scrollLeft||0;p=document.documentElement.scrollTop||0}if(document.body){l=document.body.scrollLeft||0;k=document.body.scrollTop||0}var j=window.scrollX||0;var i=window.scrollY||0;var o=Math.max(j,Math.max(l,q));var n=Math.max(i,Math.max(k,p));var f=1+h;window.scrollTo(Math.floor(o/f),Math.floor(n/f));if(o>0||n>0){var m="top.goTop("+h+", "+g+")";window.setTimeout(m,g)}return false}function e(){var g=c("gotop");var f=(document.body.scrollTop||document.documentElement.scrollTop);if(f>400){if(g.style.display!="block"){g.style.display="block";d(g,0,100,1)}}else{g.style.display="none"}return false}function d(g,j,h,i){op=j;b(g,op);setTimeout(f,1);function f(){if(j<h){op=op+i;if(op<h){setTimeout(f,1)}}else{op=op-i;if(op>h){setTimeout(f,1)}}b(g,op)}}function b(g,f){g.style.opacity=(f/100);g.style.filter="alpha(opacity="+f+")"}if(window.addEventListener){window.addEventListener("scroll",e,false);window.addEventListener("load",e,false)}else{if(window.attachEvent){window.attachEvent("onscroll",e);window.attachEvent("onload",e)}}window.top={};window.top["goTop"]=a})();
</script>
<script src="{{ asset('front/js/app.js') }}" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
@yield('js')
</body>
</html>
