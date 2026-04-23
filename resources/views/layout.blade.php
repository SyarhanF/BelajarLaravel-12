<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="bg-gray-100">
    <nav class="flex items-center gap-4 p-4 bg-gray-800 text-white">
        <a href="/">Websiteku</a>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/pegawai">Data Pegawai</a>
    </nav>
    <div class="p-8">
        @yield('content')
    </div>
</body>
</html>