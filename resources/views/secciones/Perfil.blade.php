@extends('Layouts.App')

@section('titulo')
    {{ auth()->user()->name }}
@endsection

@section('contenido')
    <div class="w-full px-20" style="height: 80vh;">
        <div class="w-full px-52 flex justify-between items-center" style="height: 100%;">
            <div class="w-1/2">
                @if (auth()->user()->imagen)
                    <img src="{{ asset('ServidorProductos') . '/' . auth()->user()->imagen }}" alt="" class="rounded-full w-96">
                @else
                    <img src="{{asset('img/usuario.svg')}}" alt="" class="rounded-full w-96">
                @endif 
            </div>
            <div class="w-1/2">
                <h1 class="font-sans text-4xl">{{ auth()->user()->name }}</h1>
                <h1 class="font-sans text-4xl">{{ auth()->user()->email }}</h1>
                <button class="p-2 bg-blue-500 text-white ">Editar Foto</button>
                <div class="w-1/2 mt-10" style="height: 10vh;">
                    <form action="" id="">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection