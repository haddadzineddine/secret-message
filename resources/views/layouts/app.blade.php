<!DOCTYPE html>
<html>

<head>
    <title>Secret Message</title>
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @livewireStyles
    @vite('resources/css/app.css')
</head>
<script src="//unpkg.com/alpinejs" defer></script>

<body>

    @yield('content')


    @livewireScripts
    @vite('resources/js/app.js')

</html
