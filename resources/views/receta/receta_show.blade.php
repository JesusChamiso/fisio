@extends('adminlte::page')

@section('title', 'Paciente')

@section('content_header')
    <h1>Recetas</h1>
@stop

@section('content')
<div class="container">
    <div class="row g-3">
        <div class="col-md-6">
            
        </div>
        <div class="col-md-6">
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
                    <h3 class="profile-username text-center">{{ $paciente->nombres }} {{ $paciente->apellido_patenro }} {{ $paciente->apellido_materno }}</h3>
                    <p class="text-muted text-center">{{ $paciente->telefono }}</p>
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
                                    Recetas
                            </button>                             
                        </div>
                    </nav>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-datosP" role="tabpanel" aria-labelledby="nav-evaluacion-tab">
                            <div class="row g-3">
                                <div class="col-md-6 text-center">
                                    <a class="btn btn-info m-1" data-bs-toggle="modal" role="button" data-bs-target="#NuevoHistorial">Agregar Historial</a>
                                </div>
                                @php $contador = 0; @endphp
                                @foreach ($consulta as $c)
                                @php
                                 $contador=$contador+1;    
                                @endphp
                                <div class="accordion" id="accordionFlushExample{{ $c->codigo_receta }}">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne{{ $c->codigo_receta }}">
                                            <button class="accordion-button collapsed h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{ $c->codigo_receta }}" aria-expanded="false" aria-controls="flush-collapseOne">
                                                <p class="text-bold">Receta @php echo $contador; @endphp </p>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne{{ $c->codigo_receta }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample{{ $c->codigo_receta }}">
                                            <div class="row g-3">
                                                <button type="button" class="btn btn-secondary col-md-3 ml-4 mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $c->codigo_receta }}">
                                                    Editar
                                                </button>
                                                
                                                <div class="modal fade" id="exampleModal{{ $c->codigo_receta }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Historial @php echo $contador; @endphp</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col-md-12 form-floating">
                                                                {{-- <form action="{{ route('consulta.editar', $c) }}" method="POST" id="editarForm">
                                                                    @method('PATCH')@csrf
                                                                    <label for="descripcion">Descripcion</label>
                                                                    <textarea name="descripcion" wire:model="descripcion" class="form-control @error('descripcion')is-invalid @enderror" placeholder="Descripcion" id="descripcion" required>{{ $c->descripcion }}</textarea>    
                                                                </div>
                                                                </form> --}}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary" onclick="document.getElementById('editarForm').submit();">Guardar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="button" class="btn btn-danger col-md-3 ml-4 mt-4" data-bs-toggle="modal" data-bs-target="#eliminar{{ $c->codigo_receta }}">
                                                    Eliminar
                                                </button>
                                                <div class="modal fade" id="eliminar{{ $c->codigo_receta }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar? Receta @php echo $contador; @endphp</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col-md-12 form-floating">
                                                                {{-- <form action="{{ route('consulta.eliminar', $c) }}" method="POST" id="eliminarForm{{ $c->codigo_receta }}">
                                                                    @method('DELETE') @csrf
                                                                    <input type="hidden" name="codigo_consulta" value="{{ $c->codigo_receta }}">
                                                                    <label for="descripcion">Descripcion</label>
                                                                    <input name="descripcion" class="form-control" id="descripcion" required value="{{ $c->descripcion }}"readonly>    
                                                                </div>
                                                                </form> --}}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-danger" onclick="document.getElementById( 'eliminarForm'+{{ $c->codigo_receta }} ).submit();">Eliminar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 m-4">
                                                {{ $c->descripcion }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop
@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
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