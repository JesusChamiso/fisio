@extends('adminlte::page')

@section('title', 'Paciente')

@section('content_header')
    <h1>Pacientes</h1>
@stop

@section('content')
    <div class="container">
        <div class="row g-3">
            <div class="col-md-3 align-items-end">
            <div class="col-md-6">
                {{-- Accion Editar --}}
                <button class="btn btn-info mb-3" data-bs-toggle="modal" data-bs-target="#editPac">Editar</button>
                @livewire('editar-paciente-component',['paciente' => $paciente])
                {{-- Fin Accion Editar --}}
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('/img/user.png') }}" class="profile-user-img img-fluid img-circle">
                        </div>
                        <h3 class="profile-username text-center">{{ $paciente->nombrePrimer }} {{ $paciente->nombreSegundo }} {{ $paciente->apPaterno }} {{ $paciente->apMaterno }} {{ $paciente->apCasada }}</h3>
                        <p class="text-muted text-center">{{ $paciente->ci }} {{ $paciente->ci_complemento }} {{ $paciente->depto_abr }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="btn btn-primary nav-link active" 
                                        id="nav-datosP-tab" 
                                        data-bs-toggle="tab" 
                                        data-bs-target="#nav-datosP" 
                                        type="button" 
                                        role="tab" 
                                        aria-controls="nav-datosP" 
                                        aria-selected="true">
                                        Datos Personales
                                </button>
                                <button class="btn btn-primary nav-link" 
                                        id="nav-evaluacion-tab" 
                                        data-bs-toggle="tab" 
                                        data-bs-target="#nav-evaluacion" 
                                        type="button" 
                                        role="tab" 
                                        aria-controls="nav-evaluacion" 
                                        aria-selected="false">
                                        Historial y valoracion
                                </button>
                                <button class="btn btn-primary nav-link" 
                                        id="nav-historial-tab" 
                                        data-bs-toggle="tab" 
                                        data-bs-target="#nav-historial" 
                                        type="button" 
                                        role="tab" 
                                        aria-controls="nav-historial" 
                                        aria-selected="false">
                                        Seguimiento de Tratamiento
                                </button>                                
                            </div>
                        </nav>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-datosP" role="tabpanel" aria-labelledby="nav-datosP-tab">
                                <ul class="list-group list-group-unbordered m-3">
                                    <li class="list-group-item">
                                        <strong class="fs-5 text-wrap">Nombre Completo</strong> 
                                        <p class="h6 float-right">
                                            {{ $paciente->nombrePrimer }} {{ $paciente->nombreSegundo }} {{ $paciente->apPaterno }} {{ $paciente->apMaterno }} {{ $paciente->apCasada }}
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <strong class="fs-5 text-wrap">Cedula de identidad</strong> 
                                        <p class="h6 float-right">
                                            {{ $paciente->ci }} {{ $paciente->ci_complemento }} {{ $paciente->depto_abr }}
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <strong class="fs-5 text-wrap">Fecha de nacimiento</strong> 
                                        <p class="h6 float-right">
                                            {{ \Carbon\Carbon::parse($paciente->nacimiento)->isoFormat('LL') }}
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <strong class="fs-5 text-wrap">Edad</strong> 
                                        <p class="h6 float-right">
                                            {{ \Carbon\Carbon::createFromDate($paciente->nacimiento)->diffInYears(Carbon\Carbon::now()) }} {{ ' Años' }}
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <strong class="fs-5 text-wrap">Lugar de Nacimiento</strong> 
                                        <p class="h6 float-right">
                                            {{ $paciente->lug_nac }}
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <strong class="fs-5 text-wrap">Estado Civil</strong> 
                                        <p class="h6 float-right">
                                            {{ $paciente->est_civil }}
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <strong class="fs-5 text-wrap">Ocupacion</strong> 
                                        <p class="h6 float-right">
                                            {{ $paciente->ocupacion }}
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <strong class="fs-5 text-wrap">Direccion </strong> 
                                        <p class="fst-italic float-right">
                                            {{ $paciente->DireccionDetalle }}, {{ $paciente->deptoDireccion }}
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <strong class="fs-5 text-wrap">Telefono </strong> 
                                        <p class="fst-italic float-right">
                                            {{ $telefono->detalle }}
                                        </p>
                                    </li>
                                </ul>                                
                            </div>
                            @include('paciente.seguimientoTratamiento')
                            {{-- Historial y navegacion --}}
                            <div class="tab-pane fade" id="nav-evaluacion" role="tabpanel" aria-labelledby="nav-evaluacion-tab">
                                <div class="row g-3">
                                    <div class="col-md-6 text-center">
                                        <a class="btn btn-info m-1" data-bs-toggle="modal" role="button" data-bs-target="#AgregValoracion">ANAMNESIS</a>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <a class="btn btn-success m-1" data-bs-toggle="modal" href="#AgregTrat" role="button">VALORACION KINESICO FISICA</a>
                                    </div>
                                    {{-- Vista de La Consulta --}}
                                    <div class="accordion" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                    <p class="text-bold">ANAMNESIS</p>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                <div class="row g-3 m-4">
                                                    @include('paciente.historialValoracion')
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                    <p class="text-bold">VALORACION KINESICO FISICA</p>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                <div class="row g-3 m-4">
                                                    @include('paciente.historialTratamiento')
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    {{-- Fin vista Consulta --}}
                                </div>
                            </div>
                            {{-- Fin de Historial y navegacion --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('paciente.paciente_valoracion')
@include('paciente.paciente_tratamiento')

@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2-bootstrap.min.css') }}">
@stop
@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        //$.fn.modal.Constructor.prototype._enforceFocus = function() {};
        
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
