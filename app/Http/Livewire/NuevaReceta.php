<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Paciente;
use App\Models\Receta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NuevaReceta extends Component
{
    public $pac;
    public $descripcion;
    public $fecha;
    public $numero;

    public function mount()
    {
        $this->pac = "";
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
        // dd($this->numero);
        $numero = DB::table("receta")
                    ->limit(1)
                    ->orderBy("numero","desc")
                    ->first();
        
        // dd($numero);
        if($numero === null){
            // dd('hola mundo');
            $this->numero = 0;
            $this->numero = $this->numero+1;
        }else{
            $this->numero = $numero->numero+1;
            // dd($this->numero);
        }
        $this->validate([
            'descripcion' => 'required',
            'pac' => 'required',
            'fecha' => 'required'
        ],[
            'descripcion.required' => 'Este campo es obligatorio',
            'codigo_paciente.required' => 'Este campo es obligatorio',
            'fecha.required' => 'La fecha es obligatoria'
        ]);
            Receta::create([
                'codigo_paciente' => $this->pac,
                'descripcion' => $this->descripcion,
                'numero' => $this->numero,
                'fecha' => $this->fecha
        ]);
        return redirect()->to('/recetas');
    }
}
