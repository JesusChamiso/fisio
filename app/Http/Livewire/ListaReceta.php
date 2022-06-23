<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Receta;
use App\Models\Paciente;
use App\Models\vw_receta_paciente;

class ListaReceta extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10']
    ];
    public $search;
    public $perPage;

    public function mount()
    {
        $this->search = "";
        $this->perPage = "10";
    }

    public function render()
    {
        if($this->search !== ''){
            $this->page = 1;
        }
        $receta = Paciente::where('nombres','LIKE', "%".trim($this->search)."%")
                            ->orWhere('apellido_paterno', 'LIKE', "%".trim($this->search)."%")
                            ->orWhere('apellido_materno', 'LIKE', "%".trim($this->search)."%")
                            ->paginate($this->perPage);
        return view('livewire.lista-receta',[
                        'receta' => $receta
                    ]);
    }
}
