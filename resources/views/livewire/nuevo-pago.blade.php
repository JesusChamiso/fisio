<div>
    <div wire:ignore.self class="modal fade modal-dialog-scrollable" id="NuevoPago" tabindex="-1"
        aria-labelledby="NuevapagoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title bold fs-4" id="NuevaPagoLabel">Nuevo Pago</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div wire:ignore class="col-md-12">
                        <label for="nombres" class="form-label">Paciente</label>
                        <br>
                        <select wire:model="pac" style="width: 100%;" name="paciente" id=""
                            class="form-control ih-medium ip-light radius-xs b-light">
                                <option value="" selected disabled>Selccione un Paciente</option>
                            @foreach ($paciente as $paci)
                                <option value="{{ $paci->codigo_paciente }}">
                                    {{ $paci->nombres }}{{ ' ' }}{{ $paci->apellido_paterno }}{{ ' ' }}{{ $paci->apellido_materno }}
                                </option>
                            @endforeach
                        </select>
                        <input wire:model="pac" type="text" value="{{ $pac }}" hidden>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="apellido_paterno" class="form-label">Descripcion</label>
                        <textarea class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion"
                            wire:model="descripcion"></textarea>
                        @error('Descripcion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="costo" class="form-label">Costo</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Bs.</span>
                            <input required wire:model="costo" type="number" class="form-control @error('fecha') is-invalid @enderror" name="fecha" id="costo">
                            <span class="input-group-text">   </span>
                        </div>
                        @error('costo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger text-white"
                            data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success text-white" wire:click="guardar">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            $(document).ready(function() {
                $('#select2').select2({
                    dropdownParent: $('#NuevoPago')
                });
                $('#select2').on('change', function(e) {
                    var data = $('#select2').select2("val");
                    @this.set('pac', data);
                });
            });
        </script>
    @endpush
</div>
