@extends('Layouts.App')

@section('titulo')
    Home
@endsection

@section('contenido')
    <h1 class="text-center py-20 uppercase text-5xl font-extrabold font-mono text-blue-900">estilo de vida sostenible <br> pero elegante</h1>
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
            <div class="w-1/2 h-52 bg-blue-500 m-5 rounded-md justify-around items-center flex">
                <h2 class="flex flex-col">
                    <span class="text-3xl text-white font-semibold">30% de descuento</span>
                    <span class="text-white text-2xl">Relojes</span>
                    <a href="" class="p-2 mt-10 rounded-md flex justify-around text-center bg-white items-center text-gray-500 font-bold w-48">
                        Comprar Ahora
                        <i class="fa-solid fa-cart-shopping text-xl"></i>
                    </a>
                </h2>
                <img src="http://127.0.0.1:8000/client/img/watch.png" alt="" class="p-1 bg-white rounded-md">
            </div>
            <div class="w-1/2 h-52 bg-sky-400 m-5 rounded-md justify-around items-center flex">
                <h2 class="flex flex-col">
                    <span class="text-3xl text-white font-semibold">45% de descuento</span>
                    <span class="text-white text-2xl">Cinturones</span>
                    <a href="" class="p-2 mt-10 rounded-md flex justify-around text-center bg-white items-center text-gray-500 font-bold w-48">
                        Comprar Ahora
                        <i class="fa-solid fa-cart-shopping text-xl"></i>
                    </a>
                </h2>
                <img src="http://127.0.0.1:8000/client/img/belt.png" alt="" class="p-1 bg-white rounded-md">
            </div>
        </div>
        <div>
            <div style="width: 60%;" class="m-auto flex justify-center items-center flex-col">
                <h1 class="text-center text-3xl text-blue-900 font-bold py-10 uppercase">Productos Populares resientes</h1>
                <button class="p-5 w-52 text-white font-semibold hover:scale-105 bg-blue-700 px-5 rounded-full">Mas Productos <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div style="width: 60%;" class="m-auto flex justify-between items-center flex-col py-10">
                <h1 class="text-center text-3xl text-blue-900 font-bold py-10 uppercase">Categoria</h1>
                <button class="p-5 w-52 text-white font-semibold hover:scale-105 bg-blue-700 px-5 rounded-full">Mas Categorias <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div style="width: 60%;" class="m-auto py-10 text-center flex justify-center items-center flex-col bg-blue-700 rounded-lg">
                <h1 class="text-white text-5xl font-extrabold">Unete a nuestra Comunidad</h1>
                <h3 class="text-white py-5 font-semibold text-2xl">
                    Conozca al equipo de la empresa, coleccionista, anuncios, ofertas especiales y mas....
                </h3>
                <a href="" class="w-40 p-3  mt-10 rounded-full font-black text-xl hover:scale-105 uppercase bg-white">
                    Unirme
                </a>
            </div>
        </div>
    </div>
@endsection