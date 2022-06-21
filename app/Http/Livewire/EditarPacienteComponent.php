<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Paciente;

class EditarPacienteComponent extends Component
{
    public $nombres;
    public $apellido_paterno;
    public $apellido_materno;
    public $peso;
    public $talla;
    public $telefono;
    public $codigo_paciente;

    public function mount($paciente)
    {
        $this->codigo_paciente = $paciente->codigo_paciente;
        $this->nombres = $paciente->nombres;
        $this->apellido_paterno = $paciente->apellido_paterno;
        $this->apellido_materno = $paciente->apellido_materno;
        $this->peso = $paciente->peso;
        $this->talla = $paciente->talla;
        $this->telefono = $paciente->telefono;
    }
    public function render()
    {
        return view('livewire.editar-paciente-component');
    }

    public function guardar()
    {
        $dataValidate = $this->validate([
            'nombres' => 'required',
            'apellido_paterno' => 'alpha|max:25',
            'apellido_materno' => 'alpha|max:25',
            'peso' => 'numeric',
            'talla' => 'numeric',
            'telefono' => 'numeric|unique:App\Models\paciente,telefono,'.$this->codigo_paciente
        ],[
            'nombres.required' => 'Este campo es obligatorio',
            'apellido_paterno.alpha' => 'Este campo tiene que contener solo letras sin espacios',
            'apellido_materno' => 'Este campo tiene que contener solo letras sin espacios',
            'peso.numeric' => 'Este campo tiene que ser numerico',
            'talla.numeric' => 'Este campo tiene que ser numerico',
            'telefono.numeric' => 'Este campo es tiene que ser numerico',
            'telefono.unique' => 'Este Telefono ya se encuentra registrado'
        ]);
        Paciente::where('codigo_paciente','=',$this->codigo_paciente)
        ->update([
            'nombres' => $this->nombres,
            'apellido_paterno' => $this->apellido_paterno,
            'apellido_materno' => $this->apellido_materno,
            'peso' => $this->peso,
            'talla' => $this->talla,
            'telefono' => $this->telefono
        ]);
        return redirect('/paciente'.'/'.$this->codigo_paciente);
    }
}
