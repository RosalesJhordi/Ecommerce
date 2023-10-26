@extends('Layouts.App')

@section('titulo')
    Recomendado
@endsection

@section('contenido')
<div class="px-52 flex justify-between items-center">
    <h1 class="px-10 py-10 uppercase text-2xl font-extrabold font-mono text-blue-900">Recomendado</h1>
    <div>
        @if (count($recomendados) > 0)
        @foreach ($recomendados as $reco)
            {{ $reco->nombre }}
        @endforeach
        @else
            <p>No hay productos recomendados disponibles.</p>
        @endif
    </div>
</div>
@endsection