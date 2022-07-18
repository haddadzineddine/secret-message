<html>

<head>
    <title>Secret Message</title>
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>

    <div class="main">
        @livewire('side-bar')
        @livewire('message')
        @livewire('content')
    </div>



    @vite('resources/js/app.js')
    @livewireScripts

</html>
