<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ConsultaMedica;
use App\Models\Paciente;

class NuevoHistorial extends Component
{
    public $codigo_paciente;
    public $descripcion;

    public function mount($paciente)
    {
        $this->codigo_paciente = $paciente->codigo_paciente;
        $this->descripcion = " ";
    }
    public function render()
    {
        return view('livewire.nuevo-historial');
    }

    public function guardar()
    {   
        // dd($this->descripcion);
        $dataValidate = $this->validate([
            'descripcion' => 'required',
        ],[
            'descripcion.required' => 'Este campo es obligatorio',
        ]);
            ConsultaMedica::create([
                'codigo_paciente' => $this->codigo_paciente,
                'descripcion' => $this->descripcion,
        ]);
        return redirect()->to('/paciente/'.$this->codigo_paciente);
    }
}
