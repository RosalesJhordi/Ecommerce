@extends('Layouts.App')

@section('titulo')
    Recomendado
@endsection

@section('contenido')
<div class="px-20 flex flex-col conte-reco">
    <h1 class="px-10 py-10 uppercase text-2xl font-extrabold font-mono text-blue-900">Recomendado</h1>
    <div class="px-20 gap-10 flex justify-start flex-wrap p-2 py-5 mb-5 contenedor-productos">
        @foreach ($recomendados as $producto)
            <div class="border border-gray-400 h-96 w-80 producto-div">
                <div class="w-full h-72 relative" id="contenedor-img">
                    <span class="absolute left-0 text-red-500 p-1 font-bold text-2xl w-20 text-center"> -{{ $producto->descuento}}%</span>
                    <div class="absolute right-0 m-1 perfil">
                        @auth
                            @if ($producto->user->imagen)
                                <a href="{{ route('Perfiles',$producto->user->id) }}">
                                    <img src="{{ asset('PerfilUsuarios') . '/' . $producto->user->imagen }}" alt="" class="rounded-full w-10 h-10 cursor-pointer">
                                </a>
                            @else
                                <a href="{{ route('Perfiles',$producto->user->id) }}">
                                    <img src="{{asset('img/usuario.svg')}}" alt="" class="rounded-full w-10 cursor-pointer">
                                </a>
                            @endif
                        @endauth
                    </div>
                    <img src="{{ asset('ServidorProductos') . '/' . $producto->imagen }}"alt="Imagen Producto {{ $producto->nombre }}" class="w-full h-full"/>
                </div>
                <div class="w-full h-24 producto-info">
                    <div class="w-full h-full flex flex-col px-2 relative div">
                        <span class="text-xl font-bold nm">{{ $producto->nombre }}</span>
                        <span class="text-sm font-semibold w-full cate">{{ $producto->categoria }}</span>
                        <span class="absolute right-0 p-2 text-base font-semibold price">S/. {{ $producto->precio - $producto->precio * ($producto->descuento / 100) }}</span>
                        <span class="absolute right-0 p-2 top-4 text-base font-medium text-red-500 line-through desc">S/. {{$producto->precio}}</span>
                        <form action="{{route('likes.store',$producto)}}" method="POST" class="flex justify-start mt-5 items-center">
                            @csrf
                            @if (auth()->check())
                            <button type="submit" class="ml-2">
                                @if ($producto->likedBy->contains(auth()->user()))
                                    <i class="fa-solid fa-heart text-red-600"></i>
                                @else
                                    <i class="fa-solid fa-heart text-gray-300"></i>
                                @endif
                            </button>
                            @else
                                <a href="{{ route('Registro') }}" class="ml-2">
                                    <i class="fa-solid fa-heart text-gray-300"></i>
                                </a>
                            @endif
                            <p class="text-sm px-2 font-semibold"> {{ $producto->likes->count() }} Me gusta</p>             
                        </form>
                        @if (auth()->check())
                            @if ( $producto->user->id == auth()->user()->id)
                                <a href="{{route('EditarProducto',$producto->id)}}" class="ops-producto text-xl text-gray-800 w-10 h-10 flex items-center rounded-full absolute right-0 bottom-0 p-2">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                            @else
                                <a href="{{route('Pedido',$producto->id)}}" class="ops-producto text-xl text-gray-800  w-10 h-10 flex items-center rounded-full absolute right-0 bottom-0 p-2">
                                    <i class="fa-solid fa-truck-fast"></i>
                                </a>
                            @endif
                        @else
                            <a href="{{ route('Registro') }}" class="text-2xl text-gray-800 absolute right-0 bottom-0 p-2">
                                <i class="fa-solid fa-truck-fast"></i>
                            </a> 
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection