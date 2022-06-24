@extends('adminlte::page')

@section('title', 'Reportes')

@section('content')
    <div class="card">
        <div class="card-header bg-white">
            <div class="form-group">
                <p class="text-center h1">Reporte General de Pacientes</p>
            </div>
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-5 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <div class="text-center mt-2">
                                <img src="{{ asset('/img/user.png') }}" class="profile-user-img img-fluid img-circle"
                                    width="150" height="150">
                            </div>
                            <div class="card-body">
                                {{-- <h5 class="card-title text-center">
                                    Reportes
                                </h5> --}}
                                <div class="tab-pane fade show active" id="nav-datosP" role="tabpanel"
                                    aria-labelledby="nav-datosP-tab">
                                    <ul class="list-group list-group-unbordered m-3">
                                        <li class="list-group-item">
                                            <strong class="fs-5 text-wrap"></strong>
                                            <p class="h5 float-right text-center">
                                                <a href="{{ route('reporte.index') }}" rel="noopener noreferrer" target="_blank">
                                                    REPORTE DE PACIENTES
                                                </a>
                                            </p>
                                        </li>
                                    </ul>
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
@stop
