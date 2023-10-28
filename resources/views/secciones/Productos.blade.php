@extends('Layouts.App')

@section('titulo')
    Productos
@endsection

@section('contenido')
<h1 class="px-20 text-sm font-semibold w-full mt-5 uppercase">Categorias</h1>
<div class="flex justify-start px-20 items-center py-1">
    @foreach ($categorias as $categoria)
        <form action="{{ route('Filtrar') }}" method="POST" class="text-md p-2 font-bold hover:text-blue-700 cursor-pointer">
            @csrf
            <input type="hidden" name="categoria" value="{{ $categoria }}">
            <button type="submit" class="uppercase">{{ $categoria }}</button>
        </form>
    @endforeach
</div>
<h1 class=" px-20 uppercase text-2xl font-extrabold font-mono text-blue-900">Productos Resientes</h1>
<div class="flex justify-start flex-wrap p-2 w-full px-20 gap-10">
    @foreach ($productos as $producto)
        <div class="border border-gray-400 h-96 w-80">
            <div class="w-full h-72 relative">
                <span class="absolute left-0 text-red-500 p-1 font-bold text-2xl w-20 text-center"> -{{ $producto->descuento}}%</span>
                <div class="absolute right-0 m-1">
                    @auth
                        @if ($producto->user->imagen)
                            <img src="{{ asset('PerfilUsuarios') . '/' . $producto->user->imagen }}" alt="" class="rounded-full w-10 h-10 cursor-pointer">
                        @else
                            <img src="{{asset('img/usuario.svg')}}" alt="" class="rounded-full w-10 cursor-pointer">
                        @endif
                    @endauth
                </div>
                <img src="{{ asset('ServidorProductos') . '/' . $producto->imagen }}"alt="Imagen Producto {{ $producto->nombre }}" class="w-full h-full"/>
            </div>
            <div class="w-full h-24">
                <div class="w-full h-full flex flex-col px-2 relative">
                    <span class="text-xl font-bold">{{ $producto->nombre }}</span>
                    <span class="text-sm font-semibold w-full">{{ $producto->categoria }}</span>
                    <span class="absolute right-0 p-2 text-base font-semibold">S/. {{ $producto->precio - $producto->precio * ($producto->descuento / 100) }}</span>
                    <span class="absolute right-0 p-2 top-4 text-base font-medium text-red-500 line-through">S/. {{$producto->precio}}</span>
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
                            <a href="{{route('Pedido',$producto->id)}}" class="text-xl text-gray-800 hover:bg-orange-600 hover:text-white w-10 h-10 flex items-center rounded-full absolute right-0 bottom-0 p-2">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        @else
                            <a href="{{route('Pedido',$producto->id)}}" class="text-xl text-gray-800 hover:bg-orange-600 hover:text-white w-10 h-10 flex items-center rounded-full absolute right-0 bottom-0 p-2">
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
@endsection