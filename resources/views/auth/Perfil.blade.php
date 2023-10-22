@extends('Layouts.App')

@section('titulo')
{{auth()->user()->name}}
@endsection

@section('contenido')
<div style="width: 100%; height: 80vh;" class="flex justify-center bg-gray-100">
    <div class="m-auto shadow-2xl rounded-2xl bg-white flex items-start flex-col" style="height: 70vh; width: 30%;">
        <div class="flex justify-center w-full">
            <img src="{{asset('img/usuario.svg')}}" alt="" class="w-80 h-80 rounded-full m-2 cursor-pointer">
        </div>
        <div class="flex flex-col justify-center w-full mt-10">
            <button class="border w-1/3  rounded-md bg-white border-blue-500 hover:bg-blue-500 hover:text-white font-bold p-2 m-auto" onclick="editarimg()">Editar Foto</button>
        </div>
        <div class="w-full py-5 flex flex-col items-center justify-start">
            <h2 class="text-center m-auto w-1/2 text-2xl py-2">
                {{auth()->user()->name}}
            </h2>
            <h2 class="text-center m-auto w-1/2 py-2 text-2xl">
                {{auth()->user()->email}}
            </h2>
            <a href="" class="border w-1/3 rounded-md border-red-500 hover:bg-red-500 hover:text-white font-bold p-2 mt-10 text-center m-auto">Cerrar sesion</a>
        </div>
    </div>
</div>
<script src="resources/js/image.js"></script>
@endsection