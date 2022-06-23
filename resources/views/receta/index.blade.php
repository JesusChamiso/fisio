@extends('adminlte::page')

@section('title', 'Paciente')

@section('content')
    <h1>Recetas</h1>
    @can('recetas.crear')
    <div>
        <button class="mt-2 mb-2 btn btn-success text-white"
                type="button"
                data-bs-toggle="modal" 
                data-bs-target="#NuevaReceta">
                Nueva Receta    
        </button>
    </div>
    @endcan

    @can('recetas.index')
        @livewire('lista-receta')
    @endcan
    @can('recetas.crear')
        @livewire('nueva-receta')
    @endcan
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@stop
@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
@stop