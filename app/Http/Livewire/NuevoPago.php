<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Paciente;
use App\Models\DetallePago;
use App\Models\Pagos;
use Illuminate\Support\Facades\DB;

class NuevoPago extends Component
{
    public $pac;
    public $descripcion;
    public $costo;
    public $codigo_paciente;

    protected $rules = [
        'descripcion' => 'required',
        'pac' => 'required',
        'costo' => 'required'
    ];
    protected $messages = [
        'descripcion.required' => 'Este campo es obligatorio',
        'pac.required' => 'Este campo es obligatorio',
        'costo.required' => 'La fecha es obligatoria'
    ];

    public function mount()
    {
        $this->pac = "";
        $this->descripcion = "";
        $this->costo = "";
        $this->cosdigo_paciente = "";
    }

    public function render()
    {
        $paciente = Paciente::all();
        return view('livewire.nuevo-pago', ['paciente' => $paciente]);
    }

    public function guardar()
    {
        
        $numero = DB::table("pago")
                    ->limit(1)
                    ->orderBy("codigo_pago","desc")
                    ->first();
        // $this->validate();
        Pagos::create([
                'codigo_paciente' => $this->pac,
                'costo' => $this->costo
        ]);
        // dd($numero);

        DetallePago::create([
            'codigo_pago' => $numero->codigo_pago,
            'descripcion' => $this->descripcion
        ]);

        return redirect()->to('/pagos');
    }
}
