<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class CitaController extends Controller
{
    public function index()
    {
        return view('agenda');
    }
    public function store(Request $request)
    {
        $request()->validate([
            'title' => 'required',
            'descripcion' => 'required',
            'start' => 'required',
            'end' => 'required'
        ]);
        $evento = Evento::create($request->all());
    }
}
