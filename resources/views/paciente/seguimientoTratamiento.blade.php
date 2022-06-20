{{-- Botones de Diagnostico --}}
<div class="tab-pane fade" id="nav-historial" role="tabpanel" aria-labelledby="nav-historial-tab">
    <div class="accordion" id="accordionExample">
        @foreach($diag as $d)    
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="btn btn-primary form-control mb-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample{{ $d->trat_id }}" aria-controls="offcanvasExample">
                    {{ $d->diagnostico }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $d->created_at }}
                </button>
            </h2>
        </div>
        @endforeach

    </div>
</div>

@foreach($diag as $di)
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample{{ $di->trat_id }}" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">{{ $di->diagnostico }}</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#nuevaSesion{{ $di->trat_id }}">Nueva Sesion</button>             
                <div class="modal fade" id="nuevaSesion{{ $di->trat_id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Nueva Sesion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- <div class="input-group"> --}}
                                <form action="{{ route('sesion_create') }}" method="post" id="form_sesion">
                                    @csrf @method('post')
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <input type="text" name="trat_ses_id" value="{{ $di->trat_id }}" hidden>
                                            <input type="text" name="paciente" value="{{ $paciente->id }}" hidden>
                                            <label for="detalle">Detalle de la Sesion</label>
                                            <textarea  width="100%" class="form-control form-control-lg" type="text" id="detalle" name="detalle"></textarea>
                                        </div>
                                    </div>
                            {{-- </div> --}}
                        </div>
                        <div class="modal-footer">
                            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                            <button type="submit" class="btn btn-primary">
                                Guardar
                            </button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <div class="col-md-12">
            {{ $di->diag_obs }}
            </div>
        </div>
        @foreach($sesiones as $s)
            @if($s->trat_id === $di->trat_id)
            <div class="dropdown">
                    <button type="button" class="btn btn-success m-2 form-control" data-bs-toggle="modal" data-bs-target="#modal{{ $s->id }}">
                        Sesion &nbsp; &nbsp;{{ $s->nro_sesion }}
                    </button>
                    <div class="modal fade" id="modal{{ $s->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sesion N° &nbsp;{{ $s->nro_sesion }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $s->detalle_sesion }}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            {{-- @else --}}
                
            @endif
        @endforeach
    </div>
</div>    
@endforeach
