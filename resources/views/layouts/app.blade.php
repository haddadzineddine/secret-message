<!DOCTYPE html>
<html>

<head>
    <title>Secret Message</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @livewireStyles

    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>

    @livewire('nav-bar')

    <div class="md:w-5/6 m-auto">
        {{ $slot }}
    </div>

    @livewireScripts
    @vite('resources/js/app.js')


</html
