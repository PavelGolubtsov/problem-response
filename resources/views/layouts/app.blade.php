<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @include('components.styles')

    <style>

    </style>
</head>
<body>
    <div id="app">
        @section('header')
            @include('components.header')
        @show

        <main class="class=container mt-4">
            <div class="row">
                <div class="col">

                </div>
                <div class="col-8">
                    @yield('content')
                </div>
                <div class="col">

                </div>
            </div>
        </main>

        @include('components.footer')
    </div>
</body>
</html>
