<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'E-Commerce')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="bg-gray-100 ">
    @include('layouts.header')
    <main>
        @yield('breadcrumb')
        @yield('content')
    </main>
    @yield('single')
    @yield('order')
    @yield('login')
    @include('layouts.footer')

    @stack('scripts')
</body>

</html>
