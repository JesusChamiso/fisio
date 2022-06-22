<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;
use App\Models\Paciente;
use App\Models\vw_receta_paciente;

class RecetaController extends Controller
{
    public function index()
    {
        return view('receta.index');
    }

    public function show($id)
    {
        $consulta = vw_receta_paciente::where('codigo_paciente','=', $id)
                                    ->get();
        // $contador = 1;
        $paciente = Paciente::findOrFail($id);
        return view('receta.receta_show',[
            'paciente' => $paciente,
            'consulta' => $consulta,
            // 'contador' => $contador
        ]);
    }
}
