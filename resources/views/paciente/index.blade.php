@extends('adminlte::page')

@section('title', 'Paciente')

@section('content_header')
    <h1>Pacientes</h1>
    <div>
        <button class="mt-2 btn btn-success text-white"
                type="button"
                data-bs-toggle="modal" 
                data-bs-target="#NuevoPaciente">
                Nuevo Paciente    
        </button>
    </div>
@stop

@section('content')
    @livewire('lista-paciente')
    @livewire('nuevo-paciente')
@stop

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
@stop
@section('js')
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            $(".form-control").on("keypress", function() {
                $input = $(this);
                setTimeout(function() {
                    $input.val($input.val().replace(/\w\S*/g, (w) => (w.replace(/^\w/, (c) => c.toUpperCase()))));
                }, 50);
            })
        })
    </script>
@stop