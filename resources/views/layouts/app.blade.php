<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/site.webmanifest')}}">
    <link rel="mask-icon" href="{{ asset('images/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;600;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
    @yield('head')
    <livewire:styles />
</head>

<body>
    <div id="app">
        @include('layouts.navbar')
        @guest
        <main class="py-4">
            @yield('content')
        </main>
        @else
        <div class="min-h-screen md:flex">
            <div class="flex-none pt-12 inset-0 fixed hidden w-40 md:block md:w-64 bg-indigo-200 text-indigo-800">
                <nav class="p-5">
                    @include('layouts.navigation')
                </nav>
            </div>
            <div class="flex-1 bg-indigo-100 ml-64 mt-10">
                <main class="px-8">
                    @include('layouts.alert')
                    @yield('content')
                </main>
                <br>
                @include('layouts.footer')
            </div>
        </div>
        @endguest

    </div>
    <livewire:scripts />
    @stack('scripts')
</body>

</html>