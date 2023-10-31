<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Ecommerce</title>
    @vite('resources/css/app.css')
    @vite('resources/css/mediaLogin.css')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
</head>
<body class="w-full m-0 flex justify-between items-center">
    <div class="contenedor-form">
        <div class="-w-full flex justify-center py-20">
            <img src="{{asset('img/logo.png')}}" alt="Logo Ecommerce" class="w-80">
        </div>
        <form action="{{ route('Login') }}" method="POST" class="mt-10 m-auto form" novalidate>
            @csrf
            @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ session('mensaje') }}</p>
            @endif
            <div class="border border-blue-700 flex justify-between rounded-md mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
                <span class="px-5">
                    <i class="fa-solid fa-envelope"></i>
                </span>
                <input type="email" name="email" id="email" autocomplete="email" placeholder="Email" class="h-full outline-none w-96">
                <span class="px-5 hidden">
                    <i class="fa-solid fa-eye-slash"></i>
                </span>
            </div>
            @error('email')
                <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
            @enderror
            <div class="border border-blue-700 flex justify-between items-center rounded-md mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
                <span class="px-5">
                    <i class="fa-solid fa-unlock"></i>
                </span>
                <input type="password" name="password" id="password" placeholder="Contraseña" class="h-full outline-none w-96">
                <span class="px-5 cursor-default" id="Mostrar">
                    <i class="fa-solid fa-eye"></i>
                </span>
                <span class="px-5 hidden cursor-pointer" id="NoMostrar">
                    <i class="fa-solid fa-eye-slash"></i>
                </span>
            </div>
            @error('password')
                <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
            @enderror
            <div class="p-2 mt-2 text-lg flex justify-start items-center">
                <input type="checkbox" name="remember" id="remember" class="w-5 h-5 border-blue-500">
                <span class="font-semibold px-2">Recordar Credenciales</span>
            </div>
            <button type="submit" class="p-2 mt-10 rounded-md text-white font-semibold m-auto text-center w-full bg-blue-500">Login</button>
        </form>
        <p class="text-center p mt-5 text-gray-500 text-xl">¿ No tienes una cuenta ?<a href="{{ route('Registro') }}" class="text-blue-500 font-semibold">Crea aqui</a></p>
    </div>
    <img src="{{asset('img/register.jpg')}}" alt="Logo Ecommerce" class="contenedor-img">
    <script src="{{asset('js/pwd.js')}}"></script>
</body>
</html>