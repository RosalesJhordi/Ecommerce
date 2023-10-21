<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ecommerce - @if(!empty(trim($__env->yieldContent('titulo')))) @yield('titulo') @else Home @endif</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
</head>
<body class="bg-white">
    <header class="shadow-md px-5 flex items-center justify-between">
        <a href="/"><img src="{{asset('img/logo.png')}}" alt="Logo Ecommerce" class="w-64"></a>
        <nav class="w-1/3 uppercase flex justify-around items-center font-semibold text-gray-400">
            <a href="/" class="hover:text-black">Inicio</a>
            <a href="{{route('Productos')}}" class="hover:text-black">Productos</a>
            <a href="{{route('Categorias')}}" class="hover:text-black">Categoria</a>
            <a href="{{route('Orden')}}" class="hover:text-black">Revisar orden</a>
        </nav>
        <div class="px-5 text-2xl">
            <i class="fa-solid fa-magnifying-glass hover:text-gray-500"></i>
            <a href="{{route('Registro')}}"><i class="fa-solid fa-right-to-bracket"></i></a>
        </div>
    </header>
    <main class="w-full h-full py-30">
        @yield('contenido')
    </main>
    <footer class="w-full flex justify-center items-center flex-col border-y-2 bg-gray-200">
        <div class="flex justify-center w-1/2 mt-10">
            <div class="w-1/3 text-start">
                <span class="font-bold text-2xl">Compania</span>
                <p class="font-semibold mt-2">Sobre Nosotros</p>
                <p class="font-semibold mt-2">Productos</p>
                <p class="font-semibold mt-2">Direccion</p>
            </div>
            <div class="w-1/3 text-start">
                <span class="font-bold text-2xl">Apoyo</span>
                <p class="font-semibold mt-2">Preguntas frecuentes</p>
                <p class="font-semibold mt-2">Envio y devolucion</p>
                <p class="font-semibold mt-2">Garantia</p>
            </div>
            <div class="w-1/3 text-start">
                <span class="font-bold text-2xl">Contactenos</span>
                <p class="font-semibold mt-2"><i class="fa-solid fa-phone"></i> +51 916 236 760</p>
                <p class="font-semibold mt-2"><i class="fa-solid fa-envelope"></i> Ecommerce@eco.com</p>
                <p class="font-semibold mt-2">
                    <i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-twitter"></i>
                </p>
            </div>
        </div>
        <p class="py-5 text-2xl text-gray-600">&copy;Ecommerce. Todos los derechos reservados {{ now()->year }}</p>
    </footer>
</body>
</html>