@extends('adminlte::page')

@section('title', 'Pagos')

@section('content')
    <h1>Pagos</h1>
    @can('pago.crear')
    <div>
        <button class="mt-2 mb-2 btn btn-success text-white"
                type="button"
                data-bs-toggle="modal" 
                data-bs-target="#NuevoPago">
                Nuevo Pago    
        </button>
    </div>
    @endcan
        @livewire('lista-pago')
        @livewire('nuevo-pago')

@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@stop
@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
@stop