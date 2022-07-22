<!DOCTYPE html>
<html>

<head>
    <title>Secret Message</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
    @livewireStyles

    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <div class="container">
        <div class="bubbles">
            <span style="--i:27;"></span>
            <span style="--i:44;"></span>
            <span style="--i:25;"></span>
            <span style="--i:40;"></span>
            <span style="--i:3;"></span>
            <span style="--i:25;"></span>
            <span style="--i:12;"></span>
            <span style="--i:38;"></span>
            <span style="--i:19;"></span>
            <span style="--i:27;"></span>
            <span style="--i:12;"></span>
            <span style="--i:34;"></span>
            <span style="--i:47;"></span>
            <span style="--i:23;"></span>
            <span style="--i:15;"></span>
            <span style="--i:10;"></span>
            <span style="--i:28;"></span>
            <span style="--i:39;"></span>
            <span style="--i:27;"></span>
            <span style="--i:23;"></span>
            <span style="--i:25;"></span>
            <span style="--i:12;"></span>
            <span style="--i:18;"></span>
            <span style="--i:29;"></span>
            <span style="--i:15;"></span>
            <span style="--i:30;"></span>
            <span style="--i:12;"></span>
            <span style="--i:22;"></span>
            <span style="--i:14;"></span>
            <span style="--i:40;"></span>
            <span style="--i:27;"></span>
        </div>
    </div>
    @yield('content')


    @livewireScripts
    @vite('resources/js/app.js')

</html
