<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
        http-equiv="Access-Control-Allow-Origin"
        content="*" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">   

    <title>GoGoSprockets!</title>
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    @include('dark.layout.partials.styles')    

    @yield('styles')



</head>

<body>

    {{-- MAIN NAVIGATION BAR --}}
    @include('dark.layout.partials.header')

    {{-- MAIN CONTENT --}}
    <div class="main">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    @include('dark.layout.partials.footer')

    @include('dark.layout.partials.scripts')

    @yield('scripts')

</body>

</html>
