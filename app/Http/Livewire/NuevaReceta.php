<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Paciente;

class NuevaReceta extends Component
{
    public $pac ="";
    public $descripcion;
    public $fecha;
    public $numero;

    public function mount()
    {
        // $this->pac = "";
        $this->descripcion = "";
        $this->fecha = "";
        $this->numero = "";
    }
    public function render()
    {
        $paciente = Paciente::all();
        return view('livewire.nueva-receta',['paciente' => $paciente]);
    }
    public function guardar()
    {
        dd($this->pac,$this->descripcion,$this->fecha);
    }
}
