<div>
    <div class="col-md-6">
        <div wire:ignore.self class="modal fade" id="AgregTrat" aria-hidden="true" aria-labelledby="exampleModalToggleLabel">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Tratamiento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3 p-3">
                            <form action="{{ route('tratamiento1', ['paciente' => $paciente->id]) }}" method="post" id="form_trat">
                                @csrf @method('post')
                                @livewire('agregar-tratamiento-component',['paciente' => $paciente->id])
                                <div class="col-md-6" role="document">
                                    {{-- Aqui va el BODY SELECT --}}
                                    <iframe id="ifr" name="ifr" src="{{ asset('body/index.html') }}" frameborder="0" width="750" height="850"></iframe>
                                    {{-- Fin Del BODY SELECT --}}
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="txt2" id="txt2" hidden>
                                </div>
                                <div class="col-md-12">
                                    <label for="obs_postura" class="form-label">Descripcion y Observaciones</label>
                                    <textarea style="width: 95%;" type="text" name="obs_postura" id="obs_postura" class="form-control @error('obs_postura')is-invalid @enderror" placeholder="Descripcion y Observaciones"></textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="justify-content-center">
                                        <label for="esc_eva">Escala de EVA </label>
                                        @livewire('eva-component')
                                    </div>
                                <div class="col-md-12 mt-2">
                                    <div class="justify-content-center">
                                        <label for="esc_dan">Escala de DANIELS </label>
                                        @livewire('daniels-component')
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="esc_ashworth">Escala de ASHWORTH</label>
                                    @livewire('ashworth-component')
                                </div>
                                <div class="col-md-12 m-2">
                                    <a href="#goniometria" class="btn btn-primary text-white" data-bs-target="#goniometria" data-bs-toggle="modal">Goniometria</a>
                                    {{-- <button class="btn btn-info" data-bs-target="#goniometria" data-bs-toggle="modal">Goniometria</button> --}}
                                    @include('paciente.paciente-tratamiento-goniometria')
                                </div>
                                {{-- <hr class="m-2"> --}}
                                <div class="col-md-12">
                                    <div class="col-md-12 p-2">
                                        <label for="antecpato" class="form-label">Seleccione Tratamiento:</label>
                                        <select style="width: 95%;" class="form-control select2-container" id="trat_id" name="trat_id[]" multiple aria-label="multiple select example">
                                            @foreach($trat as $p)
                                            <option value="{{ $p->id }}">{{ $p->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 p-3">
                                    <label for="trat_otro" class="form-label">Otros:</label>
                                    <input type="text" class="form-control" name="trat_otro" id="trat_otro" placeholder="Otros:">
                                </div>
                            </div>
                            
                            <div class="row g-3 p-3">
                                <div class="col-md-6">
                                    <label for="pres">Prescipciones</label>
                                    <input type="text" class="form-control" name="pres" id="pres" placeholder="Prescripciones">
                                </div>
                                <div class="col-md-6">
                                    <label for="estdx">Estudios DX</label>
                                    <input type="text" class="form-control" name="estdx" id="estdx" placeholder="Prescripciones">
                                    @if ($anamnesis === 'vacio')
                                        
                                    @else                                        
                                        <input type="text" name="histo" value="{{ $anamnesis->id }}" hidden>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <label for="observaciones">Observaciones</label>
                                    <input type="text" class="form-control" name="observaciones" id="observaciones" placeholder="Observaciones">
                                </div>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a type="submit" class="btn btn-success text-white"
                            href="javascript:{}" 
                            onclick="myfun()">
                            Guardar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
    <script>
        //select2 funcion para que no se trabe con el modal de bootstrap tambien agregar style="width: 100%" al select para que aparezca todo
        /*select2 para el select de antecedentes patologicos */
        $(document).ready(function() {
            $('#trat_id').select2({
                placeholder: 'Selecciona las Opciones',
                theme: "classic",
                dropdownParent: $('#AgregTrat')
            });
        });
        function myfun(){
            var ifr = document.getElementById("ifr");
            cd = ifr.contentDocument || ifr.contentWindow.document;
            var x = cd.getElementById("selections").innerHTML;
            document.getElementById("txt2").value = x;
            document.getElementById("form_trat").submit(); return false;
        }
    </script>
    @endpush
</div>