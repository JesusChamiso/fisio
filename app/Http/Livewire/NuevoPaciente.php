<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Paciente;

class NuevoPaciente extends Component
{
    public $nombres;
    public $apellido_paterno;
    public $apellido_materno;
    public $peso;
    public $talla;
    public $telefono;

    public function mount()
    {
        $this->nombres = "";
        $this->apellido_paterno = "";
        $this->apellido_materno = "";
        $this->peso = "";
        $this->talla = "";
        $this->telefono = "";    
    }

    public function render()
    { 
        return view('livewire.nuevo-paciente');
    }

    public function guardar()
    {
        $dataValidate = $this->validate([
            'nombres' => 'required|alpha',
            'apellido_paterno' => 'alpha|max:25',
            'apellido_materno' => 'alpha|max:25',
            'peso' => 'numeric',
            'talla' => 'numeric',
            'telefono' => 'numeric|unique'
        ],[
            'nombres.required' => 'Este campo es obligatorio',
            'apellido_paterno.alpha' => 'Este campo tiene que contener solo letras sin espacios',
            'apellido_materno' => 'Este campo tiene que contener solo letras sin espacios',
            'peso.numeric' => 'Este campo tiene que ser numerico',
            'talla.numeric' => 'Este campo tiene que ser numerico',
            'telefono.numeric' => 'Este campo es tiene que ser numerico',
            'telefono.unique' => 'Este Telefono ya se encuentra registrado'
        ]);
        Paciente::create([
            'nombres' => $this->nombres,
            'apellido_paterno' => $this->apellido_paterno,
            'apellido_materno' => $this->apellido_materno,
            'peso' => $this->peso,
            'talla' => $this->talla,
            'telefono' => $this->telefono
        ]);
        return redirect()->to('/paciente'); 
    }
}
