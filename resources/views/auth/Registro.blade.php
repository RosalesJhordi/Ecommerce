<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Registro - Ecommerce</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
</head>
<body class="w-full m-0 flex justify-between items-center">
    <div class="contenedor-form">
        <div class="-w-full flex justify-center py-20">
            <img src="{{asset('img/logo.png')}}" alt="Logo Ecommerce" class="w-80">
        </div>
        <form action="{{ route('Registro') }}" method="POST" class="mt-10 m-auto form" novalidate>
            @csrf
            <div class="border border-blue-700 rounded-md mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
                <span class="px-5">
                    <i class="fa-solid fa-user-tie"></i>
                </span>
                <input type="text" name="name" id="name" placeholder="Nombres" autocomplete="name" class="h-full outline-none" value={{ old('name') }}>
            </div>
            @error('name')
                <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
            @enderror
            <div class="border border-blue-700 rounded-md mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
                <span class="px-5">
                    <i class="fa-solid fa-envelope"></i>
                </span>
                <input type="email" name="email" id="email" placeholder="Email" autocomplete="email" class="h-full outline-none" value="{{ old('email') }}">
            </div>
            @error('email')
                <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
            @enderror
            <div class="border border-blue-700 rounded-md mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
                <span class="px-5">
                    <i class="fa-solid fa-unlock"></i>
                </span>
                <input type="password" name="password" id="password" autocomplete="current-password" placeholder="Contraseña" class="h-full outline-none">
            </div>
            @error('password')
                <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
            @enderror
            <div class="border border-blue-700 rounded-md mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
                <span class="px-5">
                    <i class="fa-solid fa-lock"></i>
                </span>
                <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="current-password" placeholder="Confirma Contraseña" class="h-full outline-none">
            </div>
            <div class="flex items-center mt-5">
                <input type="checkbox" name="mostrapwds" id="mostrapwds" class="w-5 mr-2 h-5">
                <span class="font-semibold"> Mostrar Contraseñas</span>
            </div>
            <button type="submit" class="p-2 mt-10 rounded-md text-white font-semibold m-auto text-center w-full bg-blue-500">Crear Cuenta</button>
        </form>
        <p class="text-center mt-5 text-gray-500 text-xl">¿ Ya tienes una cuenta ? <a href="{{ route('Login') }}" class="text-blue-500 font-semibold">Iniciar sesion</a></p>
    </div>
    <img src="{{asset('img/register.jpg')}}" alt="Logo Ecommerce" class="contenedor-img">
    <script src="{{asset('js/pwds.js')}}"></script>
</body>
</html>