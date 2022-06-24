<?php

namespace App\Http\Livewire;

use App\Models\Paciente;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\vw_pago_detalle_pago;

class ListaPago extends Component
{
    use withPagination;
    
    protected $paginationTheme = 'bootstrap';
    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10']
    ];

    public $search;
    public $perPage;
    public $pac;
    public $descripcion;
    public $costo;

    public function mount()
    {
        $this->search = "";
        $this->perPage = "10";
        $this->pac = "";
        $this->descripcion = "";
        $this->costo = "";
    }

    public function render()
    {
        $pago = vw_pago_detalle_pago::where("nombres", "like", "%".trim($this->search)."%")
                                ->orWhere("apellido_paterno", "like", "%".trim($this->search)."%")
                                ->orWhere("apellido_materno", "like", "%".trim($this->search)."%")
                                ->orWhere("costo", "like", "%".trim($this->search)."%")
                                ->paginate($this->perPage);
        $paciente = Paciente::all();
        return view('livewire.lista-pago',['pagos' => $pago, 'paciente' => $paciente]);
    }
     public function clear()
     {
        $this->page = 1;
        $this->perPage = "10";
        $this->search = "";
     }

     public function editar()
     {
        $pagos = vw_pago_detalle_pago::where('codigo_paciente','=',$this->pac)->first();
        $this->descripcion = $pagos->descripcion;
        $this->costo = $pagos->costo;
     }
}
