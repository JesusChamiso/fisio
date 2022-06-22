<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    protected $table = 'receta';
    public $timestamps = false;
    protected $primaryKey = "codigo_receta";
    protected $guarded=[];
}
