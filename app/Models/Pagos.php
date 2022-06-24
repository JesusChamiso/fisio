<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    use HasFactory;
    protected $table = 'pago';
    public $timestamps = false;
    protected $primaryKey = "codigo_pago";
    protected $guarded=[];
}
