<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <style>
        body {
            height: 100vh;
        }
        main {
            overflow-y: auto;
        }
    </style>

</head>

<body class="h-screen flex">
    <nav class="bg-blue-700 text-white w-1/6">
        <h1 class="text-center mt-6 text-xl font-bold">Dashboard</h1>
        <ul class="flex flex-col mt-6 gap-4">
            <li class="">
                <a href="/" class="py-2 px-3 w-full hover:underline">Home</a>
            </li>
            <li class="">
                <a href="{{ route('tandatangan.index') }}" class="py-2 px-3 hover:underline">Tandatangan</a>
            </li>
            <li class="">
                <a href="{{ route('kepalasurat.index') }}" class="py-2 px-3 hover:underline">Kepala Surat</a>
            </li>
            <li class="">
                <a href="{{ route('suratkeluar.index') }}" class="py-2 px-3 hover:underline">Surat Keluar</a>
            </li>
            <li class="">
                <a href="{{ route('users.index') }}" class="py-2 px-3 hover:underline">Semua User</a>
            </li>
        </ul>
    </nav>
    <main class="flex-1 p-4">
        @yield('content')
    </main>
</body>

</html>
