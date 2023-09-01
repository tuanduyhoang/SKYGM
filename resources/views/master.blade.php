<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.css')
    <title>SKYGM | @yield('title')</title>
</head>
<body>

@include('layouts.header')

<div class="fullwidth-template">

@yield('main')
</div>

@include('layouts.footer')
@include('layouts.fdmobile')
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
@include('layouts.js')
@yield('pagescript')
</body>
</html>
