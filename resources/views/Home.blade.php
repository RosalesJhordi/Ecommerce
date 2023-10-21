@extends('Layouts.App')

@section('contenido')
    <h1 class="text-center py-20 uppercase text-5xl font-extrabold font-mono text-blue-900">estilo de vida sostenible <br> pero elegante</h1>
    <p class="text-center font-semibold text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum officia voluptas quis cupiditate non?<br> Vero odio voluptatem numquam autem  rerum dolorem atque et, modi facere fugit architecto, velit commodi. Quos?50</p>
    <div class="w-full m-auto py-10 mt-20">
        <h1 class="text-center text-5xl text-blue-900 font-bold">Por qué elegirnos</h1>
        <div class="flex items-center m-auto justify-around py-20" style="width: 70%;">
            <div class="p-2 shadow-md shadow-gray-400 cursor-pointer hover:scale-105 rounded-md w-96 bg-blue-500 h-32 flex items-center justify-between px-5">
                <i class="fa-solid fa-box text-white text-4xl"></i>
                <p class="text-white text-2xl font-bold">Envío gratis</p>
            </div>
            <div class="p-2 shadow-md shadow-gray-400 cursor-pointer hover:scale-105 rounded-md w-96 bg-green-500 h-32 flex items-center justify-between px-10">
                <i class="fa-solid fa-ticket text-white text-4xl"></i>
                <span class="text-white text-2xl font-bold">Garantia</span>
            </div>
            <div class="p-2 shadow-md shadow-gray-400 cursor-pointer hover:scale-105 rounded-md w-96 bg-sky-400 h-32 flex items-center justify-between px-10">
                <i class="fa-regular fa-clock text-white text-4xl"></i>
                <span class="text-white text-2xl font-bold">Soporte las 24 Horas</span>
            </div>
        </div>
        <div style="width: 70%;" class=" m-auto flex justify-center items-center">
            <div class="w-1/2 h-52 bg-blue-500 m-5 rounded-md">
                <span>30% de descuento</span>
                <span></span>
            </div>
            <div class="w-1/2 h-52 bg-sky-400 m-5 rounded-md">
                <span>45% de descuento</span>
            </div>
        </div>
    </div>
@endsection