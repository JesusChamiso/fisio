<div>
    <div class="form-group">
        <div class="input-group">
            <input type="search" class="form-control" id="search" name="search" placeholder="Buscar..."
                autocomplete="off" wire:model="search">
            <select wire:model="perPage" class="form-control col-2 ml-2">
                <option value="5">5 por pagina</option>
                <option value="10">10 por pagina</option>
                <option value="15">15 por pagina</option>
                <option value="20">20 por pagina</option>
            </select>
            @if (($search !== '') | ($perPage != 10))
                <button wire:click="clear" class="btn border-secondary mx-2">X</button>
            @endif
        </div>
    </div>
    <table class="table table-hover" id="medicamentos">
        <thead>
            <tr>
                <th scope="col">Nombres Completo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Pago</th>
                <th scope="col">Telefono</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagos as $pago)
                <tr>
                    <td>{{ $pago->nombres }}{{ ' ' }}{{ $pago->apellido_paterno }}{{ ' ' }}{{ $pago->apellido_materno }}
                    </td>
                    <td wire:model="descripcion">{{ $pago->descripcion }}</td>
                    <td class="font-weight-bold font-italic">Bs. {{ $pago->costo }}</td>
                    <td>{{ $pago->telefono }}</td>
                    <td><button type="button" class="btn btn-secondary btn-sm"data-bs-toggle="modal"
                            data-bs-target="#eliminar{{ $pago->codigo_pago }}">Eliminar</button>
                    </td>
                </tr>
                <div class="modal fade" id="eliminar{{ $pago->codigo_pago }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar? Pago
                                    {{ $pago->codigo_pago }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <form action="{{ route('pagos.eliminar', ['c' => $pago->codigo_pago]) }}"
                                        method="POST" id="eliminarForm{{ $pago->codigo_pago }}">
                                        @method('DELETE') @csrf
                                        <input type="hidden" name="codigo_receta"
                                            value="{{ $pago->codigo_pago }}">
                                        <label for="descripcion">Descripcion</label>
                                        <input name="descripcion" class="form-control" id="descripcion" required
                                            value="{{ $pago->descripcion }}"readonly>
                                </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger"
                                    onclick="document.getElementById( 'eliminarForm'+{{ $pago->codigo_pago }} ).submit();">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
    <div class="col-12 justify-content-center">{{ $pagos->links() }}</div>
</div>
