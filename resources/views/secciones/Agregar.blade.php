@extends('Layouts.App')

@section('titulo')
    Agregar Producto
@endsection

@section('contenido')
    <div class="w-full flex justify-between">
        <div class="w-1/2 flex justify-center items-center">
            <div class="w-1/2 h-1/2 border p-2">
                <form action="">
                    @csrf
                </form>
            </div>
        </div>
        <div class="w-1/2">
            <form action="" class="w-1/2">
                @csrf
                <h1 class="text-center text-2xl font-bold py-5">Agregar un nuevo producto</h1>
                <div class="border border-blue-700 rounded-md mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
                    <span class="px-5">
                        <i class="fa-solid fa-clipboard"></i>
                    </span>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre de producto" class="h-full outline-none" value={{ old('nombre') }}>
                </div>
                @error('nombre')
                    <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <div class="border border-blue-700 rounded-md mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
                    <span class="px-5">
                        <i class="fa-solid fa-clipboard"></i>
                    </span>
                    <select id="categoria" name="categoria" class="w-96 p-2 cursor-pointer" value={{ old('categoria') }}>
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
                <div class="border border-blue-700 flex items-center rounded-md mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
                    <span class="px-5">
                        <i class="fa-solid fa-clipboard"></i>
                    </span>
                    <textarea type="text" name="descripcion" cols="50" id="descripcion" placeholder="Descripcion de producto" class="h-10 outline-none" value={{ old('descripcion') }}></textarea>
                </div>
                @error('descripcion')
                    <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <div class="border border-blue-700 rounded-md mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
                    <span class="px-5">
                        <i class="fa-solid fa-clipboard"></i>
                    </span>
                    <input type="number" name="precio" id="precio" placeholder="Nombre de producto" class="h-full outline-none" value={{ old('precio') }}>
                </div>
                @error('precio')
                    <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <div class="border border-blue-700 rounded-md mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-blue-500">
                    <span class="px-5">
                        <i class="fa-solid fa-clipboard"></i>
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
            </form>
        </div>
    </div>
@endsection