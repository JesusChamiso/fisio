{{-- @if($anamnesis === 'vacio') --}}
    <p class="text-bold"> .:Sin Registros:.</p>
{{-- @else --}}
    <div class="col-md-3">

    </div>
    <div class="col-md-3">

    </div>
    <div class="col-md-3">
        <button class="btn btn-success">Editar</button>
    </div>
    <div class="col-md-3">
        {{-- <form action="{{ route('valoracion.pdf',['anamnesis' => $anamnesis, 'pat' => $pat]) }}" method="POST"> --}}
            @csrf
            <button type="submit" class="btn btn-danger">Imprirmir</button>
        {{-- </form> --}}
    </div>
    <div class="col-md-6">
        <label for="fecha_eval" class="form-label h5">Fecha Evaluacion:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $anamnesis->fec_eval }}</p> --}}
        </div>
    </div>
    <div class="col-md-6">
        <label for="fecha" class="form-label h5">Inicio de Tratamiento:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $anamnesis->inic_trat }}</p> --}}
        </div>
    </div>
    <hr>
    <div class="col-md-6">
        <label for="pa" class="form-label h5">Dr. Especialidad:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $anamnesis->dr_nombre }}</p> --}}
        </div>
    </div>
    <div class="col-md-3">
        <label for="co2" class="form-label h5">Referenecia:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $anamnesis->referencia }}</p> --}}
        </div>
    </div>
    <div class="col-md-6">
        <label for="imc2" class="form-label h5">Diagnostico:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $anamnesis->diagnostico }}</p> --}}
        </div>
    </div>
    <div class="col-md-6">
        <label for="temperatura" class="form-label">Observaciones Diagnostico:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $anamnesis->diag_obs }}</p> --}}
        </div>
    </div>
    <div class="col-md-6">
        <label for="frCar" class="form-label h5">Estudios Dx:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $anamnesis->est_dx }}</p> --}}
        </div>
    </div>
    <div class="col-md-6">
        <label class="form-label h5">N° de Sesiones:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $anamnesis->sesiones }}</p> --}}
        </div>
    </div>
    <div class="col-md-6">
        <label class="form-label h5">Medicamentos:</label>
        <div class="input-gorup">
            {{-- <p class="h6">{{ $anamnesis->medicamentos }}</p> --}}
        </div>
    </div>
    <div class="col-md-12">
        <label class="form-label h5">Consulta:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $anamnesis->consulta }}</p> --}}
        </div>
    </div>
    <hr>
    <p class="text-bold text-center">ANTECEDENTES NO PATOLOGICOS</p>
    <div class="col-md-4">
        <label class="form-label h5">Deportes Frecuentes:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $anamnesis->deporte_frec }}</p> --}}
        </div>
    </div>
    <div class="col-md-4">
        <label class="form-label h5">Habitos Alimenticios:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $anamnesis->habitos_al }}</p> --}}
        </div>
    </div>
    <div class="col-md-4">
        <label class="form-label h5">Fuma Frec:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $anamnesis->fuma_frec }}</p> --}}
        </div>
    </div>
    <div class="col-md-4">
        <label class="form-label h5">Bebidas Alcoholicas Frec.:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $anamnesis->alcohol_frec }}</p> --}}
        </div>
    </div>
    <div class="col-md-4">
        <label class="form-label h5">Drogas:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $anamnesis->drogas }}</p> --}}
        </div>
    </div>
    <hr>
    <div class="col-md-12">
        <label class="form-label h5">Antecedentes Patologicos Personales y Familiares:</label>
        <div class="input-group">
            {{-- <p class="h6">{{ $pat }}</p> --}}
        </div>
    </div>
{{-- @endif --}}