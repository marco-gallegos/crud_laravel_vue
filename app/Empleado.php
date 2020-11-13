<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 */
class Empleado extends Model
{
    use SoftDeletes;
    //
    protected $table = "empleado";

    protected  $fillable = [
        'codigo',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo_electronico',
        'tipo_contrato',
        'estado',
    ];
}
