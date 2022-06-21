<div>
    <div wire:ignore.self class="modal fade modal-dialog-scrollable" 
        id="NuevoHistorial" 
        {{-- data-bs-backdrop="static"  --}}
        {{-- data-bs-keyboard="false"  --}}
        tabindex="-1" 
        aria-labelledby="NuevoHistorialLabel" 
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title bold fs-4" id="NuevoHistorialLabel">Nuevo Registro</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="guardar" class="row g-3" method="post" action="#">
                    <div class="modal-body">
                        <div class="col-md-12 form-floating">
                            <textarea name="descripcion" wire:model="descripcion" class="form-control @error('descripcion')is-invalid @enderror" placeholder="Descripcion" id="descripcion"></textarea>    
                            <label for="descripcion">Descripcion</label>
                            @error('descripcion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
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
