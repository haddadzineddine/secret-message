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

<body class="w-5/6 m-auto">
    
    @livewire('nav-bar')

    {{ $slot }}


    @livewireScripts
    @vite('resources/js/app.js')

</html
