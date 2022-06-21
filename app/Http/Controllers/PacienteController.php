<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\ConsultaMedica;

class PacienteController extends Controller
{
    public function index()
    {
        return view('paciente.index');
    }
    public function show($id, Request $request)
    {
        // dd($id);
        $consulta = ConsultaMedica::where('codigo_paciente','=', $id)
                                    ->get();
        // $contador = 1;
        $paciente = Paciente::findOrFail($id);
        return view('paciente.paciente_show',[
            'paciente' => $paciente,
            'consulta' => $consulta,
            // 'contador' => $contador
        ]);
    }

    public function update(ConsultaMedica $c, Request $request)
    {
        // dd($request->descripcion);
        ConsultaMedica::where('codigo_consulta','=',$c->codigo_consulta)
                    ->update([
                        'descripcion' => $request->descripcion
                    ]);
        return redirect('/paciente/'.$c->codigo_paciente);
    }

    public function destroy(Paciente $id)
    {
        $bus = Paciente::findOrFail($id->codigo_paciente);
        Paciente::destroy($id->codigo_paciente);
        return redirect()->route('paciente.index');
    }

    public function delete(ConsultaMedica $c, Request $request)
    {
        // dd($c);
        ConsultaMedica::findOrFail($request->codigo_consulta);
        ConsultaMedica::where('codigo_consulta','=',$request->codigo_consulta)->delete();
        return redirect('/paciente/'.$c->codigo_paciente);
    }
}
