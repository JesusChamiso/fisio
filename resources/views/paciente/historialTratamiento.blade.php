<div>
{{-- Historial para mostrar la segunda parte historial --}}
    @if($tratamiento ==='vacio')
        <p class="text-bold"> .:Sin Registros:.</p>
    @else
    <div class="row g-3">
        <p class="h4 text-bold text-center">VALORACION KINESICO FISICA</p>
        <div class="col-md-6">
            <label for="peso" class="form-label">Peso (kg):</label>
            <div class="input-group">
                <p class="h6">{{ $val->peso }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <label for="talla" class="col-from-label">Talla (cm):</label>
            <div class="input-group">
                <p class="h6">{{ $val->talla }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <label for="pa" class="col-from-label">P.A.:</label>
            <div class="input-group">
                <p class="h6">{{ $val->pa }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <label for="co2" class="col-from-label">CO2:</label>
            <div class="input-group">
                <p class="h6">{{ $val->co2 }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <label for="imc">IMC:</label>
            <div class="input-group">
                <p class="h6">{{ $val->imc }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <label for="temperatura">Temperatura:</label>
            <div class="input-group">
                <p class="h6">{{ $val->temperatura }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <label for="fr_cardiaca" class="form-label">Frecuencia Cardiaca</label>
            <div class="input-group">
                <p class="h6">{{ $val->fr_cardiaca }}</p>
            </div>
        </div>
        <div class="col-md-12">

        </div>
        <hr class="mt-3">
    </div>
    <div class="row g-3">
        <p class="h4 text-bold text-center">EVALUACION DE LA POSTURA</p>
            <div class="col-md-6">
                <label class="form-label">Lesiones: </label>
                <br>
                <p class="h6">{{ $b4 }}</p>
            </div>
            <div class="col-md-6">
                <label class="form-label">Observaciones</label>
                <br>
                <p class="h6">{{ $tratamiento->desc_obs }}</p>
            </div>
            <div class="col-md-6">
                <label class="form-label">Escala de Eva</label>
                <br>
                <p class="h6">{{ $tratamiento->escala_eva }}</p>
            </div>
            <div class="col-md-6">
                <label class="form-label">Escala de Daniels</label>
                <br>
                <p class="h6">{{ $tratamiento->esc_daniels-1 }}</p>
            </div>
            <div class="col-md-6">
                <label class="form-label">Escala de Ashworth</label>
                <br>
                @if ($tratamiento->esc_ashworth === 1)
                    <p>{{ $tratamiento->esc_ashworth = 0 }}</p>
                    @elseif ($tratamiento->esc_ashworth === 2)
                    <p>{{ $tratamiento->esc_ashworth = 1 }}</p>
                        @elseif ($tratamiento->esc_ashworth === 3)
                        <p>{{ $tratamiento->esc_ashworth = '1+' }}</p>
                            @elseif ($tratamiento->esc_ashworth > 3)
                            <p>{{ $tratamiento->esc_ashworth - 2 }}</p>
                @endif
            </div>
    </div>
        <hr class="mt-3">
    <div class="row g-3">
        <p class="h4 text-bold text-center">DIAGNOSTICO KINESICO FISICO</p>
        <p class="text-bold">PLAN DE TRATAMIENTO EN FISOTERAPIA Y KINESIOLOGIA</p>
        <div class="col-md-6">
            <label class="form-label">Plan de tratamiento</label>
            <p class="h6">{{ $t4 }}</p>
        </div>
        <div class="col-md-6">
            <label class="form-label">Prescripciones</label>
            <p class="h6">{{ $tratamiento->prescripciones }}</p>
        </div>
        <div class="col-md-6">
            <label class="form-label">Estudios DX</label>
            <p class="h6">{{ $tratamiento->estdx }}</p>
        </div>
        <div class="col-md-6">
                <label class="form-label">Observaciones</label>
                <br>
                <p class="h6">{{ $tratamiento->observaciones }}</p>
            </div>
    </div>
    @endif
</div>