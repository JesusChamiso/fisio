<?php

namespace App\Http\Controllers;

use App\Models\DetallePago;
use App\Models\Pagos;
use Illuminate\Http\Request;

class PagosController extends Controller
{
    public function index()
    {
        return view('pagos.index');
    }
    public function delete(Pagos $c)
    {
        // Pagos::findOrFail($c->codigo_pago);
        Pagos::where('codigo_pago','=',$c->codigo_pago)->delete();
        DetallePago::where('codigo_pago','=',$c->codigo_pagos)->delete();
        return redirect('/pagos/');
    }
}
