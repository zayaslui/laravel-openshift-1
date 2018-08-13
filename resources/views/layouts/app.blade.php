<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/piper.css') }}">
    <link rel="stylesheet" href=" {{asset('css/bootstrap.min.css')}}">

</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('js/builder_scripts.js') }}"></script>
<script src="{{ asset('js/waterpipe.js') }}"></script>

</body>
</html>
