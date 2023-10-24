@extends('Layouts.App')

@section('titulo')
    Agregar Producto
@endsection

@section('contenido')
<div style="width: 60%; height: 60vh;" class="m-auto shadow-2xl fixed bg-white rounded-lg formulario">
  <i class="fa-solid fa-x p-2 text-red font-bold text-2xl w-full flex justify-end text-end cancelar"></i>
  <div class="w-full h-auto flex justify-between mt-2" style="height: 50vh;">
    <div class="w-1/2 mx-5 h-96 m-auto rounded-lg border border-black">
      <form action="{{ route('Imagen') }}" method="POST" enctype="multipart/form-data" id="dropzone" class="dropzone h-full flex flex-col justify-center items-center">
        @csrf
      </form>
    </div>
    <div class="w-1/2 h-full flex items-center justify-center">
      <form action="{{ route('AgregarProducto') }}" method="POST" class="flex justify-center flex-col items-center">
        @csrf
        <div class="border border-blue-700 rounded-md w-96 mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
            <span class="px-5">
              <i class="fa-solid fa-basket-shopping"></i>
            </span>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre de Producto" class="h-full outline-none" value={{ old('nombre') }}>
        </div>
        @error('nombre')
            <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
        @enderror
        <div class="border border-blue-700 rounded-md w-96 mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
            <span class="px-5">
              <i class="fa-solid fa-tags"></i>
            </span>
            <select id="categoria" name="categoria" class="w-auto p-2 cursor-pointer" value={{ old('categoria') }}>
                <option disabled selected class="text-gray-400">Selecciona una Categoria</option>
                <option value="servicios digitales">Servicios digitales</option>
                <option value="cosmética y cuidado corporal">Cosmética y cuidado corporal</option>
                <option value="alimentos y bebidas">Alimentos y bebidas</option>
                <option value="muebles y decoración">Muebles y decoración</option>
                <option value="salud y bienestar">Salud y bienestar</option>
                <option value="artículos para el hogar">Artículos para el hogar</option>
                <option value="cuidado de mascotas">Cuidado de mascotas</option>
                <option value="articulos de oficina">Articulos de oficina</option>
            </select>
        </div>
        @error('categoria')
            <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
        @enderror
        <div class="border border-blue-700 w-96 flex items-center rounded-md mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
            <span class="px-5">
              <i class="fa-regular fa-rectangle-list"></i>
            </span>
            <textarea type="text" name="descripcion" cols="50" id="descripcion" placeholder="Descripcion de producto" class="h-10 outline-none" value={{ old('descripcion') }}></textarea>
        </div>
        @error('descripcion')
            <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
        @enderror
        <div class="border border-blue-700 rounded-md w-96 mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
            <span class="px-5">
              <i class="fa-solid fa-money-bill-1"></i>
            </span>
            <input type="number" name="precio" id="precio" placeholder="Precio de producto" class="h-full outline-none" value={{ old('precio') }}>
        </div>
        @error('precio')
            <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
        @enderror
        <div class="border border-blue-700 rounded-md mt-5 w-96 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
            <span class="px-5">
              <i class="fa-solid fa-percent"></i>
            </span>
            <input type="number" name="descuento" id="descuento" placeholder="Descuento de producto" class="h-full outline-none" value={{ old('descuento') }}>
        </div>
        @error('descuento')
            <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
        @enderror
        <div class="mt-5">
            <input type="hidden" name="imagen" value="{{ old('imagen')}}">
        </div>
        @error('imagen')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
        @enderror
        <div class="bg-blue-500 mt-1 w-96 p-3 rounded-lg font-bold cursor-pointer text-white flex items-center">
            <input type="submit" value="Agregar" class="bg-blue-500 uppercase w-96 rounded-lg font-bold cursor-pointer text-white">
            <span class="px-5">
              <i class="fa-solid fa-plus"></i>
            </span>
          </div>
      </form>
    </div>
  </div>
</div>
<div class="flex justify-between items-center px-52">
  <h1 class=" py-10 uppercase text-2xl font-extrabold font-mono text-blue-900">Productos añadidos por {{auth()->user()->name}}</h1>
  <button class="bg-green-500 p-2 text-white w-28 rounded-md cursor-pointer añadir">AÑADIR</button>
</div>
@if (count($productos) > 0)
    <div class="flex justify-between flex-wrap px-52" style="height: 60vh">
    @foreach ($productos as $producto)
    <div class="shadow-md shadow-black rounded-lg p-2 flex justify-between h-1/3" style="width: 30%;">
        <div class="flex flex-col  justify-start px-5  items-start w-96">
            <span class="text-2xl font-bold">{{$producto->nombre}}</span>
            <span class="text-xl font-semibold w-full">{{$producto->categoria}}</span>
            <span class="font-mono text-blue-900 uppercase font-extrabold py-5">{{ $producto->created_at->diffForHumans() }}</span>
        </div>
        <img src="{{asset('ServidorProductos') . '/' . $producto->imagen}}" alt="Imagen Producto {{$producto->nombre}}" class="w-44">
    </div>
    @endforeach
    </div>
    <div class="px-52 py-10">
        {{ $productos->links() }}
    </div>
@else
    <div class="flex justify-center items-center px-52" style="height: 60vh;">
        <h1 class="text-3xl font-bold text-gray-500 uppercase">Aun no hay Productos añadidos, Los productos que añadidos se mostraran aqui</h1>
    </div>
@endif
<script src="{{asset('js/agregar.js')}}"></script>
@endsection