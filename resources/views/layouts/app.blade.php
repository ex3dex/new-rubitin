<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'New Rubitin') }}</title>

    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/a1ddc222b3f086c189ebb93f577f536e_0.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="manifest" href="templates/images/manifest.json">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/0d5e084968d837bdef570768b46f3afe_0.css') }}" />
</head>
<body class="site frontpage com_content  view-featured no-layout no-task itemid-101 parent_my casino">
        @if(!\Request::is('/'))
            @include('layouts.header')
        @endif
        @yield('content')
        @if(!\Request::is('/'))
            @include('layouts.footer')
        @endif
</body>
</html>
