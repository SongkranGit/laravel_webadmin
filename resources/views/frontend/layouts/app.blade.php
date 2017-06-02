<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('frontend.includes.header')
<body>

<div class="site_wrapper">
    @yield('content')
</div>

@include('frontend.includes.footer')
