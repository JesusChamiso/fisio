<div>
    {{-- Modal de agregar Valoracion --}}
    <div class="col-md-7">
        <div class="modal fade" id="AgregValoracion" aria-hidden="true" tabindex="-1" aria-labelledby="AgregValoracion">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Agregar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('valoracion1', ['paciente' => $paciente->id]) }}" method="post" id="form_valoracion">
                            @csrf @method('post')
                            {{-- Identificacion de Usuario --}}
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="fec_eval" class="form-label">Fecha Evaluacion:</label>
                                    <input type="date" class="form-control" name="fec_eval" id="fec_eval" placeholder="Fecha de Evaluacions">
                                </div>
                                <div class="col-md-6">
                                    <label for="inic_trat" class="form-label">Inicio de Tratamiento:</label>
                                    <input type="datetime-local" class="form-control @error('inic_trat') is-invalid @enderror" name="inic_trat" id="inic_trat" placeholder="Inicio De Tratamiento">
                                </div>
                            </div>
                            <hr class="mt-3">
                            {{-- Anamnesis --}}
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="dr_nombre" class="form-label">Nombre DR. Especialidad</label>
                                    <input type="text" class="form-control @error('dr_nombre') is-invalid @enderror" name="dr_nombre" id="dr_nombre" placeholder="Nombre DR. especialidad">
                                </div>
                                <div class="col-md-12">
                                    <label for="referencia" class="form-label">Referencia</label>
                                    <input type="text" class="form-control @error('referencia') is-invalid @enderror" name="referencia" id="referencia" placeholder="Referencia:">
                                </div>
                                <div class="col-md-6">
                                    <label for="diagnostico" class="form-label">Diagnostico</label>
                                    <input type="text" class="form-control @error('diagnostico') is-invalid @enderror" name="diagnostico" id="diagnostico" placeholder="Diagnostico:">
                                </div>
                                <div class="col-md-6">
                                    <label for="diag_obs" class="form-label">Observaciones de Diagnostico</label>
                                    <input type="text" class="form-control @error('diag_obs') is-invalid @enderror" name="diag_obs" id="diag_obs" placeholder="Observaciones:">
                                </div>
                                <div class="col-md-6">
                                    <label for="est_dx" class="form-label">Estudios DX:</label>
                                    <input type="text" class="form-control @error('est_dx') is-invalid @enderror" name="est_dx" id="est_dx" placeholder="Estudios DX:">
                                </div>
                                <div class="col-md-6">
                                    <label for="sesiones" class="form-label">N° Sesiones</label>
                                    <input type="number" class="form-control @error('sesiones') is-invalid @enderror" name="sesiones" id="sesiones" placeholder="N° Sesiones:">
                                </div>
                                <div class="col-md-12">
                                    <label for="medicamentos" class="form-label">Medicamentos</label>
                                    <input type="text" class="form-control @error('medicamentos') is-invalid @enderror" name="medicamentos" id="medicamentos" placeholder="Medicamentos:">
                                </div>
                                <div class="col-md-12">
                                    <label for="consulta" class="form-label">Consulta</label>
                                    <textarea cols="5" rows="3" class="form-control @error('consulta') is-invalid @enderror" name="consulta" id="consulta" placeholder="Consulta:"></textarea>
                                </div>
                            </div>
                            <hr class="mt-3">
                            <p class="text-bold text-center">ANTECEDENTES NO PATOLOGICOS</p>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="deporte_frec" class="form-label">Deportes Frecuentes:</label>
                                    <input type="text" class="form-control @error('deporte_frec') is-invalid @enderror" name="deporte_frec" id="deporte_frec" placeholder="Deportes Frecuentes:">
                                </div>
                                <div class="col-md-6">
                                    <label for="habitos_al" class="form-label">Habitos Alimenticios:</label>
                                    <input type="text" class="form-control @error('habitos_al') is-invalid @enderror" name="habitos_al" id="habitos_al" placeholder="Habitos Alimenticios:">
                                </div>
                                <div class="col-md-6">
                                    <label for="fuma_frec" class="form-label">Fuma Frec:</label>
                                    <input type="text" class="form-control @error('fuma_frec') is-invalid @enderror" name="fuma_frec" id="fuma_frec" placeholder="Fuma Frec:">
                                </div>
                                <div class="col-md-6">
                                    <label for="alcohol_frec" class="form-label">Bebidas Alcoholicas Frec:</label>
                                    <input type="text" class="form-control @error('alcohol_frec') is-invalid @enderror" name="alcohol_frec" id="alcohol_frec" placeholder="Bebidas Alcoholicas Frec:">
                                </div>
                                <div class="col-md-6">
                                    <label for="drogas" class="form-label">Drogas:</label>
                                    <input type="text" class="form-control @error('drogas') is-invalid @enderror" name="drogas" id="drogas" placeholder="Drogas:">
                                </div>
                            </div>
                            <hr class="mt-3">
                            <p class="text-bold text-center">ANTECEDENTES PATOLOGICOS PERSONALES Y FAMILIARES</p>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="antecpato" class="form-label">Seleccione:</label>
                                    <select style="width: 100%;" class="form-control select2-container" id="antecpato" name="antecpato[]" multiple aria-label="multiple select example">
                                        @foreach($patologia as $p)
                                        <option value="{{ $p->id }}">{{ $p->nombre }}</option>
                                        @endforeach
                                    </select>
                                    <div>
                                        {{-- opc: {{ ($antecpato) }} --}}
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <label for="anteceOtro" class="form-label">Otros:</label>
                                    <input type="text" class="form-control @error('anteceOtro') is-invalid @enderror" name="anteceOtro" id="anteceOtro" placeholder="Otros:">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success text-white">
                                    Guardar
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- fin del Modal de Agregar Valoracion --}}
    @push('js')
    <script>
        //select2 funcion para que no se trabe con el modal de bootstrap tambien agregar style="width: 100%" al select para que aparezca todo
        /*select2 para el select de antecedentes patologicos */
        $(document).ready(function() {
            $('#antecpato').select2({
                placeholder: 'Selecciona las Opciones',
                theme: "classic",
                dropdownParent: $('#AgregValoracion')
            });
            {{-- /*$('#antecpato').on('change', function(e) {
                var data = $('#antecpato').select2("val");
                @this.set('ottPlatform', data);
            });*/ --}}
        });
    </script>
    @endpush
</div>