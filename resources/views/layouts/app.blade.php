<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
    @stack('stylesheets')
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        .gradient {background: linear-gradient(90deg, #2a5a2a 20%, #30df24 100%);}
    </style>
</head>
<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    @include('layouts.partials.navbar')
    @yield('content')
    @include('layouts.partials.footer')
</body>
</html>
