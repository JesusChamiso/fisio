<div>
    <div wire:ignore.self class="modal fade modal-dialog-scrollable" 
        id="NuevaReceta" 
        {{-- data-bs-backdrop="static"  --}}
        {{-- data-bs-keyboard="false"  --}}
        tabindex="-1" 
        aria-labelledby="NuevaRecetaLabel" 
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title bold fs-4" id="NuevaRecetaLabel">Nuevo Registro</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <form wire:submit.prevent="guardar" class="row g-3" method="post" action="#"> --}}
                        <div wire:ignore class="col-md-12">
                            <label for="nombres" class="form-label">Paciente</label>
                            <br>
                            <select wire:model="pac" style="width: 100%;" name="paciente" id="select2" class="form-control ih-medium ip-light radius-xs b-light">
                                @foreach ($paciente as $paci)
                                <option value="{{ $paci->codigo_paciente }}">{{ $paci->nombres }}{{ " " }}{{ $paci->apellido_paterno }}{{ " " }}{{ $paci->apellido_materno }}</option>
                                @endforeach
                            </select>
                            <input wire:model="numero" type="text" value="{{ $numero }}" hidden>
                        </div>
                        <div class="col-md-12">
                            <label for="apellido_paterno" class="form-label">Descripcion</label>
                            <textarea class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion" wire:model="descripcion"></textarea>
                            @error('Descripcion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input required wire:model="fecha" type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha" id="fecha" placeholder="Fecha">
                            @error('fecha')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-success text-white" wire:click="guardar">Guardar</button>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
    @push('js')
    <script> 
        $(document).ready(function() {
            $('#select2').select2({
                dropdownParent: $('#NuevaReceta')}
            );
            $('#select2').on('change', function (e) {
                var data = $('#select2').select2("val");
                @this.set('pac', data);
            });
        });
    </script>
    @endpush
</div>
