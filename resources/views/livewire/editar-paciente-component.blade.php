<div>
    <div class="col-md-5">
        <div wire:ignore.self class="modal fade" id="editPac" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Agregar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div wire:submit.prevent class="row g-3">
                        {{-- @csrf @method('post') --}}
                        {{-- <input name="id_paciente" type="text" value="{{ $paciente->id }}" hidden readonly> --}}
                            <div class="col-md-12>
                                    <label for="nombres" class="form-label">Nombres</label>
                                    <input wire:model="nombres" value="" type="text" name="nombres" id="nombres" class="form-control @error('nombres')is-invalid @enderror" placeholder="nombres">
                                    @error('nombres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                                    <input wire:model="apellido_paterno" type="text" class="form-control @error('apellido_patenro') is-invalid @enderror" name="apellido_paterno" id="apellido_paterno" placeholder="apellido_paterno">
                                    @error('apellido_paterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="apellido_materno" class="col-from-label">Apellido Materno:</label>
                                    <input wire:model="apellido_materno" type="text" class="form-control @error('apellido_materno') is-invalid @enderror" name="apellido_materno" id="apellido_materno" placeholder="Apellido Materno">
                                    @error('apellido_materno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="peso" class="col-from-label">Peso:</label>
                                    <input wire:model="peso" type="text" class="form-control @error('peso') is-invalid @enderror" name="peso" id="peso" placeholder="Peso">
                                    @error('peso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="talla" class="col-from-label">Talla:</label>
                                    <input wire:model="talla" type="text" class="form-control @error('talla') is-invalid @enderror" name="talla" id="talla" placeholder="Talla">
                                    @error('talla')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{-- <div class="col-md-6"></div> --}}
                                <div class="col-md-6">
                                    <label for="ci">Telefono:</label>
                                    <input wire:model="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" id="telefono" placeholder="Telefono">
                                    @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success text-white" wire:click="guardar">Guardar</button>
                                </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
</div>
