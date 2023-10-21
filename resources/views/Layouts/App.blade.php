<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ecommerce</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
</head>
<body class="bg-white">
    <header class="shadow-md px-5 flex items-center justify-between">
        <a href="/"><img src="{{asset('img/logo.png')}}" alt="Logo Ecommerce" class="w-64"></a>
        <nav class="w-1/3 uppercase flex justify-around items-center font-semibold text-gray-400">
            <a href="" class="hover:text-black">Inicio</a>
            <a href="" class="hover:text-black">Productos</a>
            <a href="" class="hover:text-black">Categoria</a>
            <a href="" class="hover:text-black">Revisar orden</a>
        </nav>
        <div class="px-5 text-2xl">
            <i class="fa-solid fa-magnifying-glass hover:text-gray-500"></i>
            <i class="fa-solid fa-cart-shopping hover:text-gray-500"></i>
        </div>
    </header>
    <main class="w-full h-full py-30">
        @yield('contenido')
    </main>
</body>
</html>