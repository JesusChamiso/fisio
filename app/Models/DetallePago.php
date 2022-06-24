<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePago extends Model
{
    use HasFactory;
    protected $table = 'detalle_pago';
    public $timestamps = false;
    protected $primaryKey = "codigo_detalle";
    protected $guarded=[];
}
