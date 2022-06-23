<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;
use App\Models\Paciente;
use App\Models\vw_receta_paciente;

class RecetaController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:recetas.index')->only('index','show');
        $this->middleware('can:recetas.editar')->only('update');
        $this->middleware('can:recetas.eliminar')->only('destroy');
    }
    public function index()
    {
        return view('receta.index');
    }

    public function show($id = null)
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
    public function update(Receta $c, Request $request)
    {
        Receta::where('codigo_receta','=',$c->codigo_receta)
                    ->update([
                        'descripcion' => $request->descripcion
                    ]);
        return redirect('/recetas/'.$c->codigo_paciente);
    }
    public function destroy(Receta $c, Request $request)
    {
        // dd($c);
        Receta::findOrFail($c->codigo_receta);
        Receta::where('codigo_receta','=',$c->codigo_receta)->delete();
        return redirect('/recetas/');
    }
}
