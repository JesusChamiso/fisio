<div>
    <div wire:ignore.self class="modal fade modal-dialog-scrollable" 
        id="NuevoPaciente" 
        {{-- data-bs-backdrop="static"  --}}
        {{-- data-bs-keyboard="false"  --}}
        tabindex="-1" 
        aria-labelledby="NuevoPacienteLabel" 
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title bold fs-4" id="NuevoPacienteLabel">Nuevo Registro</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="guardar" class="row g-3" method="post" action="#">
                        <div class="col-md-12">
                            <label for="nombres" class="form-label">Nombres</label>
                            <input wire:model="nombres" type="text" name="nombres" id="nombres" class="form-control @error('nombres')is-invalid @enderror" placeholder="Nombres">
                            @error('nombres')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                            <input wire:model="apellido_paterno" type="text" class="form-control @error('apellido_paterno') is-invalid @enderror" name="apellido_paterno" id="apellido_paterno" placeholder="Apellido Paterno">
                            @error('apellido_paterno')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="apellido_materno" class="form-label">Apellido Materno</label>
                            <input wire:model="apellido_materno" type="text" class="form-control @error('apellido_materno') is-invalid @enderror" name="apellido_materno" id="apellido_materno" placeholder="Apellido Materno">
                            @error('apellido_materno')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="peso">Peso:</label>
                            <input wire:model="peso" type="number" class="form-control @error('peso') is-invalid @enderror" name="peso" id="peso" placeholder="Peso">
                            @error('peso')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="talla">Talla:</label>
                            <input wire:model="talla" type="number" class="form-control @error('talla') is-invalid @enderror" name="talla" id="talla" placeholder="Talla">
                            @error('talla')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="telefono">Telefono</label>
                            <input wire:model="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" id="telefono" placeholder="Telefono">
                            @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-success text-white" wire:click="guardar">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
