@extends('Layouts.App')

@section('titulo')
    Home
@endsection

@section('contenido')
    @if (auth()->user())
    <h1 class="text-start px-20 mt-10 font-sans uppercase font-bold text-xl text-blue-800 p-2">Hola {{ auth()->user()->name }}</h1>
    <h1 class="text-start px-20 font-sans font-normal text-xl text-blue-800 p-2">
        Estos productos te pueden gustar
    </h1>
    <div class="px-20 flex justify-start flex-wrap p-2 py-5">
        @foreach ($productos as $producto)
            <div class="border border-gray-300 m-2" style="height: 40vh; width: 15%;">
                <div class="w-full relative" style="height: 70%;">
                    <span class="absolute left-0 text-red-500 p-1 font-bold text-2xl w-20 text-center"> -{{ $producto->descuento}}%</span>
                    <div class="absolute right-0 m-1">
                        @if ($producto->user->imagen)
                            <img src="{{ asset('ServidorProductos') . '/' . $producto->user->imagen }}" alt="" class="rounded-full w-10">
                        @else
                            <img src="{{asset('img/usuario.svg')}}" alt="" class="rounded-full w-10">
                        @endif
                    </div>
                    <img src="{{ asset('ServidorProductos') . '/' . $producto->imagen }}"alt="Imagen Producto {{ $producto->nombre }}" class="w-full"/>
                </div>
                <div class="w-full" style="height: 30%;">
                    <div class="w-full h-full flex flex-col px-2 relative">
                        <span class="text-3xl font-bold">{{ $producto->nombre }}</span>
                        <span class="text-xl font-semibold w-full">{{ $producto->categoria }}</span>
                        <span class="absolute right-0 p-2 text-lg font-semibold">S/. {{ $producto->precio }}</span>
                        <form action="{{route('likes.store',$producto)}}" method="POST" class="flex justify-start mt-5 items-center">
                            @csrf
                            <button type="submit" class="ml-2">
                                @if ($producto->likedBy->contains(auth()->user()))
                                    <i class="fa-solid fa-heart text-red-600"></i>
                                @else
                                    <i class="fa-solid fa-heart text-gray-300"></i>
                                @endif
                            </button> 
                            <p class="text-sm px-2 font-semibold"> {{ $producto->likes->count() }} Me gusta</p>             
                        </form>
                        <a href="" class="text-2xl text-gray-800 hover:bg-orange-500 rounded-full hover:text-white absolute right-0 bottom-0 p-2">
                            <i class="fa-solid fa-truck-fast"></i>
                        </a>  
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @else
    <h1 class="text-center py-10 uppercase text-5xl font-extrabold font-sans text-blue-900">estilo de vida sostenible <br> pero elegante</h1>
    <p class="text-center font-semibold text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum officia voluptas quis cupiditate non?<br> Vero odio voluptatem numquam autem  rerum dolorem atque et, modi facere fugit architecto, velit commodi. Quos?50</p>
    <div class="w-full m-auto py-10 mt-20">
        <h1 class="text-center text-5xl text-blue-900 font-bold">Por qué elegirnos</h1>
        <div class="flex items-center m-auto justify-around py-20" style="width: 70%;">
            <div class="p-2 shadow-md shadow-gray-400 cursor-pointer hover:scale-105 rounded-md w-96 bg-blue-500 h-32 flex items-center justify-between px-5">
                <i class="fa-solid fa-box text-white text-4xl"></i>
                <p class="text-white text-2xl font-bold">
                    Envío gratis <br>
                    <span class="text-sm text-gray-200">Gratis en pedidos superiores a S/.50</span>
                </p>
            </div>
            <div class="p-2 shadow-md shadow-gray-400 cursor-pointer hover:scale-105 rounded-md w-96 bg-green-500 h-32 flex items-center justify-between px-10">
                <i class="fa-solid fa-ticket text-white text-4xl"></i>
                <p class="text-white text-2xl font-bold">
                    Garantia <br>
                    <span class="text-sm text-gray-200">30 dias de devolucion de dinero</span>
                </p>
            </div>
            <div class="p-2 shadow-md shadow-gray-400 cursor-pointer hover:scale-105 rounded-md w-96 bg-sky-400 h-32 flex items-center justify-between px-10">
                <i class="fa-regular fa-clock text-white text-4xl"></i>
                <p class="text-white text-2xl font-bold">
                    Soporte las 24 Horas <br>
                    <span class="text-sm text-gray-200">Cliente de soprte amigable</span>
                </p>
            </div>
        </div>
        <div style="width: 70%;" class=" m-auto flex justify-center items-center">
            <div class="w-1/2 h-52 bg-blue-500 m-5 rounded-md justify-around hover:scale-105 items-center flex">
                <h2 class="flex flex-col">
                    <span class="text-3xl text-white font-semibold">30% de descuento</span>
                    <span class="text-white text-2xl">Relojes</span>
                    <a href="" class="p-2 mt-10 rounded-md flex justify-around text-center bg-white items-center text-gray-500 font-bold w-48">
                        Comprar Ahora
                        <i class="fa-solid fa-cart-shopping text-xl"></i>
                    </a>
                </h2>
                <img src="{{asset('img/watch.png')}}" alt="" class="p-1 bg-white rounded-md">
            </div>
            <div class="w-1/2 h-52 bg-sky-400 m-5 hover:scale-105 rounded-md justify-around items-center flex">
                <h2 class="flex flex-col">
                    <span class="text-3xl text-white font-semibold">45% de descuento</span>
                    <span class="text-white text-2xl">Cinturones</span>
                    <a href="" class="p-2 mt-10 rounded-md flex justify-around text-center bg-white items-center text-gray-500 font-bold w-48">
                        Comprar Ahora
                        <i class="fa-solid fa-cart-shopping text-xl"></i>
                    </a>
                </h2>
                <img src="{{asset('img/belt.png')}}" alt="" class="p-1 bg-white rounded-md">
            </div>
        </div>
        <div>
            <div style="width: 60%;" class="m-auto flex justify-center items-center flex-col">
                <h1 class="text-center text-3xl text-blue-900 font-bold py-10 uppercase">Productos Populares resientes</h1>
                <a href="{{route('Productos')}}" class="p-5 w-52 text-white font-semibold hover:scale-105 bg-blue-700 px-5 rounded-full">Mas Productos <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div style="width: 60%;" class="m-auto flex justify-between items-center flex-col py-10">
                <h1 class="text-center text-3xl text-blue-900 font-bold py-10 uppercase">Categoria</h1>
                <a href="{{route('Categorias')}}" class="p-5 w-52 text-white font-semibold hover:scale-105 bg-blue-700 px-5 rounded-full">Mas Categorias <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div style="width: 60%;" class="m-auto py-10 text-center flex justify-center items-center flex-col bg-blue-700 rounded-lg">
                <h1 class="text-white text-5xl font-extrabold">Unete a nuestra Comunidad</h1>
                <h3 class="text-white py-5 font-semibold text-2xl">
                    Conozca al equipo de la empresa, coleccionista, anuncios, ofertas especiales y mas....
                </h3>
                <a href="{{route('Registro')}}" class="w-40 p-3  mt-10 rounded-full font-black text-xl hover:scale-105 uppercase bg-white">
                    Unirme
                </a>
            </div>
        </div>
    </div>
    @endif
@endsection