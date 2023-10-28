<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ecommerce - @yield('titulo')</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');</style>
</head>
<body class="bg-white">
    <header class="shadow-md px-5 flex items-center justify-between">
        <a href="/"><img src="{{asset('img/logo.png')}}" alt="Logo Ecommerce" class="w-64"></a>
        <nav class="w-1/2 uppercase flex justify-around items-center font-semibold text-gray-400">
            <a href="/" class="hover:text-black">Inicio</a>
            <a href="{{route('Productos')}}" class="hover:text-black">Productos</a>
            <a href="{{route('Recomendado')}}" class="hover:text-black">Recomendado</a>
            @auth
                <a href="{{route('Orden')}}" class="hover:text-black">Revisar orden</a>
                <a href="{{route('Agregar')}}" class="hover:text-black">Agregar Producto</a>
            @endauth
        </nav>
        <div class="px-5 gap-2 text-2xl w-auto flex items-center">
            @if (auth()->user())
                    <a href="{{route('VerPedidos')}}"><div class="relative">
                        @if (auth()->user()->pedidos->isNotEmpty())
                            <span class="absolute text-xs w-3 h-3 right-0 text-white flex justify-center items-center p-1 rounded-full bg-red-600" style="top: -5%"></span>
                        @endif
                        <i class="fa-solid fa-cart-shopping px-1"></i>
                    </div></a>
                    <div class="relative">
                            @if (auth()->user()->productos->isNotEmpty())
                                {{-- <ul>
                                    @foreach (auth()->user()->productos as $producto)
                                        @if ($producto->pedidos->isNotEmpty())
                                            <li>{{ $producto->nombre }} tiene pedidos.</li>
                                        @endif
                                    @endforeach
                                </ul> --}}
                                <span class="absolute text-xs w-3 h-3 right-0 text-white flex justify-center items-center p-1 rounded-full bg-sky-500" style="top: -5%"></span>
                                <i class="fa-solid fa-bell"></i>
                            @else
                                <i class="fa-solid fa-bell"></i>
                            @endif
                    </div>
                <button id="info">
                    @if (auth()->user()->imagen)
                        <img src="{{ asset('PerfilUsuarios') . '/' . auth()->user()->imagen }}" alt="" class="rounded-full w-10 h-10" id="info">
                    @else
                        <img src="{{asset('img/usuario.svg')}}" alt="" class="w-10 h-10 rounded-full m-2 cursor-pointer" id="info">
                    @endif
                </button>
            @else
                <a href="{{route('Registro')}}"><i class="fa-solid fa-right-to-bracket"></i></a>
            @endif
        </div>
    </header>
    <main class="w-full h-full py-30">
        @yield('contenido')
        @auth
        <div class="w-1/4 bg-gray-100 shadow-2xl top-0 right-0 fixed" style="height: 100vh" id="Informacion">
            <span class="bg-red-500 flex justify-center items-center w-10 h-10 p-2 cursor-pointer">
                <i class="fa-solid fa-x p-2 text-white font-bold text-2xl" id="close"></i>
            </span>
            <div class="w-full flex justify-center">
                @if (auth()->user()->imagen)
                    <img src="{{ asset('PerfilUsuarios') . '/' . auth()->user()->imagen }}" alt="" class="rounded-full w-80 h-80">
                @else
                    <img src="{{asset('img/usuario.svg')}}" alt="" class="w-80 h-80 rounded-full m-2 cursor-pointer">
                @endif
            </div>
            <div class="w-full flex flex-col  justify-center mt-5">
                <h1 class="text-2xl font-semibold w-1/2 m-auto py-1 mt-5 relative">
                    {{auth()->user()->name}}
                    <a href="{{ route('EdiatPerfil') }}">
                        <i class="fa-solid fa-pencil absolute bottom-0 right-0 text-3xl p-2 cursor-pointer"></i>
                    </a>
                </h1>
                <h1 class="text-2xl font-semibold w-1/2 m-auto py-1">{{auth()->user()->email}}</h1>
                <a href="{{route('LogOut')}}" class="bg-red-500 w-1/2 m-auto text-center p-2 mt-10 rounded-lg text-white">Cerrar sesion</a>
            </div>
        </div>
        @endauth
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
    <script src="{{asset('js/perfil.js')}}"></script>
</body>
</html>