<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
// use PDF;

class ReporteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:reporte.index')->only('index');
    }
    public function index()
    {
        $pac = Paciente::all();
        $pdf = PDF::loadView('reporte.index',compact('pac'));
        return $pdf->stream();
    }
    public function vista()
    {
        // $pac = Paciente::all();
        // return view('reporte.index',['pac' => $pac]);
        return view('reporte.vista');
    }
}
