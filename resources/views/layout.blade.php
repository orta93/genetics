<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white text-black-primary">
    <div id="app">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
