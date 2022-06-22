<div>
    <div class="card">
        <div class="card-header">
            <div class="form-group">
                <div class="input-group">
                <hr>
                    <input type="search" class="form-control mt-2" id="search" name="search" placeholder="Buscar..." autocomplete="off" wire:model="search">
                    <select wire:model="perPage" class="form-control col-2 ml-2 mt-2">
                        <option value="5">5 por pagina</option>
                        <option value="10">10 por pagina</option>
                        <option value="15">15 por pagina</option>
                    </select>
                    @if ($search !== '' | $perPage != 10)
                    <button wire:click="clear" class="btn border-secondary mx-2">X</button>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-3 g-4" >
                @forelse ($pac as $d)
                <div class="col">
                    <a href="{{ route('paciente_show', $d->codigo_paciente) }}" style="text-decoration:none;" class="text-dark">
                        <div class="card h-100">
                            <div class="text-center mt-2">
                                <img src="{{ asset('/img/user.png') }}" class="profile-user-img img-fluid img-circle">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $d->nombres }} {{ $d->apellido_paterno }} {{ $d->apellido_materno }}
                                </h5>
                                {{-- <p class="card-text">
                                    <a class="card-link mx-0" href="{{ route('paciente_show', $d->id) }}">
                                        mas detalles
                                    </a>
                                </p> --}}
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                    <ul><li>No hay elementos</li></ul>     
                @endforelse
            </div>
        </div>
            <div class="col-12 justify-content-center">{{ $pac->links() }}</div>
    </div>
</div>
