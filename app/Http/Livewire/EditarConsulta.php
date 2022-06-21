<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ConsultaMedica;

class EditarConsulta extends Component
{
    public $codigo_consulta;
    public $codigo_paciente;
    public $descripcion;

    public function mount ($consulta)
    {
        // dd($consulta);
        $this->codigo_consulta = $consulta->codigo_consulta;
        $this->codigo_persona = $consulta->codigo_paciente;
        $this->descripcion = $consulta->descripcion;
    }
    public function render()
    {
        dd($this->codigo_consulta);
        return view('livewire.editar-consulta',['c' => $this->codigo_consulta]);
    }
    public function guardar()
    {
        dd("hola Mundo");
    }
}
