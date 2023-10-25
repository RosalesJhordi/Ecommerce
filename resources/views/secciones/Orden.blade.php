@extends('Layouts.App')

@section('titulo')
    Orden
@endsection

@section('contenido')
<div class="px-52 flex justify-between items-center">
    <h1 class="px-10 py-10 uppercase text-2xl font-extrabold font-mono text-blue-900">Revisar Orden</h1>
    <form action="" class="flex justify-end w-auto" style="width: 35%;">
        <div style="width: 100%;" class="border border-blue-600 p-2 text-xl focus-within:ring-1 focus-within:ring-blue-500 rounded-3xl flex justify-between">
            <input type="text" name="codigo" id="codigo" class="outline-none w-96 px-2" placeholder="Codigo de orden">
            <button type="submit" class="cursor-pointer">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </form>
</div>
@endsection