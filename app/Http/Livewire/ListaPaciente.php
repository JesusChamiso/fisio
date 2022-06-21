<?php

namespace App\Http\Livewire;

use App\Models\Paciente;
use Livewire\Component;
use Livewire\WithPagination;

class ListaPaciente extends Component
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
        $pac = Paciente::where('nombres','LIKE', "'%".trim($this->search)."%'")
                ->orWhere('apellido_paterno', 'LIKE', "'%".trim($this->search)."%'")
                ->orWhere('apellido_materno', 'LIKE', "'%".trim($this->search)."%'")
                ->paginate($this->perPage);
        return view('livewire.lista-paciente',['pac' => $pac]);
    }

    public function clear()
    {
        $this->page = 1;
        $this->search = "";
        $this->perPage = "10";
    }
}
