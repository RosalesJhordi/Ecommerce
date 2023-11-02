@extends('Layouts.App')
@vite('resources/js/perfil.js')

@section('titulo')
    {{ auth()->user()->name }}
@endsection

@section('contenido')
    <div class="flex relative flex-col justify-center items-center">
        @if(session('success'))
            <p class=" absolute top-24 bg-green-500 text-white my-2 rounded-sm text-md p-2 text-center" style="width: 30%;">{{ session('success') }}</p>
        @endif
        <div class="w-full px-80 flex justify-center items-center" style="height: 70vh;">
        <div class="h-1/2 w-1/2 flex gap-5 border">
            <div class="w-1/2 h-full flex items-center justify-center">
                <form action="{{ route('Perfil.img') }}" method="POST" enctype="multipart/form-data" class="flex justify-center items-center dropzone w-full border mt-5" style="height: 100%">
                    @csrf
                </form>
            </div>
            <div class="w-1/2 h-full flex items-center justify-start">
                <form action="{{route('editperfil',auth()->user()->id)}}" method="POST" class="flex flex-col gap-5 w-full p-5">
                    @csrf
                    <label for="name" class="text-2xl">Nombre</label>
                    <input type="text" name="name" id="name" value="{{ auth()->user()->name }}" class="p-2 bg-transparent border rounded-sm text-gray-700">
                    <input type="hidden" name="imagen" value="{{ old('imagen')}}">
                    <button type="submit" class="bg-blue-500 p-2 rounded-sm text-white">Guardar Cambios</button>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection